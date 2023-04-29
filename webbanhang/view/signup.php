<?php
    session_start();
    require '../model/connect.php';
    if((isset($_POST['dangki']))&&($_POST['dangki'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $password = $_POST['password'];
        $repassword = $_POST['re-password'];
        if(!empty($username)&&!empty($password)){
            if($password!=$repassword){
                $txt_error = '<div class="alert alert-danger">Mật khẩu không trùng khớp</div>'; 
            }
            $sql = "INSERT INTO `member` (`username`, `email`,`sdt`,`password`) VALUES('$username','$email','$sdt','$password')";
            
            if ($conn->query($sql)===TRUE){
                $_SESSION['dangki'] = $username;
                header('location: login.php');
            }
        }else{
            $txt_error = '<div class="alert alert-danger">Nhập đầy đủ thông tin</div>'; 
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
    <title>T9 Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/account.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/Montserrat/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
<body>
        <div id="wrapper">
            <?php include('../model/header.php');
            ?>
            <!-- The Modal -->
            
            <section class="container forms">
                <!-- log in -->
                <div class="form login">
                    <div class="form-content">
                        <header>Đăng Ký</header>
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method = "post">
                            <div class="field input-field">
                                <input type="text" placeholder="Username" class="input" name="username">
                            </div>
                            <div class="field input-field">
                                <input type="email" placeholder="Email" class="input" name="email">
                            </div>
                            <div class="field input-field">
                                <input type="phone" placeholder="SDT" class="input" name="sdt">
                            </div>
                            <div class="field input-field">
                                <input type="password" placeholder="Password" class="password" name="password">      
                            </div>
                            <div class="field input-field">
                                <input type="password" placeholder="Re-Password" class="password" name="re-password">      
                            </div>                                 
                            <div class="field button-field">
                                <input class="btn btn-primary" type="submit" name="dangki" value="Đăng ký"></input>                                
                            </div>
                        </form>
                        <div class="form-link">
                            <span>Bạn đã có tài khoản? <a href="login.php" class="link signup-link">Đăng Nhập</a></span>                              
                        </div>
                        <?php
                            if(isset($txt_error)&&($txt_error!="")){
                                print_r($txt_error);
                            }
                        ?>
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
