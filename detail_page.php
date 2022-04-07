<?php
	require_once('HTMLprocess.php');
	require_once('DBprocess.php');
	if(isset($_POST['username']) && isset($_POST['password'])){
		login();	
	}
    $animal_detail = array();
    $animal_coordinate = array();
	if(isset($_GET['id_animal'])){
		$id_animal = (int) $_GET['id_animal'];
		if($id_animal != 0 && $id_animal <= getMAXIDAnimal()){
			$animal_detail = getAnimalByID($id_animal);
            $animal_coordinate = getCoordinateAnimalByID($id_animal);
		}
		else{
			$_SESSION['detail_page_status'] = "ID_Animal không hợp lệ xin hãy chọn lại";
		    header("Location: search_page.php?search_key=&page=1");
		}
	}
	else{
        $_SESSION['detail_page_status'] = "Hãy chọn con vật mà muốn biết thêm thông tin";
		header("Location: search_page.php?search_key=&page=1");	
	}
?>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="./CSS/login.CSS">
		<link rel="stylesheet" href="./CSS/register.css">
		<?php
			if(isset($_SESSION['username'])){
				echo '<link rel="StyleSheet" href="./CSS/detail_page_logged.css">';
			}
			else echo '<link rel="StyleSheet" href="./CSS/detail_page_guest.css">';
		?>
        <title>Trang chi tiết</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
		<script>
			function openPopup(){
				document.getElementById("hidden-popup").classList.remove("hidden");
				document.getElementById("hidden-login").classList.remove("hidden");
			}

			function openRegister(){
				document.getElementById("hidden-register").classList.remove("hidden");
				document.getElementById("hidden-login").classList.add("hidden");
			}

			function openLogin(){
				document.getElementById("hidden-login").classList.remove("hidden");
				document.getElementById("hidden-register").classList.add("hidden");
			}

			function closeLogin(){
				document.getElementById("hidden-popup").classList.add("hidden");
				document.getElementById("hidden-login").classList.add("hidden");
			}

			function closeRegister(){
				document.getElementById("hidden-popup").classList.add("hidden");
				document.getElementById("hidden-register").classList.add("hidden");
			}

            function addFavorite(){
                <?php
                    /*
                    if(isset($_SESSION['username']) && isset($_GET['id_animal'])){
                        $id_user = getIDUserByUsername($_SESSION['username']);
                        $id_animal = $_GET['id_animal'];
                        addToFavorite($id_user,$id_animal);
                        header("Location:");
                    } 
                    */
                ?>
            }
		</script>
		<div class="login-container hidden" id="hidden-popup">
			<div class="login-popup hidden" id="hidden-login">
				<img src="./img/logo.png" alt="logo" class="login-logo">
				<form action="" method="POST" class="login-input-container">
					<input type="username" class="login-input" name="username" pattern="[a-zA-Z0-9]+$" placeholder="Tên người dùng">
					<input type="password" class="login-input" name="password" placeholder="Mật khẩu">
					<input type="submit" value="ĐĂNG NHẬP" class="login-login-btn">
				</form>
				<p class="login-forgot-password">Quên mật khẩu?</p>
				<p class="login-no-account">Bạn là người dùng mới? <button onclick="openRegister()">Tạo tài khoản</button></p>
				<button class="exit-btn" onClick="closeLogin()"><img src="./img/x_button.png" alt="exit-btn" style="width: 100px;"></button>
			</div>
			<div class="register-popup hidden" id="hidden-register">
				<img src="./img/logo.png" alt="logo" class="register-logo">
				<form action="register.php" method="POST" class="register-input-container">
					<input type="username" class="register-input" name="username" pattern="[a-zA-Z0-9]+$" placeholder="Tên người dùng">
					<input type="email" class="register-input" name="email" placeholder="Email">
					<input type="password" class="register-input" name="password" placeholder="Mật khẩu">
					<input type="password" class="register-input" name="retypePass" placeholder="Nhập lại mật khẩu">
					<input type="submit" value="ĐĂNG KÝ" class="register-register-btn">
				</form>
				<p class="register-no-account">Bạn đã có tài khoản? <button onclick="openLogin()">Đăng nhập</button></p>
				<button class="exit-btn" onClick="closeRegister()"><img src="./img/x_button.png" alt="exit-btn" style="width: 100px;"></button>
			</div>
		</div>
        <div class="navigator_bar">
            <div class="navigator_bar_item">
                <a href="main_page.php" class="logo">
                    <img src="./img/logo.png" alt="logo">
                </a>
                <a href="" class="guide">HƯỚNG DẪN</a>
                <a href="" class="aboutus">VỀ CHÚNG TÔI</a>
                <?php
					if(isset($_SESSION['username'])){
						echo '<a href="./collection.php" class="collection">BỘ SƯU TẬP</a>';
						echo '<a href="./logout.php" class="logout">ĐĂNG XUẤT</a>';
					}
					else{
						echo '<button class="login" onclick="openPopup()">ĐĂNG NHẬP</button>';
					}
				?>
                <form action="search_page.php" method="GET">
                    <div class="input_search">
                        <input type="search" name="search_key" placeholder="NHẬP GÌ ĐÓ">
                    </div>                   
                    <div class="button_search">
                        <input type="submit" value="TÌM KIẾM">
                    </div> 
                </form>
            </div>
        </div>
        <form action="addFavorite.php" id="frmAddFavorite" method="POST">
            <?php
            if(isset($_SESSION['username'])){
                $id_user =  getIDUserByUsername($_SESSION['username']);
                $id_animal = $_GET['id_animal'];
                echo '<input type="text" name="id_user" class="input hidden" value="'.$id_user.'">
                    <input type="text" name="id_animal" class="input hidden" value="'.$id_animal.'">
                ';
            }
            ?>
            <div class="basic_info">
                <div class="img_animal">
                    <img src="<?php echo getLinkDefaultPicAnimalByID($_GET['id_animal']) ?>" alt="<?php echo $animal_detail['Ten_TV'] ?>">
                </div>
				
                <div class="info_animal">
                    <span class="vie_animal_name">
                        <?php echo $animal_detail['Ten_TV'] ?>
                    </span>
                    <span class="eng_animal_name">
                        <?php echo $animal_detail['Ten_KH'] ?>
                    </span>
                    <div class="status_animal_title">
                        <span>
                            TÌNH TRẠNG SỞ HỮU
                        </span>
                        <br>
						<?php
							if(isset($_SESSION['username'])){
                                $id_animal = (int) $_GET['id_animal'];
                                $id_user = getIDUserByUsername($_SESSION['username']);
								if(isFavorite($id_user, $id_animal)) echo '<span class="status_animal_on">ĐÃ SỞ HỮU</span>';
								else echo '<span class="status_animal_off">CHƯA SỞ HỮU</span>';
							}
							else echo '<span class="status_animal">CHƯA RÕ</span>';
						?>
                    </div>
                    <div>
                        <button type="button" class="add_button" onClick="<?php if(isset($_SESSION['username'])) echo 'document.getElementById(\'frmAddFavorite\').submit();'; else echo 'openPopup()';?>">
                            THÊM VÀO THƯ VIỆN
                        </button>
                    </div>    
                    <div>
                        <button class="share_button">CHIA SẺ</button>
                    </div> 
                </div>
            </div>
        </form>

        <div class="detail_info">
            <div class="science_info">
                <div class="science_info_text">
                    <span class="science_info_text_texts">Thông tin khoa học</span>
                </div>               
                <div class="science_info_title">
                    <span class="science_info_title_texts">Giới</span>
                    <br>
                    <span class="science_info_title_texts">Ngành</span>
                    <br>
                    <span class="science_info_title_texts">Lớp</span>
                    <br>
                    <span class="science_info_title_texts">Bộ</span>
                    <br>
                    <span class="science_info_title_texts">Họ</span>
                    <br>
                    <span class="science_info_title_texts">Tên Khoa Học</span>
                </div>
                <div class="science_info_content">
                    <span class="science_info_content_texts"><?php echo $animal_detail['Gioi'] ?></span>
                    <br>
                    <span class="science_info_content_texts"><?php echo $animal_detail['Nganh'] ?></span>
                    <br>
                    <span class="science_info_content_texts"><?php echo $animal_detail['Lop'] ?></span>
                    <br>
                    <span class="science_info_content_texts"><?php echo $animal_detail['Bo'] ?></span>
                    <br>
                    <span class="science_info_content_texts"><?php echo $animal_detail['Ho'] ?></span>
                    <br>
                    <span class="science_info_content_texts"><?php echo $animal_detail['Ten_KH'] ?></span>
                </div>
            </div>
            <div class="location_info">
                <div class="location_info_title">
                    <span class="location_info_title_texts">
                        VỊ TRÍ
                    </span>
                </div>
                <div class="location_info_content_text">
                    <span class="location_info_context_text_texts"> <?php echo $animal_detail['Diadiem'] ?></span>
                </div>
                <div class="location_info_content_number">
                    <?php
                        for($i=0;$i<count($animal_coordinate);$i++){
                            echo '<span class="location_info_content_number_texts">
                                    '.$animal_coordinate[$i]['Vido'].', '.$animal_coordinate[$i]['Kinhdo'].'
                                </span>';
                        }
                    ?>
                </div>
            </div>
            <div class="maintain_status">
                <div class="maintain_status_title">
                    <span class="maintain_status_title_texts">
                        TÌNH TRẠNG BẢO TỒN
                    </span>
                </div>
                <div class="maintain_status_content">
                    <span class="maintain_status_content_texts">
                        <?php echo $animal_detail['Tinhtrang'] ?>
                    </span>
                </div>
            </div>
            <div class="map">
                <img src="./img/map.png" alt="map">
            </div>
        </div>
        <div class="extra_info">
            <div class="fact_info">
                <span class="fact_info_item">Các sự thật</span>
                <div class="ecological_info_title">
                    <span class="ecological_info_title_item">Sinh thái</span>
                </div>
                <div class="ecological_info_content">
                    <span class="ecological_info_content_item"><?php echo $animal_detail['Moitruong_song'] ?></span>
                </div>
                <div class="valuable_info_title">
                    <span class="valuable_info_title_item">Giá trị</span>
                </div>
                <div class="valuable_info_content">
                    <span class="valuable_info_content_item"><?php echo $animal_detail['Giatri_sudung'] ?></span>
                </div>
            </div>
            <div class="morphological_info_title">
                <span class="morphological_info_title_item">Đặc điểm hình thái</span>
            </div>
            <div class="morphological_info_content">
                <span class="morphological_info_content_item"><?php echo $animal_detail['Hinhthai'] ?></span>
            </div>
        </div>
        <div class="video">
            <div class="video_title">
                <span class="video_title_item">VIDEO</span>
            </div>
            <div class="video_content">
                <img src="./img/video_tiger.png" alt="video_tiger">
            </div>
        </div>
    </body>
    <footer>
        <div class="content_footer">
            <div class="logo_footer">
                <img src="./img/logo.png" alt="logo">
            </div>
        <form action="" method="POST">
            <div class="search_bar_footer">
                <div class="input_search_footer">
                    <input type="search" name="search" placeholder="NHẬP GÌ ĐÓ">
                </div>                     
            </div>
            <div class="button_search_footer">
                <input type="submit" name="search" value="TÌM KIẾM">
            </div> 
        </form>
        </div>
        <div class="copyright">
            <div class="copyright_content">
                <span class="copyright_content_item">Copyright ©2022 VINZ</span>
            </div>
        </div>
    </footer>
</html>

<?php
	if(isset($_SESSION['logout_success'])){
		$alert = "<script>alert('".$_SESSION['logout_success']."');</script>";
		echo $alert;
		unset($_SESSION['logout_success']);
	}
	if(isset($_SESSION['login_status'])){
		$alert = "<script>alert('".$_SESSION['login_status']."');</script>";
		echo $alert;
		unset($_SESSION['login_status']);
	}
    if(isset($_SESSION['addFavorite_status'])){
		$alert = "<script>alert('".$_SESSION['addFavorite_status']."');</script>";
		echo $alert;
		unset($_SESSION['addFavorite_status']);
	}
?>