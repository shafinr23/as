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
                </div>

            </div>
            <!-- Container / End -->
        </section>

        <div class="container" >
            <div  class="twelve alt columns">
                <h1>
                    this post is from   <?php single_cat_title(); ?>
                </h1>
                <?php


                while (have_posts()) :the_post();
                    ?>
                    <!-- Post -->
                    <article  class="post medium">

                        <div  class="five alt columns alpha">
                            <figure class="post-img media">
                                <div class="mediaholder">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if(has_post_thumbnail()){
                                            $thumbnail_url = get_the_post_thumbnail_url(null,"large");
                                            //echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                            the_post_thumbnail("thumbnail" );
                                            //echo '</a>';
                                        }
                                        ?>

                                        <div class="hovercover">
                                            <div class="hovericon"><i class="hoverlink"></i></div>
                                        </div>
                                    </a>
                                </div>
                            </figure>
                        </div>

                        <div class="seven columns">
                            <section class="post-content">

                                <header class="meta">
                                    <h2><a href="<?php the_permalink(); ?>"><?php  the_title();?></a></h2>
                                    <ul>
                                        <li>By <a href="#" ><?php the_author_posts_link();?></a> - <?php echo get_the_date(); ?></li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </header>

                                <p> <?php the_excerpt(20); ?> </p>
                                <a href="<?php the_permalink(); ?>" class="button color">Read More</a>

                            </section>
                        </div>
                        <div class="clearfix"></div>

                    </article>

                <?php
                endwhile;

                ?>



                <!-- Pagination -->
                <nav class="pagination">
                    <ul>
                        <li><a href="#" class="current">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
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
