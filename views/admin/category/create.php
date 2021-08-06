<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tạo Danh Mục</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="background-color: #216a68; width: 950px; border-radius: 10px;">
    <h3 align="center">Tạo Danh Mục Mới</h3>
    <hr>
        <form action="index.php?mod=admin&c=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên Danh Mục</label>
                <input type="text" class="form-control" id="" placeholder=""  name="categories_name">
            </div>


            <div class="form-group">
                <label for="">Mô Tả</label>
                <input type="text" class="form-control" id="" placeholder=""  name= "categories_description" >
            </div>
            
            <button type="submit" class="btn btn-primary">Tạo</button>
        </form>
    </div>
</body>
</html>