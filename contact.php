<?php
	session_start();
?>
<html>
	<head>
		<title>
		Welcome to AIRLINE RESERVATION 
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			AIRLINE RESERVATION 
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="about.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				
<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text">	
			<img src="" width=100%>
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	
<img src="images/4.png" alt="trip is life" align="left" width="220" height="200">


<p><h3>Airline Reservation contact numbers for callers in India</h3>
<h3>Call 24x7 Customer Care numbers 0124-2641407 / 020-26231407</h3>/ 
<h3>1860 233 1407 from MTNL / BSNL lines and Mobile / </h3><h3>landlines of most private telecom operators in India only.
Air India contact numbers for callers outside India</h3>
<h3>USA & Canada:</h3>
<h3>1888 634 1407 (Toll Free)</h3>
<h3>UK</h3>
<h3>8000 489 254 (Toll Free)</h3>
<h3>Australia</h3>
<h3>613 701 98270 (Toll Number) #</h3>
<h3>France</h3>
<h3>331 874 06644 (Toll Number) #</h3>
<h3>Germany</h3>
<h3>496925511337 (Toll Number) #</h3>
<h3>Singapore</h3>
<h3>800 101 4016 (Toll Free)</h3>

<h5># Calls charged to callers as per applicable network call rates.</h5>
<h3>Callers from all foreign locations can also call on

+ 91 124 2641407 (International call rates applicable)

+ 91 20 2623 1407 (International call rates applicable)</h3>
<h3>Call Centre Email IDs</h3>
<h3>E mail ID :</h3>
<h3>contactus@airindia.in</h3>
<h3>traveldocs@airindia.in</h3>
(For forwarding scanned copies of travel documents / Updating FFP mileage)
Online Bookings Helpdesk - (Monday to Saturday, 0930 hrs. - 1730 hrs. IST)

<h3>Landline Number : 011-24667473</h3>

Landline Number : 011-24667474

E mail ID : eCommerce@airindia.in

E mail ID for bookings on Mobile : mobilebookings@airmanagment.in</h3></p>
</body>
</html>