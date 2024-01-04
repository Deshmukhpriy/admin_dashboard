<?php include "header.php"; 
$edit = mysqli_fetch_array(mysqli_query($conn, "select * from `products` where id='" . $_GET['edit'] . "'"));
$cat = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `category` WHERE `id`='" . $edit['category_name'] . "'"));
$sub = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `sub_category` WHERE `id`='" . $edit['sub_id'] . "'"));
?>
<div class="page-content-wrapper" style="margin-top:100px;">
<div class="container-fluid">
<div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
               <h4 class="mt-0 header-title">Edit Products</h4>
                    <form class="" action="#" method="POST" id="form_abc1s" enctype="multipart/form-data">
                    <input type="hidden" name="ids" value="<?php echo $_GET['edit']; ?>">
                        <div class="form-group">
                            <label>Category Name</label>
                        <select class="form-control" id="category" name="category_name">
                        <option value="<?php echo $edit['category_name'];?>"><?php echo $cat['category_name'];?></option>
                        <?php
                        $sql = mysqli_query($conn, "select * from `category`");
                        while ($fetch = mysqli_fetch_assoc($sql)) {
                        ?>
                        <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['category_name']; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Sub-Category Name</label>
                    <select class="form-control" id="subcategory"  name="sub_name">
                    <option value="<?php echo $sub['id'];?>"><?php echo $sub['sub_name'];?></option>
                    </select>
                        </div>
                        <?php
                        $edit = mysqli_fetch_array(mysqli_query($conn, "select * from `products` where id='" . $_GET['edit'] . "'"));
                        ?>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="<?php echo $edit['product_name']; ?>" required placeholder="Product Name"/>
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" class="form-control" name="image" value="<?php echo $edit['image']; ?>" required placeholder="Product Image"/>
                            <br>
                            <img src="image/<?php echo $edit['image']; ?>" width="80">
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea required class="form-control" name="description" value="<?php echo $edit['description']; ?>" rows="5" required placeholder="Description"></textarea>
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
<script>
    $(document).ready(function(abc1) {
        $("#form_abc1s").on('submit', (function(abc1) {
            $("#form_abc1_data").html('');
            //  alert();
            abc1.preventDefault();
            $.ajax({
                url: "php/edit_products.php",
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