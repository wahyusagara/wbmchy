<?php
/**
 * The main template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header();
?>	

<script type="text/javascript">
    
    function abc() {
        // alert("Success");
        location.href = '<? '.get_permalink().' ?> ';
    }
</script>
<div class="depan" style="margin-top: -60px;">
    <div class="row">
        <div class="col-md-4 thumb-main">
            <a href="<?php echo get_site_url(); ?>/product-category/backpack/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/backpack-main.png"></a>
        </div>
        <div class="col-md-4 thumb-main">
            <a href="<?php echo get_site_url(); ?>/product-category/office/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/office.png"></a>
        </div>
        <div class="col-md-4 thumb-main">
            <a href="<?php echo get_site_url(); ?>/product-category/casual/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/casual.png"></a>
        </div>
        
        <!-- <div class="co">
        frontpage by category
            <?php if (query_posts('cat=44')) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div>
              <div class="col-md-4 ">
               <?php if ( has_post_thumbnail() ) { ?>
                    <figure class="thumb-image-post" width="100%">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'featured' ); ?></a>
                    </figure>
                <?php } else { ?>
                    <figure class="genpost-featured-image">
                        <a href="<?php the_permalink(); ?>">
                            <img height="300px"  src="<?php echo get_template_directory_uri() . '/images/thumbnail-default.jpg'; ?>" />
                        </a>
                    </figure>
                <?php } ?>
              </div>
              <div></div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php /* Error 404 */ ?>
            <?php $filename = TEMPLATEPATH . '/404.php'; if (file_exists($filename)) { include($filename); } ?>
            <?php endif; ?>
        </div> -->
    </div><!-- .row -->
    <!-- <div class="container" style="margin-top:20px;">
        <div class="col-md-8 thumb-main">
            <a href="<?php echo get_site_url(); ?>/product-category/casual/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/promo.png"></a>
        </div>
        <div class="col-md-4">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/08/quotes.png">
        </div>
    </div> -->
</div>
<?php
get_footer();
?>