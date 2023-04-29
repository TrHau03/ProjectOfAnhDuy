<?php
    session_start();
    ob_start();
    require '../model/connect.php';
    require '../model/user.php';
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = mysqli_query($conn,"SELECT * FROM member WHERE username='$username' AND password='$password'");
        $result = mysqli_fetch_assoc($sql);
        if($result['password'] == $password) {
            $_SESSION['login'] = $username;
            if($result['username'] == 'admin' && $result['password'] == 'admin') {
                header('location: admin.php');
            }
            else{
                header('location: index.php');
            }
        }
        else{
            $txt_error = '<div class="alert alert-danger">Tài khoản hoặc mật khẩu không đúng</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADStore</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/account.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/Montserrat/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">

</head>
<body>
        <div id="wrapper">
            <?php include('../model/header.php');
            ?>
            <section class="container forms">
                <!-- log in -->
                <div class="form login">
                    <div class="form-content">
                        <header>Đăng nhập</header>
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method = "post">
                            <div class="field input-field">
                                <input type="text" placeholder="Username" class="input" name="username" required="">
                            </div>
                            <div class="field input-field">
                                <input type="password" placeholder="Password" class="password" name="password" required="">      
                            </div>
                            <div class="form-link">
                                <a href="" class="forgot-pass">Quên mật khẩu ?</a>                                
                            </div>
                            <div class="field button-field">
                                <input class="btn btn-primary" type="submit" name="dangnhap" value="Đăng nhập"></input>                                
                            </div>
                        </form>
                        <?php
                            if(isset($txt_error)&&($txt_error!="")){
                                print_r($txt_error);
                            }
                            if(isset($_SESSION['dangki'])&&$_SESSION['dangki']!=""){
                                $txt_success = '<div class="alert alert-success">Đăng kí thành công</div>';
                                print_r($txt_success);
                                unset($_SESSION['dangki']);
                            }
                        ?>
                        <div class="form-link">
                            <span>Bạn chưa có tài khoản? <a href="signup.php" class="link signup-link">Đăng ký</a></span>                              
                        </div>
                    </div>
                    <div class="line"></div>
                    
                    <div class="media-option">
                            <a href="" class="field facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                                <span>Đăng nhập với Facebook</span>
                            </a>
                    </div>                   
                    <div class="media-option">
                        <a href="" class="field google">
                            <img src="../assets/img/google.png" alt="" class="google-img">
                            <span>Đăng nhập với Google</span>
                        </a>
                </div>                   
                </div>
            </section> 
        <script>
            // show password
            const forms = document.querySelector(".forms"),
                pwShowHide = document.querySelectorAll(".fa-eye-slash"),
                links = document.querySelectorAll(".link");
            
            pwShowHide.forEach(eyeIcon =>{
                eyeIcon.addEventListener("click", ()=>{
                    let pwFields =  eyeIcon.parentElement.parentElement.querySelectorAll(".password");
                    
                    pwFields.forEach(password=>{
                        if(password.type ==="password"){
                            password.type = "text";
                            eyeIcon.classList.replace("bx-hide","bx-show");
                            return;
                        }
                        password.type = "password";
                            eyeIcon.classList.replace("bx-show","bx-hide");
                    })
                })
            })
        </script>
</body>
</html>
