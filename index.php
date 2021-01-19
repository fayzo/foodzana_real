
<!-- < ?php include "header_if_login.php"?> -->
<?php include "Get_usernameProfile.php"?>
<?php include "header.php"?>
<!-- <body class="chair"> -->
<?php include "navbar.php" ?>
<!-- Header -->

            <section class="slider_section">
                <?php echo $handmade->craftList_homeNavbarblack('Featured',1,1); ?>

                            
                    <header id="hello" style="background: url(<?php echo BASE_URL_LINK ;?>images/header_bg.jpg)no-repeat;
                        background-size: 100% 100%;
                        color: #f1f1f1;
                        overflow: hidden;">
                        <!-- Container -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner">
                                        <h3>-introducing-</h3>
                                        <h1>FATTY BURGER</h1>

                                        <div class="inner_banner">
                                            <div class="banner_content">
                                                <p>A double layer of sear-sizzled 100% pure beef mingled with special sauce on a sesame seed bun and topped with melty American cheese, crisp lettuce, minced onions and tangy pickles.</p>
                                                <p>*Based on pre-cooked patty weight.</p>							
                                            </div>
                                            <div class="stamp">
                                                <img src="<?php echo BASE_URL_LINK ;?>images/stamp.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Container end -->
                        <p class="caption">*Limited Time Only</p>
                    </header><!-- Header end -->

                <div class="container">
                    <!-- <div class="row">
                        <div class="col-md-9">
                            <div class="text-center">
                                <h1>Handmade by Artist in Rwanda</h1>
                                <p>Select Your Desire Arts</p>
                            </div>
                            < ?php echo $handmade->handmade_list('Featured',1,$user_id); ?>
                        </div>
                        <div class="col-md-3">
                            <span id="responseSubmitfooditerm"> </span>
                            <div id="responseSubmitfooditermview">
                                < ?php echo $handmade->Craft_showCart_itemSale(); 
                                    // var_dump($_SESSION["like_cart_item"]); 
                                ?>
                            </div>
                        </div>
                    </div> -->


                    <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- carousel inner -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active item">
                            <img src="<?php echo BASE_URL_LINK ;?>images/large_slider_img.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Cheddar JUnky</h2>
                                <h3>Stuffed Burgers</h3>

                                <p>Chef Wesley Genovart makes this over-the-top, Shake Shack–inspired burger with two thin stacked patties, thick-cut bacon, kimchi and a spicy homemade sauce.</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item item">
                            <img src="<?php echo BASE_URL_LINK ;?>images/large_slider_img.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Cheddar JUnky</h2>
                                <h3>Stuffed Burgers</h3>

                                <p>Chef Wesley Genovart makes this over-the-top, Shake Shack–inspired burger with two thin stacked patties, thick-cut bacon, kimchi and a spicy homemade sauce.</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item item">
                            <img src="<?php echo BASE_URL_LINK ;?>images/large_slider_img.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Cheddar JUnky</h2>
                                <h3>Stuffed Burgers</h3>

                                <p>Chef Wesley Genovart makes this over-the-top, Shake Shack–inspired burger with two thin stacked patties, thick-cut bacon, kimchi and a spicy homemade sauce.</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- carousel inner end -->
                </div><!-- Carousel end-->

                    <!-- Forth section -->
                    <div class="row forth_sec">
                            <div class="col-4">
                                <div class="menu" style="background: url(assets/image/img/menu_bg.jpg)no-repeat;background-size: 100% 100%;">
                                    <div class="inner_content">
                                        <span class="flaticon flaticon-burger"></span>
                                        <h2>menu</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="drinks" style="background: url(assets/image/img/drinks_bg.jpg)no-repeat;background-size: 100% 100%;">
                                    <div class="inner_content">
                                        <span class="flaticon flaticon-drink"></span>
                                        <h2>drinks</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="sides" style="background: url(assets/image/img/sides_bg.jpg)no-repeat;background-size: 100% 100%;">
                                    <div class="inner_content">
                                        <span class="flaticon flaticon-food"></span>
                                        <h2>sides</h2>
                                    </div>
                                </div>
                            </div>
                    </div><!-- forth section end -->

                </div><!-- container -->
            </section>

            <!-- discount -->
            <div class="container">
                <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="<?php echo BASE_URL_LINK ;?>images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="<?php echo BASE_URL_LINK ;?>images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="<?php echo BASE_URL_LINK ;?>images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end discount -->
            <!-- trending -->
            <div class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Trending <strong class="black">Categories</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                <figure><img src="<?php echo BASE_URL_LINK ;?>images/1.jpg" /></figure>
                                <h3>Outdoor</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="trending-box">
                                <figure><img src="<?php echo BASE_URL_LINK ;?>images/2.jpg" /></figure>
                                <h3>Living Room</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                <figure><img src="<?php echo BASE_URL_LINK ;?>images/3.jpg" /></figure>
                                <h3>Bedroom Lighting</h3>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end trending -->

            <section>

                <div class="banner_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                                <div class="text-bg">
                                    <h1>The latest <br> <strong class="black_bold">furniture Design</strong><br></h1>
                                    <a href="#">Shop Now <i class='fa fa-angle-right'></i></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="text-img">
                                    <figure><img src="<?php echo BASE_URL_LINK ;?>images/bg.jpg" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </section>
                        
            <section class="agent-section spad" style="background: #c8c8c8;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <span>We Are Here To Serve You</span>
                                <h2>Customer Reviews</h2>
                            </div>
                        </div>
                    </div>

                    <?php echo $handmade->custtomer_reviews(); ?>
                </div>

            </section>
            <!-- Property Section End -->
            
            <section class="sign-up" style="padding: 80px 0px;
            background-image: url(<?php echo BASE_URL_LINK ;?>images/signup-bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;">
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Signup for our newsletters</h2>
                            </div>
                        </div>
                    </div>
                    <form id="newslatter_form" method ="post" class="newslatter-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="responseNewslatter"></div>
                            </div>
                            <div class="col-md-4 offset-3">
                                <fieldset>
                                    <input  name="newslatter_email_client" id="newslatter_email_client"  type="text" class="form-control" placeholder="Enter your email here..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-2">
                                <fieldset>
                                    <button type="submit" id="newslatter_form_submit" class="btn">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

<?php include "footer.php" ?>
