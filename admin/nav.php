<?php
session_start();
 if (!$_SESSION['admin']) {
     header("Location: login.php");
 }else {
     # code...
 
 ?>
<link rel="stylesheet" href="../style/class.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-rtl.css">
<div class=" d-flex; text-center col-lg-12 mb-4 mt-4">
<a href="new-blog.php" class="btn btn-primary lg"> اظافة مقالة</a>
<a href="index.php" class="btn btn-primary lg"> المقالات</a>
<?php
            if (@$_SESSION['admin']) { ?>
                <form action="<?php echo htmlspecialchars("nav.php"); ?>" method="post" class="form-inline my-2 my-lg-0">
                    <input type="submit" name="logout" value="تسجيل الخروج" class="btn btn-danger">
                </form>
            <?php
            }
            ?>
</div>
<?php 
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}}
?>