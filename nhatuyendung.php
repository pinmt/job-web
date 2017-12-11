    <?php session_start(); ?>
    <?php include_once 'includes/connect.php'; ?>
    <?php include 'includes/permission.php'; ?>
    <?php include 'includes/header.php'; ?>
    <?php 
        $id = -1;
        if (isset($_GET["id"])) {
            $id = intval($_GET['id']);
        }
        $sql = "SELECT * FROM users_company WHERE id = $id";
        $query = mysqli_query($link,$sql);
    ?>
    <main class="site-main">
        <section>
            <div class="container">
                <a href="newpost.php" type="button" class="btn btn-info">Đăng tin mới</a>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-content">
                            <h2>Danh sách việc làm đang tuyển</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Vị trí tuyển dụng</th>
                                        <th>Hạn nộp</th>
                                        <th>Tình trạng</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                    $id_post = $_SESSION['user_id'];
                                    $sql = "SELECT * FROM details where author =  $id_post  ORDER BY deadline DESC";
                                    $query = mysqli_query($link,$sql);
                                    while ( $data = mysqli_fetch_array($query) ) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td style="color:blue"><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['deadline']; ?></td>
                                            <td><?php if(isset($data) && $data['status']=='1') echo "Mở";
                                                        if(isset($data) && $data['status']=='0') echo "Đóng"; ?></td>
                                            <td>
                                                <a href="detail.php?id=<?php echo $data['id']; ?>" style="color:blue">Xem</a> |
                                                <a href="edit-post.php?id=<?php echo $data['id']; ?>" style="color:blue">Sửa</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <h3>Danh sách ứng viên</h3>
                                <div class="categories widget">
                                    <ul>
                                        <?php
                                            $sql = "SELECT * FROM users_profile limit 5";
                                            $query = mysqli_query($link,$sql);
                                            while ( $data = mysqli_fetch_array($query) ) {
                                        ?>
                                        <li>
                                            <div class="col-md-12">
                                                <div class="col-md-8">
                                                    <p style="color:green"><i class="fa fa-user fa-fw"></i><?= $data['fullname'] ?></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#" style="color:blue">Xem</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12"  style="border-bottom: 1px solid black">
                                                <div class="col-md-6">
                                                    <h6><i class="fa  fa-briefcase" aria-hidden="true"></i> <?= $data['career'] ?></h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6><i class="fa fa-map-marker " aria-hidden="true"></i> <?= $data['city'] ?></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <?php include 'includes/footer.php'; ?>