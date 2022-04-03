<?php
	session_start();
	require_once("DBConnect.php");
	function register(){
		if(isset($_POST)){
			$connect = connectDB();
			$username = $_POST['username'];
			$password = $_POST['password'];
			$repass = $_POST['retypePass'];
			$email = $_POST['email'];
			$query = "Select max(id_user) as max from user_account";
			$result = mysqli_query($connect, $query);
			$data= array();
			while ($row = mysqli_fetch_array($result,1)){
				$data[] = $row;
			}
			$new_id = $data[0]['max'] + 1;
			$query = "Select * from user_account where username = '".$username."'";
			$result = mysqli_query($connect, $query);
			$data= array();
			while ($row = mysqli_fetch_array($result,1)){
				$data[] = $row;
			}
			if(count($data) == 0){
				if($password == $repass){
					$query = "Insert into user_account(id_user, username, password, privileges) values ('".$new_id."','".$username."','".$password."', 'User')";
					mysqli_query(connectDB(), $query);
					$query = "Insert into information(id_user, email) values ('".$new_id."','".$email."')";
					mysqli_query(connectDB(), $query);
					
					$_SESSION['register_status'] = "Đăng ký thành công";
					closeDB($connect);
					header("Location: index.php");
				}
				else{ 
					$_SESSION['register_status'] = "Password và Repass không giống nhau";
					closeDB($connect);
					header("Location: Register_form.php");
				}
			}
			else{ 
				$_SESSION['register_status'] = "Username đã tồn tại";
				closeDB($connect);
				header("Location: Register_form.php");
			}
		}
	}
	function login(){
		if(isset($_POST)){
			$connect = connectDB();
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = "Select * from user_account where username = '".$username."'";
			$result = mysqli_query($connect, $query);
			$data = array();
			while ($row = mysqli_fetch_array($result,1)){
				$data[] = $row;
			}
			if($data != null && count($data) >0){
				$query = "Select * from user_account where username = '".$username."' and password = '".$password."'";
				$result = mysqli_query($connect, $query);
				$data2 = array();
				while ($row = mysqli_fetch_array($result,1)){
					$data2[] = $row;
				}
				if($data2 != null && count($data2) >0){
					$_SESSION['username'] = $username;
					$_SESSION['privileges'] = $data2[0]['Privileges'];
					$_SESSION['login_status'] = "Đăng nhập thành công";
					closeDB($connect);
				}
				else {
					$_SESSION['login_status'] = "Mật khẩu không đúng";
					closeDB($connect);
				}
			} 
			else {
				$_SESSION['login_status'] = "Username không tồn tại";
				closeDB($connect);
			}
		}
	}
	function logout(){
		unset($_SESSION['username']);
		unset($_SESSION['privilege']);
		$_SESSION['logout_success'] = "Đăng xuất thành công";
		header("Location: main_page.php");	
	}
?>