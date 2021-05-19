<!DOCTYPE html>
<html lang="en">
<?php
$sname ="localhost";
$username ="root";
$password ="";
$dbname ="odmsdb";

$conn = new mysqli($sname,$username,$password,$dbname);

?>
<head>
<title>Uva Wellassa University Nature Explorers's Team || Gallary</title>
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
    
<h2>View Images</h2>

<?php
    $data="select * from tbl_images";
    $result = mysqli_query($conn,$data);
        while($row = mysqli_fetch_array($result)){?>

        <br/>

            <img src="<?php echo 'admin/uploads/'.$row['file_name'];?>" width="500px" height="500px"/>

                <?php

        }

        ?>


</body>
</html>