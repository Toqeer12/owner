<?php
			session_start();

require('connect.php');

 
if(isset($_POST['contactEmailField'])&&isset($_POST['contactPasswordField']))
{
 
$Username=htmlspecialchars(trim($_POST['contactEmailField']));
$Password=htmlspecialchars(trim($_POST['contactPasswordField']));
$type=$_POST['type'];
 
$encry=md5($Password);
 
	if(!empty($Username)&&!empty($Password))
		{ 
 
			$sql= "SELECT * From registration WHERE email='$Username' AND pin='$encry' And type='rs'";   
			$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
			if($result)
				 {	 
					 if(mysql_num_rows($result) > 0) 
						{
							 
								$member = mysql_fetch_assoc($result);
								$_SESSION['user'] = $member['email'];
								$_SESSION['Id'] = $member['Id'];
								$_SESSION['fulname'] = 		  $member['full_name'];
								$_SESSION['company'] =$member['comp_name'];
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
