<?php
get_header();
?>

    <!-- Content Wrapper / Start -->
    <div id="content-wrapper">


        <!-- Titlebar
        ================================================== -->
        <section id="titlebar">
            <!-- Container -->
            <div class="container">

                <div class="eight columns">
                    <h2>Our Blog</h2>
                </div>

                <div class="eight columns">
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="#">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </nav>
                    <div class="breadcrumbs"><?php get_breadcrumb(); ?></div>
                </div>

            </div>
            <!-- Container / End -->
        </section>

        <div class="container" >
            <div  class="twelve alt columns">

                <?php


                while (have_posts()) :the_post();
                    ?>
                    <!-- Post -->
                    <article class="post" style="margin: 0; border: 0;">

                        <figure class="post-img media">
                            <div class="mediaholder">
                                <a class="mfp-image" title="Touchpad Graphics Tablet" href="">
                                    <?php
                                    if(has_post_thumbnail()){
                                        $thumbnail_url = get_the_post_thumbnail_url(null,"large");
                                        //echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                        the_post_thumbnail("thumbnail" );
                                        //echo '</a>';
                                    }
                                    ?>
                                    <div class="hovercover">
                                        <div class="hovericon"><i class="hoverzoom"></i></div>
                                    </div>
                                </a>
                            </div>
                        </figure>

                        <div class="post-format">
                            <div class="circle"><i class="icon-pencil"></i><span></span></div>
                        </div>

                        <section class="post-content">

                            <header class="meta">
                                <h2><?php  the_title();?></h2>
                                <ul>
                                    <li>By <a href="#"><?php the_author_posts_link();?></a> - <?php echo get_the_date(); ?></li>
                                    <li><a href="#"><?php echo get_the_category_list($post_id ); ?></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                            </header>

                            <p><?php the_content(); ?></p>
                        </section>
                        <div class="clearfix"></div>

                    </article>

                <?php
                endwhile;

                ?>








            </div>
            <div class="four columns">
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
    </div>
<?php
get_footer();
