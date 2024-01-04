<?php include('../common/config.php');
extract($_POST);
$image=rand().$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$image);
$scs=mysqli_query($conn,"INSERT INTO `banner`(`heading`,`image`,`description`) VALUES ('$heading','$image','$description')");

if($scs){
		echo '<div class="alert alert-success text-center">Banner Added Successfully</div>';
		echo '<script>  window.setTimeout(function () { window.location="show_banner.php"; }, 4000);</script>';


}else{

	echo '<div class="alert alert-danger text-center">ERROR</div>';
}
?>