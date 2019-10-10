<?php require "connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="reg">
            <div class ="title">
                    <h1>REGISTRATION FORM</h1>
                    <h2>Booking Information:</h2>
            </div><br><br>
    <div class="rep">
		
        <table class="table">
			<tr>
				<td class="table" style="width:250px">Name</td>
				<td class="table" style="width:250px">Level</td>
				<td class="table" style="width:250px">Gender</td>
				<td class="table" style="width:250px">Hall</td>
				<td class="table" style="width:250px">Room Type</td>
				<td class="table" style="width:250px">Room Number</td>
				<td class="table" style="width:250px">Bed Number</td>
			</tr>
			<?php
				
				$query=mysqli_query($conn,"SELECT * FROM `tb_registration`");
				while($row = mysqli_fetch_array($query)){
					$name = $row['name']; $level = $row['level']; $gender = $row['gender'];
					$hall = $row['hall']; $room_type = $row['room_type']; $roomno = $row['roomno'];
					$bedno = $row['bedno'];
				
					echo "<tr><td>$name</td><td>$level</td><td>$gender</td><td>$hall</td><td>$room_type</td>
					<td>$roomno</td><td>$bedno</td></tr>";
				}
			?>
		</table>
        
    </div>
</body>

</html> 