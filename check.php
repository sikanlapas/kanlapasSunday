<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username== 'admin' && $password == '1234')
    {echo "welcome to dashboard";
    $_SESSION["username"] = $username;
    echo "HI". $_SESSION["username"];
    header("location: dashboard.php");
}else{
    echo "Username or Password ผิดพลาด";
    
}

?>