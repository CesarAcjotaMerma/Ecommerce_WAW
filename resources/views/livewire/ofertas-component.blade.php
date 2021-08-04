<main id="main" class="main-site left-sidebar">
    
    <div class="container">

        <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="/" class="link">Inicio</a></li>
                        <li class="item-link"><span>Envios</span></li>
                    </ul>
        </div>

        <div class="model-3D" style="width:200px">
            <model-viewer src="{{asset('assets/images/prueba/Astronaut.glb') }}" width="400" alt="A 3D model of an astronaut" ar ar-modes="webxr scene-viewer quick-look" environment-image="neutral" auto-rotate camera-controls></model-viewer>
        </div>

        <model-viewer src="{{asset('assets/images/prueba/Zapatilla.glb') }}" camera-controls auto-rotate>

            <div class="progress-bar hide" slot="progress-bar">
                <div class="update-bar"></div>
            </div>
            <button slot="ar-button" id="ar-button">
                View in your space
            </button>
            <div id="ar-prompt">
                <img src="{{asset('assets/images/prueba/Zapatilla.glb') }}">
            </div>
        </model-viewer>


    </div>
</main>