<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$nombre= "Barbara Sosa";
$edad= 29;
$aPeliculas= array("Tomate","Cadena de favores");

//$aPeliculas = array("Volver al futuro", "Titanic", "El día después de mañana");

$aPeliculas = ["Volver al futuro", "Titanic", "El día después de mañana"]; //Otra forma

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ficha personal</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Ficha personal</h1>

    <table class="table border table-hover">
        <thead class="thead-dark">
            <tr>
            <th>Fecha</th>
            <td><?php echo date("d/m/Y"); ?></td>
</tr>

<tr>
<th>Nombre y apellido:</th>
<td><?php echo $nombre; ?></td>
</tr>

<tr>
<th>Edad:</th>
<td><?php echo $edad; ?></td>
</tr>
<th>Peliculas favoritas:</th>
<td><?php echo $aPeliculas[0]; ?><br>
<?php echo $aPeliculas[1]; ?><br>
</td>
</table>

</div>
</div>

</body>
</html>