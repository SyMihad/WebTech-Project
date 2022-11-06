<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>Manager Dashboard</title>
    </head>
    <body>
        
            <fieldset>
                <legend><p  style="font-size:20px;">Food Court Management System</p></legend>
                <table align="center" height="700px" width="700px"  border="1">
                    <tr><td align="center"><h1>Manager Dashboard</h1></td></tr>
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

                            else if($_GET['message'] == 'restaurant_added'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Restaurant Added Successfully!<b></p></td></tr>';  
                            }

                            
  
                        } 
                      ?>

                     

                    <tr>
                        <td>
                            <table align="center" border="1" width="100%" height="100%"  >
                        
                                
                                 
                                <tr>
                                <td width="30%">
                      <ul style="line-height:250%">

                      <li><a href="restaurantOwnerDashboard.php">Dashboard</a><br></li>
                     <li><a href="restaurantOwnerAddManager.php">Add Manager</a><br></li>
                     <li><a href="restaurantOwnerAddFoodItem.php">Add Food Item</a><br></li>
                     <li><a href="restaurantOwnerViewFoodItem.php">View Food Item</a></li>
                     <li><a href="logOut.php">LogOut</a></li>

                    </ul>
 
                        </td>

                        


                        <td>
                            <form method="post" action="restaurantOwnerAddFoodItemCheck.php" enctype="">
                                <table border="1">
                                    <tr>
                                        <td><b>Food ID:</b></td>
                                        <td><input type='number' name='foodID' value=''></td>
                                    </tr>

                                    <tr>
                                        <td><b>Food Name:</b></td>
                                        <td><input type='text' name='foodName' value=''></td>
                                    </tr>

                                    <tr>
                                        <td><b>Food Price:</b></td>
                                        <td><input type='number' name='foodPrice' value=''></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><input type='submit' name='submit' value='Add'>
                                            <input type='reset' name='reset' value='Reset'></td>
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