<?php
    session_start();
    require '../model/connect.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sqlSelectPro = "SELECT * FROM sanpham WHERE ID=".$id;
        $result = mysqli_query($conn, $sqlSelectPro);
        $row = mysqli_fetch_row($result);

        if(!isset($_SESSION['cart'])){
            $cart[$id] = array(
                'TenSP' => $row[1],
                'HinhSP' => $row[2],
                'GiaSP' => $row[4],
                'soluong' =>1
            );
        }else{
            $cart = $_SESSION['cart'];
            if(array_key_exists($id,$cart)){
                $cart[$id] = array(
                    'TenSP' => $row[1],
                    'HinhSP' => $row[2],
                    'GiaSP' => $row[4],
                    'soluong' => $cart[$id]['soluong'] +1
                );
            }
            else{
                $cart[$id] = array(
                    'TenSP' => $row[1],
                    'HinhSP' => $row[2],
                    'GiaSP' => $row[4],
                    'soluong' =>1
                );
            }
        }
        $_SESSION['cart'] = $cart;
        // echo '<prE>';
        // print_r($_SESSION['cart']);
        $soluong = 0;
        foreach($cart as $value) {
            $soluong += (int)$value['soluong'];
        }
        echo $soluong;
    }
    ?>