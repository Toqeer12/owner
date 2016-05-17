<?php
 include 'connect.php';
 


function logo()
{
    		$sql= "SELECT * From images_tbl where cid='".$_SESSION['real_state']."'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['images_path'];
                 }
        }
    
    
    
    
}

function companyname()
{
    		$sql= "SELECT * From registration where id='".$_SESSION['real_state']."'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
                    echo $member['comp_name'];
                 }
        }
    
    
    
    
}
function propertyDetail($var)
{   
    global $array2;
    		$sql= "SELECT * From add_property where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2[]=$member;
                        }                  
                 }
        }
        return $array2;
    
    
    
    
}





function propertytype($id)
{
    global $array6;
        $sql= "SELECT * From property_type Where  id='$id' ";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                 while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array6 =$member['prop_type'];
                    }
                 }
        }
        return $array6;
    
}

function clientDetail($var)
{
 global $array;
        $sql= "SELECT  * From clients Where id='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array=$member['real_name'];
                    }
                 }
        }
      return  $array;
    
    
}

function viewpropertyUnit($ownerId,$propid,$cid)
{
    global $array7;
        $sql= "SELECT count(*) id From real_state_unit Where owner_id='$ownerId' And property_name='$propid' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array7=$member['id'];
                        }
                 }
        }
        return $array7;
    
}

function  Unitdetail($cid)
{
    global $array8;
        $sql= "SELECT * From real_state_unit Where cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array8[]=$member;
                        }
                 }
        }
        return $array8;
    
}



function propertyName($var)
{   
    global $array2;
    		$sql= "SELECT * From add_property where id='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2=$member['propty_name'];
                        }                  
                 }
        }
        return $array2;
    
    
    
    
}

function LeaseDetail($var)
{   
    global $array2;
    		$sql= "SELECT * From rent_property where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2[]=$member;
                        }                  
                 }
        }
        return $array2;
    
    
    
    
}
function clientDetail2($var)
{
 global $array;
        $sql= "SELECT  * From clients Where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   while($member  = mysql_fetch_assoc($result))
                    {
                        
                    
                            $array[]=$member;
                    }
                 }
        }
      return  $array;
    
    
}
function Ownerdetail($var)
{
        global $array2,$array3;
    		$sql= "SELECT DISTINCT owner_id,cid From add_property where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2=$member['owner_id'];
                            
                                    $sql= "SELECT  * From clients Where id='$array2'";   
                                    $result2=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

                                    if($result2) 
                                    {
                                        if(mysql_num_rows($result2) > 0)
                                            {
                                                while($member2  = mysql_fetch_assoc($result2))
                                                {
                                                    
                                                
                                                        $array3[]=$member2;
                                                }
                                            }
                                    }
                        }                  
                 }
        }
        return $array3;
}
function Renterdetail($var)
{
        global $array2,$array3;
    		$sql= "SELECT DISTINCT owner,cid From rent_property where cid='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2=$member['owner'];
                            
                                    $sql= "SELECT  * From clients Where id='$array2'";   
                                    $result2=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

                                    if($result2) 
                                    {
                                        if(mysql_num_rows($result2) > 0)
                                            {
                                                while($member2  = mysql_fetch_assoc($result2))
                                                {
                                                    
                                                
                                                        $array3[]=$member2;
                                                }
                                            }
                                    }
                        }                  
                 }
        }
        return $array3;
}
function propertyDetailOwner($var,$cid)
{   
    global $array2;
    		$sql= "SELECT * From add_property where cid='$cid' AND owner_id='$var'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2[]=$member;
                        }                  
                 }
        }
        return $array2;
    
    
    
    
}

function  Unitdetailowner($owner,$cid)
{
    global $array8;
        $sql= "SELECT * From real_state_unit Where owner_id='$owner' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
		 if(mysql_num_rows($result) > 0)
                {
                        while($member  = mysql_fetch_assoc($result))
                        {
                        
                    
                            $array8[]=$member;
                        }
                 }
        }
        return $array8;
    
}


function LeaseDetailOwner($owner,$cid)
{   
    global $array2;
    		$sql= "SELECT * From rent_property where owner='$owner' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2[]=$member;
                        }                  
                 }
        }
        return $array2;
    
    
    
    
}

function PropertyExpense($owner,$cid)
{   
    global $array2;
    		$sql= "SELECT * From property_expense where owner_id='$owner' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2[]=$member;
                        }                  
                 }
        }
        return $array2;
    
    
    
    
}

function Payment($owner,$cid)
{   
    global $array2;
    		$sql= "SELECT * From paid_amount where owner_id='$owner' And cid='$cid'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2[]=$member;
                        }                  
                 }
        }
        return $array2;
}

function GetAgentEmail()
{   
    global $array2;
    		$sql= "SELECT * From registration where Id='".$_SESSION['real_state']."'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2=$member['email'];
                        }                  
                 }
        }
        return $array2;
}
function GetAgentName()
{   
    global $array2;
    		$sql= "SELECT * From registration where Id='".$_SESSION['real_state']."'";   
		$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                   While($member  = mysql_fetch_assoc($result))
                      {
                            $array2=$member['full_name'];
                        }                  
                 }
        }
        return $array2;
}
?>