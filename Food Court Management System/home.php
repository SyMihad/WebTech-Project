<?php

if(isset($_GET['err'])){
    if($_GET['err']=='null'){
        echo "Please fillup all the data.";
    }
    else if($_GET['err']=='userTypeError'){
        echo "Please select user type.";
    }
    else if($_GET['err']=='invalid'){
        echo "Invalid Username or Password";
    }
}


?>

<html>
    <head>
        <title>Food Court Management System</title>
    </head>
    <body>
        <form method="post" action="loginCheck.php" enctype="">
            <fieldset>
                <legend>Welcome To Food Court Management System</legend>
                <table align="center">
                    <tr><td><h1>Welcome To Food Court Management System</h1></td></tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td>
                            <table align="center">
                                <tr>
                                    <td colspan="2"><b>Please Select User Type:</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="userType" value="admin">
                                    </td>
                                    <td>
                                        <b>Admin</b>
                                    </td>
                                </tr>
                                
                                <!-- <tr>
                                    <td>
                                        <input type="radio" name="userType" value="foodCourtManager">
                                    </td>
                                    <td>
                                        <b>Food Court Manager</b>
                                    </td>
                                </tr> -->
                                
                                <tr>
                                    <td>
                                        <input type="radio" name="userType" value="restaurantManager">
                                    </td>
                                    <td>
                                        <b>Restaurant Manager</b>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <input type="radio" name="userType" value="restaurantOwner">
                                    </td>
                                    <td>
                                        <b>Restaurant Owner</b>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <input type="radio" name="userType" value="customer">
                                    </td>
                                    <td>
                                        <b>Customer</b>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Username:</b>
                                    </td>
                                    <td>
                                        <input type="text" name="username" value="" placeholder="Username">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Password:</b>
                                    </td>
                                    <td>
                                        <input type="password" name="password" value="" placeholder="password">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" name="" value="Login">
                                        <input type="reset" name="" value="Reset">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr align="center">
                                    <td colspan="2"><a href="guest.php">Login as a Guest</a></td>
                                </tr>
                                <tr align="center">
                                    <td colspan="2"><a href="registration.php">Register</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
    </html>