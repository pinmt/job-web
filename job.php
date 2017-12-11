
<?php
    require_once 'includes/connect.php';
    /*include('action/search.php');*/
    /*pagination*/
    $search = addslashes($_GET['search']);
    $sql = "SELECT count(id) as id FROM details where status = '%$search%'";
    $result = mysqli_query($link, $sql);

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
    var_dump($result);
?>

    <?php include 'includes/header.php'; ?>
    <main class="site-main">
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Job</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li>Job</li>
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
                                    <h2>Danh sách việc làm</h2>
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
                                            if (isset($_REQUEST['ok'])) 
                                            {
                                                $search = addslashes($_GET['search']);
                                                // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                                                if (empty($search)) {
                                                    echo "Yeu cau nhap du lieu vao o trong";
                                                } 
                                                else
                                                {
                                                    $sql = "SELECT * FROM details where status like '%$search%' ";
                                                    $query = mysqli_query($link,$sql);
                                                    $num = mysqli_num_rows($query);
                                                    var_dump($num);
                                                    if ($num > 0 && $search != "") 
                                                    {
                                                        echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
                                                        echo '<table border="1" cellspacing="0" cellpadding="10">';
                                                        while ($data = mysql_fetch_assoc($query)) {
                                                            echo '<tr>';
                                                                echo "<td>{$data['title']}</td>";                                                               
                                                            echo '</tr>';
                                                        }
                                                        echo '</table>';
                                                    } 
                                                    else {
                                                        echo "Khong tim thay ket qua!";
                                                    }
                                                }
                                            }
                                            ?>   
                                    </table>
                                <center>
                                    <div class="row">
                                        <div class="pagination ">
                                           <?php 
                                                if ($current_page > 1 && $total_page > 1){
                                                    echo '<a href="job.php?page='.($current_page-1).'">Prev</a> | ';
                                                }
                                                for ($i = 1; $i <= $total_page; $i++){
                                                    if ($i == $current_page){
                                                        echo '<span>'.$i.'</span> | ';
                                                    }else{
                                                        echo '<a href="job.php?page='.$i.'">'.$i.'</a> | ';
                                                    }
                                                }if ($current_page < $total_page && $total_page > 1){
                                                    echo '<a href="job.php?page='.($current_page+1).'">Next</a> | ';
                                                }
                                           ?>
                                        </div>
                                    </div>
                                </center>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class=" widget">
                        <h3 class="widget-head">Tìm kiếm nâng cao</h3>
                        <form action="" method="get" class="searchform" role="search">
                            <div class="form-group">
                               <input type="" class="form-control" id="text" placeholder="Nhập vị trí, tên công ty..." name="email">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="job">
                                    <option>Job</option>
                                    <option>Part time</option>
                                    <option>Việc trong nước</option>
                                    <option>Việc Nước ngoài</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" placeholder="Địa điểm" name="place">
                                    <option>Place</option>
                                    <option>Hồ Chí Minh</option>
                                    <option>Hà Nội</option>
                                    <option>Đà Nẵng</option>
                                    <option>Bình Dương</option>
                                    <option>Nha Trang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" placeholder="Career" name="place">
                                    <option>Career</option>
                                    <option>Kinh doanh</option>
                                    <option>Thiết kế</option>
                                    <option>Bất động sản</option>
                                    <option>Bán hàng</option>
                                    <option>Sư phạm</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" placeholder="Career" name="exp">
                                    <option>Exp</option>
                                    <option>Chưa có kinh nghiệm</option>
                                    <option>Dưới 1 năm</option>   
                                    <option>1 năm</option>
                                    <option>2 năm</option>
                                    <option>3 năm</option>
                                    <option>Trên 3 năm</option>
                                </select>
                            </div>
                            <div>
                                <center><button type="submit" class="btn btn-default"><a href="job.php">Search <i class="fa fa-search"></i></a></button></center>
                            </div>
                            </form>
                        </div>
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
