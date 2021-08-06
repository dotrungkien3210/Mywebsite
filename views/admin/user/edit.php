<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sửa thông tin người dùng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="background-color: #216a68; width: 950px; border-radius: 10px;">
    
    <h3 align="center">Sửa thông tin người dùng</h3>
    <hr>
        <form action="index.php?mod=admin&c=user&act=update&id=<?php echo $id ?>" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên người dùng</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $users['users_name']?>" name="users_name">
            </div>

            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $users['users_password']?>" name= "users_password" >
            </div>

             <div class="form-group">
                <label for="">quyền hạn</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $users['users_position']?>" name= "users_position" >
            </div>

            <div class="form-group">
        <label class="bmd-label-floating">Chọn Ảnh Upload lên</label>
        <input class="btn btn-success" type="file" name="users_thumbnail" id="users_thumbnail">
        </div>


            <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
</body>
</html>