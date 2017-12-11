<?php
if (isset($_SESSION['user_id']) == false) {
	echo '<script language="javascript">alert("Bạn cần đăng nhập để sử dụng chức năng này"); window.location="login-company.php";</script>';
	//header('Location: ../login.php');
}else {
	if (isset($_SESSION['permission']) == true) {
		$permission = $_SESSION['permission'];
		if ($permission == '0') {
			//echo "Đây là trang dành cho nhà tuyển dụng<br>";
			echo '<script language="javascript">alert("Bạn cần đăng nhập tài khoản nhà tuyển dụng để sử dụng chức năng này"); window.location="login-company.php";</script>';
			//echo "<a href='../signup-company.php'> Đăng kí nhà tuyển dụng</a>";
			//exit();
		}
		else{
			//header('Location: ../nhatuyendung.php');
			//echo '<script language="javascript">alert("ok");window.location="nhatuyendung.php";</script>';
			return true;
		}
	}
}
?>