<?php 
    include 'includes/connect.php';

    if (isset($_POST['btn_submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sex = $_POST['sex'];
        $permission = 0;
        if ($firstname == "" || $lastname == "" || $username == "" || $password == "" || $email == "" || $sex == "" ) {
            echo '<script language="javascript">alert("Chua nhập đầy đủ thông tin"); window.location="signup.php";</script>';
        }
        /*else if ($password != $confPass) {
            echo '<script language="javascript">alert("Xác nhận mật khẩu chưa đúng"); window.location="timviec/signup.php";</script>';
        }*/
        else{
            $sql = "INSERT INTO users_timviec(firstname, lastname, email, username, password, sex, date_created, date_updated, permission) VALUES ('$firstname','$lastname','$email', '$username', '$password', '$sex', now(), now(), '$permission')";
            if (mysqli_query($link, $sql)){
                echo '<script language="javascript">alert("Đăng ký thành công"); window.location="login.php";</script>';
            }
            else {
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="signup.php";</script>';
            }
        }
    }
?>

    <?php include 'includes/header.php'; ?>
    <main class="site-main">
        <section>
            <div class="container">
                <div class="section-heading">
                    <h1 class="text-center title wow fadeInDown"><span aria-hidden="true"></span>Tạo tài khoản người tìm việc</h1> 
                </div>
                <div class="row"> 
                    <div class="col-md-8 col-md-offset-2" > 
                        <form class="form-horizontal" method="post" action="signup.php"> 
                            <div class="form-content"> 
                                <div class="form-group"> 
                                    <div class="col-md-offset-1 col-sm-5">
                                        <input class="form-control" id="firstname" name="firstname" placeholder="Họ" type="text">
                                    </div> 
                                    <div class="col-sm-5">
                                        <input class="form-control" id="lastname" name="lastname" placeholder="Tên" type="text">
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <div class="col-md-offset-1 col-sm-5">
                                        <input class="form-control" id="username" name="username" placeholder="Tên đăng nhập" type="text">
                                    </div> 
                                    <div class="col-sm-5">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <div class="col-md-offset-1 col-sm-5">
                                        <input class="form-control" id="password" name="password" placeholder="Mật khẩu" type="password">
                                    </div> 
                                    <div class="col-sm-5">
                                        <input class="form-control" id="confPass" name="confPass" placeholder="Xác nhận mật khẩu" type="password">
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <div class="col-md-offset-1 col-sm-4"> 
                                        <select class="form-control" name="sex"> 
                                            <option value="" selected="">Giới tính</option> 
                                            <option value="1">Nam</option> 
                                            <option value="2">Nữ</option>
                                            <option value="0">Khác</option> 
                                        </select> 
                                    </div> 
                                </div>
                                <!-- <div class="checkbox col-md-offset-1 ">
                                    <label><input type="checkbox"> Chấp nhận các điều khoản</label>
                                </div> -->
                                <br>
                                <div>
                                    <!-- <a class="btn btn-info col-md-offset-1" >Đăng ký</a> -->
                                    <input type="submit" class="btn btn-info col-md-offset-1" name="btn_submit" id="btn_submit" value="Đăng ký">
                                </div>
                            </div> 
                        </form>
                    </div> 
                </div> 
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
