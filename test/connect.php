<?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    if (!empty($username)){
    if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "youtube";


//Creating Connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno().')'
    . musqli_connect_error());
}
else = "INSERT INTO account (username, password)
values ('$username', '$password')";
if($conn->query($sql)){
    
}
}
}
else{
    echo "Username should not be empty"
    die();
}   
}
else{
    echo "Password should not be empty"
    die();
}
?>