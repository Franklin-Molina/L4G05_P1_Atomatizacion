<?php
    include('includes/verify_install.php');
     include('includes/db.php');
   
   

     $sql="SELECT * FROM persona ";
     
     $result= DB::query($sql);
  //  $result= mysqli_query($con,$sql);
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/styles_index.css">  
    <link rel="icon"href="ico/Favicon.ico">
</head>
<body>
    <div class="Tabls">

            <h1> Datos de la Base de datos </h1>

      <table class="tbl">
         <tr>
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Estado</th>
              <th colspan="4">Acciones</th>
       


           </thead>      
        </tr>

    <?php


        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
         <td><?php echo $mostrar['id'] ?></td>
         <td><?php echo $mostrar['nombre'] ?></td>
         <td><?php echo $mostrar['apellido'] ?></td>
         <td><?php echo $mostrar['correo'] ?></td>
      
         <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
               
                <?php  if($mostrar['estado'] == "activo"){  ?>
                <th>
                       <a href="guardar_persona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>" class="ini">Inactivar</a>
                </th>
                        
                    <?php  }else{  ?>

                    <th>
                          <a href="guardar_persona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    </th>
                       
                    <?php  }  ?>
                    <th>
                         <a href="modificar.php?id=<?= $mostrar['id']?>" class="xd">Editar</a>           
                    </th>
                    <th>
                          <a href="eliminar.php?id=<?= $mostrar['id']?>" class="delet">Eliminar</a>
                    </th>
                   
                    
         
        </tr>

            <?php
        }



     ?>
  
      </table>

      <a href="crear.php" ><img src="img/bt3.png"   alt="logo"></a>
      
  


</div>
  
</body>
</html>