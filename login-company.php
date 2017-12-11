<?php 
    include_once 'includes/connect.php';
    session_start();
   
    if(isset($_POST['login-btn-com'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);

        $sql = "SELECT * FROM users_company WHERE username_com='".$_POST['username']."' AND password_com='".$_POST['password']."'";
        $query = mysqli_query($link,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo '<script language="javascript">alert("Tên đăng nhập hoặc mật khẩu không đúng !"); window.location="login-company.php";</script>';
        }else{
            while ( $data = mysqli_fetch_array($query) ) {
                $_SESSION["user_id"] = $data["id"];
                $_SESSION['username'] = $data["username_com"];
                $_SESSION["email"] = $data["email_com"];
                $_SESSION["date_created"] = $data["date_created"];
                $_SESSION["name"] = $data["name_com"];
                $_SESSION["is_block"] = $data["is_block"];
                $_SESSION["permission"] = $data["permission"];
            }
            header('Location: nhatuyendung.php?id='.$_SESSION['user_id'].'');
        }
    }

?>
<script>
    function validate(){
        var username = document.login.username.value;
        var password = document.login.password.value;
        if (username==null || username=="")
        {
          alert("Username null");
          return false;
        }
        else if (password==null || password=="")
        {
          alert("password null");
          return false;
        }
    }
</script>


    <?php include 'includes/header.php'; ?>
    <main class="site-main" >
        <section style="padding-top:30px;">
            <div class="container">
                <div class="section-heading">
                    <h1 class="text-center title wow fadeInDown"><span aria-hidden="true"></span>Đăng nhập tài khoản tuyển dụng</h1> 
                </div>
                <div class="row"> 
                    <form name="login" action="login-company.php" method="POST" onsubmit="return validate();">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="login-form"> 
                                <div class="form-group">
                                    <input class="form-control" value="" placeholder="username" id="username" name="username" type="text">
                                    <div id="error-name"></div>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" value="" placeholder="password" id="password" name="password" type="password">
                                    <div id="error-pass"></div>
                                </div> 
                                <!-- <div class="checkbox" >
                                    <label><input type="checkbox"> Ghi nhớ </label>
                                </div> -->
                                <div class="form-group">
                                    <input class="btn btn-info" type='submit' name="login-btn-com" value='Đăng nhập' />
                                </div> 

                                <a href="#"><small>Quên mật khẩu</small></a>  
                                <div><small>Không có tài khoản?</small> <a href="select-up.php"><small>Tạo tài khoản</small></a></div>
                                <br>
                                <div class="text-center col-md-12">
                                    <small>hoặc đăng nhập với</small><br><br>
                                    <div class="btn-group">                            
                                         <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook
                                         </button>                     
                                    </div>                 
                                    <div class="btn-group">                            
                                         <button type="button" class="btn btn-danger"><i class="fa fa-google-plus"></i> Google+
                                         </button>                     
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
