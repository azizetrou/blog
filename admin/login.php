<div class="container-fluid ">
<div class="row m-auto">
<?php 
include "../data/db/conect.php";
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['user'];
    $pass = $_POST['pass'];
    if (empty($name) or empty($pass)) {
        $error = "جميع الحقول مطلوبة!";
    }
    elseif (!preg_match("/^[ي-أa-zA-Z0-9 ]|[\p{Arabic}]*$/",$name)) {
        $error = "إسم المستخدم يحتوي على أحرف غير مقبولة!";
    }elseif (!preg_match("/^[ي-أa-zA-Z0-9 ]|[\p{Arabic}]*$/",$pass)) {
        $error = "كلمة المرور تحتوي على أحرف غير مقبولة!";
    }
    else {
        $sql = "SELECT * FROM lodin WHERE username='$name' AND password='$pass' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);
        if ($row) {
            $_SESSION['admin'] = $name;
            header("location: index.php");
            exit();
        }else {
            $error = "إسم المستخدم أو كلمة المرور غير صحيحة!";
        }
    }
}?>
</div>
</div>


<link rel="stylesheet" href="../style/class.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-rtl.css">
    <div class="container">
        <div class="col-md-9 mx-auto mt-5">
            <div class="card">
                <div class="card-header bg-primary text-center text-light">
                    <h5>تسجيل الدخول</h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <label for="user" class="text-dark">إسم المستخدم:</label>
                            <input type="text" class="form-control" id="user" name="user"placeholder="أدخل الإسم الرمزي...">
                        </div>
                        <div class="form-group">
                            <label for="pass" class="text-dark">كلمة المرور:</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="أدخل كلمة المرور...">
                        </div>
                        <span class="text-danger"><b><i><?php echo $error; ?></i></b></span><br>
                        <button type="submit" class="btn btn-primary btn-block"><b><i>دخول</i></b></button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>