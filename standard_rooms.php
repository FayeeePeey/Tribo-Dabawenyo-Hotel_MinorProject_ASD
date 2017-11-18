<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "hotel_davao";
$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(mysqli_connect_errno()) {
	die("Database connection failed: " .
		mysqli_connect_errno() .
		" (" . mysqli_connect_errno() . ")"
	);
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/standard_rooms.css">
		<link rel="shortcut icon" href="images/logo.jpg"/>
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
		<a href="suite_rooms.php"><button class="suite_rooms">Suite</button></a>
		<button class="standard_rooms">Standard</button>
		 <a href="deluxe_rooms.php"><button class="deluxe_rooms">Deluxe</button></a>
        <div id="content_login">
		 <img class="roompic" src="images/image5.jpg"> </img>
		 <span class="roomtype"><u>Standard Room</u></span>
		 <span class="room_details"><b>Standard Rooms</b><br>
					<li> Overnight Accomodation for Single<br>&nbsp;&nbsp;&nbsp;&nbsp; or Double (Twin Bed)
					<br><li> Breakfast with special Davao dessert (Durian Tart)
					<br><li> Taxes & Service Charge</li>
					<br> <b>Room Amenities:</b>
					<br><li> Hot & Cold
					<br><li> Cabled Television
					<br><li> Hair Dryer
					<br><li> Price: 1,450 PHP / Day</li>
					</span>
		 <span>
            <form id="form" method="post" action="reserve.php">
                <div class="signup_text">Enter Your Personal Details</div>
                <div class="signup_con">
				    <span class="checkin"><b>Check In:</b><input type="date" name="checkin" ></span>
					<span class="checkout"><b>Check Out:</b><input type="date" name="checkout" ></span>
                    <span class="fname">
                        <b>First Name</b>
						<br>
                        <input type="text" placeholder="Enter First Name" name="fname" required>
                    </span>
					<input type="hidden" name="roomnum" value="2">
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
					<span class="valididnum">
						<b>Valid ID Number</b>
						<br>
						<input type="text" placeholder="Enter Valid ID Number" name="validid" required>	
					</span>	
					
					<span class="validnum_options">
					<select name="validnum_options">
						<option value="GSIS">GSIS</option>
						<option value="SSS">SSS</option>
						<option value="BIR">BIR</option>
						</select>
					</span>
					
                    <span class="gender">
                        <b>Gender:</b> <br>
                        <input type="radio" name="gender" value="Female">Female <br>
                        <input type="radio" name="gender" value="Male">Male <br><br>
                    </span>
                    <button class="signup_button"  type="submit" name="submit">Book</button>
                </div>	
            </form>
			
<?php
	/*if(isset($_POST["submit"])){
		
	$checkin = $_POST["checkin"];
	$checkout = $_POST["checkout"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$number = $_POST["mnumber"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$validid = $_POST["validid"];
	$valididtype = $_POST["validnum_options"];
	if($checkin < $checkout){
	$gencustomerid = "Select coalesce(max(customer_id), 0) + 1 from customer_details";
	$genreserveid = "Select coalesce(max(reserve_id), 0) + 1 from reservation_list";
	$resultci = mysqli_query($connection, $gencustomerid);
	$resultri = mysqli_query($connection, $genreserveid);
	$nnn = mysqli_fetch_array($resultci);
	$rrr = mysqli_fetch_array($resultri);
	$_SESSION["mynum"]=$nnn[0];
	$_SESSION["mynu"]=$rrr[0]; 
	$query = "insert into customer_details(first_name, last_name, mobile_number, address, gender, email_add, valid_idnum, valid_idnum_type, customer_id) 
	values ('".$fname."','".$lname."','".$number."','".$address."','".$gender."','".$email."','".$validid."','".$valididtype."',{$_SESSION["mynum"]})"; 
	$result = mysqli_query($connection, $query);
	$query2 = "insert into reservation_list(customer_id, room_id, room_number, room_checkin, room_checkout, reserve_id) 
	values ({$_SESSION["mynum"]},2,1,'".$checkin."','".$checkout."',{$_SESSION["mynu"]})";
	$result2 = mysqli_query($connection, $query2);
	
	if(!$result){
        die("Database query failed.".mysqli_connect_error($connection)."(".mysqli_connect_errno().")");
    }else{
		if(!$result2){
			die("Database query failed.".mysqli_connect_error($connection)."(".mysqli_connect_errno().")");
		}
		else{
		echo "Success!"; }
	}
	
	}
	else{
		
        echo "<script type='text/javascript'>alert('Check In / Check Out Date Invalid!')</script>";
	}
	}
	 */
?>			
        </div>
		</body>
</html>