<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon"href="ico/Favicon.ico">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/styles.css"> 
    <title>login</title>
</head>
<body>
 
 <div class="login-box" >

     
      <img src="img/lgo2.png" class="avatar" alt="Avatar Image"> 
     <h1>Login</h1>
     
     <form action="guardar_persona.php" method="post">
         
            <label >Nombre</label> 
            <input type="text" name="nombre" required placeholder="nombre">
            
            <label >Apellido</label> 
            <input type="text" name="apellido" required placeholder="apellido">

            <label >Correo</label> 
            <input type="text" name="correo" required placeholder="correo">

            <label >Password</label> 
            <input type="password" name="password" required placeholder="password">
            
            <input type="submit" value="Guardar">
            
          
          
            <a href="index.php"><img src="img/bt4.png"  alt="logo"></a>
                  
   </form>
     
 </div>
 
    
</body>
</html>