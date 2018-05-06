
<?php
  require_once('header.php');
 ?>

 <div class="content3">
    <div class="header_cart">        
        <p>MY SHOPPING CART <i class="fa fa-shopping-cart" aria-hidden="true"></i></p>     
    </div>
    <div class="cart">
          <p><i class="fa fa-check-circle" aria-hidden="true"></i></i> 1 product added to your cart</p>
          <img src="img/sanpham.jpg" alt="day la san pham">
          <div id="name_cart">
            <p>Name</p>
            <p style="color:red;">Cost</p>
          </div>

    </div>
    <div class="cart_cost">
          <p><strong>My Cart</strong>  ( n products ) <a href="cart2.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></p>
          <h4>Provisional : </h4>
          <h3>$$$$</h3>
          <div id="order">
              <p>Sumary : </p>
              <h3>$$$$$</h3>
              <a href="order.php"><input type="submit" value="ORDER" style="border: none; width: 150px; background: tomato;padding: 10px; color:white;"></a>
          </div>
    </div>
    <div class="related">
            
    </div>

 </div>


<?php
	require_once('footer.php');
 ?>