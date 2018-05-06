<?php
  require_once('header.php');
 ?>
     <div class="content5">
        <div class="header_order">
            <p>WE're COMMING FOR YOU <i class="fa fa-paper-plane-o" aria-hidden="true"></i></p>
        </div>
        <div class="content_order">
            <p style="color:white;background:#015416;padding:20px;font-size:150%;"><i class="fa fa-chevron-right" aria-hidden="true"></i> ADDRESS </p>
            <p style="color:white;background:#b9cebf;padding:20px;font-size:150%;">PAYMENT</p>
            <div id="content_order1" >
                <div class="delivery">
                    <p id="p_left"><strong>Delivery address of the customer</strong></p>
                    <a href="signin.php"><p id="p_right" style="color:blue;font-size:80%;">Log in to order</p></a>
                </div>
                <div class="address">
                    <p>Email :</p><input type="text" name="" placeholder="Please enter your email"/>
                    <p>Name :</p><input type="text" name="" placeholder="They & name"/>
                    <p>Province/city :</p><select name="" id=""></select>
                    <p>County/district :</p><select name="" id=""></select>
                    <p>Ward / commune :</p><select name="" id=""></select>
                    <p style="text-indent: 50px;">Consignee address:</p><input type="text" name="" placeholder="They & name"/>
                    <p>Mobile phone :</p><input type="text" name="" placeholder="Phone number"/>
                    <div id="form_address">
                        <p><strong>Deliver information</strong></p>
                        <p>Delivery standard: free</p>
                        <p>From Wednesday 1 - Friday, 3 October 11 2017</p>
                        <a href="order_payment.php"><input type="submit" name="" value="CONTINUE" style="color:white;background:tomato;border:none;padding:20px 50px;margin:15px 30px 0px 0px;"/></a>
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