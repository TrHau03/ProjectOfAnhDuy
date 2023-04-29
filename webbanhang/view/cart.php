<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADStore</title>
    
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <link rel="stylesheet" href="../assets/css/prod-slider.css">
    <link rel="stylesheet" href="../assets/font/Montserrat/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/cart.css">
</head>
<body>
    <div id="wrapper">
        <?php
            include('../model/header.php');
        ?>
        <div id="container">
            <div id="main">
                <form action="" class="form-container">
                <div class="cart-section">
                    <h4>Cart</h4>
                    <div class="item-section">
                        <div class="prod-pic">
                            <img src="../assets/img/product/fd17b420-b388-4c8a-aaaa-e0a98ddf175f.png" alt="">
                        </div>
                        <div class="product-item">
                            <div class="item">
                                <div class="info-item">
                                    <h4>Name</h4>
                                    <p>color</p>
                                    <div class="changes">
                                        <div class="size-item">Size
                                            <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            </select></div>
                                        <div class="quantity-item">
                                            Quantity
                                            <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">1,000,000vnđ</div>
                            </div>
                            <div class="action">
                                <ul>
                                    <li><button><i class="fa-regular fa-heart"></i></button></li>
                                    <li><button><i class="fa-regular fa-trash-can"></i></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="total-section">
                    <h4>Total</h4>
                    <div class="quantity">
                        <p class="h5">Quantity</p>
                        <p>11</p> 
                    </div>
                    <div class="total">
                        <p class="h5">Total</p>
                        <p>100,000,000vnđ</p>
                    </div>
                    <button type="submit" class="btn btn-dark container" name="Check-out">Đặt hàng</button>
                </div>
                </form>
            </div>
            
            <?php 
            include('../model/prod-slider.php');
            include('../model/footer.php');
            ?>
            <script src="../assets/scri/header.js"></script>
            </div>
        </div<>
    </body>
    </html>