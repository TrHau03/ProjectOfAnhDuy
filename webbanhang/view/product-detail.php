<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    require '../model/connect.php';
    $ID=$_GET['ID'];
    $sql = mysqli_query($conn,"SELECT * FROM sanpham WHERE ID='$ID'");
    $result = mysqli_fetch_assoc($sql);
    $LoaiSP = $result['LoaiSP'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADStore</title>
    <link rel="stylesheet" type="text/css" href="../assets/scri/Glider.js-master/glider.css">
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
    <link rel="stylesheet" href="../assets/css/product-detail.css">
</head>
<body>
    <div id="wrapper">
        <?php
            include('../model/header.php');
        ?>
        <div id="container">
            <div id="main">
                <div class="prod-section">
                    <div class="left-content">
                        <img src="<?=$result['HinhSP']?>" alt="">
                    </div>
                    <div class="right-content">
                        <h3 class="prod-name"><?=$result['TenSP']?></h3>
                        <p class="price"><?=number_format($result['GiaSP'], 0, '', ',')?> vnđ</p>
                        <form action="" method="post">
                            <span>Select size</span>
                            <div class="prod-size">
                                <div class="row">
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div >EU 35</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 36</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 37</div>
                                    </label>
                                </div>
                                <div class="row">
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 38</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 39</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 40</div>
                                    </label>
                                    </div>
                                    <div class="row">
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 41</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 42</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 43</div>
                                    </label>
                                    </div>
                                    <div class="row">
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 44</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 45</div>
                                    </label>
                                    <label class="size-check col-sm-4">
                                        <input type="radio" name="radioname"></input>    
                                        <div>EU 46</div>
                                    </label>
                                    </div>
                            </div>
                            <div class="quantity">Quantity
                                <select class="form-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    
                                </select>
                            </div>
                            <button onclick="addCart(<?=$ID?>) showSuccessToast();" type="submit" class="btn btn-add btn-dark container mt-4 p-3" name="but-add">Add to Bag</button>
                            <button type="submit" class="btn btn-outline-danger container mt-4 p-3" name="but-add">Favourite ❤</button>
                        </form>
                        <div class="mota-sp"><?=$result['MotaSP']?></div>
                    </div>
                </div>
                </div>
            
        <?php 
        include('../model/prod-slider.php');
        include('../model/footer.php');
        ?>
        <script src="../assets/scri/header.js"></script>
        <script>
        function addCart(id){
            $.post("../model/add-cart.php",{'id':id}, function(data, status){
                // alert("Data: " + data + "\nStatus: " + status);
                $('#qty').text(<?=$_SESSION['soluong']?>);
            });
        }
    </script>
        </div>
    </div>
</body>
</html>