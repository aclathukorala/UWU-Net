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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uva Wellassa University Nature Explorers's Team  - Add Gallary</title>
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
</head>

<body>
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
    
    <?php include_once('includes/sidebar.php');?>


<br>
<br>
    <form action="add.php" method="post" enctype="multipart/form-data" >
        <input type="file" name="file_name">
        <button type="submit" name="submit" class="btn btn-sm btn-primary">Add</button>
    </form>
</div>
<hr>
<h2><center>View Images</center></h2>

    <?php

        $data="select * from tbl_images";
        $result = mysqli_query($conn,$data);
            while($row = mysqli_fetch_array($result)){?>

<center><a href="delete.php?op=delete&file_name=<?php echo $row['file_name']?>">XX**DELETE**XX</a></center>
            <br/>

                <center><img src="<?php echo 'uploads/'.$row['file_name'];?>" width="100px" height="100px"/></center>

                    <?php

            }

            ?>
    
</body>
</html>