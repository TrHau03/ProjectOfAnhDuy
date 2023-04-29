<?php
	require('connect.php');
	$result = mysqli_query($conn, 'select count(id) as total from sanpham');
	$temp = mysqli_fetch_assoc($result);
	$total_records = $temp['total'];

	// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$limit = 12;

	// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
	// tổng số trang
	$total_page = ceil($total_records / $limit);

	// Giới hạn current_page trong khoảng 1 đến total_page
	if ($current_page > $total_page){
		$current_page = $total_page;
	}
	else if ($current_page < 1){
		$current_page = 1;
	}

	// Tìm Start
	$start = ($current_page - 1) * $limit;

	// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
	// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
	$result = mysqli_query($conn, "SELECT * FROM sanpham LIMIT $start, $limit");

?>