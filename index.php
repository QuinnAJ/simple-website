<?php include("header.php");?>
<div id="content" class="clearfix">
	<aside>
		<h2><?php echo date("l"); ?>'s Specials</h2>
		<hr>
		<img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
		<h3>The WP Burger</h3>
		<p>Freshly made all-beef patty served up with homefries - $14</p>
		<hr>
		<img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
		<h3>WP Kebobs</h3>
		<p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
		<hr>
		<h2>Private Dining</h2>
		<img src="images/dining_room_sm.jpg" width="228" alt="Dining Room" title="The WP Eatery Dining Room">
		<p>Call us to find out more about our private dinning options.</p>
	</aside>
<div class="main">
	<h1>Welcome to WP Eatery!</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	<h3>Upcoming Events ...</h3>

	<?php 
		include("class_lib.php");
		$eventOne = new EventItem("St. Patty's Day Party","Tuesday March 17, 2015",
			"Join us for an authentic Irish four course meal, complete with shepard's pie and one green beer!","$35.00");
		$eventTwo = new EventItem("Samy's Spring Fling!","Saturday April 18, 2015",
			"Join us for to kick off the beginning of spring! This event will include 4 of Samy's infamous appetizers and one cocktail!","$40.00");
	?>
	<p>
		<strong class="event"><?php echo $eventOne->getName()?></strong><br/>
		<strong>Date: </strong><?php echo $eventOne->getDates()?><br/>
		<strong>Time: </strong> 7pm<br/>
		<strong>Price: </strong><?php echo $eventOne->getPrice()?><br/>
		<?php echo $eventOne->getDesc()?>
	</p>
	<p>
		<strong class="event"><?php echo $eventTwo->getName()?></strong><br/>
		<strong>Date: </strong><?php echo $eventTwo->getDates()?><br/>
		<strong>Time: </strong> 7pm<br/>
		<strong>Price: </strong><?php echo $eventTwo->getPrice()?><br/>
		<?php echo $eventTwo->getDesc()?>
	</p>

	<h2>Book your Private Party!</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</div><!-- End Main -->
<?php include("footer.php");?>
