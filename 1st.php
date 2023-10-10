<?php
if (isset($_FILES['image'])){
    echo "<pre>";
    // print_r($_FILES);
    echo"</pre>";

$file_name  = $_FILES['image']['name'];
$file_size  = $_FILES['image']['size'];
$file_tmp   = $_FILES['image']['tmp_name'];
$file_type  = $_FILES['image']['type'];

if(move_uploaded_file($file_tmp,"upload-files/". $file_name)){
    echo "successfuly uploaded.";
}else{
    echo "Could not uploded the file.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="fname"> <br> <br>
        Age: <input type="text" name="age"> <br> <br>
        <input type="file" name="image"> <br> <br>
        <input type="submit" name="save" value="Submit"> <br> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST['save'])){
        echo $_POST['fname']. "<br>";
        echo $_POST['age']. "<br>";

    }
    // end 
?>