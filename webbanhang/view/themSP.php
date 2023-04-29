<?php
if(isset($_REQUEST['btnDangKy'])) {
	$tenSP = $_REQUEST['sp_ten'];
	$giaSP = (double)$_REQUEST['sp_gia'];
	$idLoai = $_REQUEST['sp_loai'];
	$hinhSP = ''; // later
	uploadHinh($hinhSP);
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydbs7";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	$sql = sprintf("INSERT INTO `sanpham` (`tenSP`, `idLoai`, `giaSP`, `hinhSP`, `moTaSP`) VALUES ('%s', %d, %f, '%s', '');", $tenSP, $idLoai,$giaSP, $hinhSP);
	//var_dump($sql);
	if ($conn->query($sql) === TRUE) {
	  //echo "<hr/>New record created successfully";
	  header("Location: products.php");
	  die();
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	mysqli_close($conn);
}

function uploadHinh(&$hinhSP) {
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
	  $hinhSP = $target_file;
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
		$hinhSP = $target_file;
	  } else {
		echo "Sorry, there was an error uploading your file.";
		$uploadOk = 0;
	  }
	}
	
	return $uploadOk;
}
?>