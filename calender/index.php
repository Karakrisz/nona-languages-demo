<?php
// Include calendar helper functions
include_once 'karaKriszFunctions.php';
include_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Időpont foglalás</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css">
	<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2708/bootstrap-datetimepicker.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2708/bootstrap-datetimepicker.min.js"></script>

	<!-- Stylesheet file -->
	<link rel="stylesheet" href="css/karaKrisz.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/karaKrisz.js"></script>
	<!-- jQuery library -->
	<!-- <script src="js/jquery.min.js"></script> -->

</head>

<body>
	<div class="book-an-appointment-content text-center">
		<a href="#myModal" role="button" class="btn" data-toggle="modal">időpont foglalás</a>
	</div>
	<!-- Display event calendar -->
	<div id="calendar_div">
		<?php echo getCalender(); ?>
	</div>

	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Időpont rögzítése</h3> <br>
			<p>A könnyebb rögzítés érdekében, <strong> kattints a naptár ikonra !</strong></p>
		</div>
		<div class="modal-body text-center mt-20">
			<form method="POST" action="index.php">
				<div class="datatime-content">
					<div id="datetimepicker-start-time" class="input-append date pr-20">
						<input name="start-time" id="start-time" data-format="yyyy-MM-dd hh:mm:ss" type="text"></input>
						<span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
					</div>
					<div id="datetimepicker-end-time" class="input-append date">
						<input name="end-time" id="end-time" data-format="yyyy-MM-dd hh:mm:ss" type="text"></input>
						<span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
					</div>
				</div>
				<input name="event" id="event" type="hidden" value="sendDateTime">
				<button type="submit" class="btn mt-50">Elküldés</button>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Bezárás</button>
		</div>
	</div>

</body>

</html>