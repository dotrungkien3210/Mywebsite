<!DOCTYPE html>
<html>
<head>	
	<style>
  .header-area{
  	background-color: #333333;
  }
</style>
</head>

<body>
	
<div id="mediaaa" >
 <h5 style="text-align: center;"><?php echo $posts[0]['posts_name'];  ?></h5>
<img style="display: block; margin-left: auto; margin-right: auto;;" src="publics\imageUpload\postImg/<?php echo $posts[0]['posts_thumbnail'];  ?>" />
 <p style="text-align: center;"><?php echo $posts[0]['posts_content'];  ?></p>

</div>


</body>
</html>





