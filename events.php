<?php
$sname ="localhost";
$username ="root";
$password ="";
$dbname ="odmsdb";

$conn = new mysqli($sname,$username,$password,$dbname);
?>
<?php
    $query1="select * from tblevent";
    $result1= mysqli_query($conn,$query1);


?>

<!DOCTYPE html>
<html>
<head>
<title>Uva Wellassa University Nature Explorers's Team || Our Event</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<?php include_once('includes/header.php');?>
<h1>Events</h1>
			<div>
            <table align="center" border="1px" style="width: 600px; line-hight:300px">
				<tr>
					<th colspan="2"> Our Event list </th>
					
				</tr>	<br>
					<t>

					<th>Event</th>
					<th>Discription</th>

					</t>

					<?php 
						while($row=mysqli_fetch_assoc($result1))	
						{
							?>

							<tr>
								<td><?php echo $row['eventname']; ?></td>
								<td><?php echo $row['discript']; ?></td>
							
							</tr>

					<?php

						}	

						?>
					

			</table>
			
			<?php include_once('includes/footer.php');?>
			</div>
</body>
</html>