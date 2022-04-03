<html>
    <head>
        <meta charset="utf-8">
        <link rel="StyleSheet" href="./CSS/login_origin.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>Trang đăng nhập</title>
    </head>
    <body>
        <div class="formExit">
            <a href="">
                <img src="./img/x_button.png" alt="exit_button">
            </a>      
        </div>     
        <div class="Logo">
                <img src="./img/logo.png" alt="logo">
        </div>
        <div class="FormLogin">
            <form action="" method="POST"> 
                
                <div class="inputLogin"> 
					<input type="username" name="username" pattern="[a-zA-Z0-9]+$" placeholder="Tên người dùng / Email" required > <br>     
					<input type="password" name="Password" placeholder="Mật khẩu" required> <br>     
                </div>
                <div class="button">
                    <input type="submit" name="login" value="Đăng Nhập">
                </div>             
            </form>
        </div>   
        <div class="forgotpassword">
            <a href="" class="forgotpasswordbutton" >
                Quên mật khẩu ?
            </a>
        </div>
        <div class="register">
            Bạn là người dùng mới?
            <a href="./register.php" class="registerbutton" >
                Tạo tài khoản
            </a>
        </div>
    </body>
</html>