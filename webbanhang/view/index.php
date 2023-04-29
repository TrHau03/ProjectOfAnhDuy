<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADStore</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/Montserrat/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
<body>
        <div id="wrapper">
        <!-- <marquee width="100%" direction="right"style="position = flex">
            Đây là một ví dụ về direction="right"
        </marquee> -->
            <?php include('../model/header.php');
            ?>
            <div id="container">
                <div id="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <div class="slide first">
                            <img src="../assets/img/banner1.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="../assets/img/banner2.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="../assets/img/banner3.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="../assets/img/banner4.png" alt="">
                        </div>
                        <div class="nav-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>
                </div>
                <div id="main">
                    <h2>SPECIAL</h2>
                    <div class="all-product">
                        <a href="nike.html" class="brand-name"><h3>NIKE</h3></a>
                        <div class="nike-item">
                            <a href="nike.html" class="product-item">
                                <div class="item">
                                    <img src="../assets/img/anh1.png" alt="">
                                </div>
                            </a>
                            <a href="nike.html" class="product-item">
                                <div class="item">
                                    <img src="../assets/img/anh2.png" alt="">
                                </div>
                            </a>
                            <a href="nike.html" class="shop-btn">Shop</a>
                        </div>
                        <a href="adidas.html" class="brand-name"><h3>ADIDAS</h3></a>
                        <div class="adidas-item">
                        <a href="adidas.html" class="product-item">
                            <div class="item">
                                <img src="../assets/img/anh3.png" alt="">
                            </div>
                        </a>
                        <a href="adidas.html" class="product-item">
                            <div class="item">
                                <img src="../assets/img/anh4.png" alt="">
                            </div>
                        </a>
                        <a href="adidas.html" class="shop-btn">Shop</a>
                        </div>
                        <a href="puma.html" class="brand-name"><h3>PUMA</h3></a>
                        <div class="puma-item">
                            <a href="puma.html" class="product-item">
                                <div class="item">
                                    <img src="../assets/img/anh5.png" alt="">
                                </div>
                            </a>
                            <a href="puma.html" class="product-item">
                                <div class="item">
                                    <img src="../assets/img/anh6.png" alt="">
                                </div>
                            </a>
                            <a href="puma.html" class="shop-btn">Shop</a>
                    </div>
                </div>
            </div>
            </div>
            <?php include('../model/footer.php');
            ?>
        </div>
        <script src="../assets/scri/header.js"></script>
        <!-- Slider -->
        <script>
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio'+counter).checked = true;
                counter++;
                if(counter > 4){
                    counter  = 1;
                }
            },4000);
        </script>
</body>
</html>
