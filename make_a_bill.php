<?php
  require_once("connection.php"); 
 $s="";$id;
 //$p="";
  if(isset($_POST['in'])&&isset($_POST['Nid'])&&isset($_POST['decrease']))
    { 
      $id=$_POST['Nid'];
      $in=$_POST['decrease'];
      $arr=array();
      $arr=$_POST['decrease'];
      $d=$conn->query("select quantity_stored  from products where ID='$id' or PName='$id'");
                      $ro=$d->fetch(PDO::FETCH_ASSOC);
             
      
    }

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <style>
            .warning-msg {
                          color: #9F6000;
                          background-color: #FEEFB3;
                          font-size: 20px;
                          padding: 10px;
                         text-align:justify;  
                                width: 720px;
                        }
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
                  width:15% ;
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
            .guug
            {
                
                margin:5px 45px;
                width: 25%;
                height: 300px;  
                font-style: italic;
                background-color:bisque;
                font-size: 30px;
                font-weight: bold;
                color:black;
            }
            .tr
            {
                color:darkslateblue;
            }
            .fa {
                  display: inline-block;
                  font: normal normal normal 14px/1 FontAwesome;
                  font-family: FontAwesome;
                  font-size: inherit;
                  font-style: normal;
                  font-variant: normal;
                  font-weight: normal;
                  font-stretch: normal;
                  line-height: 1;
                  font-size: inherit;
                  text-rendering: auto;
                  -webkit-font-smoothing: antialiased;
                  -moz-osx-font-smoothing: grayscale;
                }
          .fa-warning:before, .fa-exclamation-triangle:before {
                                                                  content: "\f071";
                                                                }
        </style>
    </head>
    <body style=" background-image:url(two.jpg) ; " id="n">
        
	 <form method="POST">
	  <table >
		<tr>
		  <th><input type="text" name="Nid" placeholder="Product Name/ID"></th>
            <th>
                <?php
                  if(isset($_POST['in'])&&isset($_POST['Nid'])&&isset($_POST['decrease']))
                    { 
                      if($ro['quantity_stored'] >0  && $ro['quantity_stored'] >=$in ){
                      $s=$conn->query("UPDATE products SET quantity_stored=(quantity_stored-'$in')where ID='$id' or PName='$id'"); 

                      $R=$conn->query("select PName , price from products where ID='$id' or PName='$id'");
                      $row=$R->fetch(PDO::FETCH_ASSOC);

                              $pname=$row['PName'];
                              $price=$row['price'];
                      $p=$conn->query("INSERT INTO buy VALUES ('$pname','$price','$in')");
              }
          else {
                echo"
                    <div class='warning-msg'>
                    <i>
                      <img src='w.jpg' width=25 hight=25>
                    </li>
                    The quantity you entered is larger than the available quantity (AQ:". $ro['quantity_stored'] .")</div>";
          }
      
    }
                ?>
            </th>
        </tr>
        <tr>
          <td><input type="text" name="decrease" placeholder="Quantity"></td>
        </tr>
      </table><br>  
         <input type="submit" name="bill" value="Bill" class="pointer" id="b" >
         <input type="submit" name="in" value="Buy" class="pointer" id="b"  >
         <?php
         if(isset($_POST['bill']))
            {
             $x=$conn->query("select * from buy");
                $sum=0;
                if($x!="") 
                        {
                            echo
                                "<table border=1 class='guug'><tr class='tr'>
                                        <td>Item </td>
                                        <td>Price</td>
                                        <td>Quantity</td>

                                        </tr>" ;
                            while($row=$x->fetch(PDO::FETCH_ASSOC))
                                {
                                  
                                    echo "<tr><td>";
                                    echo $row['PName'];
                                    echo "</td><td>";
                                    echo $row['price'];
                                    echo "</td><td>";
                                    echo $row['quantity'];
                                    echo "</td></tr>";
                                $sum+=$row['price']*$row['quantity'];;
                              }
                        echo "<tr class='tr' ><td colspan=3>Total Price = ".$sum." LE</td></tr></table>";
                     }
                $y=$conn->query("delete from buy");

            }
         ?>
        <output id="out"></output>
	 </form>
	</body>
</html>