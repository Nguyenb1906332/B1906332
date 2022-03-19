<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


if (!$user)
{
    header('Location: login.php'); 
}

$old_pass = @md5($_POST['old_pass']);
$new_pass = @$_POST['new_pass'];
$re_new_pass = @$_POST['re_new_pass'];
 
 

if ($old_pass != $user['password'])
{
    echo $show_alert.'Mat khau khong dung. Vui long nhap lai';
}


else if ($new_pass != $re_new_pass)
{
    echo $show_alert.'Xac nhan mat khau khong khop. Vui long xac nhan lai.';
}

else
{
    $new_pass = md5($new_pass); 
    
    $sql_change_pass = "UPDATE users SET password = '$new_pass' WHERE user = '$data_user[user]'";
    
    $db->query($sql_change_pass);
    
    $db->close();
     
    
    echo $show_alert.$success_alert.'Mat khau da duoc doi.
        <script>
            location.reload();
        </script>
    ';
}
 

$conn->close();
?>
