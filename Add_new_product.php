<?php
  require_once("connection.php");
  if(isset($_POST['submit']))
		 
    {  
	 $sql;
	 try
	  {
		 
		
		 $id=intval($_POST['id']);
         $PName= strval($_POST['PName']);
		 $price=intval($_POST['price']);
		 $quantity_stored=intval($_POST['quantity_stored']);
         $minimum_quantity=intval($_POST['min_Q']);
		 $sql = "INSERT INTO products
					   VALUES ('$id','$PName','$price','$quantity_stored','$minimum_quantity')";
		  $conn->query($sql); 
		  
	  }
	 catch(PDOException $e)
	  {
		  echo $sql.$e->getMessage();
	  }
    }
?>
<!DOCTYPE html>
 <html>
     <head>
         <link rel="stylesheet" type="text/css" href="style2.css">
        <script src="etjs.js">
            document.getElementById('parentOfElementToBeRedrawn').style.display = 'none';
            document.getElementById('parentOfElementToBeRedrawn').style.display = 'block';
         </script>
     </head>
    <body style=" background-image:url(b.jpg) ; " id="n">
	 <form method="POST" >
	  <table>
          <tr>
              <td><input type="text" name="id" placeholder="Product ID:"></td>
          </tr>
          <tr>
              <td><input type="text" name="PName" placeholder="Product Name:"></td>
          </tr>
          <tr>
              <td><input type="text" name="price" placeholder="Price:"></td>
          </tr>
          <tr>
              <td><input type="text" name="quantity_stored" placeholder="Quantity:"></td>
          </tr>
          <tr>
              <td><input type="text" name="min_Q" placeholder="Minimum Quantity:"></td>
          </tr>
          <tr><td><input type="submit" name="submit" class="pointer" id="b" value="Add Product"></td></tr>
      </table>
       

	  </form>
	</body>
 </html>
