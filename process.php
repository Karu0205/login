<?php 

    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $connection = mysqli_connect("localhost", "root", "", "vehicle_repair_management_system");

    $result = mysqli_query($connection, "SELECT * from admin where username = '$username' and password = '$password'") 
        or die("Failed to connect.");
    
    $row = mysqli_fetch_array($result);

    if(empty(trim($username))){
        echo "Please enter your username";
    } elseif(empty(trim($password))){
        echo "Please enter your password.";
    } elseif($row['username'] == $username && $row['password'] == $password){
        header("Location: admin.php");
    } else{
        echo "error logging in";
    }
?>