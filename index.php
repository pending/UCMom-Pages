<?php
	session_start();
	if ((!isset($_SESSION['logged-in']))){ 
	  echo "<script>location.replace(\"login.html\");</script>";
	}
	error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
 	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<!--link to the css file-->
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<!-- title header -->
		<title>UC MOM Home</title>

		  <script src="jquery-2.0.3.js" type="text/javascript"></script>
		  <script src= "modal.js" type="text/javascript"></script>
  		  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
	</head>

	
	<body id="home_body">
		<!--add a feedback button to the left side of the home page-->
		<div id="fdBtn"><a href="#"></a></div>
		<!-- table to hold all the links in the header -->
		<table id="linkheadertable">
				<tr>
					<td><a href="#" onclick = "window.open('ucsdmap.html', 'newwindow'); return false;"><h3>MAP</h3></a></td>
					<td><a href = "http://women.ucsd.edu/"><h3>CONTACT</h3></a></td>
					<!-- contact links to women center-->
					<td><a href = "./login.html"><h3>LOGIN</h3></a></td>
				</tr>
		</table>

	<!-- put a horizontal line break -->
	<hr width="80%";size="3" />
	<!-- Title on the Page -->
	<p align="center">UCMOM <span>San Diego</span></p>
	
	<!--create table of 11 blocks to put images in-->
	<table id="geiselrow1">
	<tr>
		<!-- try to make the picture clickable to open a modal window so the user can use the room reservation system-->
		<!-- Biomedical Science Building -->

			<td>
				<a href="#" id="opn1"><div title = "Biomedical Science Building" class="picture"><img src="./images/BSB_B241.jpg" /></div></a>	
			</td>
	
			<td>
				<a href="#" id="opn2"><div title = "Computer Science and Engineering Building" class="picture"><img src="./images/EBU-3B_3113.jpg" /></div></a>		
			</td>
	</tr>
	<tr class="caption">
	<td><center>BSB<center></td>
	<td><center>CSE <center></td>
	</tr>
	</table>
	
	<table id="geiselrow2">
	<tr>
		<!-- Galbraith Hall -->
		<td>
			<a href="#" id="opn3"><div title = "Galbraith Hall" class="picture"><img src="./images/GalbraithHall_252.jpg" /></div></a>
		</td>
		
		<!-- Leichtag 2nd Floor -->
		<td>
			<a href="#" id="opn4"><div title = "Leichtag 2nd Floor" class="picture"><img src="./images/Leichtag_2ndFloor.jpg" /></div></a>
		</td>
		
		<!-- Leichtag 3rd Floor -->
	    <td>
			<a href="#" id="opn5"><div title = "Leichtag 3rd Floor" class="picture"><img src="./images/Leichtag_3rdFloor.jpg" /></div></a>		
		</td>
	</tr>
	<tr class="caption">
	<td><center>Galbraith</center></td>
	<td><center>Leichtag (2nd Floor)</center></td>
	<td><center>Leichtag (3rd Floor)</center></td>
	</tr>
	</table>
	
	<table id="geiselrow3">
	<tr>
		<!-- Nierenberg -->
		<td>
			<a href="#" id="opn6"><div title = "Nierenberg" class="picture"><img src = "./images/Nierenberg_416C.jpg"></div></a>
		</td>
		
		<!-- Price Center -->
		<td>
			<a href="#" id="opn7"><div title = "Price Center" class="picture"><img src = "./images/PriceCtrGreen_2.115.jpg"></div></a>		
		</td>
		
		<!-- Structural and Materials Engineering -->
		<td>
			<a href="#" id="opn8"><div title = "Structural and Materials Engineering" class="picture"><img src = "./images/SME_4thFloor.jpg"></div></a>		
		</td>
		
		<!-- Torrey Pines North -->
		<td>
			<a href="#" id="opn9"><div title = "Torrey Pines North" class="picture"><img src = "./images/TorreyPinesNorth_130.jpg"></div></a>		
		</td>
	</tr>
	<tr class="caption">
	<td><center>Nierenberg</center></td>
	<td><center>Price Center</center></td>
	<td><center>SME</center></td>
	<td><center>Torrey Pines North</center>	</td>
	</tr>
	</table>
	
	<table id="geiselrow4">
	<tr>
		<!-- Women's Center -->
		<td>
			<a href="#" id="opn10"><div title = "Women's Center" class="picture"><img src = "./images/WomensCtr.jpg"></div></a>				
		</td>
		
		<!-- Thornton Hospital -->
		<td>
			<a href="#" id="opn11"><div title = "Thornton Hospital" class="picture"><img src = "./images/ThorntonHospital.jpg"></div></a>			
		</td>
	</tr>
		<tr class="caption">
		<td><center>Women's Center</center></td>
		<td><center>Thornton Hospital</center></td>
	</tr>
	</table>
	  
	
	<!-- modal window code for list of options-->	
	<div class="blockbkg" id="bkg" style="visibility: hidden;">
		<div class="cont" id="dlg" style="visibility: hidden;">
			<div id="closebtn"  title="Close"></div>
				<center>
					<div id = "bldgName"></div>
						<a href = "#" id="makeRes"><h3 class="make_res">MAKE A RESERVATION</h3></a>
						<a href = "#" id="canRes"><h3 class="cancel_res">CANCEL A RESERVATION</h3></a>
						<a href = "#" id="viewRes"><h3 class="view_res">VIEW ALL RESERVATIONS</h3></a> 
				</center>
						
		</div>	
	</div>
	

	<div class="blockbkg" id="bkg2" style="visibility: hidden;">
				<div class="cont" id="dlg2" style="visibility: hidden;">
				<div id="closebtn2" title="Close"></div>
			
				<center>
      <form id="eventform" action="insert.php" method=
      "post">
        <ul id='newevent' style="text-decoration: none">
          <li>Date: <input name="input_date" type="text" id="datepicker" placeholder="mm/dd/yy"/></li>
          <li>Time: <select name="input_time" id = "etime">
                    <option value="08:00">8:00 am</option>
                    <option value="08:30">8:30 am</option>
                    <option value="09:00">9:00 am</option>
                    <option value="09:30">9:30 am</option>
                    <option value="10:00">10:00 am</option>
                    <option value="10:30">10:30 am</option>
                    <option value="11:00">11:00 am</option>
                    <option value="11:30">11:30 am</option>
                    <option value="12:00">12:00 pm</option>
                    <option value="12:30">12:30 pm</option>
                    <option value="01:30">1:00 pm</option>
                    <option value="01:30">1:30 pm</option>
                    <option value="02:00">2:00 pm</option>
                    <option value="02:30">2:30 pm</option>
                    <option value="03:00">3:00 pm</option>
                    <option value="03:30">3:30 pm</option>
                    <option value="04:00">4:00 pm</option>
                    <option value="04:30">4:30 pm</option>
                    </select></li>
          <!--li>Location: <select name="input_location" id ="elocation">
                        <option value="cse">CSE Building</option>
                        <option value="nano">Nano Eng Building</option>
                        </select></li-->
          <li><input id="insertevent" type="submit" value="Create Event"></li>
        </ul></form>
				</center>
			</div>
		</div>
	
	<!-- modal window code for where the cancel button appears to cancel reservations -->	
			<div class="blockbkg" id="bkg3" style="visibility: hidden;">
				<div class="cont" id="dlg3" style="visibility: hidden;">
				<div id="closebtn3" title="Close"></div>
				<h3>Choose a Reservation to Cancel:</h3>
				<br />
				<?php include 'view.php'; ?>
				<br />
				<br />
				<br />
			</div>
		</div>
		
	<!-- modal window code for where all the user's reservations would appear -->
			<div class="blockbkg" id="bkg4" style="visibility: hidden;">
				<div class="cont" id="dlg4" style="visibility: hidden;">
				<div id="closebtn4" title="Close"></div>
				<h3>Your Reservations:</h3>
				<?php include 'view.php'; ?>
			</div>
		</div>
	
	<!-- modal window code that opens up a feedback form -->
			<div class="blockbkg" id="bkg5" style="visibility: hidden;">
				<div class="cont" id="dlg5" style="visibility: hidden;">
				<div id="closebtn5" title="Close"></div>
			<form>
				<h3>Name:</h3>
				<input id="feedback_name" name="feedback[name]" size="45" type="text">
				
				<h3>Email:</h3>
				<input id="feedback_email" name="feedback[email]" size="45" type="email">
				
				<h3>Feedback:</h3>
				<textarea cols="35" id="feedback_content" name="feedback[content]" rows="7"></textarea>
				
				<br />
				<br />
				
				<input id="fdSubmitBtn" type="button" value="Send Feedback">
			</form>
				
			</div>
		</div>

<script>
Parse.initialize("lpYceeKVUepxvpq7pMJ8hYsFUl9Bp5ugBaz6hsot", "odQ9YccAy8289RwnaG6ypm22bSht9myh8xQB1yRf");
  //calendar picker
  $(function() {
    $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'}).val();
  });
</script>

	</body>
</html>