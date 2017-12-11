
    <?php include 'includes/header.php'; ?>
    <?php include_once 'includes/connect.php'; ?>
    <?php include 'includes/permission.php'; ?>

    <?php
    $id = -1;
    if (isset($_GET["id"])) {
        $id = intval($_GET['id']);
    }
    $sql = "SELECT * FROM users_company WHERE id = $id";
    $query = mysqli_query($link,$sql);


    if (isset($_POST['btn_submit_post'])) {
        $company = $_POST['company'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $add = $_POST['add'];
        $city = $_POST['city'];
        $TinhChatCV = $_POST['TinhChatCV'];
        $hinhthuc = $_POST['hinhthuc'];
        $number_up = $_POST['number_up'];
        $career = $_POST['career'];
        $level = $_POST['level'];
        $exp = $_POST['exp'];
        $sex = $_POST['sex'];
        $describe = $_POST['describe'];
        $request = $_POST['request'];
        $right = $_POST['right'];
        $wage = $_POST['wage'];
        $deadline = $_POST['deadline'];
        $usercontact = $_POST['usercontact'];
        $emailcontact = $_POST['emailcontact'];
        $status = $_POST['status'];
        $author = $_POST['author'];

        $sql = "INSERT INTO `details`( `date_up`, `company`, `add`, `wage`, `exp`, `city`, `career`, `number_up`, `sex`, `describe`, `request`, `right`, `deadline`, `usercontact`, `emailcontact`, `status`, `category`, `title`, `TinhChatCV`, `level`, `hinhthuc`, `author`) 
                VALUES (now(),'$company','$add','$wage','$exp','$city','$career','$number_up','$sex','$describe','$request','$right','$deadline','$usercontact','$emailcontact','$status','$category','$title','$TinhChatCV','$level','$hinhthuc','$author')";
        if (mysqli_query($link, $sql)){
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="newpost.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="newpost.php";</script>';
        }
    }
    ?>

    <main class="site-main">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Post new</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li>Post</li>
                            </ol>
                        </div>
                    </div>
                </div> 
            </div>
            </section><!--/#Page header-->

        <section>
            <div class="container wow fadeInDown">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class=" text-center" >Tin tuyển dụng mới</h1>
                            <div class="blog-content">
                                <form class="form-horizontal" method="post">
                                    
                                    <div class="form-group hidden">
                                        <label class="control-label col-md-3">id công ty</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="author" value="<?= $_SESSION['user_id']?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tên công ty</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="company">
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="control-label col-md-3">Vị trí tuyển</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="title">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Loại công việc</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="category">
                                                <option>Chọn loại công việc</option>
                                                <option value="1">Part-time</option>
                                                <option value="2">Việc trong nước</option>
                                                <option value="3">Việc nước ngoài</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nơi làm việc</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="add">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Khu vực (tỉnh/ Tp)</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="city">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tính chất công việc</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="TinhChatCV">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Hình thức làm việc</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="hinhthuc">
                                                <option value="">Chọn hình thức làm việc</option>
                                                <option value="0">Toàn thời gian</option>
                                                <option value="1">Thời vụ</option>
                                            </select>
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số lượng tuyển</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="number_up">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Ngành nghề</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="career">
                                                <option value="">Career</option>
                                                <option value="Kinh doanh">Kinh doanh</option>
                                                <option value="Thiết kế">Thiết kế</option>
                                                <option value="Bất động sản">Bất động sản</option>
                                                <option value="Bán hàng">Bán hàng</option>
                                                <option value="Sư phạm">Sư phạm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Học vấn</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="level">
                                                <option value="">Chọn trình độ</option>
                                                <option value="6">Đại học</option>
                                                <option value="5">Cao đẳng</option>
                                                <option value="4">Trung cấp</option>
                                                <option value="7">Cao học</option>
                                                <option value="3">Trung học</option>
                                                <option value="2">Chứng chỉ</option>
                                                <option value="1">Lao động phổ thông</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số năm kinh nghiệm</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="exp">
                                                <option value="">Chọn kinh nghiệm</option>
                                                <option value="1">Chưa có kinh nghiệm</option>
                                                <option value="2">Dưới 1 năm</option>
                                                <option value="3">1 năm</option>
                                                <option value="4">2 năm</option>
                                                <option value="5">3 năm</option>
                                                <option value="6">4 năm</option>
                                                <option value="7">5 năm</option>
                                                <option value="8">Trên 5 năm</option>
                                                <option value="9">Không yêu cầu kinh nghiệm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Giới tính</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="sex"> 
                                                <option>Giới tính</option> 
                                                <option value="1">Nam</option> 
                                                <option value="2">Nữ</option>
                                                <option value="3">Không yêu cầu</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Mô tả</label>
                                        <div class="col-md-9">
                                            <textarea name="describe" id="" class="col-md-12" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Yêu cầu</label>
                                        <div class="col-md-9">
                                            <textarea name="request" id="" class="col-md-12" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">QUyền lợi</label>
                                        <div class="col-md-9">
                                            <textarea name="right" id="" class="col-md-12" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Mức lương</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="wage">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Hạn nộp</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" name="deadline">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Người liện hệ</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="usercontact">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email liên hệ</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="emailcontact">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3">Public post</label>
                                            <div class="col-md-1">
                                                <input type="checkbox" class="form-control" name="status" value="1">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-md-10">    
                                            <input type="submit" class="btn btn-info" name="btn_submit_post" id="btn_submit_post" value="Đăng tin">
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar">
                            <h2>Danh sách việc làm đã đăng</h2>
                                <div class="categories widget">
                                    <ul>
                                        <li>
                                            <a href="">Nhân viên Kinh doanh</a>
                                        </li>
                                        <li>
                                            <a href="">Bất động sản</a>
                                        </li>
                                        <li>
                                            <a href="">NV Thiết kế</a>
                                        </li>
                                        <li>
                                            <a href="">NV Bán hàng</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
