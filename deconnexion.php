<?php
	session_start();	
	unset($_SESSION['user'], $_SESSION['admin'], $_SESSION['objUser'], $_SESSION['access']);
	header('Location:index.php?co=dc');