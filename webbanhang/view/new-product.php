<?php
    if(isset($_POST['but-add'])){
        require '../model/connect.php';
        $TenSP = str_replace("'","''",$_POST['sp_ten']); ;
        $HinhSP = '';
        uploadHinh($HinhSP);
        $MotaSP = str_replace("'","''",$_POST['sp_mota']);
        $GiaSP = str_replace(",","",$_POST['sp_gia']);
        $LoaiSP = $_POST['sp_loai'];
        
        $sql = sprintf("INSERT INTO `sanpham` (`TenSP`,`HinhSP`,`MotaSP`,`GiaSP`,`LoaiSP`) 
                            VALUES ('%s','%s','%s',%f,'%s');", $TenSP, $HinhSP,$MotaSP,$GiaSP,$LoaiSP);
        // var_dump($sql);
        if ($conn->query($sql) === TRUE) {
        // echo "<hr/>New record created successfully";
        header("Location: new-product.php");
        die();
        }
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    function uploadHinh(&$HinhSP) {
        $target_dir = "../assets/img/product/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // Check if image file is a actual image or fake image
        
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        
    
        // Check if file already exists
        if (file_exists($target_file)) {
          //echo "Sorry, file already exists.";
        $HinhSP = $target_file;
        return 1;
        }
    
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }
    
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $HinhSP = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            $uploadOk = 0;
        }
        }
        
        return $uploadOk;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/Montserrat/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <div id="wrapper">
            <?php include('../model/header.php');
            ?>
                <div id="main">
                    <h2>Thêm sản phẩm</h2>
                    <form action="<?=$_SERVER['PHP_SELF'];?>" class="form-container" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên sản phẩm:</label>
                            <input type="text" class="form-control"  placeholder="Tên sản phẩm" name="sp_ten" required>
                        </div>
                        <label for="uname">Hình sản phẩm:</label>           
                            <div class="form-group">
                                <input type="file" class="form-control"  placeholder="Ảnh sản phẩm" name="fileToUpload">
                            </div>
                        <div class="form-group">
                            <label>Mô tả sản phẩm:</label>
                            <input type="text" class="form-control"  placeholder="Mô tả sản phẩm" name="sp_mota">
                        </div>
                        <label>Giá sản phẩm:</label>
                        <div class="form-group input-group">
                            <input type="text" class="form-control"  placeholder="Giá sản phẩm" name="sp_gia">
                            <div class="input-group-append">
                            <span class="input-group-text">VNĐ</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Loại sản phẩm:</label>
                            <select name="sp_loai" class="form-control">
                                <option value="nike">NIKE</option>
                                <option value="adidas">ADIDAS</option>
                                <option value="puma">PUMA</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="but-add">Thêm</button>
                    </form>
                </div>    
            </div>
            <?php include('../model/footer.php');
        ?>
        <script src="../assets/scri/header.js"></script>
</body>
</html>
