<?php
	include('function.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: Index.php');
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <?php include './mainstuff/inhead.php'; ?>
        <title>Multi Login </title>

		</head>
    <body>
        <?php include './mainstuff/preloader.php'; ?>
        <div id="main-wrapper">
            <?php include './mainstuff/header_user.php'; ?>
            <?php include './mainstuff/LeftSidebar_user.php'; ?>
            <div class="page-wrapper">
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Home</h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
								<div class="row">
									<div class="col-md-12">
											<div class="card card-body printableArea">

												<div class="container-fluid"><br><br><br>
													<center>
														<h1 class="text-success">ok guys thank for watch this vedio and like and subcrip our channel <br> Click the bell icon to get our channel vedios <br>
														and you can dowload the source code free and contact with me our email sourcec19@gmail.com</h1>

												</center>
												</div>
												<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

									</div>
								<?php include './mainstuff/footer.php'; ?>
								</div>
								</div>
							</div>
            <?php include './mainstuff/allquery.php'; ?>

    </body>
</html>
