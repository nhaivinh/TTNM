<?php
	require_once('HTMLprocess.php');
	$_POST['id_animal'] = '12';
	if(isset($_POST['id_animal'])){
		echo $_POST['id_animal'];
		$id_animal = (int) $_POST['id_animal'];
		echo $id_animal;
		if($id_animal != 0){
			$animal_detail = getAnimalByID($_POST['id_animal']);
		}
		else{
			$alert = "<script>alert('ID_Animal không hợp lệ');</script>";
			echo $alert;
		}
	}
	else{
		$alert = "<script>alert('Hãy chọn con vật bạn cần biết thêm thông tin');</script>";
		echo $alert;
		//header("Location: search_page.php");	
	}
?>