<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>load images from folder</title>
<style type="text/css">
.image-box {
	width: 1000px;
	margin-top: 100px;
	margin-right: auto;
	margin-left: auto;
	background-color: rgba(153,153,153,1);
}
</style>
</head>

<body>

<div class="image-box"><!--img size 1000px x 300px -->
    	<?PHP
		$handle = opendir(dirname(realpath(__FILE__)).'/images/'); // open folder images
		 
		while($file = readdir($handle)){  // read content of folder 
			if($file !== '.' && $file !== '..'){
				$alt = substr($file, 0, -4); // cut last 4 character from name of file (.jpg, .gif, .png)
				echo '<img src="images/'.$file.'" width="1000" height="300" alt="'.$alt.'" />'; // output this for each image in folder
												}
									   }
		?>

   </div><!--end of image-box -->


</body>
</html>