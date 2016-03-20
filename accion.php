<!DOCTYPE html>
<html>
<body>
  <head>
    <title>Hola <?php echo $_GET['nombre']; ?></title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <meta charset="utf-8"/>
  </head>
  <p>
	Hola <?php echo $_GET['nombre']; ?> <br>
	Su mail es <?php echo (int)$_GET['email']; ?> 
  </p>
</body>
</html>