<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sửa Bài Viết</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="background-color: #216a68; width: 950px; border-radius: 10px;">
    <h3 align="center">Sửa Bài Viết</h3>
    <hr>
        <form action="index.php?mod=admin&c=post&act=update&id=<?php echo $id ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên Bài Viết</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $posts['posts_name']?>" name="posts_name">
            </div>



            <div class="form-group" >
                <label class="bmd-label-floating">Danh mục</label>
                 <select  class="form-control" name="posts_category" value="<?php echo $posts['posts_category']?>" style="height: 40px;">
                    <option name="" id="" value="0"  >Chọn danh mục ...</option>
                     <?php foreach ($categories as $key){ ?>
                    <option name="" id="" value="<?php echo $key['categories_name'];?>" ><?php echo $key['categories_name']; ?></option>
                                        <?php } ?>
                </select>
            </div>



            <div class="form-group">
                <label for="">Tiêu Đề Bài Viết</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $posts['posts_description']?>" name= "posts_description" >
            </div>


            <div class="form-group">
                <label>Nội Dung Bài Viết</label>
                <div class="form-group">
                    <textarea class="form-control" name="posts_content"  id="posts_content"><?php echo $posts['posts_content']?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('posts_content');
                    </script>
                </div>
            </div>


        <div class="form-group">
        <label class="bmd-label-floating">Chọn Ảnh Upload lên</label>
        <input class="btn btn-success" type="file" name="posts_thumbnail" id="posts_thumbnail">
        </div>


            <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
</body>
</html>