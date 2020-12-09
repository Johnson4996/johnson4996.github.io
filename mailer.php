<?
$subject ="Contact Form Submission";
$to="shjohnson4996@gmail.com, shjohnson4996@gmail.com";
$msg="\n <strong>Contact Information</strong> <br><br><br>";  
$msg.="\n <strong>Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;  " .$_POST["name"]."\n <br><br>";
$msg.="\n <strong>Address:</strong>&nbsp;  " .$_POST["address"]. "\n <br><br>";
$msg.="\n <strong>Email:</strong>&nbsp;&nbsp;&nbsp;&nbsp;  " .$_POST["email"]."\n <br><br>";
$msg.="\n <strong>Phone:</strong>&nbsp;&nbsp;&nbsp;  " .$_POST["phone"]."\n <br><br>";
$msg.="\n <strong>Message:</strong>&nbsp;&nbsp;  " .$_POST["message"]. "\n";


$mailheaders = "From: ".$_POST["email"]."\n" .
       'X-Mailer: PHP/' . phpversion() . "\n" .
       "MIME-Version: 1.0\n" .
       "Content-Type: text/html; charset=utf-8\n" .
       "Content-Transfer-Encoding: 8bit\n";

if ($trueBool = mail($to, $subject, $msg, $mailheaders)) {
	echo "<script>alert('Message Successfully Submitted')</script>";
	echo "<script>location.href='index.html'</script>";
}
else {
	echo "<script>alert('Message Sent Failed')</script>";
	echo "<script>location.href='index.html'</script>";
}

?>
