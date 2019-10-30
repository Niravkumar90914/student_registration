<?php 
include("DBController.php");
$dbcon = new DBController();
$data = $dbcon->getDataQuery("SELECT student_name from student_master");
		if (!empty($data)) {
           echo json_encode($data);
            
		
		}
		
?>