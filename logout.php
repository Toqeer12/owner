<?php 
session_start();
if(session_destroy())
{
header("Location: index.php");
}
else
{
header("Location: ar_welcome.php");

}
?>
