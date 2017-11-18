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
$gencustomerid = "Select coalesce(max(customer_id), 0) from customer_details";
	$result = mysqli_query($connection, $gencustomerid);
	$column = mysqli_fetch_array($result);
	$_SESSION["mynum"]=$column[0];

$genroomtype = "Select * from customer_details where customer_id={$_SESSION["mynum"]}";
	$result1 = mysqli_query($connection, $genroomtype);
	$data_cus = mysqli_fetch_array($result1);
	
	$genres = "Select * from reservation_list where customer_id={$_SESSION["mynum"]}";
	$result2 = mysqli_query($connection, $genres);
	$data_res = mysqli_fetch_array($result2);
	
	$roomdetails = "Select a.room_type, a.room_price from room_types a, rooms b, reservation_list c where 
	               b.room_number=c.room_number and b.room_type_id = a.room_type_id and b.room_number=".$data_res[1]."";
	$result3 = mysqli_query($connection, $roomdetails);
	$data_res1 = mysqli_fetch_array($result3);			

$diff = abs(strtotime($data_res[3]) - strtotime($data_res[2]));
    $days =  $diff/(60*60*24);	
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/reserve_details.css">
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
  <div id="reserve_content">
	<div class="details_text"><u>Tribo Dabawenyo Reservation Details</u></div>
		<div class="reserve_con">
		<span class="cusinfo">Customer Details</span>
		<span class="cusfname">First Name: <?php echo $data_cus[1];?> <br> Last Name: <?php echo $data_cus[2];?>
							  <br> Gender: <?php echo $data_cus[3];?> <br> Address: <?php echo $data_cus[5];?>	
							  <br> Mobile Number: <?php echo $data_cus[4];?> <br> Email: <?php echo $data_cus[6];?>
							  <br> Valid ID Number: <?php echo $data_cus[7];?> (<?php echo $data_cus[8];?>)
		</span>
		<span class="resinfo">Reservation Details</span>
		<span class="cus_res">Reservation Number: <?php echo $data_res[4];?> <br> Room Type: <?php echo $data_res1[0];?>
							  <br> Arrival: <?php echo date("D M jS, Y", strtotime($data_res[2]));?>
							  <br> Departure: <?php echo date("D M jS, Y", strtotime($data_res[3]));?>
							  <br> Room Rate: PHP <?php echo $data_res1[1];?> * <?php echo $days;?> days
							  <br> Total Payable: PHP <?php echo $data_res[6];?>
		</span>
		</div>
  </div>
	</body>
</html>
<?php
mysqli_close($connection);
?>