<title>Trang chủ</title>
<?php
// include('./public/Chung/header.php');
// include('./Core/Database.php');
// include('./ham.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-
    oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost:88/qlthuVien/public/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>

</body>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <h2>Khách</h2>
            </li>
            <li id="true" class="nav-item" chose="LoaiHang"> <a href="http://localhost:88/QLThuVien/index.php?controller=admin"><i class="fa fa-home"></i>Quản lý</a> </li>
            <!-- <li id="true" class="nav-item" chose="NhaCungCap"> <a href="#"><i class="fa fa-home"></i>Nhà cung cấp</a> </li>
            <li id="true" class="nav-item" chose="SanPham"> <a href="#"><i class="fa fa-home"></i>Sản Phẩm</a> </li>
            <li id="true" class="nav-item" chose="CtyGiaoHang"> <a href="#"><i class="fa fa-home"></i>Công Ty Giao Hàng</a> </li>
            <li id="true" class="nav-item" chose="NhanVien"> <a href="#"><i class="fa fa-home"></i>Nhân Viên</a> </li> -->

        </ul>
    </div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fas fa-bars"></i></a>
                            <!-- <form class="d-flex" style="margin-left: 30%;" onsubmit="return false;" hidden>
                                <input require id="search_ip" class="form-control me-2" type="text" placeholder="Nhập tên sách" aria-label="Search">

                                <button id="btn_search" class="btn btn-outline-success" type="button">Tìm</button>

                                <div id="list_sach" style="z-index: 4;">

                                </div>
                            </form> -->
                            <form class="d-flex">
                                <a id="profile_tch" href="#" class="navbar-brand">Tài khoản</a>
                                <a href="../Login/logout.php" class="navbar-brand">Đăng xuất</a>
                            </form>
                        </div>
                    </nav>
                    <!-- bắt  đầu  content -->
                    <div class="container main-content">
                        <br>
                        <button type="button" class="btn btn-primary" id="qlTheLoai">Quản lý thể loại</button>
                        <div id="data">

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dc5435;color:#fff;text-align: center;border-radius: 20px;">

            <div class="modal-body">
                <h4 id="text_confirm"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btn_delete_err">OK (<span id="time_out">5</span>)</button>
                <button type="button" class="btn btn-secondary" id="cancel_delete" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn_delete_succees">Xóa</button>
            </div>
        </div>

    </div>
    <div class="modal fade" id="update_cate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php

// include('./public/Chung/footer.php');
include('public/header/footer.php');
?>
<script>
    $(document).ready(function() {
        url = "http://localhost:88/QLThuVien/index.php?controller=admin";
        $('#qlTheLoai').click(function() {
            action = "get_cate";
            load_data(action);
            $(document).on('click', '#btn_update', function() {
            id_cate = $(this).attr("id_get");
            $('#update_cate').modal('show')
            // alert(id_cate)
        })

        })
      
       
        $(document).on('click',"#btn_delete",function(){
            id_cate = $(this).attr("id_get");
            delete_data("delete_cate",id_cate)

        })

        function delete_data(action,id) {
            $.ajax({
                url: url + "&action=" +action+"&id="+id,
                method: "POST",
                data: {
                    id_cate:id
                },
                success: function(dt) {
                    // $('#data').html(dt)
                    load_data("get_cate")
                    console.log(dt)
                }
            })
        }

        function load_data(action) {
            $.ajax({
                url: url + "&action=" + action,
                method: "POST",
                data: {

                },
                success: function(dt) {
                    $('#data').html(dt)
                }
            })
        }
    })
</script>