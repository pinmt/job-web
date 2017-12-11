<?php include 'includes/header.php'; ?>
<?php 
    include_once 'includes/connect.php';
    $id = -1;
    if (isset($_GET["id"])) {
        $id = intval($_GET['id']);
    }
    $sql = "SELECT * FROM users_company WHERE id = $id";
    $query = mysqli_query($link,$sql);

    if (isset($_POST['btn_submit_com'])) {
        $name_com = $_POST['name_com'];
        $address_com = $_POST['address_com'];
        $email_com = $_POST['email_com'];
        $phone_com = $_POST['phone_com'];
        $activity_com = $_POST['activity_com'];
        $employees_com = $_POST['employees_com'];
        $project_com = $_POST['project_com'];
        $about_com = $_POST['about_com'];

        $sql = "UPDATE users_company SET    name_com = '".$_POST['name_com']."', 
                                            address_com = '".$_POST['address_com']."',
                                            email_com = '".$_POST['email_com']."', 
                                            phone_com = '".$_POST['phone_com']."',
                                            activity_com = '".$_POST['activity_com']."', 
                                            employees_com = '".$_POST['employees_com']."',
                                            project_com = '".$_POST['project_com']."', 
                                            about_com = '".$_POST['about_com']."' WHERE id = $id";

        if (mysqli_multi_query($link, $sql)){
            while ( $data = mysqli_fetch_array($query) ) {
            echo '<script language="javascript">alert("Update thành công"); window.location="nhatuyendung.php?id='.$_SESSION['user_id'].'";</script>';
            }
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="company-profile.php?id='.$_SESSION['user_id'].'";</script>';
        }
    }
?>

    
    <main class="site-main">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" method="post">
                            <?php 
                                while ( $data = mysqli_fetch_array($query) ) {
                            ?>
                           <header class="block-title" id="block-title-seeker-info">
                                <h3 class="title_block_nored">
                                    Thông tin công ty
                                </h3>
                            </header>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tên công ty</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name_com" value="<?= $data['name_com'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Địa chỉ</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="address_com" value="<?= $data['address_com'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email liên hệ</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email_com" value="<?= $data['email_com'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Số điện thoại liên hệ</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone_com" value="<?= $data['phone_com'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Lĩnh vực hoạt động</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="activity_com" value="<?= $data['activity_com'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Số lượng nhân viên</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="employees_com" value="<?= $data['employees_com'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Dự án tiêu biểu</label>
                                <div class="col-md-9">
                                    <textarea name="project_com" id="" class="col-md-12" rows="5"><?= $data['project_com'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Giới thiệu về công ty</label>
                                <div class="col-md-9">
                                    <textarea name="about_com" id="" class="col-md-12" rows="5"><?= $data['about_com'] ?></textarea>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">    
                                    <input type="submit" class="btn btn-info col-md-offset-1" name="btn_submit_com" id="btn_submit_com" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
