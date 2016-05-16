           <?php 
include 'raw_file.php';

?>

<link href="https://file.myfontastic.com/ATjsLZgCiy8iWYz4pGBPXa/icons.css" rel="stylesheet">       
          
                    <img src="<?php echo logo()?>" alt="" style="   background-repeat:no-repeat;
    width:160px;
    height:180px;
    background-size:160px 180px;
    margin-top:30px;
    margin-bottom:30px;
    margin-left:55px;"/>
              <div style="margin-left:80px; font-size:20px; margin-bottom: 10px;margin-top: -20px;"><?php  
    echo $_SESSION['company'];?></div>
             <div class="sidebar-divider"  align="center" >
                الطلبات و المشتريات
            </div>     
            
            <ul class="sidebar-navigation">
                <li><a href="view_property_ar.php"><i class="icon-amlac-gateway-properties"></i>العقارات و الوحدات<i class="fa fa-caret-right"></i></a></li>
                <li><a href="unit_detail_ar.php"><i class="icon-amlac-gateway-unit"></i>تتبع الشحنة<i class="fa fa-caret-right"></i></a></li>
                <li><a href="lease_detail_ar.php"><i class="icon-amlac-gateway-contact-leaser"></i>عقود الإيجار<i class="fa fa-caret-right"></i></a></li>
            </ul>
            
            <div class="sidebar-divider" align="center" >
                سوق السمك
            </div>
            
            <ul class="sidebar-navigation">
                <li><a href="view_property_ar.php"> <i data-icon="a"></i>أسعار السوق اليوم<i class="fa fa-caret-right"></i></a></li>
                <li><a href="#">                    <i class="icon-amlac-gateway-notifications"></i>الإشعارات <i class="fa fa-caret-right"></i></a></li>
                <li><a href="contact.php"><i class="fa fa-envelope-o"></i>تواصل معنا<i class="fa fa-caret-right"></i></a></li>
                <li><a href="support_ar.php"><i data-icon="m"></i>الدعم الفني <i class="fa fa-caret-right"></i></a></li>
                <li><a href="logout.php"><i class="fa fa-mobile"></i>تسجيل الخروج<i class="fa fa-caret-right"></i></a></li>
                
            </ul>
            
           
             <div class="sidebar-divider" align="center" >
                by Arrowtec LLC 2016
            </div>
        </div>
    </div>
    