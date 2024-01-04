<?php include("../common/config.php");
extract($_POST);
if(!empty($_FILES['image']['name'])){
$image=$_FILES['image']['name']; 
move_uploaded_file($_FILES['image']['tmp_name'],'../assets/images/'.$image);
}else{
    
    $image = $_POST['old_image'];
}
$strtotime = strtotime('now');
$query=mysqli_query($conn,"UPDATE `products` SET `category_name`='$category_name',`sub_id`='$sub_name',`product_name`='$product_name',`description`='$description',`image`='$image'  WHERE `id`='$ids'");
// }
// else{
//     $query=mysqli_query($conn,"UPDATE `products` SET `category_name`='$category_name',`sub_id`='$sub_name',`name`='$name',`description`='$description' WHERE `id`='$ids'");
// }
if($query)
{
    echo '<div class="alert alert-success"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong > Detail Updated Successfully..</strong></div>';
    echo '<script>setTimeout(function(){location.href="show_products.php"},1000)</script>';
}
else
{
    echo '<div class="alert alert-danger"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong >Failed...!!</strong></div>';
}
?>
