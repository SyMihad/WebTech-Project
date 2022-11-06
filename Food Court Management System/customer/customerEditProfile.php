<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: ../home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
        
            <fieldset>
                <legend><p  style="font-size:20px;">Food Court Management System</p></legend>
                <table align="center" height="700px" width="700px"  border="1">
                    <tr><td align="center"><h1>Edit Profile</h1></td></tr>
                    <tr><td><hr></td></tr>
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
                            <?php
                                $file = fopen('data/customer.txt', 'r');
                                $status = false;
                                while(!feof($file)){
                                    $data = fgets($file);
                                    $user = explode('|', $data);
                                    if(trim($user[2])==$_COOKIE['username']){
                                        break;
                                    }
                                }
                            ?>
                            <table>
                                <form method="post" action="customerEditProfileCheck.php" enctype="">
                                    <?php 
                                    print("<tr><td><b>First Name: </b></td><td><input type=text name=firstName value=$user[0]></td></tr>");
                                    print("<tr><td><b>Last Name: </b></td><td><input type=text name=lastName value=$user[1]></td></tr>");
                                    print("<tr><td><b>User Name: </b></td><td><input type=text name=userName value=$user[2]></td></tr>");
                                    print("<tr>
                                    <td><b>Gender</b></td>
                                    <td>
                                        <input type='radio' name='gender' value='male'/>Male
                                        <input type='radio' name='gender' value='female'/>Female
                                        <input type='radio' name='gender' value='other'/>Other
                                    </td>
                                    </tr>");
                                    print("<tr><td>Birthdate:</td><td><input type='date' name='birthDate' value=$user[4]></td></tr>");
                                    print("<tr><td><b>Email: </b></td><td><input type=email name=userEmail value=$user[5]></td></tr>");
                                    print("<tr><td><b>Phone Number: </b></td><td><input type=tel name=userPhoneNum value=$user[6]></td></tr>");
                                    print("<tr><td>Password:</td><td><input type=password name=userPassword required></td></tr>");
                                    print("<tr><td>Confirm Password:</td><td><input type=password name=userConfirmPassword required></td></tr>");
                                    print("<tr><td></td><td><input type=submit value=Update> <input type=reset name= value=Reset></td></tr>");
                                    ?>
                                </form>
                            </table>
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