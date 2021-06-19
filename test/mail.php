<?php     
$to_email = 'siva.vgs@mailsac.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: siva123@mailsac.com';
$send_mail = mail($to_email,$subject,$message,$headers);
if($send_mail){
	echo "success";
}else{
	echo "failed";
}
?>