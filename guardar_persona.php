<?php
include('includes/db.php');
if(isset($_GET['estado']) == TRUE){
    $estado = $_GET['estado'];
    $id = $_GET['id'];
    if($estado=="activo"){
        $es = "inactivo";
    }else{
        $es = "activo";
    }
    $sql = "UPDATE persona set estado='$es' WHERE id='$id'";
}else{
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $estado = $_POST['estado'];

    if(isset($id) == false){
        $estado = "activo";
        
        $sql = "insert into persona(nombre,apellido,correo,password,estado) values('$nombre','$apellido','$correo',MD5('$password'),'$estado')"; 
       
    }else{
        if($password != ""){
            $sql = "UPDATE persona set nombre='$nombre', apellido='$apellido',correo='$correo',password=MD5('$password'),estado='$estado' WHERE id='$id'";
        }else{
            $sql = "UPDATE persona set nombre='$nombre', apellido='$apellido',correo='$correo',estado='$estado' WHERE id='$id'";
        }
    }
}
DB::query($sql);
header('Location: index.php');
?>