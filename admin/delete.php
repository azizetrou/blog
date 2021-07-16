<?php
if($_GET['id']){
include "../data/db/conect.php";
$id = $_GET['id'];
$sql = "DELETE FROM articles WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
if ($query) {
    header("Location: index.php");
}
else {
    echo "error";
}
};