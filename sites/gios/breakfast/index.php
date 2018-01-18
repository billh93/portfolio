<?php
	include_once('../inc/config.php');
	$title = "Gios Bar And Grill | Breakfast";
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
      <div id="breakfast">          
        <ul class="resp-tabs-list">
            <li>Eggs</li>
            <li>Pancakes and French Toast</li>
            <li>Brunch Cocktails</li>
            <li>Hot Sides</li>
            <li>Beverages</li>
        </ul> 

        <div class="resp-tabs-container">                                                        
            <div>
                <span>Eggs are served with O’Brian potatoes and toast* <br> substitute egg whites $1.00</span>

                 <p><span class="foodTitle">Eggs Any Style $5.50</span> <br> Two eggs any way you like ’em.</p>
     
                <p><span class="foodTitle">Garden Omelet $8.00</span><br> Mushrooms, green peppers, onions, tomatoes, and Swiss cheese.
                 
                <p><span class="foodTitle">Santa Fe Omelet $8.50</span><br> Spicy Southwestern omelet with cilantro, tomatoes, jalapeño cheese and a side of chipotle sauce.</p>
                 
                <p><span class="foodTitle">GIO’s Omelet $8.50</span><br> Honey-basted ham, spinach and cheddar cheese. </p>
                 
                <p><span class="foodTitle">French Omelet $8.00</span> <br> Gruyere cheese, spinach and crispy bacon.</p>
                 
                <p><span class="foodTitle">Ham And Cheese Omelet $8.50</span></p>
                 
                <p><span class="foodTitle">Denver Omelet $8.00</span><br> Ham, green peppers and onions. </p>
                 
                <p><span class="foodTitle">Vegetable Frita $8.00</span> <br> Fluffy baked fritata with potatoes, tomatoes, onions, mushroom, green pepper, and mozzarella.</p>
                 
                <p><span class="foodTitle">Breakfast Burrito $8.00</span><br> Scrambled eggs with sausage, onions, tomatoes, cilantro, cheese, potatoes and a side of homemade sauce.</p>
                 
                <p><span class="foodTitle">Steak And Eggs $12.00</span><br> 8 oz. grilled juicy skirt steak with two eggs any style.</p>
                 
                <p><span class="foodTitle">Spicy Chilaquiles $8.50</span><br> Spicy red salsa, queso fresco, red onions, sour cream then topped with two eggs over easy.</p>
                 
                <p><span class="foodTitle">Mexican Skillet $8.50</span><br> Scrambled eggs with chorizo, potatoes, queso fresco, jalapeño peppers, onions, tomatoes and cilantro.</p>
            </div>
            <div>
            	<span>*Served with fresh fruit</span>
               <p><span class="foodTitle">French Toast $7.50 </span><br> Brioche French toast dusted with powdered sugar.</p>
				<p><span class="foodTitle">GIO’s French Toast $8.00 </span><br> Classic French toast with one egg and sausage or bacon. </p> 
               <p><span class="foodTitle">Classic Pancakes $6.00 </span><br> Dusted with powdered sugar and served with maple syrup. <br> Add strawberry compote $1.50</p>
            </div>
            <div>
            	<span class="foodTitle">Mimosa $5.00 ($2.00 w food purchase)</span><br> 
              <span>Fresh O.J. & Sparkling Wine<span><br>
              <span class="foodTitle">Irish Coffee $5.50</span><br>
              <span class="foodTitle">Bloody Mary $6.00</span>
            </div>
            <div>
            	<span class="foodTitle">Short Stack Pancakes $4.00</span><br>
              <span class="foodTitle">Short Stack French Toast $4.00</span><br>           
              <span class="foodTitle">Bacon $2.00</span><br>           
              <span class="foodTitle">Sausage $2.00</span><br>           
              <span class="foodTitle"> O'Brian Potatoes $3.00</span><br>             
              <span class="foodTitle">Toast-White, Wheat or English Muffin $2.00</span>
            </div>
            <div>
            	<span class="foodTitle">Coffee $2.00</span><br>
              <span class="foodTitle">Tea $2.00</span><br>      
              <span class="foodTitle">Juice $2.50</span><br>          
              <span class="foodTitle">Sodas $2.00</span><br>       
              <span class="foodTitle">Energy Drink $3.00</span><br>        
              <span class="foodTitle">Milk $2.00</span>
            </div>
       </div>
    </div> 
	</div> 
<?php
	include_once(ROOT_PATH . 'inc/footer.php');
?>