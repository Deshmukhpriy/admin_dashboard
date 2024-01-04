<?php include "header.php"; ?>
<div class="page-content-wrapper"   style="margin-top:100px;">
<div class="container-fluid">
<div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
               <h4 class="mt-0 header-title">Add Products</h4>
                    <form class="" action="#" method="POST" id="form_abc1s" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Category Name</label>
                            <select class="form-control" id="category" name="category_name">
                                 <option value=""disabled selected> Select Category</option>
                                 <?php
                                    $query = "select * from category";
                                    // $query = mysqli_query($con, $qr);
                                    $result = $conn->query($query);
                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    ?>
                                 <option value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                                 <?php
                                    }
                                    }
                                    
                                    ?>
                              </select>
                        </div>
                        <div class="form-group">
                            <label>Sub-Category Name</label>
                            <select class="form-control" id="subcategory" name="sub_name">
                              <option value=""disabled selected> Select Sub Category</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="product_name" required placeholder="Product Name"/>
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" class="form-control" name="image" required placeholder="Product Image"/>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea required class="form-control" name="description" rows="5" required placeholder="Description"></textarea>
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
<script>
    $(document).ready(function(abc1) {
        $("#form_abc1s").on('submit', (function(abc1) {
            $("#form_abc1_data").html('');
            //  alert();
            abc1.preventDefault();
            $.ajax({
                url: "php/add_products.php",
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
<script>
  $(document).ready(function() {
    $("#category").change(function() {
        var category_id = $(this).val();
        // alert(category_id);
        $.ajax({
            url: "get.php",
            type: "POST",
            data: { category_id: category_id },
            success: function(data) {
                $("#subcategory").html(data);
                // alert(data);
            }
        });
    });
});

</script>