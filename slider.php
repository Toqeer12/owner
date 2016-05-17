<?php 
 include 'raw_file.php';

?>

 
<link href="https://file.myfontastic.com/ZSnddKnFtxCstKLTvA9YaU/icons.css" rel="stylesheet">
        <!-- <div class="sidebar-logo"></div>-->
          <img src="<?php echo logo()?>" alt="" style="   background-repeat:no-repeat;
    width:160px;
    height:180px;
    background-size:160px 180px;
    margin-top:30px;
    margin-bottom:30px;
    margin-left:55px;"/>
    
    <div style="margin-left:80px; font-size:20px;margin-bottom: 10px;margin-top: -20px;"><?php  
    echo companyname();?></div>
    
           <ul class="sidebar-navigation">
           

  <div class="sidebar-divider"  align="center" >
               Main Menu
            </div> 
          
            <ul class="sidebar-navigation">
                <li><a href="view_property_en.php"><i class="icon-amlac-gateway-properties"></i>Property Detail<i class="fa fa-caret-right"></i></a></li>
                <li><a href="unit_detail_en.php"><i class="icon-amlac-gateway-unit"></i>Unit Detail<i class="fa fa-caret-right"></i></a></li>
                <li><a href="lease_detail_en.php"><i class="icon-amlac-gateway-contact-leaser"></i>Lease Detail<i class="fa fa-caret-right"></i></a></li>
            </ul>
            
            <div class="sidebar-divider" align="center" >
                Support
            </div>
            
            <ul class="sidebar-navigation">
                <li><a href="view_client_en.php"><i class="icon-amlac-gateway-property-expense"></i>Properties Expense<i class="fa fa-caret-right"></i></a></li>
                <li><a href="#"><i class="icon-amlac-gateway-payment"></i>Payment<i class="fa fa-caret-right"></i></a></li>    
                <li><a href="#"><i class="icon-amlac-gateway-history"></i>History<i class="fa fa-caret-right"></i></a></li>    
                <li><a href="contact_en_main.php"><i class="fa fa-envelope-o"></i>Contact<i class="fa fa-caret-right"></i></a></li>
                <li><a href="logout.php"><i class="fa fa-mobile"></i>Logout<i class="fa fa-caret-right"></i></a></li>
            </ul>
            
           
             <div class="sidebar-divider" align="center" >
                by Arrowtec LLC 2016
            </div>
        </div>
    </div>
           </ul>