<main id="main" class="main-site left-sidebar">
    
    <div class="container">

    <style>
        model-viewer {
            width: 700px;
            height: 500px;
        }
    </style>

        <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="/" class="link">Inicio</a></li>
                        <li class="item-link"><span>Envios</span></li>
                    </ul>
        </div>

        <model-viewer src="{{asset('assets/images/prueba/Polo.glb') }}" camera-controls auto-rotate exposure="2" shadow-intensity="5.7" shadow-softness="0.26">

            <div class="progress-bar hide" slot="progress-bar">
                <div class="update-bar"></div>
            </div>
            <button slot="ar-button" id="ar-button">
                View in your space
            </button>
        </model-viewer>


        <div class="model-3D" style="width:200px">
            <model-viewer src="{{asset('assets/images/prueba/Astronaut.glb') }}" alt="A 3D model of an astronaut" ar ar-modes="webxr scene-viewer quick-look" environment-image="neutral" auto-rotate camera-controls></model-viewer>
        </div>

        <model-viewer src="{{asset('assets/images/prueba/Zapatilla.glb') }}" camera-controls auto-rotate>

            <div class="progress-bar hide" slot="progress-bar">
                <div class="update-bar"></div>
            </div>
            <button slot="ar-button" id="ar-button">
                View in your space
            </button>
        </model-viewer>


    </div>
</main>