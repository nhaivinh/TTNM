<?php
	require_once('DBconnect.php');
	function getCurrentURL(){
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$validURL = str_replace("&","&amp;",$url);
		return $validURL;
	}
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
	function getMAXIDAnimal(){
		$connect = connectDB();
		$query = "Select max(id_animal) as MAX from animal";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}	
		closeDB($connect);
		return $data[0]['MAX'];
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
		return $data[0];
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
	function getLinkDefaultPicAnimalByID($id){
		$connect = connectDB();
		$query = "Select * from picture where id_animal='".$id."' and Default_Pic='1'";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}	
		closeDB($connect);
		return $data[0]['Link_Picture'];
	}
	function getLinkPicturesAnimalByID($id){
		$connect = connectDB();
		$query = "Select * from picture where id_animal='".$id."'";
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}	
		closeDB($connect);
		return $data;
	}
	function getFavoriteList($id_user, $search_key){
		$connect = connectDB();
		$query = "SELECT * FROM `favoritelist_animal` join animal on favoritelist_animal.ID_Animal = animal.ID_Animal 
			WHERE ID_User='".$id_user."' and Ten_KH like '%".$search_key."%' or Ten_TV like '%".$search_key."%' or Ten_Local like '".$search_key."'";
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
	}
	function removeFavorite($id_user,$id_animal){
		$connect = connectDB();
		$query = "DELETE FROM `favoritelist_animal` WHERE ID_User='".$id_user."' AND ID_Animal='".$id_animal."'";
		mysqli_query(connectDB(), $query);
		closeDB($connect);
		$_SESSION['actionFavorite_status'] = "Xoá khỏi bộ sưu tập thành công";
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

	function setURLforSearchPage($search_key, $page){
		$setURL = "./search_page.php?search_key=".$search_key."&page=".$page;
		return $setURL;
	}
	function getGroupRowAtAnimalByRowName($rowName){
		$connect = connectDB();
		$query = "select ".$rowName." from animal group by ".$rowName;
		$result = mysqli_query($connect, $query);
		$data = array();
		while($row = mysqli_fetch_array($result, 1)){
			$data[] = $row;
		}
		closeDB($connect);
		return $data;
	}
	function showSearchAnimal(){
		if(isset($_GET['search_key']) && isset($_GET['page'])){
			$connect = connectDB();
			$search_key = $_GET['search_key'];			
			$gioi = $_GET['regnum'];
			$nganh = $_GET['phylum'];
			$lop = $_GET['class'];
			$bo = $_GET['ordo'];
			$ho = $_GET['familia'];
			$cur_page = $_GET['page'];	

			$query = "Select * from animal where ten_TV like '%".$search_key."%' or ten_KH like '%".$search_key."%' or ten_local like '%".$search_key."%'
				and gioi like '%".$gioi."%' and nganh like '%".$nganh."%' and lop like '%".$lop."%' and bo like '%".$bo."%' and ho like '%".$ho."%'";
			$result = mysqli_query($connect, $query);
			$total_animal = mysqli_num_rows($result);
            $total_page = ceil($total_animal/4);
			$data = array();
			while($row = mysqli_fetch_array($result, 1)){
				$data[] = $row;
			}

			echo '<div class="result_search">';
			for($i=$cur_page*4-4;$i<$cur_page*4;$i++){
				if($i < $total_animal){
					$cur_id_animal = $data[$i]['ID_Animal'];
					$link_detailpage = "detail_page.php?id_animal=".$cur_id_animal;
					$link_pic = getLinkDefaultPicAnimalByID($cur_id_animal);
					echo '<a href="'.$link_detailpage.'">';
						echo '<div class="result_search_items">';
							echo '<div class="result_search_items_img">';
								echo '<img src="'.$link_pic.'" alt="'.$data[$i]['Ten_TV'].'">';
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
					echo '</a>';
				}
				else{
					break;
				}
			}
			echo '</div>';

			$page_left = -1;
			$page_right = -1;
			if($cur_page == 1){
				$page_left = 1;
			}
			else{
				$page_left = $cur_page - 1;
			}
			if($cur_page == $total_page){
				$page_right = $cur_page;
			}
			else{
				$page_right = $cur_page + 1;
			}
			echo '<div class="page_choose">
					<ul>';
			if($total_page > 1){
				echo '
							<a href="'.setURLforSearchPage($search_key,$page_left).'">
								<li>
									<i class="arrow left"></i>
								</li>
							</a>
				';
			}
			if($cur_page < 3){
				if($total_page < 5){
					for($i=1;$i<=$total_page;$i++){
						echo '<a href="'.setURLforSearchPage($search_key,$i).'">
							<li class="pageitem" id="pageNumber'.$i.'">
								'.$i.'
							</li>
						</a>';
					}
				}
				else{
					echo '<a href="'.setURLforSearchPage($search_key,1).'">
						<li class="pageitem" id="pageNumber1">
							1
						</li>
					</a>';
					echo '<a href="'.setURLforSearchPage($search_key,2).'">
						<li class="pageitem" id="pageNumber2">
							2
						</li>
					</a>';
					echo '<a href="'.setURLforSearchPage($search_key,3).'">
						<li class="pageitem" id="pageNumber3">
							3
						</li>
					</a>';	
					echo '<a href="'.setURLforSearchPage($search_key,4).'">
						<li class="pageitem" id="pageNumber4">
							4
						</li>
					</a>';
					echo '<a href="'.setURLforSearchPage($search_key,5).'">
						<li class="pageitem" id="pageNumber5">
							5
						</li>
					</a>';
				}
				echo '<script type="text/javascript">choosePage('.$cur_page.');</script>';
			}
			else if($cur_page > $total_page-2){
				if($total_page > 4){
					echo '<a href="'.setURLforSearchPage($search_key,$total_page-4).'">
						<li class="pageitem" id="pageNumber'.($total_page-4).'">
							'.($total_page-4).'
						</li>
					</a>';
					
					echo '<a href="'.setURLforSearchPage($search_key,$total_page-3).'">
						<li class="pageitem" id="pageNumber'.($total_page-3).'">
						'.($total_page-3).'
						</li>
					</a>';
					echo '<a href="'.setURLforSearchPage($search_key,$total_page-2).'">
						<li class="pageitem" id="pageNumber'.($total_page-2).'">
						'.($total_page-2).'
						</li>
					</a>';	
					echo '<a href="'.setURLforSearchPage($search_key,$total_page-1).'">
						<li class="pageitem" id="pageNumber'.($total_page-1).'"> 
						'.($total_page-1).'
						</li>
					</a>';
					echo '<a href="'.setURLforSearchPage($search_key,$total_page).'">
						<li class="pageitem" id="pageNumber'.$total_page.'">
						'.$total_page.'
						</li>
					</a>';
					echo '<script type="text/javascript">choosePage('.$cur_page.');</script>';
				}
				else{
					for($i=1;$i<=$total_page;$i++){
						echo '<a href="'.setURLforSearchPage($search_key,$i).'">
							<li class="pageitem" id="pageNumber'.$i.'">
								'.$i.'
							</li>
						</a>';
					}
				}
			}
			else{
				echo '<a href="'.setURLforSearchPage($search_key,$cur_page-2).'">
					<li class="pageitem" id="pageNumber'.($cur_page-2).'">
						'.($cur_page-2).'
					</li>
				</a>';
				echo '<a href="'.setURLforSearchPage($search_key,$cur_page-1).'">
					<li class="pageitem" id="pageNumber'.($cur_page-1).'">
					'.($cur_page-1).'
					</li>
				</a>';
				echo '<a href="'.setURLforSearchPage($search_key,$cur_page).'">
					<li class="pageitem" id="pageNumber'.$cur_page.'">
					'.$cur_page.'
					</li>
				</a>';	
				echo '<a href="'.setURLforSearchPage($search_key,$cur_page+1).'">
					<li class="pageitem" id="pageNumber'.($cur_page+1).'">
					'.($cur_page+1).'
					</li>
				</a>';
				echo '<a href="'.setURLforSearchPage($search_key,$cur_page+2).'">
					<li class="pageitem" id="pageNumber'.($cur_page+2).'">
					'.($cur_page+2).'
					</li>
				</a>';
				echo '<script type="text/javascript">choosePage('.$cur_page.');</script>';
			}
			if($total_page > 1){
				echo '
						<a href="'.setURLforSearchPage($search_key,$page_right).'">
							<li>
								<i class="arrow right"></i>
							</li>
						</a>				
				';
			}
			echo '</ul>
				</div>';
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
