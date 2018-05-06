<?php
  require_once('header.php');
 ?>
  
 <div class="content4">
  <div id="header_cart">        
        <p>MY SHOPPING CART <i class="fa fa-shopping-cart" aria-hidden="true"></i></p>     
    </div>
   
   <div class="cart2">
      <div id="p"><a href="shop.php"><p><i class="fa fa-chevron-left" aria-hidden="true"></i> Continue</p></a></div>
      <div class="cart_2">
           <div class="my_cart">
              <p id="p_mycart"><strong>My Shopping Cart</strong></p>
              <p id="p_pro">n products</p>
              <p id="p_cost">Price</p>
              <p id="p_amount">Number</p>
              <img id="img_pro" src="img/sanpham.jpg" alt="">
              <div id="p_npro">
                  <p>Name</p>
                  <p style="font-size:85%;color:tomato;"><i>Only n left in stock</i></p>
              </div>
              <p id="p_dolar">$$$</p>
              <div>
                  <i class="fa fa-minus-square" aria-hidden="true"></i>
                   <input style="width:40px;" type="text" name="" placeholder="n"/>
                  <i class="fa fa-plus-square" aria-hidden="true"></i>
              </div>
             
              
          </div>
              <div class="info_cart">
                  <p id="infor1">PRODUCT INFORMATION</p>
                  <p id="infor2">Provisional :</p>
                  <p id="cost1">$$$</p>
                  <p id="infor3">Total :</p>
                  <p id="cost2">$$$</p>
                  <a href="order.php"><button style="border:none;padding:20px;background:tomato;color:white;">CARRY OUT PAYMENT</button>
          </div></a>
      </div>
     
   </div>

 </div>


<?php
	require_once('footer.php');
 ?>