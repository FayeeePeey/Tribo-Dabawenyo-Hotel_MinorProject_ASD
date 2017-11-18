
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/suite_rooms.css">
		<link rel="shortcut icon" href="images/logo.jpg" />
        <title>PHP SAMPLE</title>
    </head>
	
    <body>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.jpg" width="66px;">
                </a>
            </div>
            <div class="menu">
			<a href="index.php">
                <div class="dropdown_content">
                    <button class="dropbutton">DISCOVER THE HOTEL</button>
                </div></a>
                <div class="dropdown_content">
                   <a href="index.php"> <button class="dropbutton">BOOKINGS</button></a>
                </div>
               
            </div>
            
        </div>
		<button class="suite_rooms">Suite</button>
		 <a href="standard_rooms.php"><button class="standard_rooms">Standard</button></a>
		 <a href="deluxe_rooms.php"><button class="deluxe_rooms">Deluxe</button></a>
        <div id="content_login">
		 <img class="roompic" src="images/image5.jpg"> </img>
		 <span class="roomtype"><u>Suite Room</u></span>
		 <span class="room_details">Suite Rooms<br>
					<li> Pouyttwewrerewou eurowieweori</li>
					<br><li> sdjhdjkwhejfhefjhwefjkhwefjk</li>
					<br><li> sdjhdjkwhejfhefjhwefjkhwefjk</li>
					<br><li> Price: 1,200 PHP</li>
					</span>
		 <span>
            <form method="post" action="signup.php">
                <div class="signup_text">Enter Your Personal Details</div>
                <div class="signup_con">
				    <span class="checkin"><b>Check In:</b><input type="date" name="checkin" required></span>
					<span class="checkout"><b>Check Out:</b><input type="date" name="checkout" required></span>
                    <span class="fname">
                        <b>First Name</b>
						<br>
                        <input type="text" placeholder="Enter First Name" name="fname" required>
                    </span>
                    <span class="lname">
                        <b>Last Name</b>
						<br>
                        <input type="text" placeholder="Enter Last Name" name="lname" required>
                    </span>
                    <span class="mobile">
                        <b>Mobile Number</b>
						<br>
                        <input type="text" placeholder="Enter Mobile" name="mnumber" required>
                    </span>
                    <span class="address">
                        <b>Address</b>
						<br>
                        <input type="text" placeholder="Enter Address" name="address" required>
                    </span>
					<span class="email">
                        <b>Email</b>
						<br>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    </span>
                    <span class="gender">
                        <b>Gender:</b> <br>
                        <input type="radio" name="gender" value="Female">Female <br>
                        <input type="radio" name="gender" value="Male">Male <br><br>
                    </span>
                    <button class="signup_button" type="submit" name="submit">Book</button>
                </div>	
            </form>
        </div>
		</body>
</html>