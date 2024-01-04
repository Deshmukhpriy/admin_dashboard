<?php include('../common/config.php');
extract($_POST);
$image=rand().$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$image);
$strtotime=strtotime('now');
$scs=mysqli_query($conn,"INSERT INTO `category`(`category_name`, `image`,`description`) VALUES ('$category_name','$image','$description')");

if($scs){
		echo '<div class="alert alert-success text-center">Category added Successfully</div>';
		echo '<script>  window.setTimeout(function () { window.location="show_category.php"; }, 1000);</script>';


}else{

	echo '<div class="alert alert-danger text-center">ERROR</div>';
}
?>