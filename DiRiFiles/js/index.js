var canvas = document.getElementById("renderCanvas");
var startRenderLoop = function (engine, canvas) {
    engine.runRenderLoop(function () {
        if (sceneToRender && sceneToRender.activeCamera) {
            sceneToRender.render();
        }
    });
}

var engine = null;
var scene = null;
var sceneToRender = null;

var createScene = async function () {
    var scene = new BABYLON.Scene(engine);
    var camera = new BABYLON.ArcRotateCamera("Camera", -Math.PI / 2, Math.PI / 2, 5, BABYLON.Vector3.Zero(), scene);
    camera.attachControl(canvas, true);
    camera.inputs.attached.mousewheel.detachControl(canvas);

    var diriBot = await BABYLON.SceneLoader.ImportMeshAsync("", "./obj/", "diriB.glb", scene);
    var dr = diriBot.meshes[0];
    dr.position = new BABYLON.Vector3(0, -10, 10);
    const cb = scene.getAnimationGroupByName("cabeza");
    const oj = scene.getAnimationGroupByName("ojos");
    

    var dome = new BABYLON.PhotoDome("diridomo","./textures/render.jpg",{resolution: 32,size: 1000},scene);
    var advancedTexture = BABYLON.GUI.AdvancedDynamicTexture.CreateFullscreenUI("UI");
    var menu = BABYLON.GUI.Button.CreateImageWithCenterTextButton(
        "bu",
        "",
        "textures/simuladores.png"
    );

    menu.width = "600px";
    menu.height = "900px";
    menu.color = "white";
    menu.top = 20 + "px";
    menu.left = 20 + "px";
    menu.border = "0px";
    menu.thickness = 0;
    menu.verticalAlignment = BABYLON.GUI.Control.VERTICAl_ALIGNMENT_TOP;
    menu.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_LEFT;
    menu.onPointerUpObservable.add(function() {
        window.open('http://www.diri.com.co/productos.html', '_blank');
    });
    advancedTexture.addControl(menu);

    var home = BABYLON.GUI.Button.CreateImageWithCenterTextButton(
        "bu",
        "",
        "textures/home.png"
    );

    home.width = "300px";
    home.height = "200px";
    home.color = "white";
    home.top = 5 + "px";
    home.left = -15 + "px";
    home.cornerRadius = 20;
    home.border = "0px";
    home.thickness = 0;
    home.verticalAlignment = BABYLON.GUI.Control.VERTICAl_ALIGNMENT_TOP;
    home.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_RIGHT;
    home.onPointerUpObservable.add(function() {
        window.open('http://www.diri.com.co/productos.html', '_blank');
    });
    advancedTexture.addControl(home);
    envText();

    function envText(){
        var base = scene.getMaterialByName("MATERIALLOGO");
        var lente = scene.getMaterialByName("LENTE");
        var ojos = scene.getMaterialByName("ojos");
        var boca = scene.getMaterialByName("boca");
        var bode = scene.getMaterialByName("borde");
        base.reflectionTexture = new BABYLON.CubeTexture("textures/env.env", scene);
        base.roughness = 0;
        lente.roughness = 0;
        bode.roughness = 0;
        lente.reflectionTexture = new BABYLON.CubeTexture("textures/env.env", scene);
        ojos.reflectionTexture = new BABYLON.CubeTexture("textures/env.env", scene);
        boca.reflectionTexture = new BABYLON.CubeTexture("textures/env.env", scene);
        bode.reflectionTexture = new BABYLON.CubeTexture("textures/env.env", scene);
    }
    scene.registerAfterRender(function () {
        cb.play();
        oj.play();
    });


    return scene;
};
var createDefaultEngine = function () {
    return new BABYLON.Engine(canvas, true, {
        preserveDrawingBuffer: true,
        stencil: true,
        disableWebGL2Support: false
    });
};
try {
    engine = createDefaultEngine();
} catch (e) {
    console.log("la función createEngine disponible falló. Crear el motor predeterminado en su lugar");
    engine = createDefaultEngine();
}
if (!engine) throw 'el motor no debe ser nulo';
scene = createScene();;
scene.then(returnedScene => {
    sceneToRender = returnedScene;
});
engine.runRenderLoop(function () {
    if (sceneToRender) {

        sceneToRender.render();
    }
});
window.initFunction = async function () {
    var asyncEngineCreation = async function () {
        try {
            return createDefaultEngine();
        } catch (e) {
            console.log("the available createEngine function failed. Creating the default engine instead");
            return createDefaultEngine();
        }
    }

    window.engine = await asyncEngineCreation();
    if (!engine) throw 'engine should not be null.';
    startRenderLoop(engine, canvas);
    window.scene = createScene();
};
/*
initFunction().then(() => {
    sceneToRender = scene
});
*/
window.addEventListener("resize", function () {
    engine.resize();
});
