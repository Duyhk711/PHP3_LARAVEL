<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class=" container ">
    <h1 class="d-flex justify-content-center">Danh sách khách hàng</h1>
    <a href="/themKhachhang" class="btn btn-success mt-2 mb-2">Thêm</a>
    <table class="table table-primary table-bordered">
        <tr>
            <th>ID</th>
            <th>Tên Khách Hàng</th>
            <th>Ảnh</th>
            <th>Mật Khẩu</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Thao Tác</th>
        </tr>
        <?php foreach($khachHangs as $kh): ?>
        <tr>
            <td><?= $kh->id ?></td>
            <td><?= $kh->ten_khach_hang ?></td>
            <td><?= $kh->anh ?></td>
            <td><?= $kh->mat_khau ?></td>
            <td><?= $kh->dia_chi ?></td>
            <td><?= $kh->so_dien_thoai ?></td>
            <td><?= $kh->email ?></td>
            <td>
                <a href="/suaKhachhang" class="btn btn-warning">Sửa</a>
                
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    </div>
</body>
</html>