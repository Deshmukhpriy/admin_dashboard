<?php include "header.php";
if (isset($_GET['delete'])) {
	mysqli_query($conn, "delete from banner where id='" . $_GET['delete'] . "'");
	echo "<script>alert('deleted successfully');window.location='show_banner.php';</script>";
}
?>
<!-- DataTables -->
<link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<div class="page-content-wrapper" style="margin-top:100px;">
<div class="container-fluid">
 <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                 <h4 class="mt-0 header-title">Banner</h4>
                 <p style="float:right;margin-top:-30px;"><a class="btn btn-warning" href="add_banner.php">Add Banner</a></p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;margin-top:20px;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Banner Heading</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
						$n = '1';
						$sqlii = mysqli_query($conn, "SELECT * FROM `banner`  ORDER BY  id  ASC");
						while ($rows = mysqli_fetch_array($sqlii)) {
						?>
                        <tr>
						<th><?php echo $n++; ?></th>
                        <th><?php echo $rows['heading']; ?></th>
                        <th><?php echo $rows['description']; ?></th>
						<td><img src="assets/images/<?php echo $rows['image']; ?>" width="50" height="50"></td>
                        <th><?php echo $rows['strtotime']; ?></th>
						<td> 
                        <a onclick="return confirm('Are you sure');" href="?delete=<?php echo $rows['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true" style="color:red;font-size:18px"></i>
						</a>
						<a href="edit_banner.php?edit=<?php echo $rows['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue;font-size:18px"></i>
						</a>
						</td>
						</tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
                <?php include "footer.php"; ?>
<!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

