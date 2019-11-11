<?php

include('path.php');
include(ROOT_PATH . "/app/database/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8b0e50bfe8.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <!--Style-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Blog</title>
</head>
<body>

    <!--INCLUDE HEADER HERE-->

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
        
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>    

    <!--Page Content Wrapper-->
    <div class="page-wrapper">

        <!--Post Slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>

            <!--Slider buttons -->
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>


            <div class="post-wrapper">
                <!--Single Post-->
                <div class="post">
                    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpersonal-development.info%2Fwp-content%2Fuploads%2F2014%2F08%2Fhealthy.png&f=1&nofb=1" class="slider-image" alt="HEALTH IS LOVE">
                    <div class="post-info">
                        <h4><a href="first.html">Why people should not be nervous of visiting a doctor-1</a></h4>
                        <i class="far fa-user">Rajesh Jha</i>
                        &nbsp;
                        <i class="far fa-calendar">Oct 23, 2019</i>
                    </div>
                </div>

                <div class="post">
                        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpersonal-development.info%2Fwp-content%2Fuploads%2F2014%2F08%2Fhealthy.png&f=1&nofb=1" class="slider-image" alt="HEALTH IS LOVE">
                        <div class="post-info">
                            <h4><a href="first.html">Why people should not be nervous of visiting a doctor-2</a></h4>
                            <i class="far fa-user">Rajesh Jha</i>
                            &nbsp;
                            <i class="far fa-calendar">Oct 23, 2019</i>
                        </div>
                </div>

                <div class="post">
                        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpersonal-development.info%2Fwp-content%2Fuploads%2F2014%2F08%2Fhealthy.png&f=1&nofb=1" class="slider-image" alt="HEALTH IS LOVE">
                        <div class="post-info">
                            <h4><a href="first.html">Why people should not be nervous of visiting a doctor-3</a></h4>
                            <i class="far fa-user">Rajesh Jha</i>
                            &nbsp;
                            <i class="far fa-calendar">Oct 23, 2019</i>
                        </div>
                </div>

                <div class="post">
                        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpersonal-development.info%2Fwp-content%2Fuploads%2F2014%2F08%2Fhealthy.png&f=1&nofb=1" class="slider-image" alt="HEALTH IS LOVE">
                        <div class="post-info">
                            <h4><a href="first.html">Why people should not be nervous of visiting a doctor-4</a></h4>
                            <i class="far fa-user">Rajesh Jha</i>
                            &nbsp;
                            <i class="far fa-calendar">Oct 23, 2019</i>
                        </div>
                </div>

                <div class="post">
                        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpersonal-development.info%2Fwp-content%2Fuploads%2F2014%2F08%2Fhealthy.png&f=1&nofb=1" class="slider-image" alt="HEALTH IS LOVE">
                        <div class="post-info">
                            <h4><a href="first.html">Why people should not be nervous of visiting a doctor-5</a></h4>
                            <i class="far fa-user">Rajesh Jha</i>
                            &nbsp;
                            <i class="far fa-calendar">Oct 23, 2019</i>
                        </div>
                </div>

            </div>
        </div> <!--End of Post SLider-->
     
        
       <!--Content -->
        <div class="content clearfix">
            <!--Main Content-->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post clearfix">
                    <img src="assets/images/image2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">Sample Post - Insert Title Here</a></h2>
                        <i class="far fa-user">Nevil Kaspale</i>
                        &nbsp;
                        <i class="far-calendar">Oct 25, 2019</i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, maiores consectetur voluptatum accusamus atque iure.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/image2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">Sample Post - Insert Title Here</a></h2>
                        <i class="far fa-user">Nevil Kaspale</i>
                        &nbsp;
                        <i class="far-calendar">Oct 25, 2019</i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, maiores consectetur voluptatum accusamus atque iure.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/image2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">Sample Post - Insert Title Here</a></h2>
                        <i class="far fa-user">Nevil Kaspale</i>
                        &nbsp;
                        <i class="far-calendar">Oct 25, 2019</i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, maiores consectetur voluptatum accusamus atque iure.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/image2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">Sample Post - Insert Title Here</a></h2>
                        <i class="far fa-user">Nevil Kaspale</i>
                        &nbsp;
                        <i class="far-calendar">Oct 25, 2019</i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, maiores consectetur voluptatum accusamus atque iure.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

            </div> <!-- End of Main Content-->

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                        <ul>
                            <li><a href="#">Poems</a></li>
                            <li><a href="#">Quotes</a></li>
                            <li><a href="#">Fiction</a></li>
                            <li><a href="#">Biography</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">Inpsiration</a></li>
                            <li><a href="#">Life Lessons</a></li>
                        </ul>
                </div>

            </div> <!--End of Sidebar-->
        
        </div>
       <!--End of Content--> 
    </div>
    <!--End of Page Wrapper-->

    <!--Footer-->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!--End of Footer-->

    <!-- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

    <!--Slick Carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				

    <!--Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>