<?php
	require_once('DBprocess.php');
	require_once("HTMLprocess.php");
	if(isset($_POST['username']) && isset($_POST['password']) && !isset($_POST['email']) && !isset($_POST['retypePass'])){
		login();	
	}
	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['retypePass'])){
		register();	
	}
?>

<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="./CSS/advance_search.css">
		<link rel="stylesheet" href="./CSS/login.CSS">
		<link rel="stylesheet" href="./CSS/register.css">
		
		<?php
			if(isset($_SESSION['username'])){
				echo '<link rel="StyleSheet" href="./CSS/main_page_logged.css">';
			}
			else echo '<link rel="StyleSheet" href="./CSS/main_page_guest.css">';
		?>
		
        <title>Trang chủ</title>
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

			function openPopupAdvanceSearch(){
				document.getElementById("hidden-popup-advance-search").classList.remove("hidden");
				document.getElementById("hidden-advance-search").classList.remove("hidden");
			}

			function openAdvanceSearch(){
				document.getElementById("hidden-advance-search").classList.remove("hidden");
			}

			function closeLogin(){
				document.getElementById("hidden-popup").classList.add("hidden");
				document.getElementById("hidden-login").classList.add("hidden");
			}

			function closeRegister(){
				document.getElementById("hidden-popup").classList.add("hidden");
				document.getElementById("hidden-register").classList.add("hidden");
			}

			function closeAdvanceSearch(){
				document.getElementById("hidden-popup-advance-search").classList.add("hidden");
				document.getElementById("hidden-advance-search").classList.add("hidden");
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
				<form action="" method="POST" class="register-input-container">
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

		
		<div class="advance-search-container hidden" id="hidden-popup-advance-search">
			<div class="advance-search-popup hidden" id="hidden-advance-search">
				<img src="./img/logo.png" alt="logo" class="advance-search-logo">
				<form action="search_page.php" method="GET">
					<div class="advance-search-input-container">
					<div class="regnum">
						<div class="select-dropdown">
							<select name="regnum" id="regnum">
								<option value="">Tất cả</option>
								<?php
									$gioi = getGroupRowAtAnimalByRowName("Gioi");
									for($i=0;$i<count($gioi);$i++){
										echo '<option value="'.$gioi[$i]['Gioi'].'">'.$gioi[$i]['Gioi'].'</option>';
									}
								?>
							</select>
						</div> 
					</div> 
					<div class="phylum">               
						<div class="select-dropdown">
							<select name="phylum" id="phylum">
								<option value="">Tất cả</option>
								<?php
									$nganh = getGroupRowAtAnimalByRowName("Nganh");
									for($i=0;$i<count($nganh);$i++){
										echo '<option value="'.$nganh[$i]['Nganh'].'">'.$nganh[$i]['Nganh'].'</option>';
									}
								?>
							</select>
						</div>
					</div> 
					<div class="class">
						<div class="select-dropdown">
							<select name="class" id="class">
								<option value="">Tất cả</option>
								<?php
									$lop = getGroupRowAtAnimalByRowName("Lop");
									for($i=0;$i<count($lop);$i++){
										echo '<option value="'.$lop[$i]['Lop'].'">'.$lop[$i]['Lop'].'</option>';
									}
								?>
							</select>
						</div> 
					</div>  
					<div class="ordo">
						<div class="select-dropdown">
							<select name="ordo" id="ordo">
								<option value="">Tất cả</option>
								<?php
									$bo = getGroupRowAtAnimalByRowName("Bo");
									for($i=0;$i<count($bo);$i++){
										echo '<option value="'.$bo[$i]['Bo'].'">'.$bo[$i]['Bo'].'</option>';
									}
								?>
							</select>
						</div>
					</div> 
					<div class="familia">
						<div class="select-dropdown">
							<select name="familia" id="familia">
								<option value="">Tất cả</option>
								<?php
									$ho = getGroupRowAtAnimalByRowName("Ho");
									for($i=0;$i<count($ho);$i++){
										echo '<option value="'.$ho[$i]['Ho'].'">'.$ho[$i]['Ho'].'</option>';
									}
								?>
							</select>
						</div>  
					</div>                                     
					<div class="input_advance_search">
						<input type="search" name="search_key" placeholder="Tìm kiếm ....">
					</div>                   
					<div class="button_advance_search">
						<input type="submit" value="Áp Dụng">
					</div>  
					<div class="button_cancel">
						<input type="button" onClick="closeAdvanceSearch()" value="Huỷ">
					</div>           
					</div>      
				</form>
				<button class="exit-btn-advance-search" onClick="closeAdvanceSearch()"><img src="./img/x_button.png" alt="exit-btn" style="width: 100px;"></button>
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
        <div class="page_content">
            <div class="intro_header">
                <!-- <img src="./img/header.png"> -->
				<div id="slideshow">
					<div class="slide-wrapper">
						<?php
							$maxID = getMAXIDAnimal();
							$randomIndex = 0;
							while($randomIndex == 0 || $randomIndex == 15){
								$randomIndex = rand(1, $maxID);
							}
							echo '<a href="detail_page.php?id_animal='.$randomIndex.'">';
							$data = getLinkPicturesAnimalByID($randomIndex);
							for($i=0;$i<count($data);$i++){
								echo '<div class="slide"><img src="'.$data[$i]['Link_Picture'].'"></div>';
							}
							echo '</a>';
						?>
					</div>
				</div>
                <span class="intro_header_text">TÌM HIỂU VỀ ĐỘNG VẬT NGAY !!!</span>
            </div>
            <form action="search_page.php" method="GET">
                <div class="input_content_search">
                    <input type="search" name="search_key" placeholder="NHẬP GÌ ĐÓ">
                </div>                   
                <div class="content_search_button">
                    <input type="submit" value="TÌM KIẾM">
                </div> 
			</form>
            <div class="extend_button">
				<button class="extend_button_button" onclick="openPopupAdvanceSearch()">NÂNG CAO</button>
            </div>            
            <div class="intro_video">
                <img src="./img/video.png">
            </div>
        </div>
    </body>
    <footer>
        <div class="content_footer">
            <div class="logo_footer">
                <img src="./img/logo.png" alt="logo">
            </div>
        <form action="search_page.php" method="GET">
            <div class="search_bar_footer">
                <div class="input_search_footer">
                    <input type="search" name="search_key" placeholder="NHẬP GÌ ĐÓ">
                </div>                     
            </div>
            <div class="button_search_footer">
                <input type="submit" value="TÌM KIẾM">
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
	if(isset($_SESSION['register_status'])){
		$alert = "<script>alert('".$_SESSION['register_status']."');</script>";
		echo $alert;
		unset($_SESSION['register_status']);
	}
	if(isset($_SESSION['collection_status'])){
		$alert = "<script>alert('".$_SESSION['collection_status']."');</script>";
		echo $alert;
		unset($_SESSION['collection_status']);
	}
?>