
    <?php include 'includes/header.php'; ?>
    <?php include_once 'includes/connect.php'; ?>
    <?php include 'includes/permission.php'; ?>

    <?php
    $id = -1;
    if (isset($_GET["id"])) {
        $id = intval($_GET['id']);
    }
    $sql = "SELECT * FROM details WHERE id = $id";
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

        $sql = "UPDATE `details` SET `date_up`= now(),`company`='$company',`add`='$add',`wage`='$wage',`exp`='$exp',`city`='$city',`career`='$career',`number_up`='$number_up',`sex`='$sex',`describe`='$describe',`request`='$request',`right`='$right',`deadline`='$deadline',`usercontact`='$usercontact',`emailcontact`='$emailcontact',`status`='$status',`category`='$category',`title`='$title',`TinhChatCV`='$TinhChatCV',`level`='$level',`hinhthuc`='$hinhthuc' WHERE id = $id";

        if (mysqli_query($link, $sql)){
            echo '<script language="javascript">alert("Update thành công"); window.location="nhatuyendung.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="nhatuyendung.php";</script>';
        }
    }
    ?>
    <?php var_dump($_POST['describe']); ?>

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
                                    <?php 
                                        while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="form-group hidden">
                                        <label class="control-label col-md-3">id công ty</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="author" value="<?= $data['author'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tên công ty</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="company" value="<?= $data['company'] ?>">
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="control-label col-md-3">Vị trí tuyển</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="title" value="<?= $data['title'] ?>">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Loại công việc</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="category">
                                                <option>Chọn loại công việc</option>
                                                <option value="1" <?php if($data['category'] == "1"){ echo " selected='selected'"; } ?>>Part-time</option>
                                                <option value="2" <?php if($data['category'] == "2"){ echo " selected='selected'"; } ?>>Việc trong nước</option>
                                                <option value="3" <?php if($data['category'] == "3"){ echo " selected='selected'"; } ?>>Việc nước ngoài</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nơi làm việc</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="add" value="<?= $data['add'] ?>">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Khu vực (tỉnh/ Tp)</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="city" value="<?= $data['city'] ?>">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tính chất công việc</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="TinhChatCV" value="<?= $data['TinhChatCV'] ?>">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Hình thức làm việc</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="hinhthuc">
                                                <option value="">Chọn hình thức làm việc</option>
                                                <option value="0" <?php if($data['hinhthuc'] == "0"){ echo " selected='selected'"; } ?>>Toàn thời gian</option>
                                                <option value="1" <?php if($data['hinhthuc'] == "1"){ echo " selected='selected'"; } ?>>Thời vụ</option>
                                            </select>
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số lượng tuyển</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="number_up" value="<?= $data['number_up'] ?>">
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Ngành nghề</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="career">
                                                <option value="">Career</option>
                                                <option value="Kinh doanh" <?php if($data['career'] == "Kinh doanh"){ echo " selected='selected'"; } ?>>Kinh doanh</option>
                                                <option value="Thiết kế" <?php if($data['career'] == "Thiết kế"){ echo " selected='selected'"; } ?>>Thiết kế</option>
                                                <option value="Bất động sản" <?php if($data['career'] == "Bất động sản"){ echo " selected='selected'"; } ?>>Bất động sản</option>
                                                <option value="Bán hàng" <?php if($data['career'] == "Bán hàng"){ echo " selected='selected'"; } ?>>Bán hàng</option>
                                                <option value="Sư phạm" <?php if($data['career'] == "Sư phạm"){ echo " selected='selected'"; } ?>>Sư phạm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Học vấn</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="level">
                                                <option value="">Chọn trình độ</option>
                                                <option value="6" <?php if($data['level'] == "6"){ echo " selected='selected'"; } ?>>Đại học</option>
                                                <option value="5" <?php if($data['level'] == "5"){ echo " selected='selected'"; } ?>>Cao đẳng</option>
                                                <option value="4" <?php if($data['level'] == "4"){ echo " selected='selected'"; } ?>>Trung cấp</option>
                                                <option value="7" <?php if($data['level'] == "7"){ echo " selected='selected'"; } ?>>Cao học</option>
                                                <option value="3" <?php if($data['level'] == "3"){ echo " selected='selected'"; } ?>>Trung học</option>
                                                <option value="2" <?php if($data['level'] == "2"){ echo " selected='selected'"; } ?>>Chứng chỉ</option>
                                                <option value="1" <?php if($data['level'] == "1"){ echo " selected='selected'"; } ?>>Lao động phổ thông</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số năm kinh nghiệm</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="exp">
                                                <option value="">Chọn kinh nghiệm</option>
                                                <option value="1" <?php if($data['exp'] == "1"){ echo " selected='selected'"; } ?>>Chưa có kinh nghiệm</option>
                                                <option value="2" <?php if($data['exp'] == "2"){ echo " selected='selected'"; } ?>>Dưới 1 năm</option>
                                                <option value="3" <?php if($data['exp'] == "3"){ echo " selected='selected'"; } ?>>1 năm</option>
                                                <option value="4" <?php if($data['exp'] == "4"){ echo " selected='selected'"; } ?>>2 năm</option>
                                                <option value="5" <?php if($data['exp'] == "5"){ echo " selected='selected'"; } ?>>3 năm</option>
                                                <option value="6" <?php if($data['exp'] == "6"){ echo " selected='selected'"; } ?>>4 năm</option>
                                                <option value="7" <?php if($data['exp'] == "7"){ echo " selected='selected'"; } ?>>5 năm</option>
                                                <option value="8" <?php if($data['exp'] == "8"){ echo " selected='selected'"; } ?>>Trên 5 năm</option>
                                                <option value="9" <?php if($data['exp'] == "9"){ echo " selected='selected'"; } ?>>Không yêu cầu kinh nghiệm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Giới tính</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="sex"> 
                                                <option>Giới tính</option> 
                                                <option value="1" <?php if($data['sex'] == "1"){ echo " selected='selected'"; } ?>>Nam</option> 
                                                <option value="2" <?php if($data['sex'] == "2"){ echo " selected='selected'"; } ?>>Nữ</option>
                                                <option value="3" <?php if($data['sex'] == "3"){ echo " selected='selected'"; } ?>>Không yêu cầu</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Mô tả</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="describe" value="<?= $data['describe'] ?>">
                                            <!-- <textarea name="describe" id="" class="col-md-12" rows="5"><?= $data['describe'] ?></textarea> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Yêu cầu</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="request" value="<?= $data['request'] ?>">
                                            <!-- <textarea name="request" id="" class="col-md-12" rows="5"><?= $data['request'] ?></textarea> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">QUyền lợi</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="right" value="<?= $data['right'] ?>">
                                            <!-- <textarea name="right" id="" class="col-md-12" rows="5"><?= $data['right'] ?></textarea> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Mức lương</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="wage" value="<?= $data['wage'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Hạn nộp</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" name="deadline" value="<?= $data['deadline'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Người liện hệ</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="usercontact" value="<?= $data['usercontact'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email liên hệ</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="emailcontact" value="<?= $data['emailcontact'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3">Public post</label>
                                            <div class="col-md-1">
                                                <input type="checkbox" class="form-control" name="status" value="1" <?php if($data['status'] == "1"){ echo " checked='checked'"; } ?>>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-md-10">    
                                            <input type="submit" class="btn btn-info" name="btn_submit_post" id="btn_submit_post" value="Đăng tin">
                                        </div>
                                    </div>
                                    <?php } ?>
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
