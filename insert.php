<?php 
session_start();
//variabler fra form
$header = $_POST['header'];
$imgPath = $_FILES['imgPath'];
$imgAlt = $_POST['imgAlt'];
$content = $_POST['content'];
$userID = $_SESSION['userID'];

$target_file = $target_dir . basename($_FILES["imgPath"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);


if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imgPath"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
};

//fyld articles med imgsource, imgalt, etc. og ha values som ?
require_once "connect.php";
$statement = $dbh->prepare("INSERT INTO articles (header, imgPath, imgAlt, content, author) values(?, ?, ?, ?, ?) ");

//skift nu ? med en af de forige variabler
$statement->bindParam(1, $header);
$statement->bindParam(2, $target_file);
$statement->bindParam(3, $imgAlt);
$statement->bindParam(4, $content);
$statement->bindParam(5, $userID);
$statement->execute();

header("location: index.php");
?>