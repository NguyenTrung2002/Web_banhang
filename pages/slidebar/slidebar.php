<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>
<div class="sidebar">
    <div class="list-group">
        <?php
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <a class="list-group-item list-group-item-action"href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></a>
        <?php
            }
        ?>
    </div>
</div>