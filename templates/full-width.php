<?php
/*
* Template Name:full
*/
get_header();
?>


    <!-- Content Wrapper / Start -->
    <div id="content-wrapper">




        <div class="container" >
            <div  class="sixteen columns">

                <?php


                while (have_posts()) :the_post();
                    the_content();
                endwhile;

                ?>


            </div>

        </div>
    </div>
<?php
get_footer();
