    <?php require_once 'includes/connect.php' ;?>
    <?php include 'includes/header.php'; ?>

    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="job-form-box">
                                <h2 class="heading">Find a job</h2>
                                <form id="job-main-form" method="get" action="job.php" class="job-main-form">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <label for="profession">Nhập vị trí công việc</label>
                                                <input type="text" id="search" name="search" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="location">Loại cv</label>
                                                    <select class="form-control" name="job">
                                                        <option>Job</option>
                                                        <option>Part time</option>
                                                        <option>Việc trong nước</option>
                                                        <option>Việc Nước ngoài</option>    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="location">Địa điểm</label>
                                                    <select class="form-control" placeholder="Địa điểm" name="place">
                                                        <option>Place</option>
                                                        <option>Hồ Chí Minh</option>
                                                        <option>Hà Nội</option>
                                                        <option>Đà Nẵng</option>
                                                        <option>Bình Dương</option>
                                                        <option>Nha Trang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 23px"><i class="fa fa-search"></i></button>
                                                <input type="submit" name="ok" value="search" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="home-area">
            <div class="container home_content">
                <div class="row ">
                    <div class="col-sm-12"><h2 class="sub_title">New</h2></div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <h3>Part time</h3>
                            <div class="recent-post widget">
                                <ul>
                                    <?php
                                        $sql = "SELECT * FROM details where category = '1' LIMIT 5";
                                        $query = mysqli_query($link,$sql);
                                        while ( $data = mysqli_fetch_array($query) ) {
                                        ?>
                                        <li style="border-bottom:1px solid #eeeeee">
                                            <a href="detail.php?id=<?php echo $data['id']; ?>" style="color:red"><?php echo $data['title']; ?></a>
                                            <time><i class='fa fa-clock-o' aria-hidden='true'></i> <?php echo $data['date_up']; ?></time>
                                            <a href="company.php"><p><?php echo $data['company']; ?></p></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="overlay" style="padding-top: 20px">
                                    <div class="buttons text-center">
                                        <a href="part-time.php" class="btn btn-primary">Xem tất cả </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <h3>Việc làm trong nước</h3>
                            <div class="recent-post widget">
                                <ul>
                                    <?php
                                        $sql = "SELECT * FROM details where category = '2' LIMIT 5";
                                        $query = mysqli_query($link,$sql);
                                        while ( $data = mysqli_fetch_array($query) ) {
                                        ?>
                                        <li style="border-bottom:1px solid #eeeeee">
                                            <a href="detail.php?id=<?php echo $data['id']; ?>" style="color:red"><?php echo $data['title']; ?></a>
                                            <time><i class='fa fa-clock-o' aria-hidden='true'></i> <?php echo $data['date_up']; ?></time>
                                            <a href="company.php"><p><?php echo $data['company']; ?></p></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="overlay" style="padding-top: 20px">
                                    <div class="buttons text-center">
                                        <a href="viectn.php" class="btn btn-primary">Xem tất cả </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <h3>Việc làm nước ngoài</h3>
                            <div class="recent-post widget">
                                <ul>
                                    <?php
                                        $sql = "SELECT * FROM details where category = '3' LIMIT 5";
                                        $query = mysqli_query($link,$sql);
                                        while ( $data = mysqli_fetch_array($query) ) {
                                        ?>
                                        <li style="border-bottom:1px solid #eeeeee">
                                            <a href="detail.php?id=<?php echo $data['id']; ?>" style="color:red"><?php echo $data['title']; ?></a>
                                            <time><i class='fa fa-clock-o' aria-hidden='true'></i> <?php echo $data['date_up']; ?></time>
                                            <a href="company.php"><p><?php echo $data['company']; ?></p></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="overlay" style="padding-top: 20px">
                                    <div class="buttons text-center">
                                        <a href="viecnn.php" class="btn btn-primary">Xem tất cả </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- #works -->

        <section class="home-area">
            <div class="home_content">
                <div class="container">
                    <h2>Việc làm mới nhất</h2>
                    <?php
                        $sql = "SELECT * FROM details  ORDER BY date_up DESC LIMIT 10 ";
                        $query = mysqli_query($link,$sql);
                        while ( $data = mysqli_fetch_array($query) ) {
                        ?>
                    <div class="job-listing">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-2"><img src="img/l1.jpg" alt="Amazon " class="img-responsive""></div>
                                    <div class="col-xs-10">
                                        <h4><a href="detail.php?id=<?php echo $data['id'] ?>" class="job__title"><?php echo $data['title']; ?></a></h4>
                                        <p class="job__company"><?php echo $data['company']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i> <?php echo $data['city']; ?></div>
                            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
                                <p><?php echo $data['date_up']; ?></p>
                            </div>
                            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
                                <div class="job__star">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>  
        </section>        

        <section class="services">
            <h2 class="section-title">Nhà tuyển dụng hàng đầu</h2>
            <p class="desc">Praesent faucibus ipsum at sodales blandit</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <img src="img/avater-2.jpg" alt="logo company" style="border-radius: 100%">
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="company.php"><h4 class="media-heading">ABC company</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <img src="img/avater-2.jpg" alt="logo company" style="border-radius: 100%">
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="company.php"><h4 class="media-heading">ABC company</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <img src="img/avater-2.jpg" alt="logo company" style="border-radius: 100%">
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="company.php"><h4 class="media-heading">ABC company</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <img src="img/avater-2.jpg" alt="logo company" style="border-radius: 100%">
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="company.php"><h4 class="media-heading">ABC company</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <img src="img/avater-2.jpg" alt="logo company" style="border-radius: 100%">
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="company.php"><h4 class="media-heading">ABC company</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <img src="img/avater-2.jpg" alt="logo company" style="border-radius: 100%">
                                </div>
                            </div>
                            <div class="media-body">
                                <a href="company.php"><h4 class="media-heading">ABC company</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </section>
        <section class="home-area">
            <div class="home_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"><h2 class="sub_title">Blog tuyển dụng</h2></div>
                        <div class="home_list">
                            <ul>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/h1.jpeg" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">Post Title</a></h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <a href="#" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/h2.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">Post Title</a></h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <a href="#" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/h3.jpeg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">Post Title</a></h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <a href="#" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/h4.jpeg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">Post Title</a></h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <a href="#" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>                                    
                            </ul>
                        </div>
                        
                        <?php include 'modules/listlink.php'; ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
