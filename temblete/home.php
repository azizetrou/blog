<?php

// $sql = "SELECT * FROM article";
// $query = mysqli_query($conn,$sql);
?>

<?php
 if (!isset($_POST[""])&& !isset ($_POST[""]) && !isset ($_POST[""]) ){
      $sql = "SELECT * FROM article ";
     $resolt = mysqli_query($conn,$sql);
     while($rows = mysqli_fetch_assoc($resolt)) {?>
       
  <div class="card bg-dark text-lg-center m-2" style="max-width: 300px;">
    <img class="card-img" src="image/2.jpg" alt="">
    <div class="card-img-overlay">
      <h4 class="card-title font-weight-bold">Title  </h4>
      <p class="card-text font-weight-bold">Text</p>
      <a class="btn btn-primary" href="blog.php?id= <?= $rows['id'];?>">اقرأ عنها</a>
    </div>
  </div>

<?php } }?>