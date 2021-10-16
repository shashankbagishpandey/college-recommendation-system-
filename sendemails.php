<?php

$to_email="";
$subject="";
$body="";
$headers="";

if(mail($to_email,$subject,$body,$headers)){
	echo "EMAil successfully send  to $to_mail";

}
else{
	echo"error";
}
?>