<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" href="style/class.css"> 
    <title>Document</title>
</head>
<body style="direction: rtl;">

 <?php
 include "./data/db/conect.php";
 include "temblete/nav.php";
 include "temblete/head.php";
 ?>

<div class="container-fluid m-auto">
    <div class="row">
   <?php

 include "temblete/home.php";

?>
</div>
</div>


 <?php
 include "temblete/footer.php";
 ?>

 </body>