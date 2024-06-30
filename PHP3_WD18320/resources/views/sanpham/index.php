<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><?= $title ?></h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Mã Sản Phẩm</th>
            <th> Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Ngày Nhập</th>
            <th>Mô Tả</th>
            <th>Trạng Thái</th>
            <th>Hành Động</th>
        </tr>
        <?php  foreach($sanPhams as $sp): ?>
        <tr>
            <td><?= $sp->id ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php  endforeach ?>
    </table>

</body>
</html>