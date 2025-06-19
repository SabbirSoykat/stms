<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Student Task Management System||Contact page</title>
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header -->

			<?php include_once('includes/header.php');?>
		
	
	
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Contact</h3>

			</div>
			<div>
				
						<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
			
			</div>
				<div class="col-md-6 banner_bottom_left">
					<div class="agileits_w3layouts_banner_bottom_grid">
						<img src="images/co.png" alt=" " class="img-responsive" />

						</div>
							<div class="clearfix"> </div>
						</div>
						<h3>
                        <strong>Phone   : </strong>+880-255668200<br>
                        <strong>Mobile  : </strong>01718242118<br>
                        <strong>Website : </strong>www.stms.com<br>
                        <strong>Email   : </strong>stms@gamil.com<br>
                        <strong>Location: </strong>Block D, Road 6, Bashundhara r/a, Dhaka, Bangladesh <br>
                    

                        </h3></dd>
                        </div>
						
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits_w3layouts_nav_right contact">
							<div class="social two">
								
							</div>
						</div><?php $cnt=$cnt+1;}} ?>
					</div>
				</div>
				<div class="col-md-8 agile_info_mail_img">

				</div>
				<div class="clearfix"> </div>
				
			</div>

		</div>
	</div>
	<!-- //mid-services -->

	
</body>

</html>