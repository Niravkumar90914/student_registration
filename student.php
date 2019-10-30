<?php
/* CODE CREATED BY NIRAV PATEL 26 OCT 2019
 INSERT , UPDATE AND DELETE OPERATION 
 */

require_once("data_validation.php"); // if $inputOk = 1; all data are validate.
require_once("DBController.php");
$dbController = new DBController();
if ($dbController->error) {
	$errorMsg["database-error"] = $dbController->error;
}
switch ($action) {

	case "insert":
		if ($inputOk == 1) {
			if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
				$sql = "INSERT into student_master values(null, '$name', '$gender', '$dob', '$email', $mobile, '$state', '$city', '$address', '$hobbies', '$unique_file_name', null)";
				if ($dbController->insertData($sql) == false) {
					$errorMsg["other_error"] = "Unable to insert data.";
					unlink($target_file); //remove uploaded file if failed to insert data.
				} else {
					echo json_encode(["status" => "success", "message" => "Data has been succefully submitted"]);
				}
			} else {
				$errorMsg["other_error"] = "Image upload failed.";
			}
		}
		break;
	case "update":

		break;
	case "delete":

		break;
	case "display_student_data":
		$data = $dbController->getDataQuery("SELECT * from student_master");
		if (!empty($data)) {
			
			echo json_encode($data);
		}
		
		break;
	default:
		echo json_encode(["status" => "error", "message" => $errorMsg]);
}
