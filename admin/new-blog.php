
<script src="../ckeditor/ckeditor.js"></script>
<?php 
include "../data/db/conect.php";


    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $content = $_POST['editor1'];
        $description = $_POST['description'];
        $keywords = $_POST['keywords'];
        $tags = $_POST['tags'];
        $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];
        $image_temp = $_FILES['image']['tmp_name'];
       
        if (!empty($content) && !empty($keywords)) {
        
            move_uploaded_file($image_temp, $_SERVER['DOCUMENT_ROOT'].'/azlee/image/' . $image_name);
             $sql = "INSERT INTO `article`( `title`, `description`, `keywords`, `content`, `img`) VALUES
             ('$title','$description','$keywords','$content','$image_name')";
            $query = mysqli_query($conn,$sql);
            if ($query) {
                  header('location: index.php');
            exit();
              }
              else{
                  $erorr = "يوجد هناك خطاء ما";
              }  
    
     } else{
        $erorr = "المرجو منك ملأ معلوماتك";
    }  
        
    }

?>

<div class="container-fluid text-center">
    <div class="row">
        <?php
        include "nav.php";
        ?>
        <div class="col-md-9 col-lg-10 col-sm-12  m-auto"> 
          <div class="card">  
                <div class="card-header bg-dark text-center ">
                    <h4>إضافة مقال جديد</h4>
                </div>
                <?php include "erorr.php"; ?>
                <div class="card-body bg-primary">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label class="text-dark">:عنوان المقالة</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان المقالة">
                    </div>
                   
                    <div class="form-group">
                        <label  class="text-dark">المقالة:</label>
                        <textarea class="form-control" name="editor1" id="editor1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label  class="text-dark">:وصف المقالة</label>
                        <input class="form-control" type="text" name="description" placeholder=":وصف المقالة">
                    </div>
                    
                    <div class="form-group">
                        <label  class="text-dark">:الكلمات المفتاحية</label>
                        <input class="form-control" type="text" name="keywords" placeholder=":الكلمات المفتاحية">
                    </div>
                    <div class="form-group">
                        <label  class="text-dark">الصور</label>
                        <input type="file" name="image" >
                    </div>
                     

                    <button type="submit" name="submit" class="btn btn-danger border-dark">اظافة</button>
                    
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1' );
                    </script>
                 </form>
          </div>
       </div>
     </div>
    </div>
   <div>

