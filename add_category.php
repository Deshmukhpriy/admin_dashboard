<?php include "header.php"; ?>
<div class="page-content-wrapper"   style="margin-top:100px;">
<div class="container-fluid">
<div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
               <h4 class="mt-0 header-title">Add Category</h4>
                    <form class="" action="#" method="POST" id="form_abc1s" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="category_name" required placeholder="Category Name"/>
                        </div>
                        <div class="form-group">
                            <label>Category Image</label>
                            <input type="file" class="form-control" name="image" required placeholder="Category Image"/>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea required class="form-control" name="description" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <div id="form__data"></div>
                          <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                        </button>
                        </div>
                                <!-- <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button> -->
                            
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
                url: "php/add_category.php",
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
