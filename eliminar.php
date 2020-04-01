<?php
include('includes/db.php');

$id=$_REQUEST['id'];


 $sql="delete from persona  where id='$id' ";
 
 $result= DB::query($sql);

 header('Location: index.php');
   

?>