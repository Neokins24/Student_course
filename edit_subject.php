<?php
	session_start();
	include_once('database.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injectio
            $sql = $db->prepare("UPDATE subject SET subject_code = :subject_code, course_id = :course_id, course_description = :course_description, total_units = :total_units, with_lab_component = :with_lab_component WHERE id = :subjectid");  
			//bind                 
            $sql->bindParam(':subject_code', $_POST['subject_code']);       
            $sql->bindParam(':course_id', $_POST['course_id']);    
            $sql->bindParam(':course_description', $_POST['course_description']);
            $sql->bindParam(':total_units', $_POST['total_units']);    
            $sql->bindParam(':with_lab_component', $_POST['with_lab_component']);    
            $sql->bindParam('subjectid', $_GET['id'], PDO::PARAM_INT);   
			$_SESSION['message'] = ( $sql->execute()) ? 'Subject have updated successfully' : 'Something went wrong. Cannot update subject.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: index.php');
	
?>