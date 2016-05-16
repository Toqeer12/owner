<?php session_start();?>
<!DOCTYPE HTML><head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">
 
 
<title>Fish Market</title>

<link rel="stylesheet" href="css2/style.css">
<link href="styles/style.css"     		 rel="stylesheet" type="text/css">
<link href="styles/framework.css" 		 rel="stylesheet" type="text/css">
<link href="styles/owl.theme.css" 		 rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"		 rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"	 rel="stylesheet" type="text/css">
<link href="styles/animate.css"			 rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/framework.plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
 

	<!--[if !IE]><!-->
 	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -7777px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 85%; 
			padding-right: 5px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		
		td:nth-of-type(1):before { content: "Sr #"; }
		td:nth-of-type(2):before { content: "Property Name"; }
		td:nth-of-type(3):before { content: "Property Type"; }
		td:nth-of-type(4):before { content: "Year Build"; }
		td:nth-of-type(5):before { content: "Block No"; }
		td:nth-of-type(6):before { content: "About Him"; }
		td:nth-of-type(7):before { content: "Owner Name"; }
		td:nth-of-type(8):before { content: "Instrument #"; }
		td:nth-of-type(9):before { content: "No of Units"; }
	  }
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 420px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	
	</style>
</head>
<body> 

<div id="preloader">
	<div id="status">
<!--    	<p class="center-text">
			يرجى الانتظار.....
            <em>جاري عرض البيانات...</em>
        </p>-->
        <p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>
    
    
<?php include("language_selector.php")?>
<!--<div class="header">
    <a href="#" class="main-logo"></a>
    <div class="header-controls">
        <a href="#" class="open-more"><i class="fa fa-envelope"></i></a>
        <a href="#" class="open-slide"><i class="fa fa-star"></i></a>
        <a href="#" class="open-menu"><i class="fa fa-navicon"></i></a>
    </div>-->


<div class="all-elements">
    <div class="snap-drawers">
        <!-- Left Sidebar -->
        <div class="snap-drawer snap-drawer-left">
            
 
            
            <div class="sidebar-divider"  align="center" >
                Welcome
            </div>     
            
            <ul class="sidebar-navigation">
                <li><a href="en_welcome.php"><i class="fa fa-home"></i>Back to Main Page<i class="fa fa-caret-right"></i></a></li>
            </ul>
            <?php include("slider.php")?>
 
        </div>
    </div>
      </div>
	  </div>
    
    <!-- Page Content-->
    <div id="content" class="snap-content">

		
		<div style="margin-top:30px; padding-top:10px; text-align:center; height:40px; background:#27B2B9;Color:#000000;">Property Details </div>
		
	<div id="page-wrap">



    
	<table>
		<thead>
 
		</thead>
		<tbody>
		
			
			<?php 
			$var = $_SESSION['Id'];
			$propertyDetail =propertyDetail($var);
		
			for($i=0; $i<count($propertyDetail); $i++)
			{
			?>
			<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $propertyDetail[$i]['propty_name'];?></td>
			<td><?php echo propertytype($propertyDetail[$i]['property_type']); ?></td>
			<td><?php echo $propertyDetail[$i]['year_build'];?></td>
			<td><?php echo $propertyDetail[$i]['block_no'];?></td>
			<td><?php echo $propertyDetail[$i]['about_him'];?></td>
			<td><?php echo clientDetail($propertyDetail[$i]['owner_id']);?></td>
			<td><?php echo $propertyDetail[$i]['inst_no'];?></td>			
	        <td><?php echo viewpropertyUnit($propertyDetail[$i]['owner_id'],$propertyDetail[$i]['id'],$var);?></td>	
		</tr>
		 <?php }?>
		</tbody>
	</table>
	
	</div>
		</div>
		

 
 
 
  
</body>

