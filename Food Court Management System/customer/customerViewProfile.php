<?php
    function removeLine($filePath){
        $fileRead = fopen($filePath, 'r');
        $readData[] = array();
        $rowNum=0;
        $i =0;
        $willDelete = false;
        while(!feof($fileRead)){
            $data = fgets($fileRead);
            $user = explode("|", $data);
            $readData[$i]=$data;
            if(trim($user[2])==''){
                $willDelete = true;
                $rowNum = $i;
            }
            $i++;
        }
        fclose($fileRead);
        if($willDelete){
            $file_out = file($filePath);
            unset($file_out[$rowNum]);
            file_put_contents($filePath, implode("", $file_out));
        }
    }
?>

<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: ../home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>View Profile</title>
    </head>
    <body>
        
            <fieldset>
                <legend><p  style="font-size:20px;">Food Court Management System</p></legend>
                <table align="center" height="700px" width="700px"  border="1">
                    <tr><td align="center"><h1>View Profile</h1></td></tr>
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
                                removeLine('data/customer.txt');
                                $file = fopen('data/customer.txt', 'r');
                                $status = false;
                                $i=1;
                                while(!feof($file)){
                                    $data = fgets($file);
                                    
                                    if($user = explode('|', $data)){
                                        
                                        if(trim($user[2])==$_COOKIE['username']){
                                            break;
                                        }
                                    }
                                    
                                    $i++;
                                }
                            ?>  
                            <table>
                                <?php
                                    print("<tr><td><b>First Name: </b></td><td><input type=text name=firstName value=$user[0] readonly></td></tr>");
                                    print("<tr><td><b>Last Name: </b></td><td><input type=text name=lastName value=$user[1] readonly></td></tr>");
                                    print("<tr><td><b>User Name: </b></td><td><input type=text name=userName value=$user[2] readonly></td></tr>");
                                    print("<tr><td><b>User Name: </b></td><td><input type=text name=gender value=$user[3] readonly></td></tr>");
                                    print("<tr><td><b>User Name: </b></td><td><input type=date name=birthDate value=$user[4] readonly></td></tr>");
                                    print("<tr><td><b>Email: </b></td><td><input type=email name=userEmail value=$user[3] readonly></td></tr>");
                                    print("<tr><td><b>Phone Number: </b></td><td><input type=tel name=userPhoneNum value=$user[4] readonly></td></tr>");
                                ?>
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