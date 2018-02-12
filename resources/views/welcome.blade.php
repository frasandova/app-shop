@extends('layouts.app_inicio')

@section('body-class', 'landing-page')

@section('content')



        <section id="principal" class="text-center">
                <!--<img src="img/sp1.jpg" class="img-responsive">-->
                <!--<img src="img/appPrincipal.png" class="img-responsive">-->
    

                        <div id="carousel-1" class="carousel slide" data-ride="carousel">               
                               <ol class="carousel-indicators">
                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                <li data-target="#carousel-1" data-slide-to="2"></li>
                                <li data-target="#carousel-1" data-slide-to="3"></li>
                                <li data-target="#carousel-1" data-slide-to="4"></li>
                               </ol>
                                            <div class="carousel-inner" role="listbox">

                                                <div class="item active">
                                                    <img src="{{ asset('img/inicio/sp3.jpg') }}" style="width:100%" class="img-responsive" alt="Third Slide">    

                                                    <!--<img src="img/sp3.jpg" style="width:100%;height:600px"  class="img-thumbnail" alt="Third Slide">--> 

                                                    <div class="carousel-caption">
                                                        <h3></h3>
                                                        <p></p>
                                                    </div>      
                                                </div> 
                                                <div class="item">
                                                    <img src= "{{ asset('img/inicio/nuevas/deliciousSushi3.jpg') }}" style="width:100%"  class="img-responsive" alt="Third Slide">

                                                    <!--<img src="img/nuevas/deliciousSushi3.jpg" style="width:100%;height:600px"  class="img-thumbnail" alt="Third Slide">-->


                                                    <div class="carousel-caption">
                                                        <h3></h3>
                                                        <p></p>
                                                    </div>      
                                                </div> 

                                                <div class="item">
                                                 <img src="{{ asset('img/inicio/nuevas/DiaAmor2.jpg') }}" style="width:100%" class="img-responsive" alt="First Slide">

                                                    <!--<img src="img/sp5.png" style="width:100%;height:500px" class="img-thumbnail" alt="Second Slide">    -->
                                                    <div class="carousel-caption">
                                                        <h3></h3>
                                                        <p></p>
                                                    </div>      
                                                </div>

                                                <div class="item">

                                                 <img src="{{ asset('img/inicio/nuevas/LocalNoche2.jpg') }}" style="width:100%" class="img-responsive" alt="First Slide">
                                                    <!--<img src="img/sp5.png" style="width:100%;height:500px" class="img-thumbnail" alt="Second Slide">    -->
                                                    <div class="carousel-caption">
                                                        <h3></h3>
                                                        <p></p>
                                                    </div>      
                                                </div>

                                                <div class="item">
                                                   
                                                    <img src="{{ asset('img/inicio/sp2.jpg') }}" style="width:100%" class="img-responsive" alt="Second Slide">    
                                                    <div class="carousel-caption">
                                                        <h3></h3>
                                                        <p></p>
                                                    </div>      
                                                </div> 

                                                <div class="item">                                              
                                                    <img src="{{ asset('img/inicio/sp4.jpg') }}" style="width:100%" class="img-responsive" alt="First Slide">
                                                    <!--<img src="img/sp1.jpg" style="width:1200px;height:400px" class="img-responsive" alt="First Slide">-->
                                                     
                                                    <div class="carousel-caption">
                                                        <h3></h3>
                                                        <p></p>
                                                    </div>
                                                </div>

                                                <div class="item">                                              
                                                    <img src="{{ asset('img/inicio/nuevas/delicious3.jpg') }}" style="width:100%" class="img-responsive" alt="First Slide">                                                    
                                                    <div class="carousel-caption">
                                                        <h3></h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                        </div>  
                              <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Siguiente</span>
                              </a>
                         </div>
        </section> <!-- #/principal -->

        <div class="">
            <div class="nosotro row ">
                <div class="col-sm-12">
                    <div  class="jumbotron" style="background-color: black; color: white">                      
                        <div class="text-center">

                            <img class="img-thumbnail" alt="Responsive image" src="{{ asset('img/inicio/nuevas/delicious.jpg') }}"/>

                            <h1 class="text-center">
                            <span>Delicious Gourmet</span>
                            </h1>
                            <h3 class="subtitle text-center">La mejor comida para disfrutar en familia</h3>
                            <!--
                            <img src="img/chef.png" style="width:200px;height:100px;"/>
                            <span>Delicious Gourmet</span>
                            <img src="img/chef.png" style="width:200px;height:100px; text-align: right;">
                            </h1>
                            <h3 class="subtitle animated bounceInRight slow text-center">La mejor comida para disfrutar en familia</h3>
                            -->
                        </div>
                    </div>  
                </div>
            </div>
        </div> 
        <section id="nosotros"  >
                <h1 class="text-center">Nosotros</h1>
                <div class="separador"></div>
                <div class="container">
                    <div class="panel panel-default">
                    <!--<div class="panel-heading"><br/></div>-->
                     <div class="panel-body">   
                        <div class="nosotro row ">
                            <div class="ol-md-6 col-sm-6 col-xs-12">
                        <img src="{{ asset('img/inicio/logo3.png') }}" class="img-responsive"  alt="Nosotros">
                        <!--<img src="img/logo3.png" class="img-responsive"  alt="Nosotros">-->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12" style=""">                         
                                 </br></br>
                                <span style="font-size:20px">
                                 Estamos preocupados de brindar un excelente servicio, para sobrepasar las expectativas de nuestros clientes, entregando una amplia variedad de comida, con la mejor preparación  y atención, con platos de excelente calidad a un precio conveniente,  junto a  las mejores promociones para que puedas disfrutar de nuestro sushi, sandwich, chorrillanas y mas.
                                 Ven a disfrutar y deleitar tu paladar con las más ricas texturas y sabores.
                                 </span>
                                 </br></br>
                                                      
                        </div>
                     </div>
                     </div>               
                    </div>
                </div>
        </section>                

      <section id="carta" class="grisBG">
                <div class="container">
                    <h1 class="text-center">Carta</h1>
                    <div class="separador"></div>

                    <div class="row text-center ">
                        <div class="col-sm-12">

                            <a class="fancybox" rel="group" href="{{ asset('img/inicio/nuevas/cartaVienesasAsChurrascos.jpg') }}">
                                <img style="width:350px;height:400px" src="{{ asset('img/inicio/nuevas/cartaVienesasAsChurrascos.jpg') }}" alt="" />
                            </a>
                            
                            <a class="fancybox" rel="group" href="{{ asset('img/inicio/nuevas/cartaVienesasAsChurrascos2.jpg') }}">
                                <img style="width:350px;height:400px" src="{{ asset('img/inicio/nuevas/cartaVienesasAsChurrascos2.jpg') }}" alt="" />
                            </a>
                         </div>                        
                    </div>
                    </br>

                    <div class="row text-center ">
                        <div class="col-sm-12">
                            <a class="fancybox" rel="group" href="{{ asset('img/inicio/nuevas/cartaSushiPromos.jpg') }}">
                                <img style="width:350px;height:400px" src="{{ asset('img/inicio/nuevas/cartaSushiPromos.jpg') }}" alt="" />
                            </a>
                            
                            <a class="fancybox" rel="group" href="{{ asset('img/inicio/nuevas/cartaSushiPromos.jpg') }}">
                                <img style="width:350px;height:400px" src="{{ asset('img/inicio/nuevas/cartaSushiPromos.jpg') }}" alt="" />
                            </a>

                         </div>                        
                    </div>
                    </br>
                 </div>
        </section> <!-- #/ubicacion -->


        <section id="app">
                <div class="container">
                  <h1 class="text-center">Contacto</h1>
                  <div class="separador"></div>
                    <div class="row text-center ">

                                <div class="col-sm-4">
                                        <div class="social anima1">
                                                <i class="fa fa-map-marker"></i>
                                        </div>
                                        <h2>Av. Ejercito Libertador 3101, Puente Alto</h2>
                                        <div class="separador"></div>
                                </div>

                                <div class="col-sm-4">
                                        <div class="social anima2">
                                                <i class="fa fa-phone"></i>
                                        </div>
                                        <!--<h2>23-2656940</h2>-->
                                        <a href="tel:232656940" target="_blank"><h2>23-2656940</h2></a>
                                        <div class="separador"></div>
                                </div>


                                <div class="col-sm-4">
                                        <div class="social anima3">
                                                <i class="fa fa-facebook"></i>
                                        </div>
                                        <a href="https://www.facebook.com/sushisandwichymas/" target="_blank"><h2>Facebook</h2></a>
                                        <div class="separador"></div>
                                </div>
                        </div>
                </div>
        </section> <!-- #/app -->


        <section id="ubicacion" class="grisBG">
                <div class="container">
                <h1 class="text-center">Ubicación</h1>
                  <div class="separador"></div>
                  <div id='gmap_canvas' style='height:550px;width:100%;'></div>
               </div>
        </section> <!-- #/ubicacion -->





        <section class="text-center">
                Todos los derechos reservados a Delicious Gourmet 
         </section>
@endsection
