<?php 
    include 'includes/connect.php';

    if (isset($_POST['btn_submit_com'])) {
        $username_com = $_POST['username_com'];
        $password_com = $_POST['password_com'];
        $name_com = $_POST['name_com'];
        $address_com = $_POST['address_com'];
        $email_com = $_POST['email_com'];
        $phone_com = $_POST['phone_com'];
        $activity_com = $_POST['activity_com'];
        $employees_com = $_POST['employees_com'];
        $project_com = $_POST['project_com'];
        $about_com = $_POST['about_com'];
        $permission = 1;

        $sql = "INSERT INTO users_company(username_com, password_com, name_com, address_com, email_com, phone_com, activity_com, employees_com, project_com, about_com, permission) VALUES ('$username_com','$password_com','$name_com', '$address_com', '$email_com', '$phone_com', '$activity_com', '$employees_com', '$project_com', '$about_com', '$permission')";
        if (mysqli_query($link, $sql)){

            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="login-company.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="signup-company.php";</script>';
        }
    }
?>

    <?php include 'includes/header.php'; ?>
    <main class="site-main">
        <section>
            <div class="container">
                <div class="section-heading">
                    <h1 class="text-center title wow fadeInDown"><span aria-hidden="true"></span>Tạo tài khoản nhà tuyển dụng</h1> 
                </div>
                <div class="row"> 
                    <div class="col-md-8 col-md-offset-2" > 
                        <form class="form-horizontal" method="post" action="signup-company.php"> 
                            <div class="form-content">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tên đăng nhập</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Mật khẩu</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Xác nhận mật khẩu</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password_conf_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tên công ty</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Địa chỉ</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email liên hệ</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Số điện thoại liên hệ</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Lĩnh vực hoạt động</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="activity_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Số lượng nhân viên</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="employees_com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Dự án tiêu biểu</label>
                                    <div class="col-md-9">
                                        <textarea name="project_com" id="" class="col-md-12" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Giới thiệu về công ty</label>
                                    <div class="col-md-9">
                                        <textarea name="about_com" id="" class="col-md-12" rows="5"></textarea>
                                    </div>
                                </div>
                                
                                <!-- <div class="checkbox col-md-offset-1 ">
                                    <label><input type="checkbox"> Chấp nhận các điều khoản</label>
                                </div> -->
                                <br>
                                <div>
                                    <!-- <a class="btn btn-info col-md-offset-1" >Đăng ký</a> -->
                                    <input type="submit" class="btn btn-info col-md-offset-3" name="btn_submit_com" id="btn_submit_com" value="Đăng ký">
                                </div>
                            </div> 
                        </form>
                    </div> 
                </div> 
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
