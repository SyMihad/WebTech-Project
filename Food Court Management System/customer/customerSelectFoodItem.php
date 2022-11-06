<?php

session_start();

setcookie('restaurantSelect', $_GET['restaurantSelect'], time()+60*60*72, '/');

if(!isset($_COOKIE['status'])){
  header('location: ../home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>Customer Dashboard</title>
    </head>
    <body>
        
            <fieldset>
                <legend><p  style="font-size:20px;">Food Court Management System</p></legend>
                <table align="center" height="700px" width="700px"  border="1">
                    <tr><td align="center"><h1>Customer Dashboard</h1></td></tr>
                    <tr><td><hr></td></tr>

                   <?php
                        if(isset($_GET['message']))
                        {
                            if($_GET['message'] == 'reg_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Welcome to your new account, '.$_COOKIE['username'].'!<b></p></td></tr>';  
                            }

                            else if($_GET['message'] == 'log_in_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Welcome back to your account, '.$_COOKIE['username'].'!<b></p></td></tr>';  
                            }

                            else if($_GET['message'] == 'profile_picture_change_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Profile Picture Changed Successfully!<b></p></td></tr>';  
                            }
 
                            else if($_GET['message'] == 'order_placed'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Order Placed Successfully!<b></p></td></tr>';  
                            }

                            
                            
  
                        } 

                        else if(isset($_GET['err']))
                        {
                            if($_GET['err'] == 'restaurant_file_empty'){
                                echo '<tr><td align="center"><p  style="color:red; font-size:20px;"><b> We Are Working On Our Restaurant List, Try Again!<b></p></td></tr>';  
                            }
                        }
                      ?>

                     

                    <tr>
                        <td>
                            <table align="center" border="1" width="100%" height="100%"  >
                        
                                
                                 
                                <tr>
                                <td width="30%">
                                <ul style="line-height:250%">

                                <li><a href="customerDashboard.php">Dashboard</a><br></li>
                                <li><a href="customerOrder.php">Place Order</a><br></li>
                                <li><a href="customerViewProfile.php">View Profile</a></li>
                                <li><a href="customerEditProfile.php">Edit Profile</a></li>
                                <li><a href="logOut.php">LogOut</a></li>

                                </ul>
 
                        </td>

                        <td align="top">
                            <form method="post" action="customerOrderConfirm.php" enctype="">
                                <table border="1">
                                    <tr>
                                        <td><b>Food Name</b></td>
                                        <td><b>Price</b></td>
                                        <td><b>Select</b></td>
                                    </tr>
                                    <?php
                                        $file = fopen('../restaurantManager/data/foodItems.txt', 'r');
                                        while(!feof($file)){
                                            $data = fgets($file);
                                            $user = explode('|', $data);
                                            if(trim($user[3])==$_GET['restaurantSelect']){
                                                print("<tr>
                                                <td>$user[1]</td>
                                                <td>$user[2]</td>
                                                <td><input type='radio' name='foodSelect' value='$user[1]'></td>
                                                </tr>");
                                            }
                                        }
                                        
                                    ?>

                                    <tr>
                                        <td colspan="3"><b>Quantity=</b> <input type='number' name='quantity' value='1'></td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" align="center"><input type="submit" name="submit" value="Select"></td>
                                    </tr>
                                    
                                </table>
                                
                            </form>
                       </td>
                    </tr>

                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr align="center">
                        <td colspan="2"><a href="logOut.php"><p  style="color:red; font-size:20px;"><b>Log Out<b></p></a></td>
                    </tr>
                                 
                            </table>
                        </td>
                    </tr>
                </table>
            </fieldset>
         
    </body>
    </html>