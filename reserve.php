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

	if(isset($_POST["submit"])){
	$checkin = $_POST["checkin"];
	$checkout = $_POST["checkout"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$number = $_POST["mnumber"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$validid = $_POST["validid"];
	$roomtype = $_POST["roomnum"];
	$valididtype = $_POST["validnum_options"];
	 date_default_timezone_set('Asia/Manila');
	$datetimenow = date('Y-m-d H:i:s') ;
	//unset($_REQUEST['submit']);
	if($checkin < $checkout){
	$gencustomerid = "Select coalesce(max(customer_id), 0) + 1 from customer_details";
	$genreserveid = "Select coalesce(max(reserve_id), 0) + 1 from reservation_list";
	$resultci = mysqli_query($connection, $gencustomerid);
	$resultri = mysqli_query($connection, $genreserveid);
	$nnn = mysqli_fetch_array($resultci);
	$rrr = mysqli_fetch_array($resultri);
	$_SESSION["mynum"]=$nnn[0];
	$_SESSION["mynu"]=$rrr[0]; 
	$genroomnum = "Select room_number from rooms where room_type_id=".$roomtype." and room_availability = 'available'";
	$resultrn = mysqli_query($connection, $genroomnum);
	$romnumtemp = mysqli_fetch_array($resultrn);
	$_SESSION["roomnum"]=$romnumtemp[0];
	if (mysqli_num_rows($resultrn)==0) { echo "<script type='text/javascript'>alert('No Rooms Available!')</script>"; }
	else{
	$diff = abs(strtotime($checkout) - strtotime($checkin));
    $days =  $diff/(60*60*24);	
	$genroomtype = "Select room_price from room_types where room_type_id=".$roomtype."";
	$result1 = mysqli_query($connection, $genroomtype);
	$total = mysqli_fetch_array($result1);
	$_SESSION["totals"] = $days*$total[0];
	
	$query = "insert into customer_details(first_name, last_name, mobile_number, address, gender, email_add, valid_idnum, valid_idnum_type, customer_id) 
	values ('".$fname."','".$lname."','".$number."','".$address."','".$gender."','".$email."','".$validid."','".$valididtype."',{$_SESSION["mynum"]})"; 
	$result = mysqli_query($connection, $query);
	$query2 = "insert into reservation_list(customer_id, room_number, room_checkin, room_checkout, reserve_id,reservation_date,payment_total) 
	values ({$_SESSION["mynum"]},{$_SESSION["roomnum"]},'".$checkin."','".$checkout."',{$_SESSION["mynu"]},'".$datetimenow."',{$_SESSION["totals"]})";
	$result2 = mysqli_query($connection, $query2);
	
	if(!$result){
        die("Database query failed.".mysqli_connect_error($connection)."(".mysqli_connect_errno().")");
    }else{
		if(!$result2){
			die("Database query failed.".mysqli_connect_error($connection)."(".mysqli_connect_errno().")");
		}
		else{
		echo "<script type='text/javascript'>alert('Reservation Complete!')</script>";
		echo "<script>window.location='reserve_details.php';</script>";
		echo "<script>close()</script>";
		/*mysqli_query($connection, "Update rooms set room_availability='unavailable' where room_number = {$_SESSION["roomnum"]}");
	  */      }
		}
	}
	}
	else{
		if($roomtype==1){
        echo "<script type='text/javascript'>alert('Check In / Check Out Date Invalid!')</script>";
		echo "<script>window.location='suite_rooms.php';</script>";
		echo "<script>close()</script>"; }
		else if($roomtype==2){
        echo "<script type='text/javascript'>alert('Check In / Check Out Date Invalid!')</script>";
		echo "<script>window.location='standard_rooms.php';</script>";
		echo "<script>close()</script>"; }
		else if($roomtype==3){
        echo "<script type='text/javascript'>alert('Check In / Check Out Date Invalid!')</script>";
		echo "<script>window.location='deluxe_rooms.php';</script>";
		echo "<script>close()</script>"; }
	}
	}
	 
?>			