<?php include("../../common/config.php");
extract($_POST);
$strtotime=strtotime('now');
$file=$_FILES['file']['name']; 
if(!empty($_FILES['file']['name']))
move_uploaded_file($_FILES['file']['tmp_name'],'../image/'.$file);
if(!empty($_FILES['file']['name']))
{
$query=mysqli_query($conn,"UPDATE `add_video` SET `category_id`='$category_id',`video_title`='$video_title',`video_name`='$video_name',`file`='$file',`video_price`='$video_price',`description`='$description',`strtotime`='$strtotime' WHERE `id`='$ids'");
}
else{
    $query=mysqli_query($conn,"UPDATE `add_video` SET `category_id`='$category_id',`video_title`='$video_title',`video_name`='$video_name',`video_price`='$video_price',`description`='$description',`strtotime`='$strtotime' WHERE `id`='$ids'");   
}
if($query)
{
    echo '<div class="alert alert-success"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong > Detail Added Successful..</strong></div>';
    echo '<script>setTimeout(function(){location.href="show_video.php"},1000)</script>';
}
else
{
    echo '<div class="alert alert-danger"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong >Failed...!!</strong></div>';
}
?>