<?php 
function email_exists($email,$con)
{
 $row=mysqli_query($con,"SELECT id FROM users WHERE mail='$email'");
 //print_r($row);
 {
 	if(mysqli_num_rows($row)==1)
 	{
 		return true;
 	}
 	else
 	{
 		ret urn false;
 	}
 }	 
}

function logged_in()
{
if($_SESSION['mail']=='' || $_COOKIE['name']=='')
{
	return true;
}
else {
	return false;
}	
}






?>