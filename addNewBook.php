<?php
if($_POST){
    include 'connection.php';

    $title = $_POST['title'];
    $author = $_POST['author'];
    $releaseYear = $_POST['releaseYear'];

    $query = " INSERT INTO books (title, author, releaseYear, isAvailable, borrowedTo, returnCode) VALUES (?,?,?,?,?,?)";
    $conn->prepare($query)->execute([$title, $author, $releaseYear, 1, null, null]);

    header("Location: index.php?add=true");

}else{
    header("Location: index.php");
}
?>