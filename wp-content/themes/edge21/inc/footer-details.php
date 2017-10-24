<?php
/**
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
?>
<?php
/************************* EDGE FOOTER DETAILS **************************************/

function edge_site_footer() {
if ( is_active_sidebar( 'edge_footer_options' ) ) :
		dynamic_sidebar( 'edge_footer_options' );
	else:
		echo '<div class="copyright">' .'&copy; ' . date('Y') .' '; ?>
		MOCHY
		</div>
	<?php endif;
}
add_action( 'edge_sitegenerator_footer', 'edge_site_footer');