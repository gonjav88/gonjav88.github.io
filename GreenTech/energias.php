<?php 
$page_name = "Energías Renovables";
include ('head.php');
include ('navbar.html');
?>

	<main class="site-content" role="main">
        
         <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-energ"></div>  <!-- ver en slit-slider.css -->

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated bounceInLeft">Energías Renovables</h2>
                                <span class="animated fadeInDown">¿Por qué pensar en ellas?</span>
                                
                            </div>
                        </div>
						
					</div>		
					
				</div><!-- /sl-slider -->
			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
        <section id="eerr">
            <div class="container">
                <div class="eerr-title">
                    <h3>¿Qué son las energías renovables?</h3>
                </div>
                <div class="eerr-exp">
                <p>Las energías renovables nos permiten lograr independencia de las fuentes convencionales y de las limitaciones que acarreran, como la finitud de los recursos, la interrupción de los servicios, el aumento inevitable de las tarifas, la contaminación, entre otras. </p>
                <p>Las tecnologías disponibles son varias, sin embargo para escalas pequeñas (hogares, soluciones aisladas, etc.) las más usuales son la energía solar directa y la eólica. La energía solar directa, a su vez, se puede dividir en fotovoltaica -para generar electricidad- y en solar térmica -para aprovechar el poder calórico de la misma-.</p>
                </div>
				
            </div>
        
        
        </section>
                
        
        <!-- video -->
		<section id="vid-slider">
             <div class="container">
                 
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="parallax-vid">
                        <div class="vid-title">
                            <h3>Energía Fotovoltaica</h3>
                        </div>
                        <div align="center" class="el-video">
                            <video loop="loop" autoplay="autoplay" alt="funcionamiento de sistema fotovoltaico">
                                <source type="video/mp4" src="video.mp4"/>
                            </video>               
                        </div>
                    </div>   
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="parallax-vid">
                        <div class="vid-title">
                            <h3>Energía Solar Térmica</h3>
                        </div>
                        <div align="center" class="el-video">
                            <video loop="loop" autoplay="autoplay" alt="funcionamiento de sistema térmico solar">
                                <source type="video/mp4" src="videotst.mp4"/>
                            </video>               
                        </div>
                    </div>   
                 </div>
                 
             </div>            
        </section>
        <!-- /video -->
	   
        

	</main>

<?php 
include ('footer.html');
?>
	