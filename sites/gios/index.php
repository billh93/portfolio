<?php
	include_once('inc/config.php');
	$title = "Gios Bar And Grill | Welcome";
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
           <section id="intro">
           	<h1 id="welcome" class="text_center">Welcome To Gios!</h1>

				<img src="<?php echo BASE_URL; ?>images/gios_drinks.jpg" alt="Gio's Drinks">

            	<p class="text_center p_size">Gio offers a great place to watch your favorite sports, dine in on the patio, golden tee, darts, free wi-fi & more! Enjoy any of our twelve beers on tap along with our delicious Bar-B-Q phoria menu.</p>

				<img src="<?php echo BASE_URL; ?>images/gios_food.jpg" alt="Gio's Food">	
<p class="text_center p_size">
Lunch & dinner menus available for pick up or delivery call us at <a href="tel:1-773-334-0345">(773)-334-0345</a> or visit us on <a target="_blank" href="https://www.grubhub.com/chicago/gios-bar--grill/">GrubHub</a>!
</p>

				<img src="<?php echo BASE_URL; ?>images/gios_brunch.jpg" alt="Gio's Food">

<p class="text_center p_size">
We appreciate your patronage & thank everyone for respecting our neighbors when leaving the establishment.<p class="text_center p_size"> Thank You! <br> - Gio's Staff</p>
           </section>
           <aside id="schedule">
           	<h3>Hours of Operation</h3>
	        <p class="p_size">Monday-Friday <br>
			4:00pm - 2:00am</p>
				
			<p class="p_size">Saturday <br>
			10:00am - 3:00am</p>
				
			<p class="p_size">Sunday <br>
			10:00am-2:00am</p>
				
			<p class="p_size">Join Us For Brunch <br>
			Every Saturday & Sunday <br>
			10am-2pm</p>
			
			<h3>Where We're Located</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2966.38933376383!2d-87.678929!3d41.97045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc996510b061cc579!2sGio&#39;s+Bar+%26+Grill!5e0!3m2!1sen!2sus!4v1410213503454" width="300" height="300" frameborder="0" style="border:0"></iframe>
			
			<h3>Social Networks</h3>
			<a target="_blank" href="http://www.facebook.com/giosbarchicago" title="Gio's Facebook Page"><img class="social-icons" src="<?php echo BASE_URL; ?>images/FB_Logo.png" alt="Facebook Icon"></a>
			<a target="_blank" href="http://www.twitter.com/giosbarchicago" title="Gio's Twitter Page"><img class="social-icons" src="<?php echo BASE_URL; ?>images/Twitter_Logo.png" alt="Twitter Icon"></a>    
           </aside>
    </div>
<?php
	include_once(ROOT_PATH . "inc/footer.php");
?>