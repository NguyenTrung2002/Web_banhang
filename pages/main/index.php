<h3>Tất cả sản phẩm</h3>
<?php
    $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc
     ORDER BY tbl_sanpham.id_sanpham DESC";
    $query_pro = mysqli_query($conn, $sql_pro);
?>
<?php
    while($row = mysqli_fetch_array($query_pro)){
?>
<div class="card" style="width: 16rem">
    <a style="text-decoration: none" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
    <img src="admincp/modules/quanlysanpham/Upload/<?php
     echo $row['hinhanh_sanpham']?>" class="card-img-top" alt="..."  width = 254px height = 340px>
        <div class="card-body">
            <center>
                <p class="card-text">Tên sản phẩm: <?php echo $row['ten_sanpham']?></p>
                <p class="card-text">Giá sản phẩm: <?php echo number_format($row['gia_sanpham']).'VNĐ'?></p>
                <p><?php echo $row['ten_danhmuc']?></p>
            </center>
        </div>
    </a>
</div>
<?php
    }
?>