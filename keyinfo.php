<!DOCTYPE html>
<?php
        session_start();
        echo $_SESSION['id'];
?>
<html lang="en">

    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>keyword article</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <link rel="stylesheet" href="css/slick.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




    <link rel="stylesheet" href="css/style2.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<!--  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <title>Sign in</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <style>
    .jb-default-1 { font-size: 13px; padding-left: 20px; vertical-align: text-top; }
    .ex6 {vertical-align: super;}
    .ex8 {vertical-align: text-bottom;}
     /* 슬릭 배너 */
    .ban {position: relative; padding: 24px 0 20px;}
    .ban .slick-prev {position: absolute; left: -80px; top: 80px; width: 43px; height: 43px; background: #ccc; background: url(../img/icon.png) no-repeat -150px 0; text-indent: -9999px;}
    .ban .slick-next {position: absolute; right: -80px; top: 80px; width: 43px; height: 43px; background: #ccc; background: url(../img/icon.png) no-repeat -150px -43px; text-indent: -9999px;}
    .ban .slick-prev:hover {background-position: -193px 0;}
    .ban .slick-next:hover{background-position: -193px -43px;}
    .ban img {border: 4px solid #dcdcdc;}
    .ban img:hover {border-color: #98bcdc;}
    .ban .slick-slide {margin: 10px;}
    .ban .slick-dots {bottom: 15px; display: block; width: 100%; text-align: center;}
    .ban .slick-dots li {display: inline-block; width: 15px; height: 15px; margin: 5px;}
    .ban .slick-dots li button {font-size: 0; line-height: 0; display: block; width: 15px; height: 15px; cursor: pointer; background: #5dbfeb; border-radius: 50%;}
    .ban .slick-dots li.slick-active button {background: #2b91c8;}

     /* cardType */
     .card__inner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .card__inner .card {
            width: 24%;
            text-align: left;
        }
        .card__inner .card:nth-child(1){
            margin-bottom: 50px;
        }
        .card__body {
            position: relative;
        }
        .card__body h3 {
            font-size: 28px;
            font-weight: 500;
            margin: 20px 0 10px;
        }
        .card__body p {
            font-size: 18px;
            font-weight: 300;
            line-height: 1.4;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; 
            -webkit-box-orient: vertical;
        }
        .card__body a {
            position: absolute;
            right: 0; 
            top: 0;
            width: 28px; 
            height: 28px;
            background: url(https://webstoryboy.github.io/web2022/webs_img/card02_arrow.svg);
           background-size: cover;
        }
  </style>



</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->


        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="recent-news.php"><img src="images/logo.png" width=150px alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="today-issue.php">Today Issue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="collect-press.php">Collect Press</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="my-interested-news.php">my interested news</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="diary.php">diary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="keya-info.php">keya INFO</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link color-pink-hover" font-size=20%>���� ���� ����</a>
                            </li> -->
                            <!--<span class="jb-default-1 ex6">���� ���� ����</span>
                            <span class="jb-default-1 ex8">��ü ���� ����</span>
				-->
                        </ul>
                    </div>
               </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        <section class="section wb">
            <div class ="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <h2 style="padding-top: 0px"> Keyword News </h2>
                    <?php
                        $mysql_host = 'localhost';
						$mysql_user = 'root';
						$mysql_password = '111111';
						$mysql_db = 'keya';
                        //echo $_SESSION['id'];
						//connetc 설정(host,user,password)
						$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

                        $keyword = $_GET[press];
						if(mysqli_connect_error($con)) {
							echo "mysql connect fail!!", "<br>";
							echo mysqli_connect_error();
							exit(); }
                            
                            // $result = mysqli_query($con, "select * from raw_news");
                            $mini = $_SESSION['id'];
                            $result1 = mysqli_query($con, "select * from keyword where my_key='$keyword'");
                            $row= mysqli_fetch_row($result1);
                            
                            // $result2 = mysqli_query($con, "select * from user where id='$mini'");

                        ?>

                        <div class="ban">
                        <form name = "registerSbmt" id = "registerSbmt" method="post" action="my_key_diary_db.php">
                            <div class="card">
                                <?php 
                                    $news_id = $row[2];
                                    $result2 = mysqli_query($con, "select * from raw_news where news_id ='$news_id'");
                                    $key_news = mysqli_fetch_row($result2);
                                    ?>
                                <img src="<?php echo $key_news[6];?>" alt="" height=200px class="card-img-top" />
                                <div class="card-body">
                                <p><?php echo $key_news[1];?></p>
                                <p class="card-text"><?php echo $key_news[9]; ?></p>
                                <input class="form-control" name= "chat" id="chat" type="text" placeholder="chat"style="width:150px;height:35px;font-size:17px;"/>
				                <input name="news_id" type="hidden" value="<?php echo $news_id; ?>" />
                                <input type = "submit" value="store">
                                <a href="<?php echo $key_news[8];?>" class="btn btn-primary">More</a>
                                </div>
                            </div></form>

                            <form name = "registerSbmt" id = "registerSbmt" method="post" action="my_key_diary_db.php">
                            <div class="card">
                                <?php 
                                    $news_id = $row[3];
                                    $result2 = mysqli_query($con, "select * from raw_news where news_id ='$news_id'");
                                    $key_news = mysqli_fetch_row($result2);
                                    ?>
                                <img src="<?php echo $key_news[6];?>" alt="" height=200px class="card-img-top" />
                                <div class="card-body">
                                <p><?php echo $key_news[1];?></p>
                                <p class="card-text"><?php echo $key_news[9]; ?></p>
                                <input class="form-control" name= "chat" id="chat" type="text" placeholder="chat" style="width:150px;height:35px;font-size:17px;"/>
                                <input name="news_id" type="hidden" value="<?php echo $news_id; ?>" />
                                <input type = "submit" value="store">
                                <a href="<?php echo $key_news[8];?>" class="btn btn-primary">More</a>
                                </div>
                            </div></form>

                            
                            <form name = "registerSbmt" id = "registerSbmt" method="post" action="my_key_diary_db.php">
                            <div class="card">
                                <?php 
                                    $news_id = $row[4];
                                    $result2 = mysqli_query($con, "select * from raw_news where news_id ='$news_id'");
                                    $key_news = mysqli_fetch_row($result2);
                                    ?>
                                <img src="<?php echo $key_news[6];?>" alt="" height=200px class="card-img-top" />
                                <div class="card-body">
                                <p><?php echo $key_news[1];?></p>
                                <p class="card-text"><?php echo $key_news[9]; ?></p>
                                <input class="form-control" name= "chat" id="chat" type="text" placeholder="chat" style="width:150px;height:35px;font-size:17px;"/>
                                <input name="news_id" type="hidden" value="<?php echo $news_id; ?>" />
                                <input type = "submit" value="store">
                                <a href="<?php echo $key_news[8];?>" class="btn btn-primary">More</a>
                                </div>
                            </div></form>

                            
                            <form name = "registerSbmt" id = "registerSbmt" method="post" action="my_key_diary_db.php">
                            <div class="card">
                                <?php 
                                    $news_id = $row[5];
                                    $result2 = mysqli_query($con, "select * from raw_news where news_id ='$news_id'");
                                    $key_news = mysqli_fetch_row($result2);
                                    ?>
                                <img src="<?php echo $key_news[6];?>" alt="" height=200px class="card-img-top" />
                                <div class="card-body">
                                <p><?php echo $key_news[1];?></p>
                                <p class="card-text"><?php echo $key_news[9]; ?></p>
                                <input class="form-control" name= "chat" id="chat" type="text" placeholder="chat" style="width:150px;height:35px;font-size:17px;"/>
                                <input name="news_id" type="hidden" value="<?php echo $news_id; ?>" />
                                <input type = "submit" value="store">
                                <a href="<?php echo $key_news[8];?>" class="btn btn-primary">More</a>
                                </div>
                            </div></form>

                            
                            <form name = "registerSbmt" id = "registerSbmt" method="post" action="my_key_diary_db.php">
                            <div class="card">
                                <?php 
                                    $news_id = $row[6];
                                    $result2 = mysqli_query($con, "select * from raw_news where news_id ='$news_id'");
                                    $key_news = mysqli_fetch_row($result2);
                                    ?>
                                <img src="<?php echo $key_news[6];?>" alt="" height=200px class="card-img-top" />
                                <div class="card-body">
                                <p><?php echo $key_news[1];?></p>
                                <p class="card-text"><?php echo $key_news[9]; ?></p>
                                <input class="form-control" name= "chat" id="chat" type="text" placeholder="chat" style="width:150px;height:35px;font-size:17px;"/>
                                <input name="news_id" type="hidden" value="<?php echo $news_id; ?>" />
                                <input type = "submit" value="store">
                                <a href="<?php echo $key_news[8];?>" class="btn btn-primary">More</a>
                                </div>
                            </div></form>

                            
                            <form name = "registerSbmt" id = "registerSbmt" method="post" action="my_key_diary_db.php">
                            <div class="card">
                                <?php 
                                    $news_id = $row[7];
                                    $result2 = mysqli_query($con, "select * from raw_news where news_id ='$news_id'");
                                    $key_news = mysqli_fetch_row($result2);
                                    ?>
                                <img src="<?php echo $key_news[6];?>" alt="" height=200px class="card-img-top" />
                                <div class="card-body">
                                <p><?php echo $key_news[1];?></p>
                                <p class="card-text"><?php echo $key_news[9]; ?></p>
                                <input class="form-control" name= "chat" id="chat" type="text" placeholder="chat" style="width:150px;height:35px;font-size:17px;" />
                                <input name="news_id" type="hidden" value="<?php echo $news_id; ?>" />
                                <input type = "submit" value="store">
                                <a href="<?php echo $key_news[8];?>" class="btn btn-primary">More</a>
                                </div>
                            </div></form>

                            
                        </div>
        
                        <!-- visualization section -->
                        <div class="a_today_vi_section">
                            <h2> MY Keywords </h2> <br>
                            <?php $today = date("Ymd");
                                //$src = "my_key_visual_img/20221126-23"."_".$keyword.".png";
                                $src = "my_key_visual_img/".$today."_".$keyword.".png";
                                //echo $src; 
                                // echo $today;?>
                            <img src="<?php echo $src?>" class="a_today_key_img" style="border: 1px solid #87cefa;">
                        </div> <!-- end visualization section -->

                    </div><!-- end col -->

                </div><!-- end sidebar col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="../js/scripts.js"></script> -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="option.js"></script>
    <script>
        // 배너
        $(".ban").slick({
            dots: true,
            infinite: true,
            slidesToShow:3,
            slidesToScroll:3,
            arrows:false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows:false,
                        autoplay: false,
                        }
                }
            ]
        });
        

        
        //changeLangSelect();
        selectText = changeLangSelect();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


        
</body>
</html>
