<?php

// define file name and location
$file = 'test_data.txt';

// get form data
$care_family = $_POST['care_family'];
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

?>