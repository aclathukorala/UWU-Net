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
    <title>Add</title>
</head>
<body>
    <?php
      
        if(isset($_POST['submit']))
        {
            $file_name = rand(1000,100000)."-".$_FILES['file_name']['name'];
            $file_loc = $_FILES['file_name']['tmp_name'];
            $folder = "uploads/";
            $new_file_name = strtolower($file_name);
            $final_file =str_replace(' ','-',$new_file_name);

            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                $sql = "INSERT INTO tbl_images(file_name) VALUES ('$final_file')";
                    mysqli_query($conn,$sql);
                    ?>

                    <script> 
                        alter('successfully uploaded');
                        window.location.href='addimages.php?success';
                
                </script>

                <?php
            }
            else{
                echo "Error uploads";
            }
        }

    ?>

</body>
</html>