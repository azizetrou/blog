
<?php
include "../data/db/conect.php";
$sql = "SELECT * FROM article";
$query = mysqli_query($conn,$sql);
?>
<div class="container-fluid ">
<div class="row m-auto">
<?php require "nav.php";?>
     <table class="table-striped text-center col-lg-10 col-sm-12 m-auto" >
     <thead class="thead">
        <td>رقم id</td>
        <td >عنوان</td>
        <td>وصف المقال</td>
        <td>تصنيف</td>
        <td>الحدف</td>
     </thead>
    
        <?php while($row = mysqli_fetch_assoc($query)) {?> 
        <tbody class="tbody">
           <td scope="row"><?= $row["id"]; ?></td>
                <td ><?= $row["title"]; ?></td>
                <td><?= $row["description"]; ?></td>
                <td><?= $row["class"]; ?></td>
                <td>
                <div  class="btn-group m-auto" >
                        <a href="delete.php?id=<?= $row["id"]; ?>" type="button" class="btn btn-danger lg">حدف</a>
                      </div>
                      </td>
        </tbody>
      <?php }?>
 </table>
 </div>
 </div>  