<?php
	session_start();
	require_once('HTMLprocess.php');
	require_once('DBprocess.php');
	if(isset($_POST['username']) && isset($_POST['password'])){
		login();	
	}
	/*
	if(!isset($_SESSION['username'])){
		$_SESSION['username'] = ' ';
	}
	*/
?>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="./CSS/login.CSS">
		<link rel="stylesheet" href="./CSS/register.css">
		<?php
			if(isset($_SESSION['username'])){
				echo '<link rel="StyleSheet" href="./CSS/search_page_logged.css">';
			}
			else echo '<link rel="StyleSheet" href="./CSS/search_page_guest.css">';
		?>
        <title>Trang tìm kiếm</title>
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
                <form action="" method="GET">
                    <div class="input_search">
                        <input type="search" name="search_key" placeholder="NHẬP GÌ ĐÓ">
                    </div>                   
                    <div class="button_search">
                        <input type="submit" name="search" value="TÌM KIẾM">
                    </div> 
                </form>
            </div>
        </div>
        <div class="search_content">
            <div class="search_content_img"></div>
            <div class="search_content_title">               
                <span class="search_content_title_texts">
					<?php
						if(isset($_GET['search_key'])){
							if(!empty($_GET['search_key'])){
								echo 'Kết quả tìm kiếm cho "'.$_GET['search_key'].'"';
							}
							else{
								echo '""';
							}
						}
					?>
				</span>
            </div>
            <form action="" method="GET">
                <div class="input_content_search">
                    <input type="search" name="search_key" placeholder="NHẬP GÌ ĐÓ">
                </div>                   
                <div class="content_search_button">
                    <input type="submit" value="TÌM KIẾM">
                </div> 
                <div class="extend_button">
                    <input type="submit"value="NÂNG CAO">
                </div> 
            </form>
            <div class="result_search">
				<?php
					$data = array("true","false","false","false");
					for($i=0;$i<count($data);$i++){
					echo '<div class="result_search_items">';
						echo '<div class="result_search_items_img">';
							echo '<img src="./img/tiger.jpg" alt="tiger">';
						echo '</div>';
						
						echo '<div class="result_search_items_title">';
								if(isset($_SESSION['username'])){
									if($data[$i] == "true") echo '<span class="result_search_items_title_text_owned">Hổ rừng</span>';
									else echo '<span class="result_search_items_title_text_not_owned">Hổ rừng</span>';
								}
								else{
									echo '<span class="result_search_items_title_text">Hổ rừng</span>';
								}
						echo '</div>';
						echo '<div class="result_search_items_content">';
							echo '<span class="result_search_items_content_texts">
								Phần lớn các loài hổ sống trong rừng và đồng cỏ (những khu vực mà khả năng ngụy trang của chúng phù hợp nhất). Trong số các loài mèo lớn, chỉ có hổ và báo đốm là bơi giỏi, và thông thường người ta hay thấy hổ tắm trong ao, hồ và sông. Hổ kém mèo nhà và báo hoa mai về khả năng leo trèo. Hổ đi săn đơn lẻ, thức ăn của chúng chủ yếu là các động vật ăn cỏ cỡ trung bình như hươu, nai, lợn rừng, trâu, v.v. Tuy nhiên chúng cũng có thể bắt các loại mồi cỡ to hay nhỏ hơn nếu hoàn cảnh cho phép.
								</span>';
						echo '</div>';
					echo '</div>';
					}
				?>
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