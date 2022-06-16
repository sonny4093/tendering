<?php
	include ("../../config.php");

if (isset($_REQUEST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $id=$_REQUEST['id'];
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../tender document/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {
        echo '<div class="error">You file extension must be  .pdf </div>';
    } elseif ($_FILES['myfile']['size'] > 1000000000) { // file shouldn't be larger than 1Megabyte
        echo '<div class="error">file is too larger!</div>';
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
     
            $sql = "UPDATE  new set  file_name='$filename' WHERE id='$id'";
            if (mysqli_query($db, $sql)) {
                echo '<div class="success"><strong>Success!</strong><w> Tender document uploaded successfully.</div>
		<style type="text/css">
		.employeeinfo, .form {
			display: none;
		}
	</style>
		';

            }
        } else {
            echo '<div class="error"><strong>Error!</strong><w>Failed to upload file please check file size or type..</div>';
        }
    }
}
	 
	?>	
