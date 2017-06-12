<?php 

include('navbar.html');

echo '
		<body>
				<div class="container">

       				 <div class="row">
            			<div class="box">
             				<div class="col-lg-12">
								<hr>
								<h2 class="intro-text text-center">Contacto <strong></strong>
								</h2>
								<hr>
                			</div>
              			<div class="col-md-8">
                   			 <!-- Embedded Google Map using an iframe width="100%" height="400" - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
							 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.803444935844!2d-62.262778457052974!3d-38.722321466210346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95eda34b14f27443%3A0x645e52559a960934!2sChiclana+494%2C+8000+Bah%C3%ADa+Blanca%2C+Buenos+Aires%2C+Argentina!5e0!3m2!1sen!2sar!4v1493235041166" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
               		 	<div class="col-md-4">
							<p><strong>Teléfono:</strong> 0291 451-9561
							</p>
							<p><strong>Email: </strong><a href="mailto:steffen-torres@stestudiojuridico.com.ar" target="_top">steffen-torres@stestudiojuridico.com.ar</a>
							</p>
							<p><b>Facebook: </b><a href="https://www.facebook.com/EstudioSteffenTorres" target="_blank">fb.com/EstudioSteffenTorres</a></p>
							<p><strong>Dirección:</strong> <br>Chiclana 494 - 3er Piso, Of. A<br>Bahía Blanca, CP 8000</p>
                		</div>
                		<div class="clearfix"></div>
            		</div>
        		</div>
		
';

echo '
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Envíe su <strong>consulta</strong>
                    </h2>
                    <hr>
                    <p>Puede enviar su consulta completando el siguiente formulario.</p>
                    <form name="htmlform" action="contact.php" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nombre</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Apellido</label>
                                <input type="text" name="surname" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Ej: juanperez@gmail.com">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Teléfono</label>
                                <input type="tel" name="tel" class="form-control" placeholder="Ej: (0291) 154-444 444">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Localidad</label>
                                <input type="text" name="city" class="form-control" placeholder="Bahía Blanca">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Asunto de Consulta</label>
                                <input type="text" name="subject" class="form-control" placeholder="Ingrese el asunto de su consulta">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensaje</label>
                                <textarea class="form-control" name="message" placeholder="Ingrese aquí su consulta..." rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" id="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
		
		
	</body>

';




include('footer.html');


?>