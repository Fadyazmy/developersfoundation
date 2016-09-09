<?php
$errMsg = "";
$success = true;
$position = $_POST["position"];
$email = $_POST["email"];
$name = $_POST["name"];
$number = $_POST["number"];
//$resume = $_POST["fileToUpload"];
$schoolyear = $_POST["school-year"];
$program = $_POST["program"];
$linkedin = $_POST["linkedin"];
$github = $_POST["github"];

$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//echo $target_file;

require '../vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseFile;

ParseClient::initialize('devfound-career-db', 'YOUR_CLIENT_KEY', 'thisismymasterkey');
ParseClient::setServerURL('http://devfound-career-db.herokuapp.com/parse');
$application = new ParseObject("Applications");
$application->set("position", $position);
$application->set("name", $name);
$application->set("email", $email);
$application->set("number", $number);
//$application->set("resume", $target_file);
$application->set("schoolyear", $schoolyear);
$application->set("program", $program);
$application->set("linkedin", $linkedin);
$application->set("github", $github);

// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
/*$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}*/
//}

/*
// Check if file already exists
if (file_exists($target_file)) {
    $errMsg = $errMsg . "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $errMsg = $errMsg . "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
*/

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/

/*
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $errMsg = $errMsg . "Sorry, your file was not uploaded.<br>";
    $success = false;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $errMsg = $errMsg . "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
    } else {
        $errMsg = $errMsg . "Sorry, there was an error uploading your file.";
        $success = false;
    }
}

$file = ParseFile::createFromFile($target_file, basename($_FILES["fileToUpload"]["name"]));
echo "still ok";
$file->save();
$url = $file->getURL();
$application->set("resumeFile", $file);
$application->set("resumeURL", $url);
*/

try {
    $application->save();
    //echo 'New object created with objectId: ' . $application->getObjectId();
} catch (ParseException $ex) {
// Execute any logic that should take place if the save fails.
// error is a ParseException object with an error code and message.
    //echo 'Failed to create new object, with error message: ' . $ex->getMessage();
    $success = false;
    $errMsg = $errMsg . 'Failed to create new object, with error message: ' . $ex->getMessage() . '<br>';
}

// Message out JSON
$successMessage = ($success)? 'true' : 'false';
echo "{\"success\":" . $successMessage . ",\"errorMessage\":\"" . $errMsg . "\"}";

//header("Location: http://westerncyber.club/submitted"); /* Redirect browser */
exit();
?>