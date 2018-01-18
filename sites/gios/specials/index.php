<?php
	include_once('../inc/config.php');
	$title = "Gios Bar And Grill | Specials";
	include_once(ROOT_PATH . 'inc/header.php');
?>
    <div class="gridContainer clearfix">
       <?php
	   		include_once(ROOT_PATH . 'inc/menu.php');
	   ?>
       		<noscript>
           	<h1>Please turn on Javascript!</h1>
            	<p>For the best possible experience!</p> 
           </noscript>
      <div id="specials">          
        <ul class="resp-tabs-list">
            <li>Monday</li>
            <li>Tuesday</li>
            <li>Wednesday</li>
            <li>Thursday</li>
            <li>Friday</li>
            <li>Saturday</li>
            <li>Sunday</li>
            <li>Cubs Games Special</li>
        </ul> 

        <div class="resp-tabs-container">                                                        
            <div>
               <p><span class="foodTitle">$3 Burger w/fries</span></p>
				 <p><span class="foodTitle">$4 Stella 16OZ Pints</span></p>
            </div>
            <div>   
                <p><span class="foodTitle">$5 Buffalo Chicken Sandwich w/Fries</span></p>
				  <p><span class="foodTitle">1/2 Price Bottles of Wine</span></p>
            </div>
            <div>
            	 <p><span class="foodTitle">$5 Super Nachos</span></p>
				 <p><span class="foodTitle">$4 Alpha King Pints</span></p>
            </div>
            <div>
            	 <p><span class="foodTitle">25¢ Jumbo Wings</span></p>
				 <p><span class="foodTitle">$4 Lagunitas IPA Pints</span></p> 
            </div>
            <div>
            	 <p><span class="foodTitle">$5 Vodka Energy Drinks</span></p>
               <p><span class="foodTitle">$6 Bombs</span></p>
               <p><span class="foodTitle">$10 Chef Special</span></p>
            </div>
            <div>
            	 <p>Serving Brunch 10am-2pm</p> 
               <p><span class="foodTitle">$2 Mimosas*</span></p>
               <p><span class="foodTitle">$4 Bloody Marys*</span><br>(*During Brunch Only and w/food Purchase)</p>
               <p><span class="foodTitle">$4 Jameson Shots!</span></p>
            </div>
            <div>
            	 <p>Serving Brunch 10am-2pm</p>
               <p><span class="foodTitle">$2 Mimosas*</span></p>
               <p><span class="foodTitle">$4 Bloody Marys*</span> <br> (*During Brunch Only and w/food Purchase)</p>
               <p><span class="foodTitle">$7.50 Spicy Chilaquiles</span></p>
            </div>
            <div>
            	<p><span class="foodTitle">$3.00 16 oz Old Style cans</span></p>
            </div>
        </div>
    </div> 
	</div>  
<?php
	include_once(ROOT_PATH . 'inc/footer.php');
?>