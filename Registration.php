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
		<?php
			if(isset($_POST['submit'])){
				$name = $_POST['name']; $level = $_POST['level']; $gender = $_POST['gender'];
				$hall = $_POST['hall']; $room_type = $_POST['room_type']; $roomno = $_POST['roomno'];
				$bedno = $_POST['bedno'];
				
				$query = mysqli_query($conn,"INSERT INTO `tb_registration` (name,level,gender,hall,room_type,roomno,bedno)
				VALUES ('$name','$level','$gender','$hall','$room_type','$roomno','$bedno')");
				
				if($query){
					echo "Registration is completed successfully";
				}else{
					echo "Registration Failed!";
				}
			}
		?>
		<a href="report.php" style="float:left; margin-left:30px">Report</a><br/>
        <form method="Post">
            <label>Name:</label>
            <input type="text" name="name"><br><br>
            <label>Level:</label>
            <select name="level">
                <option>select level </option>
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>400</option>
            </select><br> <br>

            <label>Gender:</label>
            <input type="radio" name="gender">Male
            <input type="radio" name="gender">Female <br><br>
            <p>BOOK ROOM</p><br>

            <label>Halls available:</label>
            <select name="hall">
                    <option>select hall </option>
                    <option>Akuafo Hall</option>
                    <option>Volta Hall</option>
                    <option>Legon Hall</option>
                    <option>Common Wealth Hall</option>
                    <option>Mensah Sarbah</option>
                </select><br><br>
                
                <label>Room Type</label>
                <select name="room_type">
                    <option>select type of room</option>
                    <option>4-in-a-room</option>
                    <option>2-in-a-room</option>
                    <option>3-in-a-room</option>
                    <option>1-in-a-room</option>
                </select><br><br>
                
            <label> Rooms:</label>
            <select name="roomno">
                    <option>select room</option>
                    <option>R101</option>
                    <option>R102</option>
                    <option>R103</option>
                    <option>R104</option>
                    <option>R105</option>
                    <option>R106</option>
                    <option>R107</option>
                    <option>R108</option>
                    <option>R109</option>
                    <option>R110</option>
            </select><br> <br>
            <label>Bed:</label>
            <select name="bedno">
                <option>select bed</option>
                <option>Bed 1</option>
                <option>Bed 2</option>
                <option>Bed 3</option>
                <option>Bed 4</option>
            </select><br> <br>
        <input  class="btn" type="submit" value="save" name="submit">
        
        </form>
        
    </div>
</body>

</html> 