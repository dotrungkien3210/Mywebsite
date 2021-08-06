<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sửa Danh Mục</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="background-color: #216a68; width: 950px; border-radius: 10px;">
    <h3 align="center">Sửa Danh Mục</h3>
    <hr>
        <form action="index.php?mod=admin&c=category&act=update&id=<?php echo $id ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên Danh Mục</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $categories['categories_name']?>" name="categories_name">
            </div>
            <div class="form-group">
                <label for="">Mô Tả</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $categories['categories_description']?>" name= "categories_description" >
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</body>
</html>