<?php include("../common/config.php");
extract($_POST);
$strtotime=strtotime('now');
$image=$_FILES['image']['name']; 
if(!empty($_FILES['image']['name']))
move_uploaded_file($_FILES['image']['tmp_name'],'../assets/images/'.$image);
if(!empty($_FILES['image']['name']))
{
$query=mysqli_query($conn,"UPDATE `banner` SET `heading`='$heading',`image`='$image',`description`='$description' WHERE `id`='$ids'");
}
else{
    $query=mysqli_query($conn,"UPDATE `banner` SET `heading`='$heading' WHERE `id`='$ids'");   
}
if($query)
{
echo '<div class="alert alert-success"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong > Detail Added Successful..</strong></div>';
    echo '<script>setTimeout(function(){location.href="show_banner.php"},1000)</script>';
}
else
{
 echo '<div class="alert alert-danger"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong >Failed...!!</strong></div>';
}
?>