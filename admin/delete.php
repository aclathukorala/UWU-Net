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
    <title>Delete</title>
</head>
<body>
    
    <?php
    

        if($_GET['op']=="delete")
        {
            $del_img=$_GET['file_name'];
            $query = "DELETE FROM tbl_images WHERE file_name='$del_img'";
            $result=mysqli_query($conn,$query);
            if($result){
                ?>
                <script>
                    alert('The image has been deleted');
                    window.location.href='addimages.php?deleted';
            </script>

            <?php
                unlink("uploads/$del_img");
            }
            else{
                ?>
                <script>
                alert('the image not yet delete');
                window.location.href='addimages.php?error';

            </script>
                <?php

            }
        }
    ?>

</body>
</html>