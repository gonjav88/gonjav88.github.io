<?php
$page_name = "Error en Mensaje";
include ('head.php');
include ('navbar.html');

?>
        
        <div class="container" style="padding-top:10%; padding-bottom:10%">
            <div class="text-error text-center">
                <h2 style="color:darkslategrey">Ups!</h2>
                <p>Ha ocurrido un error con el envío del formulario. Corrobore el envío de los datos.</p>
                <p>Muchas gracias</p>
            
                <a href="main.php#contact" class="external">
                    <div class="btn btn-primary">Volver</div>
                </a>
            </div>
        </div>
        
        
<?php
include ('footer.html');
?>