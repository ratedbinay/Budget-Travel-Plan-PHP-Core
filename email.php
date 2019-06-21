<?php  
	function emailsend()
	{   
		$to_email = 'ratedbinaya@gmail.com';
		$subject = 'Refered to your site';
		$message = 'This mail is to inform you that we have referred a customer to your company';
		$headers = 'From: noreply@budgettravel.com';
		mail($to_email,$subject,$message,$headers);
	}
?>