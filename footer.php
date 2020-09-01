<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage EmallShop
 * @since EmallShop 1.0
 */
?>
			</div>
		</div><!-- .content-area -->
	</div><!-- .site-content -->

	<?php 
		get_template_part( 'templates/footer/'.emallshop_get_option('footer-layout', 'footer-1'));
	?>
	
	<?php if(emallshop_get_option('back-to-top', 1)):?>
		<div class="back-to-top">
			<i class="fa  fa-arrow-up"></i>
		</div>
	<?php endif;?>
	
</div><!-- .site -->
<script>
	var vcRows = document.querySelectorAll('.vc_row.wpb_row.vc_row-fluid')
	var screenwidth = screen.width;
		window.addEventListener('resize', function(){
			screenWidth = $(window).width();
			for(let i=0; i<vcRows.length; i++){
				
				vcRows[i].style.width = screenWidth + 'px'
				console.log('size changed', screenWidth);
			}
		})
	
        if(screenwidth < 480){
			for(let i=0; i<vcRows.length; i++){
				screenwidth = screen.width
				vcRows[i].style.width = screenwidth + 'px'
			}
        }
</script>
<?php wp_footer(); ?>
<?php do_action('emallshop_after_footer'); ?>
</body>
</html>

