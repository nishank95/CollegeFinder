<?php

$mail = "nishanksamant95@gmail.com";

if($_POST['message']) {
        $message = "<h2>Hello here is a message from ".$_SERVER['SERVER_NAME']."</h2><hr>
					<p><strong>Name:</strong> ".$_POST['name']."</p>
					<p><strong>Email:</strong> ".$_POST['email']."</p>
					<p><strong>Message:</strong> ".$_POST['message']."</p>";
		$subject="Premium template message: ".$_POST['subject'];
		mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
		echo "<script type='text/javascript'>alert('You have sucessfully Sent Your Feedback !! We will reach you soon');</script>'";
}
?> 