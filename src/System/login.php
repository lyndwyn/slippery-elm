<?php

session_start();

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $con = mysqli_connect("localhost","root","","schlosslauf");
    $query = "select * from login where username='".$username."'";

    $result = mysqli_query($con,$query);
    if($result == null){
        return false;
    }

    while($row = mysqli_fetch_array($result)){
        if($row['password'] == md5($_POST['password'])){
            $_SESSION['loggedIn'] = "true";
            //echo "succsess";
            header('Location: dashboard.php');
        }else{
            header('Location: loginMask.php');
            echo "Loggin fail";
        }
    }
}
?>