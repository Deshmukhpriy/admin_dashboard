<?php include('common/config.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
 <body class="fixed-left">

        <!-- Loader -->
        <!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

        <!-- Begin page -->
        <div class="accountbg">
            
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                
                                        <h3 class="text-center mt-0 m-b-15">
                                            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" height="30" alt="logo"></a>
                                        </h3>
                
                                        <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>
                
                                        <div class="p-2">
                                            <form class="form-horizontal m-t-20" action="" method="POST" id="form_abc1">
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="email" required="" placeholder="Email" name="email">
                                                    </div>
                                                </div>
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                                    </div>
                                                </div>
                
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block" type="submit" name="submit">Log In</button>
                                                    </div>
                                                </div>
                                                <div id="form_abc1_data"></div>
                                               </form>
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
<script>
	$(document).ready(function(abc1) {
		$("#form_abc1").on('submit', (function(abc1) {
			$("#form_abc1_data").html('');
			abc1.preventDefault();
			$.ajax({
				url: "php/login.php",
				type: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {
					//alert(data);
					$("#form_abc1_data").html(data);
				},
				error: function() {}
			});
		}));
	});
</script>