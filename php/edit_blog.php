<?php include("../common/config.php");
extract($_POST);
$ $dateTimeNow = strtotime("now");
$image=$_FILES['image']['name']; 
if(!empty($_FILES['image']['name']))
move_uploaded_file($_FILES['image']['tmp_name'],'../assets/images/'.$image);
if(!empty($_FILES['image']['name']))
{
$query=mysqli_query($conn,"UPDATE `blog` SET `title`='$title',`description`='$description',`image`='$image' WHERE `id`='$ids'");
}
else{
    $query=mysqli_query($conn,"UPDATE `blog` SET `title`='$title' WHERE `id`='$ids'");   
}
if($query)

{

    echo '<div class="alert alert-success"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong > Blog Updated Successfully..</strong></div>';
    echo '<script>setTimeout(function(){location.href="show_blog.php"},1000)</script>';

}

else

{

    echo '<div class="alert alert-danger"  style="">
    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
    <strong >Failed...!!</strong></div>';

 }


?>