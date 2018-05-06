<?php
  require_once('header.php');
 ?>
     <div class="content5">
        <div class="header_order">
            <p>WE're COMMING FOR YOU <i class="fa fa-paper-plane-o" aria-hidden="true"></i></p>
        </div>
        <div class="content_order">
            <p style="color:white;background:#b9cebf;padding:20px;font-size:150%;">ADDRESS</p>
            <p style="color:white;background:#015416;padding:20px;font-size:150%;"><i class="fa fa-chevron-right" aria-hidden="true"></i> PAYMENT </p>
            <div id="hover_pay" style="background:orange;text-align:center;font-size:200%;padding-top:12px;" >
                <a href="done.php" style="color:white;"><p><i class="fa fa-check-circle-o" aria-hidden="true"></i> ORDER</p></a>
                
            </div>
            <div id="content_payment1" >
                <div class="cod" style="border:1px solid rgba(0,0,0,.1);">
                    <img src="img/ship_payment.png" style="width:150px;padding-left:20px;"></img>
                    <div style="padding:20px;">
                        <p>Payment on delivery <i class="fa fa-money" aria-hidden="true"></i></p>
                        <ul style="list-style-type:disc;text-indent:10px;font-style:italic;color:green;">
                            <li>Fast</li>
                            <li>Safe</li>
                            <li>Effective</li>
                        </ul>
                    </div>
                    
                </div>
                <div class="infor_pay" style="border:1px solid rgba(0,0,0,.1);">
                    <p style="padding:10px;border-bottom:1px solid rgba(0,0,0,.1);">Delivery address/payment <a href="order.php">Edit</a> </p> 
                    <div style="padding:10px;">
                        <p><strong>Name(you)</strong></p>
                        <p>/address/</p>
                        <p>Phone</p>
                    </div>
                </div>
                
            </div>
            <div id="content_order2" >
                <div class=delivery>
                    <p><strong>Order information</strong></p>
                    <p>(n products)</p>
                </div>
                <div class="order2">
                    <p>PRODUCTS</p>
                    <p>THE NUMBER OF</p>
                    <p>PRICE</p>
                </div>
                <div class="order2" style="background:white;">
                    <p>Name</p>
                    <p>n</p>
                    <p style="color:tomato;">$$$</p>
                    <p><strong>Delivery standard</strong></p>
                </div>
                <div class="order_free" style="background:rgba(0,0,0,0.1);padding:5px 0;">
                    <p>Advance</p>
                    <p style="color:tomato;">$$$</p>
                    <p style="color:green;font-style:italic;">Free shipping</p>
                    <p style="color:green;font-style:italic;">0</p>
                </div>
                <div class="order_free" style="padding:5px 0;">
                    <p style="font-size:200%;"><strong>TOTAL : </strong></p>
                    <p style="color:tomato;">$$$</p>
                    <p style="font-size:75%;">(VAT included)</p>
                </div>
                
            </div>
        </div>
         
         
     </div>
     
  <?php
	require_once('footer.php');
 ?>