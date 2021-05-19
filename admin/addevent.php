<?php
$sname ="localhost";
$username ="root";
$password ="";
$dbname ="odmsdb";

$conn = new mysqli($sname,$username,$password,$dbname);

?>
<?php

$evena = $_POST['evtname'];
$discri = $_POST['discript'];


$sql = "INSERT INTO tblevent(eventname,discript) VALUES ('$evena','$discri')";

mysqli_query($conn,$sql);


// header("location: ../admin/includes/dbconnection.php?submit=sucess");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uva Wellassa University Nature Explorers's Team  - Add our events</title>
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
    
    <?php include_once('includes/sidebar.php');?>




    <h1>Our Events</h1>

    <form method="POST">
        <input type="text" name="evtname" placeholder="eventname">
        <br><br>
        <input type="text" name="discript" placeholder="discript">
        <br><br>


        <button type="submit" name="submit">Submit</button><br><br>
        
				<a href="events.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
        <br>
        <br>
			
				<a href="events.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
    </form>

    <?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record2 = mysqli_query($db, "SELECT * FROM tblevent WHERE evid=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record2);
			$eventname = $n['evtname'];
			$dis = $n['discript'];
		}
    }
    

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($conn, "DELETE FROM tblevent WHERE evid=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: odms/events.php');
    }
?>

</body>
</html>     