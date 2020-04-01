<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon"href="ico/Favicon.ico">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/edit.css"> 
    <title>login</title>
</head>
<body>
<?php
          include('includes/db.php');

          if(isset($_GET['id']) == false){
            echo "Es necesario enviar un id";
            die;
        }
        $id = $_GET['id'];
        $sql = "select * from persona where id= $id";
        $persona = DB::query($sql);
        
        $persona = mysqli_fetch_object($persona);

        if($persona == false){
            echo "El usuario no existe";
            die;
        }
    ?>


 <div class="login-box" >

     
      <img src="img/lgo2.png" class="avatar" alt="Avatar Image"> 
     <h1>Editar</h1>

   
     <form action="guardar_persona.php" method="post">
     <input type="hidden" name="id" value="<?= $persona->id ?>">
         
            <label >Nombre</label> 
            <input type="text" name="nombre" required placeholder="nombre" value="<?= $persona->nombre ?>">
            
            <label >Apellido</label> 
            <input type="text" name="apellido" required placeholder="apellido" value="<?= $persona->apellido ?>">

            <label >Correo</label> 
            <input type="text" name="correo" required placeholder="correo"value="<?= $persona->correo?>">

            <label >Password</label> 
            <input type="password" name="password"  placeholder="password"  value="">

          <div class="imp">


      
            <?php  if($persona->estado == "activo"){  ?>
                    <label for="">Activo</label>
                    <input type="radio" name="estado" value="activo" checked>
                    <label for="">Inactivo</label>
                    <input type="radio" name="estado" value="inactivo">
                <?php  }else{  ?>
                    <label for="">Activo</label>
                    <input type="radio" name="estado" value="activo" >
                    <label for="">Inactivo</label>
                    <input type="radio" name="estado" value="inactivo" checked>
                <?php  }  ?>
            <input type="submit" value="Guardar">
            
            </div>
          
            <a href="index.php"><img src="img/bt4.png"  alt="logo"></a>
    </form>
     
 </div>
 

    
</body>
</html>