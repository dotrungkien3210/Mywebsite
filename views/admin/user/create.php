<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tạo người dùng mới</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="background-color: #216a68; width: 950px; border-radius: 10px;">
    <h3 align="center">Tạo người dùng mới</h3>
    <hr>
        <form action="index.php?mod=admin&c=user&act=store" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên người dùng</label>
                <input type="text" class="form-control" id="" placeholder=""  name="users_name">
            </div>

            <div class="form-group">
                <label for="">Mật Khẩu</label>
                <input type="text" class="form-control" id="" placeholder=""  name= "users_password" >
            </div>

            <div class="form-group">
                <label for="">Quyền của người dùng</label>
                <input type="text" class="form-control" id="" placeholder=""  name= "users_position" >
            </div>

            <div class="form-group">
        <label class="bmd-label-floating">Chọn Ảnh Upload lên</label>
        <input class="btn btn-success" type="file" name="users_thumbnail" id="users_thumbnail">
        </div>
           <input type="submit" name="submit" class="btn btn-primary" value="Create">
        </form>
    </div>
</body>
</html>