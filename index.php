<?php 
	require 'fb.php';

	if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])){

		$res = $fb->get('/me?fields=email,name,id', $_SESSION['fb_access_token']);
		$res = json_decode($res->getBody());

		echo "Logado como: ".$res->name. "<br />";
		echo "Email: ".$res->email;
		echo "<br/><a href='sair.php'>Sair</a>";

	}else{
		header("location:login.php");
	}
?>

