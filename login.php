<?php 
    $formUsername = $_POST['formUsername'];
    $formPassword = $_POST['formPassword'];

    require "connect.php";

    $variable = $dbh->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $variable->bindParam(1, $formUsername);
    $variable->bindParam(2, $formPassword);
    $variable->execute();

    if($row = $variable->fetch()){
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['userID'] = $row['userID'];
        header("location: index.php");

    } else{
        echo "Sorry, The username or password was incorrect.";
    }
    $dbh = null;
?>