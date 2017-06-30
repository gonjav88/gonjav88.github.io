<?php 
$page_name = "Bienvenido a GreenTech";
include ('head.php');
?>
	
<body id="body">

    <!-- preloader -->
    <div id="preloader">
        <div class="loder-box">
            <div class="battery"></div>
        </div>
    </div>
    <!-- end preloader -->
</body>

<?php
include ('navbar.html');
?>
    
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
			<div class="container main-title">
				<h2>Energía renovable y</br>eficiencia energética</h2>			
			</div>
			
			<div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="0" data-slice2-rotation="0" data-slice1-scale="1" data-slice2-scale="1">

						<div class="bg-img bg-img-1"></div>  <!-- ver en slit-slider.css -->

						<div class="slide-caption">
                            <div class="caption-content">
                               <div class="container-fluid">
									<div class="row">
										<div class="caption-content col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<h4 class="wow animated fadeInLeft"  data-wow-delay="0.3s">Soluciones integrales</br>adaptadas a tus necesidades</h4>
										</div>	
										<div class="caption-content col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<h4 class="wow animated fadeInUp"  data-wow-delay="1.3s">Se dueño de tu energía y</br>olvidate de los cortes de luz</h4>
										</div>		
										<div class="caption-content col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<h4 class="wow animated fadeInRight" data-wow-delay="2.3s">Ahorrá en tus facturas y</br>despreocupate de los aumentos</h4>
										</div>
									</div>
							   </div> <!-- container -->
                                
                            </div> <!-- caption-content -->
                        </div>  <!-- slide-caption -->
						
					</div>  <!-- sl-slide -->
				</div><!-- /sl-slider -->

             </div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
        <section id="servicio-ppal">
			<div class="container">
				<div  class="servicio-ppal">

			      <h2 class="text-center">¿Querés ser dueño de tu propia energía?</h2>
                
                  <img src="img/parallax/servic.png" alt="renovables" class="img-responsive hidden-xs visible-sm visible-md visible-lg" style="padding-bottom: 2px"> 
                    
                  <img src="img/parallax/servic-mini.png" alt="renovables" class="img-responsive visible-xs hidden-sm hidden-md hidden-lg" style="padding-bottom: 2px">
					
				  <div class="serv-tit">
					<h3 class="text-center">Con nosotros podés</h3>
					<h4 class="text-center">¿De qué se trata?</h4>
				  </div>
					
					<hr style="color:black" width="40%">
                  
				  <div class="row serv-ppal">  
                     <div id="icon-row" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center wow animated fadeInLeft">
							<div class="item-servicio">
								<p style="text-decoration:underline">Cuesta menos</p>
								<p>Podrás conseguir una reducción en la tarifa y tu casa seguirá funcionando como siempre.</p>
							</div>
				     </div>
                     <div id="icon-row" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center wow animated fadeInDown" data-wow-delay="0.3s">
							<div class="item-servicio">
								<p  style="text-decoration:underline">Vos tenes el control</p>
								<p>Olvidate de los aumentos anuales en las tarifas y asegura tu energía por años.</p>
							</div>
				     </div>
                     <div id="icon-row" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center wow animated fadeInRight"  data-wow-delay="0.6s">
							<div class="item-servicio">
								<p  style="text-decoration:underline">Energía en todos lados</p>
								<p>Te da la posibilidad de tener energía donde la electricidad no llega o en sitios aislados.</p>
							</div>
				     </div>
                      
                  </div>  <!-- row -->
                    
                    
			     </div>   <!-- serv ppal -->
            </div> <!-- container -->
        </section>
		
		<section id="el-como">
		  <div class="container text-center text-white">
			<div class="como-tit">
				<h2>Conseguirlo es fácil</h2>
		    </div>
			  <div class="row">
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" style="margin:auto" data-wow-delay="0.3s">
					<div class="como-item">
						<div class="como-icon">
							<img src="img/icons/one.png" width="50px">
						</div>
						<p>Envianos tu factura de luz a <a href="mailto:contacto@greentech.com.ar" target="_top">facturas@greentech.com.ar</a></p>
					</div>
				  </div>
				
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" style="margin:auto" data-wow-delay="1s">
					<div class="como-item">
						<div class="como-icon">
							<img src="img/icons/two.png" width="50px">
						</div>
						<p>Nos ponemos en contacto con vos, realizamos una propuesta y coordinamos una reunión para visitar tu casa</p>
					</div>
				  </div>
				  
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" style="margin:auto" data-wow-delay="1.8s">
					<div class="como-item">
						<div class="como-icon">
							<img src="img/icons/three.png" width="50px">
						</div>
						<p>Realizamos un dimensionamiento de acuerdo a tus necesidades y requerimientos</p>
					</div>
				  </div>
				  
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" style="margin:auto" data-wow-delay="2.5s">
					<div class="como-item">
						<div class="como-icon">
							<img src="img/icons/four.png" width="50px">
						</div>
						<p>Procedemos a la instalación y así pasas a generar tu propia energía y generar ahorro.</p>
					</div>
				  </div>
						
           </div>  <!-- container -->
			
		</section>  
			
				
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Encontranos</h2>
								<span>En las redes sociales</span>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="https://www.facebook.com/greentech.bb"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/greentech_bb"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="https://www.instagram.com/greentech.bb"><i class="fa fa-instagram fa-2x"></i></a></li>							
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
        
            <section id="alianzas">
            <div class="container">
                <div class="row text-center">
                    <h1>Alianzas estratégicas</h1>
                    <p>Comprendemos la importancia de crear lazos de colaboración entre distintas empresas e</br>instituciones del sector para fomentar el crecimiento tecnológico de la ciudad</br>y mejorar la calidad de vida de sus habitantes.</p>
                    <div class="img-ptbb">
                    <img src="img/ptbb.png" alt="PTBB" class="img-responsive" style="padding-top: 2px" width="200px"> 
                    </div>
                </div>
            </div>
        
            </section>
        
        <hr width="80%">
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contacto</h2>
							<p>Dejanos tu mensaje</p>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form name="htmlform" action="/php/contact.php" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Tu Nombre y Apellido...">
									
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Tu Email...">
									
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Asunto...">
									
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Mensaje..."></textarea>
									
								</div>
								<div class="form-group">
									<input type="text" name="human" class="form-control" placeholder="Si sos humano, cuánto es 2 + 3 ?">
									
    							</div>
								<div style="height: 15px"></div>
                                <div class="g-recaptcha" data-sitekey="6LcV4yUUAAAAAME_6D9SI8Gy7bwOI843QWIQ4V9D"></div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Enviar</button>
						       	                                
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contactanos</h3>						
								<p><i class="fa fa-pencil"></i>GreenTech <span>Bahía Blanca, Buenos Aires </span><span>Argentina</span></p><br>
								<p><i class="fa fa-phone"></i>Tel: (+54) 9291 643 7824 </p>
								<p><i class="fa fa-envelope"></i>info@greentech.com.ar</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
			<!-- <section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section> -->
        </main>

<?php 
include ('footer.html');
?>