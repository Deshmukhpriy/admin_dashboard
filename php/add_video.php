<?php include('../../common/config.php');
extract($_POST);
$file=rand().$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], "../image/".$file);
$strtotime=strtotime('now');
$scs=mysqli_query($conn,"INSERT INTO `add_video`(`category_id`, `video_title`, `video_name`, `video_price`, `description`, `file`, `strtotime`) 
                           VALUES ('$category_id','$video_title','$video_name','$video_price','$description','$file','$strtotime')");
if($scs){
		echo '<div class="alert alert-success text-center">Video Added Successfully</div>';
		echo '<script>  window.setTimeout(function () { window.location="show_video.php"; }, 4000);</script>';
}else{

	echo '<div class="alert alert-danger text-center">ERROR</div>';
}
