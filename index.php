<?php error_reporting(0); ?> 
<?php

if(isset($_POST['submit']))
{
  $member1 = $_POST['member1'];
  $member2 = $_POST['member2'];
  $member3 = $_POST['member3'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $address3 = $_POST['address3'];
  $city1 = $_POST['city1'];
  $city2 = $_POST['city2'];
  $city3 = $_POST['city3'];
  $state1 = $_POST['state1'];
  $state2 = $_POST['state2'];
  $state3 = $_POST['state3'];
  $zip1 = $_POST['zip1'];
  $zip2 = $_POST['zip2'];
  $zip3 = $_POST['zip3'];
  $mobile1 = $_POST['mobile1'];
  $mobile2 = $_POST['mobile2'];
  $mobile3 = $_POST['mobile3'];
  $email1 = $_POST['email1'];
  $email2 = $_POST['email2'];
  $email3 = $_POST['email3'];
  $nationality1 = $_POST['nationality1'];
  $nationality2 = $_POST['nationality2'];
  $nationality3 = $_POST['nationality3'];
  $fathernationality1 = $_POST['fathernationality1'];
  $fathernationality2 = $_POST['fathernationality2'];
  $fathernationality3 = $_POST['fathernationality3'];
  $mothernationality1 = $_POST['mothernationality1'];
  $mothernationality2 = $_POST['mothernationality2'];
  $mothernationality3 = $_POST['mothernationality3'];
  
  $fp = fopen('test_data.txt', 'a');
  fwrite($fp, "$member1\t$address1\t$city1\t$state1\t$zip1\t$mobile1\t$email1\t$nationality1\t$fathernationality1\t$mothernationality1\n");
  fwrite($fp, "$member2\t$address2\t$city2\t$state2\t$zip2\t$mobile2\t$email2\t$nationality2\t$fathernationality2\t$mothernationality2\n");
  fwrite($fp, "$member3\t$address3\t$city3\t$state3\t$zip3\t$mobile3\t$email3\t$nationality3\t$fathernationality3\t$mothernationality3\n");
  fclose($fp);
}

?>