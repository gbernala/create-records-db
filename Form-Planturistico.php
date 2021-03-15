<!DOCTYPE html>
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

  <?php
      $host = "localhost";
      $dbname = "planagencias";
      $username = "root";
      $password = "";

      $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

      $sql = "SELECT nit_age, nom_age FROM agencias";

      $q = $cnx->prepare($sql);

      $result = $q->execute();

      $agencias = $q->fetchAll();

      ?>

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
  <h2>Plan turistico</h2>
  <form action="/Form-PlanTuristico2.php"method="post">
    <div class="form-group">
      <label for="Codigo PlanTuristico">Codigo PlanTuristico:</label>
      <input type="text" class="form-control" id="nit" placeholder="Cod PlanTuristico" name="cod_plan">
    </div>
    <div class="form-group">
      <label for="Name">Nombre PlanTuristico:</label>
      <input type="text" class="form-control" id="nombre PlanTuristico" placeholder="Digite el nombre" name="nom_plan">
    </div>
    <div class="form-group">
      <label for="Destino">Destino:</label>
      <input type="text"class="form-control" id="Destino" placeholder="Destino" name="dest_plan">
    </div>
    <div class="form-group">
      <label for="Precio del plan">Precio del plan:</label>
      <input type="number"class="form-control" id="Precio del plan" placeholder="Precio" name="valor_plan">
    </div>

    <div class="form-group">
          <label for="direccion">Agencias</label>
          <select class="form-control" name="nit_age" placeholder="Seleccione">>
            <?php
            for ($i=0; $i <count($agencias) ; $i++) {
            ?>
            <option value="<?php echo $agencias[$i]["nit_age"]?>">
              <?php echo $agencias[$i]["nom_age"] ?>
            </option>
            <?php
            }
             ?>
           </select>
        </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>

</body>
</html>
