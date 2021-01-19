<?php

include('config/config.php');


?>

<!DOCTYPE html>
<html>  
<head>
<meta charset="UTF-8"/>
<title>Usuario</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark mb-5" >
<ul class="navbar-nav">
<li class="nav-item" >
<a class="nav-link" href="<?php echo ROOT ?>/asistentes/index.php" > Ver usuario </a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?= ROOT ?>/asistentes/add.php" > Registrar usuario </a>
</li>
</ul>
</nav>
<div class="container" >
<h1 class="text-center" >Usuario</h1>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>


</html>



