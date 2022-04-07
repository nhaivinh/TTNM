<?php
	require_once("DBprocess.php");
    if(isset($_POST['id_user']) && isset($_POST['id_animal'])){
	    addFavorite($_POST['id_user'], isset($_POST['id_animal']);
        $_SESSION['addFavorite_status'] = "Thêm yêu thích thành công";
        header("Location: detail_page.php?id_animal=".$_POST['id_animal']);
    }
?>