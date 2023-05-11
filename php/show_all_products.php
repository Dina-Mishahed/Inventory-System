<?php
  require_once("connection.php"); 
 $s=$conn->query("select * from products"); 

?>
<html>
    <head>
        <style>
            table{
                   position:absolute;
                      top:20%;
                       width:80%; 
                    border-radius: 5%;
                    text-align:center; 
                    margin-left:15%; 
                    margin-right:auto; 

                }
            .t{
                    font-size: 40px;
                    color:black;
                    font-style: italic;
                    font-weight: bold;
                    margin-top:6%;
                background-color:bisque;
            }
            .guug
            {
                font-style: italic;
                background-color:darksalmon;
                font-size: 30px;
                font-weight: bold;
                 color:darkred;
            }
        </style>
    </head>
    <body>
       <table >
           <tr class='t' style="color:darkslateblue">
                <td>Product ID</td>
                <td>Product Name</td>
                <td>Product Price</td>
                <td>Quantity stored</td>
                <td>Minimum_quantity</td>
                </tr>
           <?php
             while($row=$s->fetch(PDO::FETCH_ASSOC))
                    {
                     if($row['quantity_stored']<$row['minimum_quantity'])
                       {
                        
                        echo "<tr class='guug' ><td>";
                        echo $row['ID'];
                        echo "</td><td>";
                        echo $row['PName'];
                        echo "</td><td>";
                        echo $row['price'];
                        echo "</td><td>";
                        echo $row['quantity_stored'];
                        echo "</td><td>";
                        echo $row['minimum_quantity'];
                        echo "</td><td>";
                        echo "Little quantity";
                        echo "</td></tr>";
                       }
                     else
                     {
                       
                        echo "<tr class='t'><td>";
                        echo $row['ID'];
                        echo "</td><td>";
                        echo $row['PName'];
                        echo "</td><td>";
                        echo $row['price'];
                        echo "</td><td>";
                        echo $row['quantity_stored'];
                        echo "</td><td>";
                        echo $row['minimum_quantity'];
                        echo "</td></tr>";
                     }
                    }
           ?>
       </table> 
    </body>
</html>