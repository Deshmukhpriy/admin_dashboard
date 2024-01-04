<?php include('header.php');
if (isset($_GET['delete'])) {
	mysqli_query($conn, "delete from contact_us where id='" . $_GET['delete'] . "'");
	echo "<script>alert('deleted successfully');window.location='show_contact.php';</script>";
}
?>
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
						<h4 class="mt-0 header-title">All Contact Us </h4>
						<!-- <p style="float:right"><a href="add_coures.php" class="btn btn-primary">Add Coures</a></p> -->
					</div>
					<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;margin-top:20px;">
                        <thead>
									<tr>
										<th>S.No</th>
                                        <th>Name</th>
										<th>Contact No.</th>
                                        <th>Email</th>
									    <th>Message</th>
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody> 
                                    <?php
									$n = '1';
									$sqlii = mysqli_query($conn, "SELECT * FROM `contact_us`  ORDER BY  id  ASC");
									while ($rows = mysqli_fetch_array($sqlii)) {
                                        // $user =mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `signup`  where `id`='".$rows['user_id']."'"));    
									?>
									
										<tr>
											<th><?php echo $n++; ?></th>
                                            <th><?php echo $rows['c_name']; ?></th>
											<th><?php echo $rows['contact_no']; ?></th>
                                            <th><?php echo $rows['email']; ?></th>
                                            <th><?php echo $rows['message']; ?></th>
											<th><?php echo $rows['strtotime']; ?></th>
											<td> 
                                                <a onclick="return confirm('Are you sure');" href="?delete=<?php echo $rows['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true" style="color:red;font-size:18px"></i>
												</a>
												
											</td>
										</tr>
                                        <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		<!-- </div> -->
	<!-- </section> -->
</div>
<?php include('footer.php'); ?>