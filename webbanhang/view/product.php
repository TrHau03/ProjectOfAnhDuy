<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    require '../model/connect.php';
?>

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
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../assets/css/app.css" type="text/css">
</head>
<body>
    <div id="wrapper">
    <?php
    include('../model/header.php');
    include('../model/pagination.php');
    ?>
        <div id="container">
        <div id="main">
        <h2>All Product</h2>
                <div class="all-product">
			<?php
				if (mysqli_num_rows($result) > 0) {
					$countPerRow = 0;
					$s = "";
					while($row = mysqli_fetch_assoc($result)) {
						if($countPerRow == 0) {
							// new row
							$s .= '<div class="row">';
						}
						if($countPerRow <= 3) {
							if($row) {
								$countPerRow++;

								$s .= '<div class="col-4 col-4_products">';
								//var_dump($row['HinhSP']
								$s .= sprintf('<a href="product-detail.php?ID=%s"><img src="%s" alt=""></a>',$row['ID'], $row['HinhSP']);
								$s .= sprintf('<h4>%s</h4>', $row['TenSP']);
								$s .= sprintf('<p>1 Colour</p>');
								$s .= sprintf('
                                                <div class="act-btn"><button><i class="fa-regular fa-heart"></i></button>
                                                <button onclick="addCart('.$row['ID'].');showSuccessToast()"><i class="fa-solid fa-cart-shopping"></i></button></div>
                                                <a class="price">%s vnđ</a>', number_format($row['GiaSP'], 0, '', ','));
                                $s .= '</div>';
							}
						}
						if($countPerRow >= 3) {
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
            <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="product.php?page='.($current_page-1).'">Prev</a> | ';
            }

            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="product.php?page='.$i.'">'.$i.'</a> | ';
                }
            }

            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="product.php?page='.($current_page+1).'">Next</a> | ';
            }
            ?>
        </div>
        <?php include('../model/footer.php');
        ?>
        <script src="../assets/scri/header.js"></script>
    </div>
    <script>
        function addCart(id){
            $.post("../model/add-cart.php",{'id':id}, function(data, status){
                $('#qty').text(data);
            });
        }
    </script>
</body>
</html>