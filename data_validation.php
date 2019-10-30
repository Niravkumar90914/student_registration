<?php 
/* CODE CREATED BY NIRAV PATEL 26 OCT 2019
  DATA VALIDATION FOR STUDENT REGISTRATION FORM : INDEX.PHP
 */
error_reporting(0);
define("PHOTO_DIR", $_SERVER["DOCUMENT_ROOT"]."/crude/assets/img/"); //define photo directory for photo upload
$inputOk = 1; 
$errorMsg = [];

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$action = $_POST["action"]; // insert, update and delete 

	if ($_POST['action'] == "insert" || $_POST['action'] == "update" ) {

        //NAME VALIDATION
        if (empty($_POST["name"])) {
            $errorMsg["name-error"] = "Name is required.";
            $inputOk = 0;
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[A-Za-z ]*$/", $name)) {
                $errorMsg["name-error"] = "Please enter valid name.";
                $inputOk = 0;
            }
        }

        //EMAIL VALIDATION
        if (empty($_POST["email"])) {
            $errorMsg["email-error"] = "Email address is required.";
            $inputOk = 0;
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
                $errorMsg["name-error"] = "Please enter valid email address.";
                $inputOk = 0;
            }
        }

        //MOBILE VALIDATION
        if (empty($_POST["mobile"])) {
            $errorMsg["mobile-error"] = "Mobile number is required.";
            $inputOk = 0;
        } else {
            $mobile = test_input($_POST["mobile"]);
            if (!preg_match("/^[0-9]{10}$/", $mobile)) {
                $errorMsg["mobile-error"] = "Please enter valid mobile number.";
                $inputOk = 0;
            }
        }

        //ADDRESS VALIDATION
        if (empty($_POST["address"])) {
            $errorMsg["address-error"] = "Address is required.";
            $inputOk = 0;
        } else {
            $address = test_input($_POST["address"]);
            if (!preg_match("/^[#.0-9a-zA-Z\s,-]+$/", $address)) {
                $errorMsg["address-error"] = "Please enter valid address.";
                $inputOk = 0;
            }
        }

        //GENDER VALIDATION
        if (empty($_POST["gender"])) {
            $errorMsg["gender-error"] = "Select your gender.";
            $inputOk = 0;
        } else {
            $gender = $_POST["gender"];
        }

        //DATE OF BIRTH VALIDATION
        if (empty($_POST["dob"])) {
            $errorMsg["dob-error"] = "Date of birth is required.";
            $inputOk = 0;
        } else {
            $dob = $_POST["dob"];
        }

        //STATE VALIDATION
        if (empty($_POST["state"])) {
            $errorMsg["state-error"] = "Select your state.";
            $inputOk = 0;
        } else {
            $state = $_POST["state"];
        }

        //CITY VALIDATION
        if (empty($_POST["city"])) {
            $errorMsg["city-error"] = "Select your city.";
            $inputOk = 0;
        } else {
            $city = $_POST["city"];
        }

        //HOBBIES VALIDATION
        if (empty($_POST["hobbies"])) {
            $errorMsg["hobbies-error"] = "Select at leat one hobbie.";
            $inputOk = 0;
        } else {
            $hobbies = implode(",", $_POST["hobbies"]);
        }

        //PHOTO VALIDATION

        if (empty($_FILES["photo"]["name"])) {
            $errorMsg["photo-error"] = "Photo is required."; //photo not selected
            $inputOk = 0;
        } else {

            // photo check extension, size, image fake or not

            $target_dir = PHOTO_DIR; // where to store image
            $file_name = basename($_FILES["photo"]["name"]); //file name ex. image.jpg
            $photoExtension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // photo extension eg. jpg
            $unique_file_name = uniqid() . "." . $photoExtension; // new unique file name for avoid duplicate name.
            $target_file = $target_dir . $unique_file_name; // 
            $check_mime = getimagesize($_FILES["photo"]["tmp_name"]); //for photo is fake or not
            $extension = ["jpg", "jpeg", "png", "gif"];

            //for photo is fake or not
            if ($check_mime == "false") {
                $errorMsg["photo-error"] = "Please select valid photo.";
                $inputOk = 0;
            }
            //check photo extension
            if (!in_array($photoExtension, $extension)) {
                $errorMsg["photo-error"] = "Please select valid photo.";
                $inputOk = 0;
            }
            //check image size; less then 500kb 
            if ($_FILES["photo"]["size"] < 100000 || $_FILES["photo"]["size"] > 1024*1024*1024*3) {
                $errorMsg["photo-error"] = "Photo size must be in 100kb to 3mb.";
                $inputOk = 0;
            }
        }

    }
	
}

?>