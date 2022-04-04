<?php
	require_once('DBconnect.php');
	function getIDUserByUsername($username){
		$connect = connectDB();
		$query = "Select ID_User from user_account where username='".$username."'";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}
		closeDB($connect);
		return $data[0]['ID_User'];
	}
	function getAnimalByID($id){
		$connect = connectDB();
		$query = "Select * from animal where id_animal='".$id."'";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}	
		closeDB($connect);
		return $data;
	}
	function getCoordinateAnimalByID($id){
		$connect = connectDB();
		$query = "Select * from coordinate where id_animal='".$id."'";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}	
		closeDB($connect);
		return $data;
	}
	function getFavoriteList($id_user){
		$connect = connectDB();
		$query = "Select * from favoritelist_animal where ID_user='".$id_user."'";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}
		closeDB($connect);
		return $data;
	}
	function addToFavorite($id_user,$id_animal){
		$connect = connectDB();
		$query = "INSERT INTO `favoritelist_animal` (`ID_User`, `ID_Animal`) VALUES ('".$id_user."', '".$id_animal."');";
		mysqli_query(connectDB(), $query);
		closeDB($connect);
		$_SESSION['addFavorite_success'] = "Thêm vào thư viện thành công";
	}
	function removeFavorite($id_user,$id_animal){
		$connect = connectDB();
		$query = "DELETE FROM `favoritelist_animal` WHERE ID_User='".$id_user."' AND ID_Animal='".$id_animal."'";
		mysqli_query(connectDB(), $query);
	}
	function isFavorite($id_user, $id_animal){
		$connect = connectDB();
		$query = "Select count(*) as SL from favoritelist_animal where ID_user='".$id_user."' and id_animal='".$id_animal."'";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}
		closeDB($connect);
		if($data[0]['SL'] > 0) return true;
		else return false;
	}

	function showSearchAnimal(){
		if(isset($_GET['search_key'])){
			$connect = connectDB();
			$search_key = $_GET['search_key'];
			
			//Lay so luong animal
			/*
			$query = "Select count(*) as amount from animal where ten_TV like '%".$search_key."%' or ten_KH like '%".$search_key."%' or ten_local like '%".$search_key."%'";
			$result = mysqli_query($connect, $query);
			$data = array();
			while($row = mysqli_fetch_array($result, 1)){
				$data[] = $row;
			}
			$amount = $data[0]['amount'];  
			$so_hang = ceil($amount/4);
			*/
			
			//Lay thong tin animal
			$query = "Select * from animal where ten_TV like '%".$search_key."%' or ten_KH like '%".$search_key."%' or ten_local like '%".$search_key."%'";
			$result = mysqli_query($connect, $query);
			$data = array();
			while($row = mysqli_fetch_array($result, 1)){
				$data[] = $row;
			}
			
			for($i=0;$i<count($data);$i++){
				echo '<div class="result_search_items">';
					echo '<div class="result_search_items_img">';
						echo '<img src="./img/tiger.jpg" alt="tiger">';
					echo '</div>';
						
					echo '<div class="result_search_items_title">';
							if(isset($_SESSION['username'])){
								$username = $_SESSION['username'];
								if(isFavorite(getIDUserByUsername($username),$data[$i]['ID_Animal'])) 
									echo '<span class="result_search_items_title_text_owned">'.$data[$i]['Ten_TV'].'</span>';
								else 
									echo '<span class="result_search_items_title_text_not_owned">'.$data[$i]['Ten_TV'].'</span>';
							}
							else{
								echo '<span class="result_search_items_title_text">'.$data[$i]['Ten_TV'].'</span>';
							}
					echo '</div>';
					echo '<div class="result_search_items_content">';
						echo '<span class="result_search_items_content_texts">'.$data[$i]['Hinhthai'].'</span>';
					echo '</div>';
				echo '</div>';
			
			}
			
			closeDB($connect);
		}
	}
	function showFavoriteAnimal(){
		if(isset($_SESSION['username'])){
			$username = $_SESSION['username'];
			$user_id = getIDUserByUsername($username);
			$connect = connectDB();
			$query = "SELECT * FROM `animal` join favoritelist_animal on animal.ID_Animal=favoritelist_animal.ID_Animal WHERE id_user='".$user_id."'";
			$result = mysqli_query($connect, $query);
			$data = array();
			while($row = mysqli_fetch_array($result, 1)){
				$data[] = $row;
			}
			
		}
	}
?>
