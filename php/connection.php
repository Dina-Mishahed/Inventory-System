<?php
  $host="localhost";
  $name="root";
  $pass="";
  $dname="inventory system";
  try
  {
	$conn=new PDO("mysql:host=$host;dbname=$dname",$name,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
  }catch(PDOException $e)
  {
	  echo "Not connected".$e->getMessage();
      
  }
?>