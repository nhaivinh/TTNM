<html>
    <head>
        <meta charset="utf-8">
        <link rel="StyleSheet" href="./CSS/register_origin.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>Trang đăng ký</title>
    </head>
    <body>
        <div class="formExit">
            <a href="">
                <img src="./img/x_button.png" alt="exit_button">
            </a>      
        </div>     
        <div class="Logo">
            <h1>
                <img src="./img/logo.png" alt="logo">
            </h1>
        </div>
        <div class="FormRegister">
            <form action="" method="POST"> 
                
                <div class="inputRegister"> 
                <input type="username" name="username" pattern="[a-z0-9]+$" placeholder="Tên người dùng" required > <br>     
                <input type="email" name="email" placeholder="Email" required> <br>  
                <input type="password" name="Password" placeholder="Mật khẩu" required> <br>  
                <input type="password" name="RPPassword" placeholder="Nhập lại Mật khẩu" required> <br>      
                </div>
                <div class="button">
                    <input type="submit" name="register" value="Đăng Ký">
                </div>             
            </form>
        </div>   
        <div class="login">
            Bạn đã có tài khoản?
            <a href="./login.php" class="loginbutton" >
                Đăng nhập
            </a>
        </div>
    </body>
</html>