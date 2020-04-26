<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Educamp
 */
?>
</div><!-- main-container -->

<div class="copyright-wrapper">
		<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
        	<div class="container">
                <div class="copyright">
                    	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?>  <?php echo esc_html(date_i18n( __( 'Y', 'educamp' ) )); ?> &copy; <?php esc_html_e('GIDROSHIA || All rights reserved','educamp'); ?></p>               
                </div><!-- copyright --><div class="clear"></div>           
            </div><!-- container -->
        </div>
    </div>
        
<?php wp_footer(); ?>

</body>
</html>