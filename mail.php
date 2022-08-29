<?php 

//print_r($_REQUEST);

if(isset($_REQUEST['contact_submit'])){

 $maillayout=" <b> Booking Detail From Website - Traveldestny</b> <br />
 Name :  ".$_REQUEST['name']."  <br />
 E-Mail :  ".$_REQUEST['email']."  <br />
 Mobile No. :  ".$_REQUEST['phone']."  <br />
 Date :  ".$_REQUEST['date']."  <br />
 Destination : ".$_REQUEST['message']."
   ";

$to="info@traveldestny.in";

$subject = "".$_REQUEST['name']." Fill Booking Form On Website - Traveldestny";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Rajasthan Tour Package <info@traveldestny.in>' . "\r\n";

$mail = mail($to,$subject,$maillayout,$headers);

if($mail){
 
  header('location:thanks.html');
}
 
   

} 

?>