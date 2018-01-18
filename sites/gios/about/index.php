<?php
	include_once('../inc/config.php');
	$title = "Gios Bar And Grill | About Us";
	include_once(ROOT_PATH . 'inc/header.php');
?>
    <div class="gridContainer clearfix">
       <header>
          <img id="gios_logo" src="<?php echo BASE_URL; ?>images/gios_logo.png" alt="Gios Logo"/>
          <ul class="bxslider">
                    <li><img src="<?php echo BASE_URL; ?>images/example1.jpg" alt="" title="Gios Front Entrance"/></li>
                    <li><img src="<?php echo BASE_URL; ?>images/example2.jpg" alt="" title="Gios Front Patio"/></li>
                  <li><img src="<?php echo BASE_URL; ?>images/example3.jpg" alt="" title="Gios Front Patio"/></li>   
                    <li><img src="<?php echo BASE_URL; ?>images/example4.jpg" alt="" title="Gios Front Patio"/></li>
              </ul>
            <nav role="navigation" id="main_menu">
                <ul id="drop_nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Menu</a>
                            <ul>
                              <li><a href="/drinks">Drinks</a></li>
                              <li><a href="/breakfast">Breakfast</a></li>
                                          <li><a href="/lunch-dinner">Lunch & Dinner</a></li>
                                        </ul>
                        </li>
                        <li><a href="/specials">Specials</a></li>
                        <li><a href="/about">About</a></li>
                     <li><a href="/contact">Contact</a></li>  
                   </ul>
            </nav>
       </header>
       <noscript>
         <h1>Please turn on Javascript!</h1>
         <p>For the best possible experience!</p> 
       </noscript>
       <div id="content">
       	  <h1 id="about_us" class="text_center">About Us</h1>
         <div id="left">
         	<div class="bold text_center p_size" id="hours">
         	 <p id="hours_operation">Hours of Operation</p>
            <p>Monday-Friday 4pm-2am</p>
            <p>Saturday 10am-3am</p>
            <p>Sunday 10am-2am</p>
           </div>
            <img class="hide_mobile" src="<?php echo BASE_URL; ?>images/gios_night.jpg"/>
         </div> 
         <div class="text_center" id="right">
           <p class="p_size">Now Open For Brunch Every Saturday & Sunday Beginning At 10am!</p>
<p class="p_size">Gio's is a great place to meet with friends and co-workers as well as your entire family!  We're the ideal setting for watching your favorite sports on our 100 inch HDprojector, 7 HD TV's, dining in on the patio, Golden Tee, darts, free wi-fi and much more!</p> 

<p class="p_size">Enjoy our delicious BarBQphoria menu along with any of our 12 awesome beers on tap! Check out our daily food & drink specials here</p>

<p class="p_size">Visit our Special Events page for weekly events and be sure to follow us on Facebook & Twitter @GiosBarChicago</p>

<p class="p_size">We would be honored to sponsor new darts, kick ball, softball, soccer or baseball teams etc.  Ask your bartender for details & sign up your teams today!</p>
		  </div>
       </div>
	</div>  
<?php
	include_once(ROOT_PATH . "inc/footer.php");
?>