<?php 
    include_once 'includes/connect.php';
    $id = -1;
    if (isset($_GET["id"])) {
        $id = intval($_GET['id']);
    }
    $sql = "SELECT * FROM users_timviec WHERE id = $id";
    $query = mysqli_query($link,$sql);

    if (isset($_POST['btn_submit_pro'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $birth_day = $_POST['birth_day'];
        $birth_month = $_POST['birth_month'];
        $birth_year = $_POST['birth_year'];
        $marital_status = $_POST['marital_status'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $title = $_POST['title'];
        $education = $_POST['education'];
        $exp = $_POST['exp'];
        $level_rank = $_POST['level_rank'];
        $level_desired = $_POST['level_desired'];
        $career = $_POST['career'];
        $wage_desired = $_POST['wage_desired'];
        $add_desired = $_POST['add_desired'];
        $users_id = $_POST['users_id'];
        $birthday = $_POST['birth_year'].'-'.$_POST['birth_month'].'-'.$_POST['birth_day'];
        $email_pro = $_POST['email_pro'];

        /*$sql = "INSERT INTO users_profile (fullname, phone, birthday, marital_status, city, address, title, education, exp, level_rank, level_desired, career, wage_desired, add_desired, users_id, email) VALUES ('$fullname', '$phone', '$birthday', '$marital_status', '$city', '$address', '$title', '$education', '$exp', '$level_rank', '$level_desired', '$career', '$wage_desired', '$add_desired', '$users_id', '$email')";*/
        $sql = "INSERT INTO `users_profile`(`fullname`, `birthday`, `marital_status`, `city`, `address`, `title`, `education`, `exp`, `level_rank`, `level_desired`, `career`, `wage_desired`, `add_desired`, `phone`, `email_pro`, `users_id`) VALUES ('$fullname','$birthday','$marital_status','$city','$address','$title','$education','$exp','$level_rank','$level_desired','$career','$wage_desired','$add_desired','$phone','$email_pro','$users_id')";
        if (mysqli_query($link, $sql)){
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="createfile.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="createfile.php";</script>';
        }
    }
?>


    <?php include 'includes/header.php'; ?>
    <main class="site-main">
        <section>
            <div class="container wow fadeInDown">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" method="post">
                            <header class="block-title" id="block-title-seeker-info">
                                <h3 class="title_block_nored">
                                    Thông tin tài khoản
                                </h3>
                            </header>
                            <?php 
                                while ( $data = mysqli_fetch_array($query) ) {
                            ?>
                            <div class="form-group">
                                <label class="control-label col-md-3">Họ tên</label>
                                <div class="col-md-9">
                                    <label class="control-label"><?= $data['firstname'].' '.$data['lastname'] ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <label class="control-label"><?= $data['email'] ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Giới tính</label>
                                <div class="col-md-9">
                                    <label class="control-label" ><?php if(isset($data) && $data['sex']=='1') echo "Nam";  if(isset($data) && $data['sex']=='2') echo "Nữ";?></label>
                                </div>
                            </div>
                            <?php } ?>

                           <header class="block-title" id="block-title-seeker-info">
                                <h3 class="title_block_nored">
                                    Thông tin cá nhân
                                </h3>
                            </header>
                            <input type="text" class="form-control hidden" id="users_id" name="users_id" value="<?= $_SESSION['user_id'] ?>">
                            <div class="form-group">
                                <label class="control-label col-md-3">Họ tên</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $_SESSION['firstname'] .' '. $_SESSION['lastname'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Số điện thoại</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email_pro" >
                                </div>
                            </div>
                            <div class="form-group" name="birthday">
                                <label class="control-label col-md-3">Ngày sinh</label>
                                <div class="col-md-3">
                                    <select class="form-control" name="birth_day" value="">
                                        <option value="">Ngày</option>
                                        <?php for ($i = 1; $i <= 31; $i++) : ?> 
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="birth_month" value="<?= $data[''] ?>">
                                        <option value="">Tháng</option>
                                        <?php for ($i = 1; $i <= 12; $i++) : ?> 
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>                             
                                <div class="col-md-3">
                                    <select class="form-control" name="birth_year" value="<?= $data[''] ?>">
                                        <option value="">Năm</option>
                                        <?php $now = getdate();  ?>
                                        <?php for ($i = $now['year']; $i > 1950; $i--) : ?> 
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Hôn nhân</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="marital_status">
                                        <option value="">Chọn tình trạng hôn nhân</option>
                                        <option value="N">Độc thân</option>
                                        <option value="Y">Đã có gia đình</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tỉnh/thành phố</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="city">
                                        <!-- <option value=""></option>
                                        <option value="1">Hồ Chí Minh</option>
                                        <option value="2">Hà Nội</option>
                                        <option value="3">An Giang</option>
                                        <option value="4">Bạc Liêu</option>
                                        <option value="5">Bà Rịa-Vũng Tàu</option>
                                        <option value="6">Bắc Cạn</option>
                                        <option value="7">Bắc Giang</option>
                                        <option value="8">Bắc Ninh</option>
                                        <option value="9">Bến Tre</option>
                                        <option value="10">Bình Dương</option>
                                        <option value="11">Bình Định</option>
                                        <option value="12">Bình Phước</option>
                                        <option value="13">Bình Thuận</option>
                                        <option value="14">Cao Bằng</option>
                                        <option value="15">Cà Mau</option>
                                        <option value="16">Cần Thơ</option>
                                        <option value="17">Đà Nẵng</option>
                                        <option value="18">Đắk Lắk</option>
                                        <option value="19">Đắk Nông</option>
                                        <option value="20">Điện Biên</option>
                                        <option value="21">Đồng Nai</option>
                                        <option value="22">Đồng Tháp</option>
                                        <option value="23">Gia Lai</option>
                                        <option value="24">Hà Giang</option>
                                        <option value="25">Hà Nam</option>
                                        <option value="27">Hà Tĩnh</option>
                                        <option value="28">Hải Dương</option>
                                        <option value="29">Hải Phòng</option>
                                        <option value="30">Hậu Giang</option>
                                        <option value="31">Hòa Bình</option>
                                        <option value="32">Hưng Yên</option>
                                        <option value="33">Khánh Hòa</option>
                                        <option value="34">Kiên Giang</option>
                                        <option value="35">Kon Tum</option>
                                        <option value="36">Lai Châu</option>
                                        <option value="37">Lạng Sơn</option>
                                        <option value="38">Lào Cai</option>
                                        <option value="39">Lâm Đồng</option>
                                        <option value="40">Long An</option>
                                        <option value="41">Nam Định</option>
                                        <option value="42">Nghệ An</option>
                                        <option value="43">Ninh Bình</option>
                                        <option value="44">Ninh Thuận</option>
                                        <option value="45">Phú Thọ</option>
                                        <option value="46">Phú Yên</option>
                                        <option value="47">Quảng Bình</option>
                                        <option value="48">Quảng Nam</option>
                                        <option value="49">Quảng Ngãi</option>
                                        <option value="50">Quảng Ninh</option>
                                        <option value="51">Quảng Trị</option>
                                        <option value="52">Sóc Trăng</option>
                                        <option value="53">Sơn La</option>
                                        <option value="54">Tây Ninh</option>
                                        <option value="55">Thái Bình</option>
                                        <option value="56">Thái Nguyên</option>
                                        <option value="57">Thanh Hóa</option>
                                        <option value="58">Thừa Thiên-Huế</option>
                                        <option value="59">Tiền Giang</option>
                                        <option value="60">Trà Vinh</option>
                                        <option value="61">Tuyên Quang</option>
                                        <option value="62">Vĩnh Long</option>
                                        <option value="63">Vĩnh Phúc</option>
                                        <option value="64">Yên Bái</option>
                                        <option value="65">Toàn quốc</option>
                                        <option value="66">Nước ngoài</option> -->
                                        <option value="" selected="selected">-- Chọn tỉnh / thành phố --</option>
                                        <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option> 
                                        <option value="An Giang">An Giang</option> 
                                        <option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option> 
                                        <option value="Bình Dương">Bình Dương</option> 
                                        <option value="Bình Phước">Bình Phước</option> 
                                        <option value="Bình Thuận">Bình Thuận</option> 
                                        <option value="Bình Định">Bình Định</option> 
                                        <option value="Bạc Liêu">Bạc Liêu</option> 
                                        <option value="Bắc Giang">Bắc Giang</option> 
                                        <option value="Bắc Kạn">Bắc Kạn</option> 
                                        <option value="Bắc Ninh">Bắc Ninh</option> 
                                        <option value="Bến Tre">Bến Tre</option> 
                                        <option value="Cao Bằng">Cao Bằng</option> 
                                        <option value="Cà Mau">Cà Mau</option> 
                                        <option value="Cần Thơ">Cần Thơ</option> 
                                        <option value="Gia Lai">Gia Lai</option> 
                                        <option value="Hà Giang">Hà Giang</option> 
                                        <option value="Hà Nam">Hà Nam</option> 
                                        <option value="Hà Nội">Hà Nội</option> 
                                        <option value="Hà Tĩnh">Hà Tĩnh</option> 
                                        <option value="Hòa Bình">Hòa Bình</option> 
                                        <option value="Hưng Yên">Hưng Yên</option> 
                                        <option value="Hải Dương">Hải Dương</option> 
                                        <option value="Hải Phòng">Hải Phòng</option> 
                                        <option value="Hậu Giang">Hậu Giang</option> 
                                        <option value="Khánh Hòa">Khánh Hòa</option> 
                                        <option value="Kiên Giang">Kiên Giang</option> 
                                        <option value="Kon Tum">Kon Tum</option> 
                                        <option value="Lai Châu">Lai Châu</option> 
                                        <option value="Long An">Long An</option> 
                                        <option value="Lào Cai">Lào Cai</option> 
                                        <option value="Lâm Đồng">Lâm Đồng</option> 
                                        <option value="Lạng Sơn">Lạng Sơn</option> 
                                        <option value="Nam Định">Nam Định</option> 
                                        <option value="Nghệ An">Nghệ An</option> 
                                        <option value="Ninh Bình">Ninh Bình</option> 
                                        <option value="Ninh Thuận">Ninh Thuận</option> 
                                        <option value="Phú Thọ">Phú Thọ</option> 
                                        <option value="Phú Yên">Phú Yên</option> 
                                        <option value="Quảng Bình">Quảng Bình</option> 
                                        <option value="Quảng Nam">Quảng Nam</option> 
                                        <option value="Quảng Ngãi">Quảng Ngãi</option> 
                                        <option value="Quảng Ninh">Quảng Ninh</option> 
                                        <option value="Quảng Trị">Quảng Trị</option> 
                                        <option value="Sóc Trăng">Sóc Trăng</option> 
                                        <option value="Sơn La">Sơn La</option> 
                                        <option value="Thanh Hóa">Thanh Hóa</option> 
                                        <option value="Thái Bình">Thái Bình</option> 
                                        <option value="Thái Nguyên">Thái Nguyên</option> 
                                        <option value="Thừa Thiên-Huế">Thừa Thiên-Huế</option> 
                                        <option value="Tiền Giang">Tiền Giang</option> 
                                        <option value="Trà Vinh">Trà Vinh</option> 
                                        <option value="Tuyên Quang">Tuyên Quang</option> 
                                        <option value="Tây Ninh">Tây Ninh</option> 
                                        <option value="Vĩnh Long">Vĩnh Long</option> 
                                        <option value="Vĩnh Phúc">Vĩnh Phúc</option> 
                                        <option value="Yên Bái">Yên Bái</option> 
                                        <option value="Điện Biên">Điện Biên</option> 
                                        <option value="Đà Nẵng">Đà Nẵng</option> 
                                        <option value="Đắk Lắk">Đắk Lắk</option> 
                                        <option value="Đắk Nông">Đắk Nông</option> 
                                        <option value="Đồng Nai">Đồng Nai</option> 
                                        <option value="Đồng Tháp">Đồng Tháp</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" >Chỗ ở hiện tại</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>

                            <header class="block-title" id="block-title-seeker-info">
                                <h3 class="title_block_nored">
                                    Thông tin chung
                                </h3>
                            </header>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tiêu đề hồ sơ</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Học vấn</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="education">
                                        <option selected="selected" value="">Chọn trình độ</option>
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
                                        <option selected="selected" value="">Chọn kinh nghiệm</option>
                                        <option value="1">Chưa có kinh nghiệm</option>
                                        <option value="2">Dưới 1 năm</option>
                                        <option value="3">1 năm</option>
                                        <option value="4">2 năm</option>
                                        <option value="5">3 năm</option>
                                        <option value="6">4 năm</option>
                                        <option value="7">5 năm</option>
                                        <option value="8">Trên 5 năm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Cấp bậc hiện tại</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="level_rank">
                                        <option selected="selected" value="">Chọn cấp bậc</option>
                                        <option value="1">Nhân viên</option>
                                        <option value="2">CTV</option>
                                        <option value="3">Trưởng nhóm</option>
                                        <option value="4">Chuyên gia</option>
                                        <option value="5">Trưởng phó phòng</option>
                                        <option value="6">Quản lý cấp cao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Cấp bậc mong muốn</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="level_desired">
                                        <option selected="selected" value="">Chọn cấp bậc</option>
                                        <option value="1">Nhân viên</option>
                                        <option value="2">CTV</option>
                                        <option value="3">Trưởng nhóm</option>
                                        <option value="4">Chuyên gia</option>
                                        <option value="5">Trưởng phó phòng</option>
                                        <option value="6">Quản lý cấp cao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Ngành nghề mong muốn</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="career">
                                        <option value="Bán hàng">Bán hàng</option>
                                        <option value="Tư vấn bảo hiểm">Tư vấn bảo hiểm</option>
                                        <option value="Báo chí/Biên tập viên">Báo chí/Biên tập viên</option>
                                        <option value="Bất động sản">Bất động sản</option>
                                        <option value="Biên dịch/Phiên dịch">Biên dịch/Phiên dịch</option>
                                        <option value="Bưu chính viễn thông">Bưu chính viễn thông</option>
                                        <option value="Cơ khí/Kĩ thuật ứng dụng">Cơ khí/Kĩ thuật ứng dụng</option>
                                        <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                                        <option value="Dầu khí/Địa chất">Dầu khí/Địa chất</option>
                                        <option value="Dệt may">Dệt may</option>
                                        <option value="Bảo vệ/Vệ sĩ/An ninh">Bảo vệ/Vệ sĩ/An ninh</option>
                                        <option value="Chăm sóc khách hàng">Chăm sóc khách hàng</option>
                                        <option value="Điện/Điện tử/Điện lạnh">Điện/Điện tử/Điện lạnh</option>
                                        <option value="Du lịch/Nhà hàng/Khách sạn">Du lịch/Nhà hàng/Khách sạn</option>
                                        <option value="Dược/Hóa chất/Sinh hóa">Dược/Hóa chất/Sinh hóa</option>
                                        <option value="Giải trí/Vui chơi">Giải trí/Vui chơi</option>
                                        <option value="Giáo dục/Đào tạo/Thư viện">Giáo dục/Đào tạo/Thư viện</option>
                                        <option value="Giao thông/Vận tải/Thủy lợi/Cầu đường">Giao thông/Vận tải/Thủy lợi/Cầu đường</option>
                                        <option value="Giày da/Thuộc da">Giày da/Thuộc da</option>
                                        <option value="Hành chính/Thư ký/Trợ lý">Hành chính/Thư ký/Trợ lý</option>
                                        <option value="Kho vận/Vật tư/Thu mua">Kho vận/Vật tư/Thu mua</option>
                                        <option value="Kiến trúc/Nội thất">Kiến trúc/Nội thất</option>
                                        <option value="Kinh doanh">Kinh doanh</option>
                                        <option value="Lao động phổ thông">Lao động phổ thông</option>
                                        <option value="Luật/Pháp lý">Luật/Pháp lý</option>
                                        <option value="Sinh viên/Mới tốt nghiệp/Thực tập">Sinh viên/Mới tốt nghiệp/Thực tập</option>
                                        <option value="Môi trường/Xử lý chất thải">Môi trường/Xử lý chất thải</option>
                                        <option value="Mỹ phẩm">Mỹ phẩm</option>
                                        <option value="Ngân hàng/Chứng khoán/Đầu tư">Ngân hàng/Chứng khoán/Đầu tư</option>
                                        <option value="Nghệ thuật/Điện ảnh">Nghệ thuật/Điện ảnh</option>
                                        <option value="Nhân sự">Nhân sự</option>
                                        <option value="Nông/Lâm/Ngư nghiệp">Nông/Lâm/Ngư nghiệp</option>
                                        <option value="Quan hệ đối ngoại">Quan hệ đối ngoại</option>
                                        <option value="Thẩm định/Giám định/Quản lý chất lượng">Thẩm định/Giám định/Quản lý chất lượng</option>
                                        <option value="Quản lý điều hành">Quản lý điều hành</option>
                                        <option value="Quảng cáo/Marketing/PR">Quảng cáo/Marketing/PR</option>
                                        <option value="Sản xuất/Vận hành sản xuất">Sản xuất/Vận hành sản xuất</option>
                                        <option value="Tài chính/Kế toán/Kiểm toán">Tài chính/Kế toán/Kiểm toán</option>
                                        <option value="Thể dục/Thể thao">Thể dục/Thể thao</option>
                                        <option value="Thiết kế/Mỹ thuật">Thiết kế/Mỹ thuật</option>
                                        <option value="Thời vụ/Bán thời gian">Thời vụ/Bán thời gian</option>
                                        <option value="Thực phẩm/DV ăn uống">Thực phẩm/DV ăn uống</option>
                                        <option value="Xây dựng">Xây dựng</option>
                                        <option value="Xuất-Nhập khẩu/Ngoại thương">Xuất-Nhập khẩu/Ngoại thương</option>
                                        <option value="Y tế">Y tế</option>
                                        <option value="Ngoại ngữ">Ngoại ngữ</option>
                                        <option value="Khu chế xuất/Khu công nghiệp">Khu chế xuất/Khu công nghiệp</option>
                                        <option value="Làm đẹp/Thể lực/Spa">Làm đẹp/Thể lực/Spa</option>
                                        <option value="Tài xế/Lái xe/Giao nhận">Tài xế/Lái xe/Giao nhận</option>
                                        <option value="Trang thiết bị công nghiệp">Trang thiết bị công nghiệp</option>
                                        <option value="Trang thiết bị gia dụng">Trang thiết bị gia dụng</option>
                                        <option value="Trang thiết bị văn phòng">Trang thiết bị văn phòng</option>
                                        <option value="PG/PB/Lễ tân">PG/PB/Lễ tân</option>
                                        <option value="Phát triển thị trường">Phát triển thị trường</option>
                                        <option value="Phục vụ/Tạp vụ/Giúp việc">Phục vụ/Tạp vụ/Giúp việc</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                    <!-- <div class="tooltip-huong-dan">
                                        <p>
                                            Bạn được chọn tối đa 3 ngành nghề
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Mong muốn mức lương tối thiểu <i>(VNĐ/ tháng)</i></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="wage_desired">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Nơi làm việc mong muốn</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="add_desired">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">    
                                    <input type="submit" class="btn btn-info col-md-offset-1" name="btn_submit_pro" id="btn_submit_pro" value="Xác nhận">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
