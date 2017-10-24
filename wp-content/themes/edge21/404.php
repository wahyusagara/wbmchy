<?php
/**
 * The template for displaying 404 pages
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
get_header();
$edge_settings = edge_get_theme_options();
global $edge_content_layout;
if( $post ) {
	$layout = get_post_meta( $post->ID, 'edge_sidebarlayout', true );
}
if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
	$layout = 'default';
}
if( 'default' == $layout ) { //Settings from customizer
	if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')){ ?>

<div id="col-md-12">
	<?php }
}?>
<main id="main" class="site-main clearfix" >
	<article id="post-0" class="post error404 not-found" align="center">
		<?php if ( is_active_sidebar( 'edge_404_page' ) ) :
			dynamic_sidebar( 'edge_404_page' );
		else:?>
		<section class="error-404 not-found">
			<h4>Maaf, halaman yang anda cari belum tersedia</h4>
			<div class="page-content">
				<?php get_search_form(); ?>
			</div> <!-- .page-content -->
		</section> <!-- .error-404 -->
	<?php endif; ?>
	</article> <!-- #post-0 .post .error404 .not-found -->
</main> <!-- #main -->
<?php 
if( 'default' == $layout ) { //Settings from customizer
	if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}

get_footer();