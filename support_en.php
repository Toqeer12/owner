<?php session_start();?>

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

<title>Fish Market</title>

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
 
            <?php  include("slider.php"); ?>

            
       
            

            
 
            
           
            
       
            
           
       
        </div>
    </div>
  
    <div id="content" class="snap-content">

        


        <div class="content">
            <div class="decoration"></div>
            <div class="one-half-responsive">
                <h4>Send Email!</h4>
                 <div class="container no-bottom">
                    <div class="contact-form no-bottom"> 
                        <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                            <div class="big-notification green-notification">
                                <h3 class="uppercase">Message Sent </h3>
                                <a href="#" class="close-big-notification">x</a>
                                <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                            </div>
                        </div>

                        <form action="php/contact1.php" method="post" class="contactForm" id="contactForm">
                            <fieldset>
                                <div class="formValidationError" id="contactNameFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Name is required!</p>
                                    </div>
                                </div>             
                                <div class="formValidationError" id="contactEmailFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address required!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactEmailFieldError2">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address must be valid!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactMessageTextareaError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Message field is empty!</p>
                                    </div>
                                </div>   
                                <div class="formFieldWrap">
                                    <label class="field-title contactNameField" for="contactNameField">Name:<span>(required)</span></label>
                                    <input type="text" name="contactNameField" value="Amlac" class="contactField requiredField" id="contactNameField" readonly/>
                                </div>
                                <div class="formFieldWrap">
                                    <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span></label>
                                    <input type="text" name="contactEmailField" value="contact@arrowtec.ae" class="contactField requiredField requiredEmailField" id="contactEmailField" readonly/>
                                </div>
                                <div class="formTextareaWrap">
                                    <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span></label>
                                    <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                                </div>
                                <div class="formSubmitButtonErrorsWrap">
                                    <input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                                </div>
                            </fieldset>
                        </form>       
                    </div>
                </div>
            </div>
            <div class="decoration hide-if-responsive"></div>
            <div class="one-half-responsive last-column">
                <div class="container no-bottom">

                </div>            
            </div>
            <div class="decoration"></div>
        </div>
 
 
    </div>
    
 
    
</div>

</body>

