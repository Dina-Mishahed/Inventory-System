<?php
  require_once("connection.php"); 
 $s="";
if(isset($_POST['S'])&&isset($_POST['Nid']))
    { 
      $id=$_POST['Nid'];
      $s=$conn->query("select * from products where ID='$id'||PName='$id'"); 
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style3.css">
        <style>
            .duum{
                background-color:darkred;
                font-size: 22;
                font-weight: bold;
            }
            .guug
            {
                font-style: italic;
                background-color:darkcyan;
                font-size: 30px;
                font-weight: bold;
                color:bisque
            }
        </style>
        
    </head>
    <body style=" background-image:url(b.jpg) ; " id="n">
	 <form method="POST">
	  <table >
		<tr>
		  <th><input type="text" name="Nid" placeholder="ID or Name:"></th>
		</tr>
          <tr>
		  <th><input type="submit" name="S" class="pointer" id="b" value="Get data" style=" text-align:center; vertical-align:middle" onclick="wir()"></th>
		  
		</tr>
      </table>  
      <table id="h" >
          <?php
          
            if($s!="") 
            {
                while($row=$s->fetch(PDO::FETCH_ASSOC))
                    {
                     if($row['quantity_stored'] < $row['minimum_quantity'])
                       { echo" <script>
                               window.alert('Warning!! The store is running out of ".$row['PName']."');
                              </script>";   
                            echo "</p><br>";
                            echo "<tr><td>ID</td><td>";
                            echo $row['ID'];
                            echo "</td></tr><tr><td>Name</td><td>";
                            echo $row['PName'];
                            echo "</td></tr><tr><td>Price</td><td>";
                            echo $row['price'];
                            echo "</td></tr><tr class='duum'><td>quantity stored</td><td>";
                            echo $row['quantity_stored'];
                            echo "</td></tr><tr><td>minimum_quantity</td><td>";
                            echo $row['minimum_quantity'];
                            echo"</td</tr>";
                        echo "</td></tr><tr ><td></td><td>";
                        echo "</td></tr>";
                        
                       }
                     else
                     {
                        
                            echo "<tr ><td>Product ID</td><td>";
                            echo $row['ID'];
                            echo "</td></tr><tr ><td>Product Name</td><td>";
                            echo $row['PName'];
                            echo "</td></tr><tr><td>Product Price</td><td>";
                            echo $row['price'];
                            echo "</td></tr><tr><td>quantity stored</td><td>";
                            echo $row['quantity_stored'];
                            echo "</td></tr><tr><td>minimum_quantity</td><td>";
                            echo $row['minimum_quantity'];
                            echo"</td</tr>";
                    }
                }
            }
          ?>
	  </table>
	 </form>
	</body>
</html>