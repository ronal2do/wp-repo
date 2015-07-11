<?php get_header(); ?>
    <!DOCTYPE html>
    <!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
    <!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
    <!--[if gt IE 8]><!-->
    <html lang="en-US">
    <!--<![endif]-->
    <!-- Twitter Feed -->
    <div id="feed2" class="page-alternate">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title">Posts</h2>
                        <h3 class="title-description">Our posts<h3>
                </div>
            <?php while(have_posts()) : the_post(); ?>
                <div class="post">
            <p class="post-title"> <?php the_title(); ?> </p> 
            <p class="post-footer"> <?php the_time('l, F jS, Y') ?> </p>
            <div class="post-text"><?php the_content('Read More'); ?> </div>
            </div>

            
        <?php endwhile; ?>
        </div>
                    
                <div id="ticker" class="query"> 
                </div>
            </div>
        </div>
    </div>
</div>
 <!--End Twitter Feed -->

<!-- Our Work Section -->
<div id="work" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Recent Games</h2>
                    <h3 class="title-description"><h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
             <div class="span3">
               
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li class="type-work">Filter Games</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Pub Games</a></li>
                        <li><a href="#filter" data-option-value=".design">Ranked Games</a></li>
                        <li><a href="#filter" data-option-value=".photography">Mid Wars</a></li>
                
                    </ul>
                </nav>
               
            </div> 
            
            <div class="span9">
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs">
                        
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Title" href="_include/img/work/full/image-01-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-01.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Title" href="_include/img/work/full/image-02-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Titles" href="_include/img/work/full/image-03-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                           
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Title" href="_include/img/work/full/image-04-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Title" href="_include/img/work/full/image-05-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-05.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Title" href="_include/img/work/full/image-06-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Title" href="_include/img/work/full/image-07-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                        </ul>
                    </section>
                    
                </div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">About Us</h2>
                <h3 class="title-description">Learn About our Team &amp; Culture.</h3>
                    </div>
                </div>
            </div>
            <!-- End Title Page -->

            <!-- People -->
            <div class="row">

                <!-- Start Profile -->


                <!-- Start Profile -->
                <div class="span4 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">Jungle</span>
                        </div>
                        <img src="_include/img/profile/profile-02.jpg" alt="Dominik Tušak">
                    </div>
                    <h3 class="profile-name">Mate matić</h3>
                    <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-email"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->

                <!-- Start Profile -->
                <div class="span4 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">Team Capitan</span>
                        </div>
                        <img src="_include/img/profile/profile-03.jpg" alt="Tin Novak">
                    </div>
                    <h3 class="profile-name">Ivo Ivić</h3>
                    <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->
                <div class="span4 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">Support</span>
                        </div>
                        <img src="_include/img/profile/profile-01.jpg" alt="Leon Redžić">
                    </div>
                    <h3 class=" profile-name">Leon Redžić</h3>
                    <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-dribbble"></i></a></li>
                            <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Profile -->

            </div>
            <!-- End People -->
        </div>
    </div>
    <!-- End About Section -->


    <!-- Contact Section -->
    <div id="contact" class="page">
        <div class="container">
            <!-- Title Page -->
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title">Get in Touch</h2>
                        <h3 class="title-description">We’re currently accepting new client projects. We look forward to serving you.</h3>
                    </div>
                </div>
            </div>
            <!-- End Title Page -->

            <!-- Contact Form -->
            <div class="row">
                <div class="span9">

                    <form id="contact-form" class="contact-form" action="#">
                        <p class="contact-name">
                            <input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                        </p>
                        <p class="contact-email">
                            <input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                        </p>
                        <p class="contact-message">
                            <textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                        </p>
                        <p class="contact-submit">
                            <a id="contact-submit" class="submit" href="#">Send Your Email</a>
                        </p>

                        <div id="response">

                        </div>
                    </form>

                </div>

                <div class="span3">
                    <div class="contact-details">
                        <h3>Contact Details</h3>
                        <ul>
                            <li><a href="#">redzicleon@gmail.com</a></li>
                            <li>(916) 375-2525</li>
                            <li>
                                Fly-Half studio
                                <br> 5240 Vanish Island. 105
                                <br> Sisak
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
    <!-- End Contact Section -->

    <!-- Twitter Feed -->
    <div id="twitter-feed" class="page-alternate">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="follow">
                        <a href="https://twitter.com/Eptick" title="Follow Me on Twitter" target="_blank"><i class="font-icon-social-twitter"></i></a>
                    </div>

                    <div id="ticker" class="query">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Twitter Feed -->

    <!-- Socialize -->
    <div id="social-area" class="page">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <nav id="social">
                        <ul>
                            <li><a href="https://twitter.com/Eptick" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                            <li><a href="https://www.facebook.com/leon.redzic" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Socialize -->

    <!-- Footer -->
    <footer>
        <p class="credits">Leon Redžić</p>
        <a id="back-to-top" href="#">
            <i class="font-icon-arrow-simple-up"></i>
        </a>
    </footer>
    <!-- End Footer -->

    <!-- Back To Top -->

    <!-- End Back to Top -->


    <!-- Js -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- jQuery Core -->
    <script src="_include/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <script src="_include/js/supersized.3.2.7.min.js"></script>
    <!-- Slider -->
    <script src="_include/js/waypoints.js"></script>
    <!-- WayPoints -->
    <script src="_include/js/waypoints-sticky.js"></script>
    <!-- Waypoints for Header -->
    <script src="_include/js/jquery.isotope.js"></script>
    <!-- Isotope Filter -->
    <script src="_include/js/jquery.fancybox.pack.js"></script>
    <!-- Fancybox -->
    <script src="_include/js/jquery.fancybox-media.js"></script>
    <!-- Fancybox for Media -->
    <script src="_include/js/jquery.tweet.js"></script>
    <!-- Tweet -->
    <script src="_include/js/plugins.js"></script>
    <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
    <script src="_include/js/placeholder.js"></script>
    <script src="_include/js/modernizr.js"></script>
    <script src="_include/js/main.js"></script>
    <!-- Default JS -->
    <!-- End Js -->

    </body>

    </html>
