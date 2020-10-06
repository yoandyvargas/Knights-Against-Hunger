<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['first_name'];
		$mailFrom = $_POST['email'];
		$message = $_POST['message'];

		$mailTo = "sanchezjessica1992@knights.ucf.edu";
		$headers = "From: Knights against Hunger";
		$txt = "You have received an email from ".$name."(".$mailFrom.").\n\n".$message."\n\n";
		mail($mailTo, $txt, $headers);
		header("Location: about.php?mailsent");
	}

?>
