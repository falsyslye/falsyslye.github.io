<?php 
	echo $_POST['sendTo'] + '\n' + $_POST['theme'] + '\n' + $_POST['message'];
	mail($_POST['sendTo'], $_POST['theme'], $_POST['message']); 
?>