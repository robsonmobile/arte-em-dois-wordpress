<?php
/**
 * Author Page template file
 * */
get_header(); ?>
<section id="inner-page-banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="innerpage-head">
                    <h2><?php _e('Published by', 'petshop'); echo " : " . get_the_author(); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('content'); get_footer(); ?>