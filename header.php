        <!DOCTYPE html>
        <!--[if IE 8 ]><html <?php language_attributes(); ?>> <![endif]-->


        <!-- Mirrored from www.vasterad.com/themes/astrum/blog-medium-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 07:48:52 GMT -->
        <head>

            <!-- Basic Page Needs
            ================================================== -->
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Astrum</title>

            <!-- Mobile Specific Metas
            ================================================== -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <!-- CSS
            ================================================== -->


            <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->


            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>


        <!-- Header
        ================================================== -->
        <header id="header">

            <!-- Container -->
            <div class="container">

                <!-- Logo / Mobile Menu -->
                <div class="three columns">

                    <div id="mobile-navigation">
                        <form method="GET" id="menu-search" action="#">
                            <input type="text" placeholder="Start Typing..." />
                        </form>
                        <a href="#menu" class="menu-trigger"><i class="icon-reorder"></i></a>
                        <span class="search-trigger"><i class="icon-search"></i></span>
                    </div>

                    <div id="logo">
                        <h1><a href="index-2.html"><img src="images/logo.png" alt="Astrum" /></a></h1>
                    </div>
                </div>


                <!-- Navigation
                ================================================== -->
                <div class="thirteen columns">


                    <nav id="navigation" class="menu">
                        <ul id="responsive">

<!---->
<!--                                <li><a href="index-2.html">Home</a></li>-->
<!---->
<!--                                <li><a href="#">Shortcodes</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="elements.html">Elements</a></li>-->
<!--                                        <li><a href="typography.html">Typography</a></li>-->
<!--                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>-->
<!--                                        <li><a href="icons.html">Icons</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!---->
<!--                                <li><a href="#">Pages</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="about.html">About</a></li>-->
<!--                                        <li><a href="services.html">Services</a></li>-->
<!--                                        <li><a href="faq.html">FAQ</a></li>-->
<!--                                        <li><a href="sidebar-right.html">Right Sidebar</a></li>-->
<!--                                        <li><a href="sidebar-left.html">Left Sidebar</a></li>-->
<!--                                        <li><a href="404-page.html">404 Page</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!---->
<!--                                <li><a href="#">Portfolio</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="portfolio-3-columns.html">3 Columns</a></li>-->
<!--                                        <li><a href="portfolio-4-columns.html">4 Columns</a></li>-->
<!--                                        <li><a href="single-project-half.html">Single Project Half</a></li>-->
<!--                                        <li><a href="single-project-wide.html">Single Project Wide</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!---->
<!--                                <li><a href="#" id="current">Blog</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="blog-large-image.html">Large Image</a></li>-->
<!--                                        <li><a href="blog-medium-image.html">Medium Image</a></li>-->
<!--                                        <li><a href="blog-post.html">Single Post</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!---->
<!--                                <li><a href="contact.html">Contact</a></li>-->

                            <!-- Search Form -->
                            <li class="search-container">
                                <div id="search-form">

                                    <?php echo get_search_form(); ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <?php
                        wp_nav_menu(array(
                                'theme_location'        =>      'mainmenu',
                                'menu_id'               =>      'responsive',
                                'container'             =>      'nav',
                                'container_class'       =>      'menu',
                                'container_id'          =>      'navigation',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                    ?>
                </div>

            </div>
            <!-- Container / End -->

        </header>
        <!-- Header / End -->

<!---->
<!--        <header id="masthead" class="site-header">-->
<!--            <div class="site-branding">-->
<!--                --><?php
//                the_custom_logo();
//                if ( is_front_page() && is_home() ) :
//                    ?>
<!--                    <h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--                --><?php
//                else :
//                    ?>
<!--                    <p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--                --><?php
//                endif;
//                $theme_description = get_bloginfo( 'description', 'display' );
//                if ( $theme_description || is_customize_preview() ) :
//                    ?>
<!--                    <p class="site-description">--><?php //echo wp_kses_post($theme_description); /* WPCS: xss ok. */ ?><!--</p>-->
<!--                --><?php //endif; ?>
<!--            </div> .site-branding -->
<!---->
<!--            <nav id="site-navigation" class="main-navigation">-->
<!--                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'theme' ); ?><!--</button>-->
<!--                --><?php
//                wp_nav_menu( array(
//                    'theme_location' => 'mainmenu',
//                    'menu_id'        => 'primary-menu',
//                ) );
//                ?>
<!--            </nav>< #site-navigation -->
<!--        </header><#masthead -->