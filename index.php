<!DOCTYPE html>
<html>
<head>
    <title>Care Family Form</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Care Family</legend>
			<label>Care Member:</label>
			<input type="text" name="member1" placeholder="Manu Desai">
			<input type="text" name="member2" placeholder="Nirja Desai">
			<input type="text" name="member3" placeholder="Krishna Desai"><br><br>

			<label>Address:</label>
			<input type="text" name="address1" placeholder="900 Carter Acres Ln">
			<input type="text" name="address2" placeholder="900 Carter Acres Ln">
			<input type="text" name="address3" placeholder="900 Carter Acres Ln"><br><br>

			<label>City:</label>
			<input type="text" name="city1" placeholder="Martinez">
			<input type="text" name="city2" placeholder="Martinez">
			<input type="text" name="city3" placeholder="Martinez"><br><br>

			<label>State:</label>
			<input type="text" name="state1" placeholder="CA">
			<input type="text" name="state2" placeholder="CA">
			<input type="text" name="state3" placeholder="CA"><br><br>

			<label>Zip Code:</label>
			<input type="text" name="zip1" placeholder="94553">
			<input type="text" name="zip2" placeholder="94553">
			<input type="text" name="zip3" placeholder="94553"><br><br>

			<label>Mobile:</label>
			<input type="tel" name="mobile1" placeholder="650-867-7730">
			<input type="tel" name="mobile2" placeholder="510-219-3487">
			<input type="tel" name="mobile3" placeholder="925-264-4141"><br><br>

			<label>Email:</label>
			<input type="email" name="email1" placeholder="xxx@gmail.com">
			<input type="email" name="email2" placeholder="xxx@gmail.com">
			<input type="email" name="email3" placeholder="xxx@gmail.com"><br><br>

			<label>Nationality:</label>
			<input type="text" name="nationality1" placeholder="USA">
			<input type="text" name="nationality2" placeholder="USA">
			<input type="text" name="nationality3" placeholder="USA"><br><br>

			<label>Father's Nationality:</label>
			<input type="text" name="fathernationality1" placeholder="INDIA">
			<input type="text" name="fathernationality2" placeholder="INDIA">
			<input type="text" name="fathernationality3" placeholder="INDIA"><br><br>

			<label>Mother's Nationality:</label>
			<input type="text" name="mothernationality1" placeholder="INDIA">
			<input type="text" name="mothernationality2" placeholder="INDIA">
			<input type="text" name="mothernationality3" placeholder="INDIA"><br><br>

      <button type="submit">Submit</button>




<?php error_reporting(0); ?> 
<?php

// define file name and location
$file = 'test_data.txt';

$fp = fopen('test_data.txt', 'a');

// get form data
$care_family = $_POST['care_family'];
fwrite($fp, $care_family);
$care_member1 = $_POST['care_member1'];
$care_member2 = $_POST['care_member2'];
$care_member3 = $_POST['care_member3'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$mobile1 = $_POST['mobile1'];
$mobile2 = $_POST['mobile2'];
$mobile3 = $_POST['mobile3'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$email3 = $_POST['email3'];
$nationality1 = $_POST['nationality1'];
$nationality2 = $_POST['nationality2'];
$nationality3 = $_POST['nationality3'];
$fathers_nationality1 = $_POST['fathers_nationality1'];
$fathers_nationality2 = $_POST['fathers_nationality2'];
$fathers_nationality3 = $_POST['fathers_nationality3'];
$mothers_nationality1 = $_POST['mothers_nationality1'];
$mothers_nationality2 = $_POST['mothers_nationality2'];
$mothers_nationality3 = $_POST['mothers_nationality3'];
$care_volunteer1 = isset($_POST['care_volunteer1']) ? 'Yes' : 'No';
$care_volunteer2 = isset($_POST['care_volunteer2']) ? 'Yes' : 'No';
$care_volunteer3 = isset($_POST['care_volunteer3']) ? 'Yes' : 'No';
$care_coordinator1 = isset($_POST['care_coordinator1']) ? 'Yes' : 'No';
$care_coordinator2 = isset($_POST['care_coordinator2']) ? 'Yes' : 'No';
$care_coordinator3 = isset($_POST['care_coordinator3']) ? 'Yes' : 'No';
$care_donor1 = isset($_POST['care_donor1']) ? 'Yes' : 'No';
$care_donor2 = isset($_POST['care_donor2']) ? 'Yes' : 'No';
$care_donor3 = isset($_POST['care_donor3']) ? 'Yes' : 'No';
$preferred_rites1 = $_POST['preferred_rites1'];
$preferred_rites2 = $_POST['preferred_rites2'];
$preferred_rites3 = $_POST['preferred_rites3'];
$need_crematorium1 = isset($_POST['need_crematorium1']) ? 'Yes' : 'No';
$need_crematorium2 = isset($_POST['need_crematorium2']) ? 'Yes' : 'No';
$need_crematorium3 = isset($_POST['need_crematorium3']) ? 'Yes' : 'No';
$priest_suggestion1 = isset($_POST['priest_suggestion1']) ? 'Yes' : 'No';
$priest_suggestion2 = isset($_POST['priest_suggestion2']) ? 'Yes' : 'No';
$priest_suggestion3 = isset($_POST['priest_suggestion3']) ? 'Yes' : 'No';
fclose($fp);
?>