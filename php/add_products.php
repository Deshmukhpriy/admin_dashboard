<?php include('../common/config.php');
extract($_POST);
$image=$_FILES['image']['name']; 
if(!empty($_FILES['image']['name']))
move_uploaded_file($_FILES['image']['tmp_name'],'../assets/images/'.$image);
$dateTimeNow = strtotime("now");
$scs=mysqli_query($conn,"INSERT INTO `products`(`category_name`,`sub_id`,`image`,`product_name`,`description`) 
                              VALUES ('$category_name','$sub_name','$image','$product_name','$description')");
if($scs){
		echo '<div class="alert alert-success text-center">Product added Successfully</div>';
		echo '<script>  window.setTimeout(function () { window.location="show_products.php"; }, 1000);</script>';
}else{

	echo '<div class="alert alert-danger text-center">ERROR</div>';
}
?>
