<?php
			session_start();

require('connect.php');

 
if(isset($_POST['contactEmailField'])&&isset($_POST['contactPasswordField']))
{
 
$Username=htmlspecialchars(trim($_POST['contactEmailField']));
$Password=htmlspecialchars(trim($_POST['contactPasswordField']));
  
$encry=md5($Password);
 
	if(!empty($Username)&&!empty($Password))
		{ 
 
			$sql= "SELECT * From clients WHERE email='$Username' AND password='$encry'";   
			$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			if($result)
				 {	 
					 if(mysql_num_rows($result) > 0) 
						{
							 
											$member = mysql_fetch_assoc($result);
								$_SESSION['user'] = $member['email'];
								$_SESSION['Id'] = $member['id'];
								$_SESSION['fulname'] = 		  $member['real_name'];
								$_SESSION['real_state'] = $member['cid'];
 					 			header("location: ar_welcome.php");
						}
						
					 else 
						{
						?>
 
								<?php
											$errmsg_arr[] = 'user name and password not found';
											$errflag = true;
											if($errflag)
											{
												$_SESSION['message'] = 'User Name or Password is invalid!';
												header("location: index.php");
												exit();
											}
		 
						}
				 }	
		}
}
 
 
?>
