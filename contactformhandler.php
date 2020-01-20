<?php
    $name = $_POST['name']; 
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $mail_to = 'jaydon.farao11@gmail.com';
    $email_subject = 'New Form Submission'.$name;

    $email_body = "User Name: $name. \n".
    $email_body =     "User Email: $visitor_email.\n".
    $email_body =         "User Message: $message. \n";

    $headers = 'From: '.$visitor_email "\r\n";
    $headers = 'Reply to: '.$visitor_email "\r\n";

    $mail_status = mail($mail_to, $email_subject, $email_body, $headers);
    
    
f ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Sucess Message');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Error Message');
		window.location = 'index.html';
	</script>
<?php
}
?>
