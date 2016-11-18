<?php

include 'assets/includes/header.inc.php';
include 'assets/includes/login.inc.php';
include 'assets/includes/room-id.inc.php';
include 'assets/includes/nav.inc.php';

?>

<div class="main-container"> <!-- Puts content below nav -->
	<div class=".col-md-6">
		<h4 style="color:white;">Go to fill-in-the-party.com on your mobile device and join using room code</h1>
		<img class="img-responsive" src="assets/images/game_logo.png" alt="Fill-in the Party Logo" style="float:left;width:50%;margin-left:auto;margin-right:auto;">
		<h1 style="color:#CA69CE;">ZX1T</h1>
	</div>
	
	
	<h4 style="color:white;">Once everyone has joined, click Start!</h4>

	<h3 style="color:white;margin-left:auto;margin-right:auto;">Party People</h3>
	<div class=".col-md-6" style="float:right;">
		<div class=".col-lg-12" style="color:#CA69CE;">Player 1</div>
		<div class=".col-lg-12" style="color:#CA69CE;">Player 2</div>
		<div class=".col-lg-12" style="color:#CA69CE;">Player 3</div>
		<div class=".col-lg-12" style="color:#CA69CE;">Player 4</div>
	</div>

	<br>
	<div>
		<a href="scoreboard.php" class="btn btn-default">Start</a>
	</div>
</div> <!-- /main-container -->

<?php

include 'assets/includes/footer.inc.php';

?>

