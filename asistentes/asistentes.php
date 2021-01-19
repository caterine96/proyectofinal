<?php

include_once('../config/config.php');
include('../config/Database.php');

class asistentes{

    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $nombre = $params['nombre'];
        $apellido = $params['apellido'];
        $edad = $params['edad'];
        $documento = $params['documento'];

        $insert = "INSERT INTO asistentes VALUES (NULL, '$nombre', '$apellido', $edad, $documento) ";
    return mysqli_query($this->conexion, $insert);
    }

    function getAll(){
        $sql ="SELECT * FROM asistentes";
        return mysqli_query($this->conexion, $sql);
    }

    function get0ne($id)
{
$sql ="SELECT * FROM asistentes WHERE id = $id";
return mysqli_query($this->conexion, $sql);
}
function update($params){

    $nombre = $params['nombre'];
        $apellido = $params['apellido'];
        $edad = $params['edad'];
        $documento = $params['documento'];
        $id = $params ['id'];

        $update = " UPDATE asistentes SET nombre='$nombre', apellido='$apellido', edad=$edad, documento=$documento WHERE id = $id ";
        return mysqli_query($this->conexion, $update);
}

function delete($id){
$delete = "DELETE FROM asistentes WHERE id = $id";
return mysqli_query($this->conexion, $delete);
}
}

?>
