<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>Responsive Table</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
		td:nth-of-type(1):before { content: "First Name"; }
		td:nth-of-type(2):before { content: "Last Name"; }
		td:nth-of-type(3):before { content: "Job Title"; }
		td:nth-of-type(4):before { content: "Favorite Color"; }
		td:nth-of-type(5):before { content: "Wars of Trek?"; }
		td:nth-of-type(6):before { content: "Porn Name"; }
		td:nth-of-type(7):before { content: "Date of Birth"; }
		td:nth-of-type(8):before { content: "Dream Vacation City"; }
		td:nth-of-type(9):before { content: "GPA"; }
		td:nth-of-type(10):before { content: "Arbitrary Data"; }
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
	<!--<![endif]-->

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
    
    
 <!--<div class="header">
    <a href="#" class="main-logo"></a>
    <div class="header-controls">
        <a href="#" class="open-more"><i class="fa fa-envelope"></i></a>
        <a href="#" class="open-slide"><i class="fa fa-star"></i></a>
        <a href="#" class="open-menu"><i class="fa fa-navicon"></i></a>
    </div>-->
<div class="header">
    <a href="#" class="main-logo"></a>
    <div class="header-controls">
        <a href="#" class="open-menu"><i class="fa fa-navicon"></i></a>
        <a href="#" class="open-slide"><i class="fa fa-globe"></i></a>
      
    </div>
</div>
       
<div class="all-elements">
    <div class="snap-drawers">
        <!-- Left Sidebar -->
        <div class="snap-drawer snap-drawer-left">
            
<!--            <div class="sidebar-header">
                <a href="#"><i class="fa fa-phone"></i></a>
                <a href="#"><i class="fa fa-comment"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-times"></i></a>                
            </div>-->
            
            
            <div class="sidebar-divider"  align="center" >
                Welcome
            </div>     
            
            <ul class="sidebar-navigation">
                <li><a href="en_welcome.php"><i class="fa fa-home"></i>Back to Main Page<i class="fa fa-caret-right"></i></a></li>
            </ul>
  
        </div>
    </div>
      </div>
	  </div>
    
    <div id="content" class="snap-content">
	<div id="page-wrap">



    
	<table>
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Job Title</th>
			<th>Favorite Color</th>
			<th>Wars or Trek?</th>
			<th>Porn Name</th>
			<th>Date of Birth</th>
			<th>Dream Vacation City</th>
			<th>GPA</th>
			<th>Arbitrary Data</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>James</td>
			<td>Matman</td>
			<td>Chief Sandwich Eater</td>
			<td>Lettuce Green</td>
			<td>Trek</td>
			<td>Digby Green</td>
			<td>January 13, 1979</td>
			<td>Gotham City</td>
			<td>3.1</td>
			<td>RBX-12</td>
		</tr>
		<tr>
		  <td>The</td>
		  <td>Tick</td>
		  <td>Crimefighter Sorta</td>
		  <td>Blue</td>
		  <td>Wars</td>
		  <td>John Smith</td>
		  <td>July 19, 1968</td>
		  <td>Athens</td>
		  <td>N/A</td>
		  <td>Edlund, Ben (July 1996).</td>
		</tr>
		<tr>
		  <td>Jokey</td>
		  <td>Smurf</td>
		  <td>Giving Exploding Presents</td>
		  <td>Smurflow</td>
		  <td>Smurf</td>
		  <td>Smurflane Smurfmutt</td>
		  <td>Smurfuary Smurfteenth, 1945</td>
		  <td>New Smurf City</td>
		  <td>4.Smurf</td>
		  <td>One</td>
		</tr>
		<tr>
		  <td>Cindy</td>
		  <td>Beyler</td>
		  <td>Sales Representative</td>
		  <td>Red</td>
		  <td>Wars</td>
		  <td>Lori Quivey</td>
		  <td>July 5, 1956</td>
		  <td>Paris</td>
		  <td>3.4</td>
		  <td>3451</td>
		</tr>
		<tr>
		  <td>Captain</td>
		  <td>Cool</td>
		  <td>Tree Crusher</td>
		  <td>Blue</td>
		  <td>Wars</td>
		  <td>Steve 42nd</td>
		  <td>December 13, 1982</td>
		  <td>Las Vegas</td>
		  <td>1.9</td>
		  <td>Under the couch</td>
		</tr>
		</tbody>
	</table>
	
	</div>
		</div>
</body>

</html>