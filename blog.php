<?php
include "data/db/conect.php";
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM article WHERE id = '$id'";
    $resolt = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($resolt);
?>
<link rel="stylesheet" href="style/class.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-rtl.css">
  <body dir="rtl">
    <?php
 include "temblete/footer.php";
}else {
    header("Location: ../index.php");
}
?>
