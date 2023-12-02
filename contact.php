<?php
if(isset($_POST['submit'])){
	   
	include('includes/connection.php');

		            $lname=$_POST['name'] ;
					$lemail=$_POST['email'];
					$lmessage=$_POST['message'];
					
                    $query= "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$lname', '$lemail', '$lmessage')";
	$query_run = mysql_query($query);
			if($query_run)
			{
				$success_msg = "message is sent.";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index.php';
					</SCRIPT>");
			}
					}

?>