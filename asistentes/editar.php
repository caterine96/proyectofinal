<?php
include('../config/config.php');
include('asistentes.php');

$p = new asistentes();
$dp = mysqli_fetch_object($p->get0ne($_GET['id']));
if (isset($_POST) && !empty($_POST)){
$update = $p->update($_POST);
if ($update){
$mensaje = '<div class="alert alert-success" role="alert" > Sesion modificada con exito. </div>';
}else{ 
    $mensaje= '<div class="alert alert-danger" role="alert" > Error! </div>';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UFT-8" />
<title> Modificar sesion </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container" > 
    <?php
    if(isset($mensaje)){
        echo $mensaje;
    }
    ?>
    <h2 class="text-center mb-2"> Modificar sesion</h2> 
    <form method="POST" enctype="multipart/form-data" >

<div class="row mb-2"> 
 <div class="col" >
 <input type="text" name="nombre" id="nombre" placeholder="Nombre del asistente" class="form-control" value="<?= $dp->nombre ?>"/>
<input type="hidden" name="id" value="<?= $dp->id?> "/>
</div>
<div class="col" > 
 <input type="text" name="apellido" id="apellido" placeholder="Apellido del asistente" class="form-control" value="<?= $dp->apellido ?>"/>
</div>
</div>

<div class="row mb-2"> 
 <div class="col" >
 <input type="number" name="edad" id="edad" placeholder="Edad del asistente" class="form-control"value="<?= $dp->edad ?>"/>
</div>
<div class="col"> 
 <input type="number" name="documento" id="documento" placeholder="Documento del asistente" class="form-control" value="<?= $dp->documento ?>"/>
 </div> 
 </div> 

<button class="btn btn-success"> Modificar </button>


</form>   
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>