<?php 
    include_once 'includes/connect.php';
    /*pagination*/
    $result = mysqli_query($link, 'select count(id) as id from details where category = "2"');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['id'];
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 3;
    $total_page = ceil($total_records / $limit);
    if($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;
    /*pagination end*/
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
                                <li>Việc trong nước</li>
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
                                    <h2>Danh sách việc làm trong nước</h2>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Vị trí tuyển dụng</th>
                                                <th>Khu vực</th>
                                                <th>Mức lương</th>
                                                <th>Hạn nộp</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $sql = "SELECT * FROM details where category = '2' LIMIT $start, $limit";
                                            $query = mysqli_query($link,$sql);
                                            while ( $data = mysqli_fetch_array($query) ) {
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><a href="detail.php?id=<?php echo $data['id']; ?>" style="color:blue"><?php echo $data['title']; ?></a></td>
                                                    <td><?php echo $data['city']; ?></td>
                                                    <td><?php echo $data['wage']; ?></td>
                                                    <td><?php echo $data['deadline']; ?></td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                        
                                    </table>
                                </div>
                                <center>
                                    <div class="row">
                                        <div class="pagination ">
                                           <?php 
                                                if ($current_page > 1 && $total_page > 1){
                                                    echo '<a href="viectn.php?page='.($current_page-1).'">Prev</a> | ';
                                                }
                                                for ($i = 1; $i <= $total_page; $i++){
                                                    if ($i == $current_page){
                                                        echo '<span>'.$i.'</span> | ';
                                                    }else{
                                                        echo '<a href="viectn.php?page='.$i.'">'.$i.'</a> | ';
                                                    }
                                                }if ($current_page < $total_page && $total_page > 1){
                                                    echo '<a href="viectn.php?page='.($current_page+1).'">Next</a> | ';
                                                }
                                           ?>
                                        </div>
                                </div>
                                </center>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class=" widget">
                        <?php include 'modules/search.php' ?>
                        
                        <?php include 'modules/nganhnoibat.php' ?>
                        
                        <div class="recent-post widget">
                            <h3>Recent Posts</h3>
                            
                            <ul>
                                <li>
                                    <a href="#">Corporate meeting turns into a photoshooting.</a><br>
                                    <time>16 May, 2015</time>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
