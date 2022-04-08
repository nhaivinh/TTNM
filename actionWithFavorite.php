<?php
	require_once("HTMLprocess.php");
    session_start();
    if(isset($_POST['id_user']) && isset($_POST['id_animal']) && isset($_POST['action'])){
        $id_user = $_POST['id_user'];
        $id_animal = $_POST['id_animal'];
        if($_POST['action'] == "add"){
            addToFavorite($id_user, $id_animal);
            $_SESSION['actionFavorite_status'] = "Thêm vào bộ sưu tập thành công";
            header("Location: detail_page.php?id_animal=".$id_animal);
        }
        if($_POST['action'] == "remove"){
            removeFavorite($id_user, $id_animal);
            $_SESSION['actionFavorite_status'] = "Xoá khỏi bộ sưu tập thành công";
            header("Location: detail_page.php?id_animal=".$id_animal);
        }
    }
    else{
        header("Location: main_page.php");
    }
?>