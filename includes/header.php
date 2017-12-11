<?php session_start(); ?>
<?php include_once 'includes/connect.php'; ?>
<!DOCTYPE.php>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job web</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com.php5shiv/3.7.3.php5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="site-header navbar-fixed-top">
    <nav class="navbar navbar-default">
		<div class="container">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<a href="index.php" class="navbar-brand">
				<img src="img/logo.png" alt="Post">
			</a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                <ul class="nav navbar-nav main-navbar-nav">
                    <?php 
                    if(isset($_SESSION['permission']) == true){
                        $permission = $_SESSION['permission'];
                        if ($permission == '0') {
                            echo   '<li><a href="index.php" title="">HOME</a></li>
                                    <li class="dropdown">
                                        <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JOB<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="part-time.php">Part time</a></li>
                                            <li><a href="viectn.php">Việc trong nước</a></li>
                                            <li><a href="viecnn.php">Việc nước ngoài</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="nhatuyendung.php" title="">ĐĂNG TIN</a></li>
                                    <li><a href="contact.php" title="">CONTACT</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li style="width:170px"><a href="user-profile.php"><i class="fa fa-user fa-fw"></i>'.$_SESSION['firstname'].' Profile</a></li>
                                            
                                            <li style="width:170px"><a href="action/logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                                        </ul>
                                    </li>';
                        }else{
                            echo '<li><a href="nhatuyendung.php" title="">ĐĂNG TIN</a></li>
                                <li><a href="contact.php" title="">CONTACT</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li style="width:170px"><a href="company-profile.php?id='.$_SESSION['user_id'].'"><i class="fa fa-user fa-fw"></i>Company profile</a></li>
                                        <li style="width:170px"><a href="action/logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                                    </ul>
                                </li>'; 
                        }
                    }
                    else{
                        echo '<li><a href="index.php" title="">HOME</a></li>
                            <li class="dropdown">
                                <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JOB<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="part-time.php">Part time</a></li>
                                    <li><a href="viectn.php">Việc trong nước</a></li>
                                    <li><a href="viecnn.php">Việc nước ngoài</a></li>
                                </ul>
                            </li>
                            <li><a href="nhatuyendung.php" title="">ĐĂNG TIN</a></li>
                            <li><a href="contact.php" title="">CONTACT</a></li>
                            <li><a href="../select-in.php" class="btn btn-info">SIGN IN</a></li>'; 
                        }
                    ?>
                    
                    <!-- <li><a href="listfile.php" title="">SITE MAPS</a></li> -->
                    <?php 
                        
                    ?>
                </ul>
                
                              
            </div><!-- /.navbar-collapse -->                
			<!-- END MAIN NAVIGATION -->
		</div>
	</nav>        
</header>

<!-- <li style="width:170px"><a href="createfile.php?id='.$_SESSION['user_id'].'"><i class="fa fa-plus fa-fw"></i>Tạo hồ sơ</a></li> -->


<!-- <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>Lorem Ipsum Dolor Sit Amet</p>
                </div>
                <div class="col-sm-6">
                    <ul class="list-inline pull-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                        <li><a href="tel:+902222222222"><i class="fa fa-phone"></i> +90 222 222 22 22</a></li>
                    </ul>                        
                </div>
            </div>
        </div>
    </div> -->