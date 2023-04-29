<?php
    session_start();
    if(!$_SESSION['login']) {
        header("Location:login.php");
    }
    if($_SESSION['login'] && $_SESSION['login']!='admin') {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADStore</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/Montserrat/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
<body>
    <div id="wrapper">
        <?php require'../model/header.php';
        ?>
        <div id="container">
            <div class="title">
                <h2>Product Management</h2>
            </div>
            
                <section id="item-container" class="container1">
                    <div class="action-container">
                        <div class="add-section">
                            <h3>Add Product</h3>
                            <p>Name</p>
                            <input type="text">
                            <p>Price</p>
                            <input type="text">
                            <p>Picture</p>
                            <button>Upload</button>
                            <p>Amount</p>
                            <input type="text">
                            <div class="add-btn"><a href="">Add</a></div>
                        </div>
                        <div class="search-section">
                            <h3>Search Product</h3>
                            <p>Name</p>
                            <input type="text">
                            <p>Price</p>
                            <input type="number"> to <input type="number">
                            <p></p>
                            <div class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></div>
                        </div>
                    </div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>ID</td>                        
                                <td>Image</td>                       
                                <td>Name</td>
                                <td>Price</td>
                                <td>Quanity</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td><img src="./assets/img/nike/1.jpg" alt=""></td>
                            <td><h5>Air Force 1</h5></td>
                            <td><input type="number" value="5000000">₫</td>
                            <td><input type="number" value="1"></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td><img src="./assets/img/nike/2.jpg" alt=""></td>
                            <td><h5>Air Force 1</h5></td>
                            <td><input type="number" value="5000000">₫</td>
                            <td><input type="number" value="1"></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td><img src="./assets/img/adidas/1.jpg" alt=""></td>
                            <td><h5>Air Force 1</h5></td>
                            <td><input type="number" value="5000000">₫</td>
                            <td><input type="number" value="1"></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td><img src="./assets/img/adidas/2.jpg" alt=""></td>
                            <td><h5>Air Force 1</h5></td>
                            <td><input type="number" value="5000000">₫</td>
                            <td><input type="number" value="1"></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tbody> 
                        <tbody>
                            <td>5</td>
                            <td><img src="./assets/img/puma/1.png" alt=""></td>
                            <td><h5>Air Force 1</h5></td>
                            <td><input type="number" value="5000000">₫</td>
                            <td><input type="number" value="1"></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tbody>  
                        <tbody>
                            <td>6</td>
                            <td><img src="./assets/img/puma/2.png" alt=""></td>
                            <td><h5>Air Force 1</h5></td>
                            <td><input type="number" value="5000000">₫</td>
                            <td><input type="number" value="1"></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tbody>  
                    </table>
                    <div class="list-page">
                        <a href="">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                    </div>
                   
                </div>          
                </section>                                                                                           
            <div id="footer">
                <div class="infor-section">
                        <ul>
                            <h2>Hỗ trợ khách hàng</h2>
                            <li><a href="">Tình trạng đơn hàng</a></li>
                            <li><a href="">Chính sách vận chuyển</a></li>
                            <li><a href="">Các lựa chọn thanh toán</a></li>
                        </ul>
                        <ul>
                            <h2>Giới thiệu về</h2>
                            <li><a href="">Giới thiệu</a></li>
                            <li><a href="">Hệ thống cửa hàng</a></li>
                            <li><a href="">Hợp tác kinh doanh</a></li>
                            <li><a href=""></a></li>
                        </ul>
                        <div class="brand-img">
                            <a href="nike.html"><img src="/webbanhang/assets/img/nike-logo.png" alt="" style="margin-bottom:15px"></a>
                            <a href="adidas.html"><img src="/webbanhang/assets/img/adidas-logo.png" alt=""></a>
                            <a href="puma.html"><img src="/webbanhang/assets/img/puma-logo.png" alt=""></a>
                         </div>
                    <div class="brand-icon">
                        <i class="fa-brands fa-facebook item-icon"></i>
                        <i class="fa-brands fa-instagram item-icon"></i>
                        <i class="fa-brands fa-twitter item-icon"></i>
                        <i class="fa-brands fa-youtube item-icon"></i>
                </div>
                    <div class="contact-section">
                        <ul>
                            <h2>Liên hệ</h2>
                            <li>
                                <i class="fa-solid fa-phone contact-icon"></i>
                                :
                                <a href="">+84 999999999</a></li>
                            <li>
                                <i class="fa-solid fa-envelope contact-icon"></i>
                                :
                                <a href="">T9shop@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                    <div class="sub-section">
                    </div>
                </div>
            </div>
    </div>
    <script src="../assets/scri/header.js"></script>
</body>
</html>
