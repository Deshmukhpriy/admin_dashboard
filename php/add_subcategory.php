<?php include('../common/config.php');
extract($_POST);
$image=rand().$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$image);
$strtotime=strtotime('now');
$scs=mysqli_query($conn,"INSERT INTO `sub_category`(`category_id`,`sub_name`,`image`,`description`) 
                              VALUES ('$category_id','$sub_name','$image','$description')");
if($scs){
		echo '<div class="alert alert-success text-center">SubCategory added Successfully</div>';
		echo '<script>  window.setTimeout(function () { window.location="show_subcategory.php"; }, 1000);</script>';
}else{

	echo '<div class="alert alert-danger text-center">ERROR</div>';
}
