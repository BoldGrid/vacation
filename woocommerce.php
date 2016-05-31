<?php
/**
 * The template for the WooCommerce shop page.
 *
 * @package wpb
 */

get_header(); ?>

</div><!--container-->
<div class="container-fluid">
    <div class="row">
        <div class="background-pattern">
            <div class="container"></div>
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="background-primary">
<div class="container">
<div class="row">
	<div class="col-md-8">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php woocommerce_content(); ?>
            </main><!-- #main -->
        </div><!-- #primary -->
	</div><!-- .col -->
    <div class="col-md-4">
    	<?php get_sidebar(); ?>
    </div><!-- .col -->
</div><!-- .row -->

<?php get_footer(); ?>
