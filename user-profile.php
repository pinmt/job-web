<?php 
    include_once 'includes/connect.php';
 ?>

    <?php include 'includes/header.php'; ?>
    <main class="site-main">
        <section>
            <div class="container wow fadeInDown">
                <div class="row">
                    <div class="col-md-8">
                        <a class="btn btn-primary" href="viewprofile.php?id=<?= $_SESSION['user_id'] ?>"><i class="fa fa-plus fa-fw"></i>Xem hồ sơ</a>
                        <a class="btn btn-primary" href="createfile.php?id=<?= $_SESSION['user_id'] ?>"><i class="fa fa-plus fa-fw"></i>Tạo hồ sơ</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
