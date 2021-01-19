<?php
include_once('../config/config.php');
include('asistentes.php');

$p = new asistentes();
$data = $p->getAll();

if( isset($_GET['id']) && !empty($_GET['id']) ){
  $remove = $p->delete($_GET['id']);
  if ($remove){
          header('Location: '.ROOT.'/asistentes/index.php');
  }else{
$mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
  }

  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 class="text-center mb-2" > Lista </h2>
<div class="row">
<?php
while( $pt= mysqli_fetch_object($data) ){
echo "<div class='col'>";
echo " <div class='border border-info p-2'> ";
echo" <h5> $pt->nombre $pt->apellido </h5>";
echo " <div clas='text-center'>";
echo "<a class='btn btn-sucess' href='".ROOT."/asistentes/editar.php?id=$pt->id' > Modificar </a> - <a class='bootstrap btn btn-danger' href='".ROOT."/asistentes/index.php?id=$pt->id'> Eliminar </a>"; 
echo "</div>";
echo "</div>";
}
?>






















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>