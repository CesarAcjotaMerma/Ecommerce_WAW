<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Inicio</a></li>
            <li class="item-link"><span>Alpaca</span></li>
        </ul>
    </div>

    <style>
        .container1 figure{
            width:100%;
            max-height:400px;
            position: relative;
            overflow: hidden;
            box-shadow: 0px 10px 15px rgba(0,0,0,0.50);
            cursor:pointer;
            margin: 0 0 2em;
            
        }
        .container1 figure img{
            width: 100%;
            height: 80%;
            max-width:100%;
            max-height:0%;
            transition: all 500ms ease-out;
        }
        .container1 figure .capa{
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.5);
            transition: all 500ms ease-out;
            opacity:0;
            visibility:hidden;
            text-align:center;
            vertical-align: middle;
            justify-content:center;
        }
        .container1 figure:hover > .capa{
            opacity:1;
            visibility:visible;
            text-align:center;
            vertical-align: center;
            justify-content:center;
        }
        .container1 figure:hover > .capa h3{
            font-size: 50px;
            color:red;
            margin-top: 130px;
            font-weight:bold;
            vertical-align:middle;
        }
        .container1 figure:hover > img{
            transform:scale(1.2);
        }
        .container2 figure:hover > img{
            transform:perspective(17px);
        }
        .container1 figure .capa h3{
            color:white;
            transition: all 500ms ease-out;   
            text-align:center;
            vertical-align: middle;
            justify-content:center;
        }
        .container1 figure .capa p{
            color: black;
            font-size: 20px;
            line-height:1.5;
            width: 100%;
            vertical-align: middle;
            text-align:justify;
            justify-content:center;
        }

        .container1 figure .capa span{
            font-weight:bold;
            background:yellow;
            padding:3px;
        }
        .tablecontainer .table thead{
            background-color:#786034;
        }
        .tablecontainer .table thead th{
            color:#fff;
            font-weight:bold;
            font-size:1.3rem;
            text-align:center;
        }
        .tablecontainer .table tbody{
            background-color:#E7D1AB;
            align-items:center;
        }
        .tablecontainer .table tbody td{
            color:#000;
            font-size:1.1rem;
            align-items:center;
            align-content:center;
            justify-content:center;
            text-align:center;
        }

        @media screen and (max-width: 600px) {
            table {
                width:100%;
            }
            thead {
                display: none;
            }
            tr:nth-of-type(2n) {
                background-color: inherit;
            }
            tr td:first-child {
                background: #f0f0f0;
                font-weight:bold;
                font-size:1.3em;
            }
            tbody td {
                display: block;
                text-align:center;
            }
            tbody td:before {
                content: attr(data-th);
                display: block;
                text-align:center;
            }
        }

    </style>

    <!--MAIN SLIDE-->
    <div class="wrap-main-slide">
        <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
            <div class="item-slide">
                <img src="{{ asset('assets/images/colecciones/coleccionslider1.jpg') }}" height="20" alt="" class="img-slide">
                <div class="slide-info slide-1">
                    <!-- <h2 style="font-size:90px;color:white;text-align:center;"></h2>
                    <h2 style="font-size:90px;color:white;text-align:center;">DORADA</h2> -->
                    <h2 class="f-title"><b>L a  -  A l p a c a</b></h2>
                    <span class="subtitle">La fibra de la alpaca es ligera, suave, cálida y resistente que se utiliza para la confección de ropa, complementos y alfombras.</span>
                    <a href="#" class="btn-link">Ver Modelos</a>
                </div>
            </div>
            <div class="item-slide">
                <img src="{{ asset('assets/images/colecciones/coleccionslider2.jpg') }}" alt="" class="img-slide">
                <div class="slide-info slide-2">
                    <h2 style="font-size:90px;color:white;text-align:center;">VER</h2>
                    <!--
                    <span class="f-subtitle">On online payments</span>
                    <p class="discount-code">Use Code: #FA6868</p>
                    <h4 class="s-title">Get Free</h4>
                    <p class="s-subtitle">TRansparent Bra Straps</p> -->
                </div>
            </div>
            <div class="item-slide">
                <img src="{{ asset('assets/images/colecciones/coleccionslider3.jpg') }}" alt="" class="img-slide">
                <div class="slide-info slide-3">
                    <h2 style="font-size:90px;color:white;text-align:center;">VER</h2>
                    <!-- <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                    <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                    <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                    <a href="#" class="btn-link">Shop Now</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row" style="align-items:center;">
        <div class="col-md-12 container1">
            <figure>
                <img src="{{ asset('assets/images/alpaca/alpaca2.jpg') }}" class="img-fluid" height="80" alt="la-alpaca"/>
                <div class="capa">
                    <h3>LA ALPACA</h3>
                    <p>Las alpacas son versiones domesticadas de las vicuñas,<span>rumiantes sudamericanos que viven en los Andes. La alpaca está relacionada con la llama,</span> que es una versión domesticada de otro rumiante rumano, el guanaco.</p>
                </div>
            </figure> 
        </div>
    </div> -->
    <hr/>
    <div class="row" style="align-items:center;">
        <div class="col-md-4">
            <h4>La alpaca vive en el techo del mundo en los Andes en altitudes que van desde los 3.500 hasta más de 4.500 metros sobre el nivel del mar. La alpaca se ha adaptado al duro clima de los Andes con su fantástica capa gruesa que proporciona aislamiento contra el calor y el frío.</h4>
        </div>
        <div class="col-md-8 container2">
            <figure>
                    <img src="{{ asset('assets/images/alpaca/caracteristicas.png') }}" class="img-fluid" height="80" alt="la-alpaca"/>
                    <div class="capa">
                    </div>
            </figure> 
        </div>
    </div>

    <hr/>

    <div class="row" style="align-items:center;">
        <div class="col-md-8 container2">
            <figure>
                    <img src="{{ asset('assets/images/alpaca/alpaca2.jpg') }}" class="img-fluid" height="80" alt="la-alpaca"/>
                    <div class="capa">
                    </div>
            </figure> 
        </div>
        <div class="col-md-4">
            <h4>Las alpacas son un factor económico importante para los pastores del altiplano andino peruano. Muchas familias se ganan la vida con la cría de alpacas y la extracción y procesamiento de la lujosa y única lana de alpaca.</h4>
        </div>
    </div>

    <hr/>

    <div class="row" style="align-items:center;">
        <div class="col-md-6">
            <h4>Para aprovechar al máximo su lana, las alpacas deben someterse a un proceso de esquila, donde se les corta y separa todo el pelo. Es un proceso anual que se lleva a cabo entre octubre y noviembre, cuando las temperaturas son un poco más altas y el inicio de la temporada de lluvias produce pasto fresco</h4>
        </div>
        <div class="col-md-6 container2">
            <img src="{{ asset('assets/images/alpaca/fibra.png') }}" >
        </div>
    </div>

    <div class="row" style="align-items:center;">
        <div class="col-md-8 tablecontainer">
            <div>
                <label><img src=""></label>
                <h2 style="font-weight:bold;">Clasificacion por Grupo De Calidades(Requisitos)</h2>
            </div>
            <table class="table table-bordered">
                <thead class="table">
                    <tr>
                        <th>Grupo de Calidades</th>
                        <th>Micronaje (Micras) um</th>
                        <th>Longitud (Hm) mm</th>
                        <th>Humedad máxima %</th>
                        <th>Solidos minerales máximo %</th>
                        <th>Contenido grasa máximo %</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alpaca Súper Baby</td>
                        <td>Igual o menor a 20</td>
                        <td>65</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Alpaca Baby</td>
                        <td>20.1 a 23</td>
                        <td>65</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Alpaca Fleece</td>
                        <td>23.1 a 26.5</td>
                        <td>70</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Alpaca Médium Fleece</td>
                        <td>26.6 a 29</td>
                        <td>70</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Alpaca Guarizo</td>
                        <td>29.1 a 31.5</td>
                        <td>70</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Alpaca Gruesa</td>
                        <td>Mas de 31.5</td>
                        <td>70</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Alpaca Corta</td>
                        <td>---</td>
                        <td>20 a 50</td>
                        <td>8</td>
                        <td>6</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h4>La alpaca vive en el techo del mundo en los Andes en altitudes que van desde los 3.500 hasta más de 4.500 metros sobre el nivel del mar. La alpaca se ha adaptado al duro clima de los Andes con su fantástica capa gruesa que proporciona aislamiento contra el calor y el frío.</h4>
        </div>
    </div>

</div>
</main>