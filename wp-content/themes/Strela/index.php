<?php get_header(); ?>
        <img class="glavnaslika" src="<?php echo get_template_directory_uri(); ?>/img/STRELA.png">



        <header class="mainHeader">
            <p class="title">Projects</p>
        </header>


        <div>

            <div class="member-text-left">
                <div class ="crop">
                    <img src="http://placehold.it/480x720">

                </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

            </div>

            <div class="prvi_ispravak">

                <div>
                    <img class="member" src="http://placehold.it/480x720">

                </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

            </div>

        </div>



        <p class="title">Members</p>

        <div class="mainContent">

            <div class="content">
                <content>
                    <p class="topcontent">

                        <div class="member-text-left">
                            <div>
                                <img class="member" src="http://placehold.it/480x720">

                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>

                        <div class="member-text-right">

                            <div>
                                <img class="member" src="http://placehold.it/480x720">

                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>


                        <div class="member-text-left">
                            <div>
                                <img class="member" src="http://placehold.it/480x720">

                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>


                        <div class="member-text-right">
                            <div>
                                <img class="member" src="http://placehold.it/480x720">

                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>


                        <div class="member-text">
                            <div>
                                <img class="member" src="http://placehold.it/480x720">

                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>

                    </p>
                </content>
            </div>


        </div>
       
        <header class="mainHeader">

            <p class="title">Posts</p>


        </header>

        <div class="mainContent">
            <div class="content">
               
               <?php if(have_posts()) while(have_posts()) : the_post() ?>
                <article class="topcontent">
                    <header>
                        <h2 class="titlem"><?php the_title(); ?></h2>
                    </header>

                    <footer>
                        <p class="post-info"> Created <?php the_time('l, F jS, Y') ?> by <?php the_author(); ?> </p>
                    </footer>

                    <content>
                        <?php the_content(); ?>
                    </content>
                </article>
                <?php endwhile; ?>
            </div>
        </div>
        <?php get_footer(); ?>
  