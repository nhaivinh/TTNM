<?php
	session_start();
	require_once('HTMLprocess.php');
	require_once('DBprocess.php');
	if(isset($_POST['username']) && isset($_POST['password'])){
		login();	
	}
	if(isset($_POST['id_animal'])){
		$id_animal = (int) $_POST['id_animal'];
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
                <form action="" method="POST">
                    <div class="input_search">
                        <input type="search" name="search" placeholder="NHẬP GÌ ĐÓ">
                    </div>                   
                    <div class="button_search">
                        <input type="submit" name="search" value="TÌM KIẾM">
                    </div> 
                </form>
            </div>
        </div>
        <form action="" method="POST">
            <div class="basic_info">
                <div class="img_animal">
                    <img src="./img/tiger.jpg" alt="tiger">
                </div>
				
                <div class="info_animal">
                    <span class="vie_animal_name">
                        Hổ
                    </span>
                    <span class="eng_animal_name">
                        Panthera Tigris
                    </span>
                    <div class="status_animal_title">
                        <span>
                            TÌNH TRẠNG SỞ HỮU
                        </span>
                        <br>
						<?php
							if(isset($_SESSION['username'])){
								$collectionStatus = 'OWNED';
								if($collectionStatus == 'OWNED') echo '<span class="status_animal_on">ĐÃ SỞ HỮU</span>';
								else echo '<span class="status_animal_off">CHƯA SỞ HỮU</span>';
							}
							else echo '<span class="status_animal">CHƯA RÕ</span>';
						?>
                    </div>
                    <div>
                        <button class="add_button">THÊM VÀO THƯ VIỆN</button>
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
                    <span class="science_info_content_texts">Animalia</span>
                    <br>
                    <span class="science_info_content_texts">Chordata</span>
                    <br>
                    <span class="science_info_content_texts">Mammalia</span>
                    <br>
                    <span class="science_info_content_texts">Felidae</span>
                    <br>
                    <span class="science_info_content_texts">Panthera Tigris</span>
                </div>
            </div>
            <div class="location_info">
                <div class="location_info_title">
                    <span class="location_info_title_texts">
                        VỊ TRÍ
                    </span>
                </div>
                <div class="location_info_content_text">
                    <span class="location_info_context_text_texts">
                        Mỹ Tú, Sóc Trăng
                    </span>
                </div>
                <div class="location_info_content_number">
                    <span class="location_info_content_number_texts">9.571639 N, 105.748757 E</span>
                    <span class="location_info_content_number_texts">9.563858 N, 105.742898 E</span>
                    <span class="location_info_content_number_texts">9.572843 N, 105.745688 E</span>
                    <span class="location_info_content_number_texts">9.571639 N, 105.748757 E</span>
                    <span class="location_info_content_number_texts">9.571639 N, 105.748757 E</span>
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
                        Nguy cơ tuyệt chủng
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
                    <span class="ecological_info_content_item">Trong hang</span>
                </div>
                <div class="valuable_info_title">
                    <span class="valuable_info_title_item">Giá trị</span>
                </div>
                <div class="valuable_info_content">
                    <span class="valuable_info_content_item">Chưa rõ</span>
                </div>
            </div>
            <div class="morphological_info_title">
                <span class="morphological_info_title_item">Đặc điểm hình thái</span>
            </div>
            <div class="morphological_info_content">
                <span class="morphological_info_content_item">Thông tin đặc điểm hình thái</span>
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
?>