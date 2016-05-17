<?php  

       	session_start();
?>


<!DOCTYPE HTML><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="images/splash/splash-icon-big.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 	media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen-six.png" media="(device-width: 375px)">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen-six-plus.png" media="(device-width: 414px)">
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />
<link rel="apple-touch-startup-image" sizes="1024x748" href="images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)" />
<link rel="apple-touch-startup-image" sizes="1536x2008" href="images/splash/splash-screen-ipad-portrait-retina.png"   media="(device-width: 768px)	and (orientation: portrait)	and (-webkit-device-pixel-ratio: 2)"/>
<link rel="apple-touch-startup-image" sizes="1496x2048" href="images/splash/splash-screen-ipad-landscape-retina.png"   media="(device-width: 768px)	and (orientation: landscape)	and (-webkit-device-pixel-ratio: 2)"/>

<title>Amlaac</title>

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
        <style type="text/css"> 
 
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF FOUR  */
.span_4_of_4 {
	width: 100%;
}
.span_3_of_4 {
	width: 74.6%;
}
.span_2_of_4 {
	width: 49.2%;
}
.span_1_of_4 {
	width: 23.8%;
 }

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 0% 0% 0% 0%; }
	.span_1_of_4  { width: 50%;
    height:220px;
    background:#ffffff; }
    .span_2_of_4 { width: 50%;
    height:220px;
    background:#27B2B9; }
        .span_3_of_4 { width: 50%;
    height:220px;
    background:#000000; }
        .span_4_of_4 { width: 50%;
    height:220px;
    background:#ffffff; }
}
            </style>
</head>
<body> 

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			يرجى الانتظار.....
            <em>جاري عرض البيانات...</em>
        </p>
 
    </div>
</div>
    
<?php include("language_selector.php")?>
<div class="header">
    <a href="#" class="main-logo"></a>
    <div class="header-controls">
        <a href="#" class="open-more"><i class="fa fa-navicon"></i></a>
        <a href="#" class="open-slide"><i class="fa fa-globe"></i></a>
      
    </div>
 
</div>
       
<div class="all-elements">
    <div class="snap-drawers">
 
            <div class="snap-drawer snap-drawer-left">
            <div class="sidebar-logo"></div>
            
            <div class="sidebar-divider">
                Navigation
            </div>
                                 
            <div class="sidebar-divider">
                by Arrowtec LLC 2016
            </div>
        </div>
        <div class="snap-drawer snap-drawer-right">
            <div class="sidebar-header">

         
            </div>
            <?php include("slider_ar.php");?>

    <!-- Page Content-->
    <div id="content" class="snap-content">
      <div style=" color:RED; direction:rtl; margin-right:20px"> 
</div>
<div class="section group">
    
      <div style="padding-left:20px; color:RED;background-color: mediumturquoise;">
      <?php echo   $_SESSION['fulname'];?>      <div style="float: right; padding-right:20px;font-size: 20px;" > أهلا بك</div>

</div>
	<a href="view_property_en.php"  >  
    <div class="col span_3_of_4">
    <img src="images/property.png" style="
        height: 60px;
        width: 60px;
        margin-left: 50px;
        margin-top: 50px;"/>
        <div style=" 
        margin-top: 10px;
        Color:WHITE;
        margin-left: 50px;">العقارات و الوحدات</div>
        </div>
 </a>
<a href="unit_detail_en.php" >        
	<div class="col span_2_of_4">
    <img src="images/unit.png" style="
    height: 60px;
    width: 60px;
    margin-left: 50px;
    margin-top: 50px;"/> 
    <div style=" 
    margin-top: 10px;
    Color:WHITE;
    margin-left: 70px;">Unit</div> 
 	</div>
</a>
<a href="lease_detail_en.php">  
	<div class="col span_2_of_4">
   <img src="images/lease.png" style="
    height: 60px;
    width: 60px;
    margin-left: 45px;
    margin-top: 40px;"/> 
    <div style=" 
    margin-top: 10px;
    Color:WHITE;
    margin-left: 55px;">عقود الإيجار</div>
 	</div>
</a>     
<a href="property_expense_ar.php">  
   	<div class="col span_3_of_4">
    <img src="images/property_exp.png" style="
    height: 60px;
    width: 60px;
    margin-left: 50px;
    margin-top: 40px;"/>
    <div style=" 
    margin-top: 10px;
    Color:WHITE;
    margin-left: 55px;">النفقات الملكية</div>
 	</div>
 </a>
 
 <a href="contact.php">  
    <div class="col span_3_of_4">   
   <img src="images/contact.png" style="
    height: 60px;
    width: 60px;
    margin-left: 40px;
    margin-top: 40px;"/>  
   <div style=" 
    margin-top: 10px;
    Color:WHITE;
    margin-left: 50px;">اتصال</div>
 	</div>
 </a>
 <a href="payment_ar.php" >  
	<div class="col span_2_of_4">
    <img src="images/payment.png" style="
    height: 60px;
    width: 60px;
    margin-left:50px;
    margin-top: 40px;"/> 
    <div style=" 
    margin-top: 10px;
    Color:WHITE;
    margin-left: 50px;">دفع</div>
 	</div>
</a>
</div>
</div>
</div>  
</body>

