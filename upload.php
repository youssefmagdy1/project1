<?php
include '../connect.php' ;
$conn = open_connection();
$target_dir = '/var/www/project/uploads/'; //$target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //$target_file specifies the path of the file to be uploaded
$img_name =basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;//$uploadOk=1 is not used yet (will be used later)
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //$imageFileType holds the file extension of the file (in lower case)
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $name = $_POST['lable'];
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "hoooo";
        $sql = "INSERT INTO `imges` ( `lable`, `img`, `time`) VALUES ( '$name', '$img_name', CURRENT_TIMESTAMP);";
        $conn->query($sql) ;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>