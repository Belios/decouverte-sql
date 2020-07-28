<?php
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }
//
// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }
//
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }
//
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }
//
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }

include "connexion.php";
include "projets_imput.php";
?>



<form class="" action="upload.php" method="post" enctype="multipart/form-date">
  <input type="file" name="image" value="">
  <button type="submit" name="adding">Add</button>

</form>
<?php

if (isset($_POST['adding'])) {

    $query = "INSERT INTO projets (image) VALUES (?)";
    $stmt = $conn->prepare($query);
    $filename = $_FILES['image']['name'];
    $target_files = 'uploads/' . $filename;
    $file_extension = pathinfo($target_files, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    $valid_extension = array('png', 'jpg', 'jpeg', 'gif');
    if (in_array($file_extension, $valid_extension)) {
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target_files)) {
        $stmt->execute(array($target_files));
      }
    }
}

 ?>
