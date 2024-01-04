<?php include('../common/config.php');
extract($_POST);
$us=mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");
$us_count=mysqli_num_rows($us);
if($us_count)
{
  $us_fetch=mysqli_fetch_assoc($us);
  $_SESSION['admin_id']=$us_fetch['id'];
  echo '<div class="alert alert-success"  style="">
  <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
  <strong > Successfully Login. Please Wait... </strong></div>';
  echo "<script>function auto_refresh(){
   window.location='dashboard.php';
 }
 var refreshId = setInterval(auto_refresh, 1000);
 </script>";
}
else
{
  echo '<div class="alert alert-success"  style="">
  <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px">  x  </button>
  <strong > Please Enter Correct Username or Email  </strong></div>';
}

?>