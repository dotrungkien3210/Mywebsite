<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create post for a nice day</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="background-color: #216a68; width: 950px; border-radius: 10px;">
    <h3 align="center">Tạo bài viết mới</h3>
    <hr>
        <form action="index.php?mod=admin&c=post&act=store" method="post" role="form" enctype="multipart/form-data">



            <div class="form-group">
                <label for="">Tên bài viết</label>
                <input type="text" class="form-control" id="" placeholder=""  name="posts_name">
            </div>



            <div class="form-group" >
                <label class="bmd-label-floating">Danh mục</label>
                 <select  class="form-control" name="posts_category" style="height: 40px;">
                    <option name="" id="" value="0"  >Chọn danh mục ...</option>
                     <?php foreach ($categories as $key){ ?>
                    <option name="" id="" value="<?php echo $key['categories_name'];?>" ><?php echo $key['categories_name']; ?></option>
                                        <?php } ?>
                </select>
            </div>



            <div class="form-group">
                <label for="">Tiêu Đề Bài Viết</label>
                <input type="text" class="form-control" id="" placeholder=""  name= "posts_description" >
            </div>


            <div class="form-group">
                <label>Nội Dung Bài Viết</label>
                <div class="form-group">
                    <textarea class="form-control" name="posts_content" id="posts_content"></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('posts_content');
                    </script>
                </div>
            </div>


           

        <div class="form-group">
        <label class="bmd-label-floating">Chọn Ảnh Upload lên</label>
        <input class="btn btn-success" type="file" name="posts_thumbnail" id="posts_thumbnail">
        </div>
                      
            <input type="submit" name="submit" class="btn btn-primary" value="Create">
        </form>
    </div>
</body>
</html>