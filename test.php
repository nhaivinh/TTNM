<?php
	require_once('HTMLprocess.php');
	if(!isset($_GET['search_key'])){
		$_GET['search_key'] = ' ';
	}
	if(!isset($_GET['page'])){
		$_GET['page'] = '1';
	}
	showSearchAnimal();
?>
<script>
	function choosePage(index){
		strPage = "page" + index;
		document.getElementById(strPage).classList.add("current");
	}
</script>