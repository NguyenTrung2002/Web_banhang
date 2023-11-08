<?php
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]'
     ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($conn, $sql_pro);

    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]'
     LIMIT 1";
    $query_cate = mysqli_query($conn, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>
<center><h3><?php echo $row_title['ten_danhmuc']?></h3></center>
<?php
    while($row_pro = mysqli_fetch_array($query_pro)){
?>
<div class="card" style="width: 16rem;">
        <a style="text-decoration: none" href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <img src="admincp/modules/quanlysanpham/Upload/<?php echo $row_pro['hinhanh_sanpham']?>" class="card-img-top" alt="..."  width = 130px height = 100px>
            <div class="card-body">
                <center>
                    <p class="card-text">Tên sản phẩm: <?php echo $row_pro['ten_sanpham']?></p>
                    <p class="card-text">Giá sản phẩm: <?php echo number_format($row_pro['gia_sanpham']).'VNĐ'?></p>
                </center>
            </div>
        </a>
</div>
<?php
    }
?>
        