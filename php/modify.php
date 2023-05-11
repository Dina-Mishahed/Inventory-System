<?php
  require_once("connection.php"); 
 $s="";$id;
  if(isset($_POST['in'])&&isset($_POST['Nid'])&&isset($_POST['increase']))
    { 
      $id=$_POST['Nid'];
      $in=$_POST['increase'];
      $s=$conn->query("UPDATE products SET quantity_stored=(quantity_stored+'$in')where ID='$id' or PName='$id'");
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <style>
            
           #n{
                  height:80%; 
                  width:80%;
                  background-attachment: fixed;
                  background-position: center;
                  background-repeat:round;
                    background-size: cover;
                }
            .pointer {
                  height: 15%;
                  width:20% ;
                  background-color:darkslateblue;
                  border:1px solid black ;
                  border-radius: 10px;
                  float: right;
                  color:bisque;
                  padding: 25px 32px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 40px;
                  cursor: pointer;
                  margin:10px;
                }
        </style>
    </head>
    <body style=" background-image:url(b.jpg) ; " id="n">
	 <form method="POST">
	  <table  >
		<tr>
		  <th><input type="text" name="Nid" placeholder="Name Or ID"></th>
        </tr>
        <tr>
          <td><input type="text" name="increase" placeholder="Quantity adding"></td>
        </tr>
      </table>
         <input type="submit" name="in" value="increase" class="pointer" id="b" >
	 </form>
	</body>
</html>