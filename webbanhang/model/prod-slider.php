<div class="prod-slider">
    <div class="slider-header">
        <h4>You Might Also Like</h4>
        <div class="action">
        <button aria-label="Previous" class="glider-prev act-but"><i class="fa-solid fa-chevron-left"></i></button>
        <button aria-label="Next" class="glider-next act-but"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
        <?php
            $result = mysqli_query($conn, "select * from sanpham where LoaiSP='$LoaiSP'");
            if (mysqli_num_rows($result) > 0) {
                $s ="";
                $s.='<div class="slider">';
                while($row = mysqli_fetch_assoc($result)){
                    $s .=sprintf('<a href="product-detail.php?ID=%s"><div class="product"><figure class="prod-card">',$row['ID']);
                    $s .=sprintf('<img src="%s">',$row['HinhSP']);
                    $s .=sprintf('<h4>%s</h4>',$row['TenSP']);
                    $s .= sprintf('
                                <div class="act-btn"><i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-cart-shopping"></i></div>
                                <a class="price">%s vnđ</a>', number_format($row['GiaSP'], 0, '', ','));
                    $s .='</figure></div></a>';
                }
                $s.='</div>';
                echo($s);
            }
        ?>
</div>
<link rel="stylesheet" type="text/css" href="../assets/scri/Glider.js-master/glider.js">
<script>
    window.addEventListener('load', function(){
        new Glider(document.querySelector('.slider'), {
    slidesToShow: 5,
    slidesToScroll: 5,
    draggable: true,
    arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
    }
});
})
</script>