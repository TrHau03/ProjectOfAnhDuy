<?php 
    require '../model/connect.php';
    $sql = "SELECT * FROM sanpham ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADStore</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/all-product.css">
    <link rel="stylesheet" href="../assets/font/Montserrat/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../assets/css/app.css" type="text/css">
</head>
<body>
    <div id="wrapper">
    <?php include('../model/header.php');
    ?>
        <div id="container">
        <div id="main">
            <h2>NEW RELEASES</h2>
                <div class="all-product">
			<?php
				if (mysqli_num_rows($result) > 0) {
					$soSP = mysqli_num_rows($result);
					$countPerRow = 0;
					$s = "";
					while($row = mysqli_fetch_assoc($result)) {
						if($countPerRow == 0) {
							// new row
							$s .= '<div class="row">';
						}
						if($countPerRow <= 4) {
							if($row) {
								$countPerRow++;
								$s .= '<div class="col-4 col-4_products">';
								//var_dump($row['HinhSP']
								$s .= sprintf('<img src="%s" alt="">', $row['HinhSP']);
								$s .= sprintf('<h4>%s</h4>', $row['TenSP']);
								$s .= sprintf('<p>%s</p>',$row["MotaSP"]);
								$s .= sprintf('
                                                <div class="act-btn"><i class="fa-regular fa-heart"></i>
                                                <i class="fa-solid fa-cart-shopping"></i></div>
                                                <a class="price">%s vnđ</a>', number_format($row['GiaSP'], 0, '', ','));
                                $s .= '</div>';
							}
						}
						if($countPerRow > 3) {
							// end row
							$s .= '</div>';
							$countPerRow = 0;
						}
					}
					if($countPerRow != 0) {
						// end row
						$s .= '</div>';
					}
					echo($s);
				}				
				?>     
            </div>
        </div>
        <?php include('../model/footer.php');
        ?>
        <script src="../assets/scri/header.js"></script>
    </div>
</body>
</html>