@extends('blog.template.layout')

@section('inicio')
    <span>Dienvenidos a</span>
      <h1>Un BlogMAS</h1>
      <p>Quires saber un poco de mi? No? Entoces largate!!! <br><br>
      Les contare un poco de mi, sobre mis conocimientos mis habilidades y los objetivos que tengo en mi vida</p>
@endsection
@section('continue')
   <!-- clients -->
   <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Perfil</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="" data-ride="carousel">
                <!-- Indicators -->

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">

                    </div>


                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/tes.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Fernando Manuel Galvan<br><strong class="ornage_color">Pequeña historia</strong></h3>
                                            <p>Me llamo Fernando Manuel Galvan y naci en el Estado de Mexico, antes vivia en Ecatepec donde curse la primaria y primero de secundaria, pero nos mudamos a Zumpango por que mi papa pudo 
                                              construir su propia casa, aqui termine la secundaria pero despues de eso empeze a trabajar por un tiempo, luego me llamo la atencion la carrera de Ingenieria en Software asi que decidi 
                                              intentar con la carrera.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->
@endsection