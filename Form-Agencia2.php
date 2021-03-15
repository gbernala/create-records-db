<!DOCTYPE html>
<?php
$nit_age = $_REQUEST["nit_age"];
$nom_age = $_REQUEST["nom_age"];
$tel_age = $_REQUEST["tel_age"];
$dir_age = $_REQUEST["dir_age"];

$host = "localhost";
$dbname = "planagencias";
$username = "root";
$password = "";

$cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "INSERT INTO agencias (nit_age,nom_age,tel_age,dir_age) values('$nit_age', '$nom_age','$tel_age','$dir_age');";

$q = $cnx->prepare($sql);

$result = $q->execute();


?>


<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

  <ul class="nav nav-pills">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Menu</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/Form-Agencia.php">Agencias</a>
        <a class="dropdown-item" href="/Form-PlanTuristico.php">PlanTuristico</a>
      </div>
    </li>
  </ul>



<div class="container">
  <h2>Crear la agencia</h2>
  <form action="/Form-Agencia2.php" method="post">
    <div class="form-group">
      <label for="Nit agencia">Nit agencia:</label>
      <input type="text" class="form-control" id="nit" placeholder="Nit agencia" name="nit_age">
    </div>
    <div class="form-group">
      <label for="Name">Nombre agencia:</label>
      <input type="text" class="form-control" id="Name" placeholder="Digite el Nombre" name="nom_age">
    </div>
    <div class="form-group">
      <label for="Telefono">Telefono agencia:</label>
      <input type="text"class="form-control" id="Tel" placeholder="Telefono" name="tel_age">
    </div>
    <div class="form-group">
      <label for="Direccion">Direccion agencia:</label>
      <input type="text"class="form-control" id="Direccion" placeholder="Direccion" name="Dir_age">
    </div>
  <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="recordar"> Recordar
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>

</body>
</html>
