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

                <?php


                while (have_posts()) :the_post();
the_content();
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
