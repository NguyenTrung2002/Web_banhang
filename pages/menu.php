<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>
<div class="menu">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?quanly=giohang">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh mục sách
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            ?>

                                <li class="nav-item">
                                    <a class="dropdown-item" aria-current="page" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_danhmuc'] ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
                    <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </div>
    </nav>
</div>
