<?php include('../common/config.php');
extract($_POST);
$dateTimeNow = strtotime("now");
$image=rand().$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$image);
$scs=mysqli_query($conn,"INSERT INTO `blog`(`title`,`description`,`image`) VALUES ('$title','$description','$image')");

if($scs){
		echo '<div class="alert alert-success text-center">Blog Added Successfully</div>';
		echo '<script>  window.setTimeout(function () { window.location="show_blog.php"; }, 1000);</script>';


}else{

	echo '<div class="alert alert-danger text-center">ERROR</div>';
}
?>