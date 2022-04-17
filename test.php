<?php
	require_once('HTMLprocess.php');
	if(isset($_GET['regnum'])){
		echo $_GET['regnum']. "   ";
		echo $_GET['phylum']. "   ";
		echo $_GET['class']. "   ";
		echo $_GET['ordo']. "   ";
		echo $_GET['familia']. "   ";
	}
?>