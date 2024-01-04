<?php include('header.php');
$edit = mysqli_fetch_array(mysqli_query($conn, "select * from `sub_category` where id='" . $_GET['edit'] . "'"));
$cat = mysqli_fetch_array(mysqli_query($conn, "select * from `category` where id='" . $edit['category_name'] . "'"));
?>
<div class="page-content-wrapper"   style="margin-top:100px;">
<div class="container-fluid">
<div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
               <h4 class="mt-0 header-title">Add Sub-Category</h4>
                    <form class="" action="#" method="POST" id="form_abc1s" enctype="multipart/form-data">
                    <input type="hidden" name="ids" value="<?php echo $_GET['edit']; ?>">
                    <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                            <option value="<?php echo $edit['category_id']; ?><?php echo $cat['category_name']; ?>"></option>
                            <?php
                            $sql = mysqli_query($conn, "select * from `category`");
                            while ($fetch = mysqli_fetch_assoc($sql)) {
                            ?>
                            <option value="<?php echo $fetch['id']; ?>">
                            <?php echo $fetch['category_name']; ?></option>
                            <?php } ?>
                           </select>
                        </div>
                        <?php
                        $edit = mysqli_fetch_array(mysqli_query($conn, "select * from `sub_category` where id='" . $_GET['edit'] . "'"));
                        ?>
                        <div class="form-group">
                            <label>Sub-Category Name</label>
                            <input type="text" class="form-control" name="sub_name" value="<?php echo $edit['sub_name']; ?>" required placeholder="Sub-Category Name"/>
                        </div>
                        <div class="form-group">
                            <label>Sub-Category Image</label>
                            <input type="file" class="form-control" name="image" value="<?php echo $edit['image']; ?>" required placeholder="Sub-Category Image"/>
                            <img src="assets/images/<?php echo $edit['image']; ?>" width="80">
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea required class="form-control" name="description" value="<?php echo $edit['description']; ?>" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <div id="form__data"></div>
                          <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                        Submit
                        </button>
                        </div>
                     </form>
               </div>
            </div>
        </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container fluid -->
 </div> <!-- Page content Wrapper -->
</div> <!-- content -->
<?php include "footer.php"; ?>
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
<!-- <script>
    tinymce.init({
        selector: 'textarea'
    });
</script> -->


<!-- <style type="text/css">
    .mce-notification-warning {

        display: none;

    }
</style> -->
<script>
    $(document).ready(function(abc1) {
        $("#form_abc1s").on('submit', (function(abc1) {
            $("#form_abc1_data").html('');
            //  alert();
            abc1.preventDefault();
            $.ajax({
                url: "php/edit_subcategory.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    //alert(data);
                    $("#form__data").html(data);
                },
                error: function() {}
            });
        }));
    });
</script>
