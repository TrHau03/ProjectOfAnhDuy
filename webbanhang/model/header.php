<div id="header">   
    <a href="index.php" class="logo">
        <img src="../assets/img/logo.png" alt="LOGO">
    </a>
    <div id="menu">
        <div class="item">
            <a href="index.php">Home</a>
        </div>
        <div class="item products-item">
            <a href="./product.php">Products</a>
            <div class="products-subnav">
                <div class="content-subnav">
                    <ul>
                        <li><a href="./new-releases.php">New Releases</a></li>
                        <li><a href="">Sale</a></li>
                        <li><a href="./nike.php">Nike</a></li>
                        <li><a href="./adidas.php">Adidas</a></li>
                        <li><a href="./puma.php">Puma</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <a href="#">About</a>
        </div>
        <div class="item">
            <a href="#footer">Contact</a>
        </div>
    </div>
    <div id="actions">
        <div class="item search-item js-search-item">
        <i class="fa-solid fa-magnifying-glass search-icon-header"></i>
    </div>
        <div class="search-box js-search-box">
            <input type="text" placeholder="Search..">
            <i class="fa-solid fa-magnifying-glass icon-search-box"></i>
            <a href="" class="sub-search">Nike Air Force 1</a>
            <a href="" class="sub-search">Nike Air Max 95</a>
            <a href="" class="sub-search">Adidas SuperStar</a>
            <a href="" class="sub-search">PUMA x BLACK FIVES Suede</a>
        </div>
        <div class="item cart-item">
            <?php
            $soluong = 0;
            if(isset($_SESSION['cart'])){
                $cart = $_SESSION['cart'];
                foreach($cart as $value) {
                    $soluong += (int)$value['soluong'];
                }
            }
            ?>
            <a href="cart.php" style="color:black;"><i class="fa-solid fa-cart-shopping"></i>
            <span class="qty" id="qty"><?=$soluong?></span>
            </a>
        </div>
        <div class="item user-item js-user-item">
            <?php
            if(isset($_SESSION['login'])){
            ?>
            <i class="fa-solid fa-user"></i>
            <div class="user-subnav js-user-subnav">
                <a href="">My Account</a>
                <a href="../view/cart.php">My Purchase</a>
                <a href="../model/logout.php">Logout</a>
            </div>
            <?php
            }else{
            ?>
            <a class="login-btn" href="login.php">Login</a>
            <?php
            }
            ?>
            </div>
    </div>
</div>
<script>
    var lastScrollTop = 0;
    header = document.getElementById("header");
window.addEventListener("scroll",function(){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > lastScrollTop){
        header.style.top = "-80px";
    } else {
        header.style.top = "0";
    }
    lastScrollTop = scrollTop;
})
</script>