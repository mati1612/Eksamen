<?php 
//variabler fra form
$heading = $_GET['header'];
$imgSource = $_GET['imgPath'];
$imgAlt = $_GET['imgAlt'];
$content = $_GET['content'];
$author = $_GET['author'];
$time = time();

$target_dir = "img/";
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
}

//fyld articles med imgsource, imgalt, etc. og ha values som ?
require_once "connect.php";
$statement = $dbh->prepare("INSERT INTO articles (imgSource, imgAlt, heading, time, author, content) values(?, ?, ?, ?, ?, ?) ");

//skift nu ? med en af de forige variabler
$statement->bindParam(1, $imgPath);
$statement->bindParam(2, $imgAlt);
$statement->bindParam(3, $header);
$statement->bindParam(4, $time);
$statement->bindParam(5, $author);
$statement->bindParam(6, $content);
$statement->execute();

header("location: index.php");
?>