<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Student Task Management System||Advisor</title>
	<!--/tags -->
	
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
<!-- header -->
	<?php include_once('includes/header.php');?>
	<!-- banner -->
	
	</div>
	<div class="banner-bottom">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Expert Advice</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<?php
$sql="SELECT * from tblpage where PageType='Advice'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
				<div class="col-md-6 banner_bottom_left">
					
				p><?php  echo htmlentities($row->PageDescription);?></p><?php $cnt=$cnt+1;}} ?>	
			
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 banner_bottom_right">
					<div class="agileits_w3layouts_banner_bottom_grid">
						<img src="images/lol.png" alt=" " class="img-responsive" />

						</div>
						<h3>
							<div class="clearfix"> </div>
						</div>
						<h3>
                        <strong><mark> For CSE :</mark></strong> Students can do: <br>
                        1.Discrete Mathematics.<br>
                        2.Coding using C,C++,Java<br>
                        3.solving problems of Structures and algorithms.<br>
                        4.Probability and Mathematics. <br>
                        5.Operating System Design.<br>
                        6.Calculus<br>
                        7.Software Engineering<br>

                        <br>
                       
                       <strong><mark>  For EEE : </strong> </mark>Students can do:<br>
                        1.Circuit design and solve<br>
                        2.Desiginig VLSI<br>
                        3.Digital Logic Design<br>
                        4. Power system<br>

                        <br>

                         <strong><mark> For BBA : </strong></mark>Students can do: <br>
                         1.Financial Accounting<br>
                         2.Human Resource Management<br>
                         3.Supply Chain Management<br>
                         4.Planning and staffing<br>

                         <br>
                         <strong><mark> For Architecture : </strong></mark>Students can do: <br>
                         1.Parameters Design<br>
                         2.Architectural Heritage<br>
                         3.Environment and Building System<br>
                         4.Design Studio<br><br>

             
                        <strong><mark> People from all background : </strong></mark>Students can do: <br>
                        1. Introduction to World civilization <br>
                        2. Microeconomics<br>
                        3. Introduction to sociology<br>
                        4. Intermediate Composition<br>

                       
                        <strong> Requirment : </strong>HSC certificate and University ID<br>
                         --------------------------------------------<br>
                        <strong> Payment System  : </strong>Student will get their payment via bKash<br>
                         --------------------------------------------<br>
                        <strong> Work Duration: </strong> 3hr a day. Not more than two submission.<br>
                         --------------------------------------------<br>
                        <strong> Terms and Condition  : </strong>Add later<br>
                         --------------------------------------------<br>
                            <h3><a style="color:black;"href="./includes/applicant_form.php">
                         	<button style="background-color: navy;color:white;border-radius:9px;">Apply Here</button>
                         </a></h3><br>


					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	

	<?php include_once('includes/footer.php');?>

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>