<?php 
    include_once 'includes/connect.php';
    $id = -1;
    if (isset($_GET["id"])) {
        $id = intval($_GET['id']);
    }
    $sql = "SELECT * FROM details WHERE id = $id";
    $query = mysqli_query($link,$sql);
?>

    <?php include 'includes/header.php'; ?>
    <main class="site-main">
        <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Thông tin việc làm</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li>detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        </section><!--/#Page header-->
        <section id="blog-full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                            <div class="blog-content">
                                <?php 
                                    while ( $data = mysqli_fetch_array($query) ) {
                                ?>
                                <h2 class="blogpost-title" style="color: blue">
                                <?php echo $data['title']; ?>
                                </h2>
                                <div class="blog-meta">
                                    <span>Cập nhật: <?php echo $data['date_up']; ?></span>
                                    <span>Lượt xem: 101</span>
                                </div>
                                <h3><?php echo $data['company']; ?></h3>
                                <p>Địa chỉ: <?php echo $data['add']; ?></p>
                                <div class="col-md-6">
                                    <div class="">
                                        <p><span style="font-weight: bold;">- Mức lương:</span> <?php echo $data['wage']; ?></p>
                                        <p><span style="font-weight: bold;">- Kinh nghiệm:</span> <?php echo $data['exp']; ?></p>
                                        <p><span style="font-weight: bold;">- Trình độ:</span> <?php echo $data['level']; ?></p>
                                        <p><span style="font-weight: bold;">- Tỉnh/Thành phố:</span> <?php echo $data['city']; ?></p>
                                        <p><span style="font-weight: bold;">- Ngành nghề:</span> <?php echo $data['career'] ?></p> 
                                    </div>                  
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <p><span style="font-weight: bold;">- Số lượng tuyển dụng:</span> <?php echo $data['number_up']; ?></p>
                                        <p><span style="font-weight: bold;">- Giới tính:</span> <?php if(isset($data) && $data['sex']=='1') echo "Nam";  if(isset($data) && $data['sex']=='2') echo "Nữ";  if(isset($data) && $data['sex']=='3') echo "Không yêu cầu"; ?></p>
                                        <p><span style="font-weight: bold;">- Tính chất công việc:</span> <?php echo $data['TinhChatCV']; ?></p>
                                        <p><span style="font-weight: bold;">- Hình thức làm việc:</span> <?php if(isset($data) && $data['hinhthuc']=='0') echo "Toàn thời gian";  if(isset($data) && $data['hinhthuc']=='1') echo "Thời vụ"; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Mô tả</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p><?php echo $data['describe']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Yêu cầu</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p><?php echo $data['request']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Quyền lợi</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p><?php echo $data['right']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Hạn nộp</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p style="color: red"><?php echo $data['deadline']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="blogpost-title" style="color: blue">Thông tin liên hệ</h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Người liên hệ</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p><?php echo $data['usercontact']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Email</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p><a href="#"><?php echo $data['emailcontact']; ?></a></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </article>
                    </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        
                        <?php include 'modules/search.php' ?>
                            
                            <div class="categories widget">
                                <h3 class="widget-head">Tuyển dụng nhiều</h3>
                                <ul>
                                    <li>
                                        <a href="">Kinh doanh<span class="badge pull-right">99</span></a>
                                    </li>
                                    <li>
                                        <a href="">Bất động sản<span class="badge pull-right">100</span></a> 
                                    </li>
                                    <li>
                                        <a href="">Thiết kế<span class="badge pull-right">84</span></a> 
                                    </li>
                                    <li>
                                        <a href="">Bán hàng<span class="badge pull-right">45</span></a> 
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="recent-post widget">
                                <h3>Công việc tương tự</h3>
                                <ul>
                                    <li>
                                        <a href="detail.php" style="color:blue">Quản Lý Nhãn Hàng</a>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> 10-8-2017</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-level-up" aria-hidden="true"></i> 1 năm</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-money" aria-hidden="true"></i> 5 - 10 triệu</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh</h6>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="detail.php" style="color:blue">Quản Lý Nhãn Hàng</a>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> 10-8-2017</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-level-up" aria-hidden="true"></i> 1 năm</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-money" aria-hidden="true"></i> 5 - 10 triệu</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh</h6>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="detail.php" style="color:blue">Quản Lý Nhãn Hàng</a>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> 10-8-2017</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-level-up" aria-hidden="true"></i> 1 năm</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-money" aria-hidden="true"></i> 5 - 10 triệu</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh</h6>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="detail.php" style="color:blue">Quản Lý Nhãn Hàng</a>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> 10-8-2017</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-level-up" aria-hidden="true"></i> 1 năm</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-money" aria-hidden="true"></i> 5 - 10 triệu</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh</h6>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="detail.php" style="color:blue">Quản Lý Nhãn Hàng</a>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> 10-8-2017</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-level-up" aria-hidden="true"></i> 1 năm</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-money" aria-hidden="true"></i> 5 - 10 triệu</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh</h6>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="detail.php" style="color:blue">Quản Lý Nhãn Hàng</a>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> 10-8-2017</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-level-up" aria-hidden="true"></i> 1 năm</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-money" aria-hidden="true"></i> 5 - 10 triệu</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh</h6>
                                            </div>
                                        </div>
                                        <hr>
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
