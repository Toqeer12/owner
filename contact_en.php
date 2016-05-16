<?php
session_start();
include("connect.php");
include("raw_file.php");
$vartype = $_GET['id'];
?>

<div id="page-wrap">
  
	<table>
		<thead>
 
		</thead>
		<tbody>
		
			
			<?php 
            if($vartype==1)
            {
                
            
			$var = $_SESSION['Id'];
			$propertyDetail =Ownerdetail($var);
		
			for($i=0; $i<count($propertyDetail); $i++)
			{
			?>
			<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $propertyDetail[$i]['real_name'];?></td>
 			<td><?php echo $propertyDetail[$i]['emi_id'];?></td>
			<td><?php echo $propertyDetail[$i]['mob_no'];?></td>
			<td><a href="contact_email_en.php?id=<?php echo $propertyDetail[$i]['email'];?>&name=<?php echo $propertyDetail[$i]['real_name'];?>"><?php echo $propertyDetail[$i]['email'];?></a></td>
			<td><?php echo $propertyDetail[$i]['resi_address'];?></td>
			<td><?php echo $propertyDetail[$i]['sponsor'];?></td>		
            <td><?php echo $propertyDetail[$i]['vendor'];?></td>		
			<td><?php echo $propertyDetail[$i]['notes'];?></td>		

 		</tr>
		 <?php }
         
         
            }
            else {
        	$var = $_SESSION['Id'];
			$propertyDetail =Renterdetail($var);
		
			for($i=0; $i<count($propertyDetail); $i++)
			{
			?>
		<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $propertyDetail[$i]['real_name'];?></td>
 			<td><?php echo $propertyDetail[$i]['emi_id'];?></td>
			<td><?php echo $propertyDetail[$i]['mob_no'];?></td>
			<td><a href="contact_email_en.php?id=<?php echo $propertyDetail[$i]['email'];?>&name=<?php echo $propertyDetail[$i]['real_name'];?>" ><?php echo $propertyDetail[$i]['email'];?></a></td>
			<td><?php echo $propertyDetail[$i]['resi_address'];?></td>
			<td><?php echo $propertyDetail[$i]['sponsor'];?></td>		
            <td><?php echo $propertyDetail[$i]['vendor'];?></td>		
			<td><?php echo $propertyDetail[$i]['notes'];?></td>		

 		</tr>
           <?php }
            }?>
		</tbody>
	</table>
	
	</div>