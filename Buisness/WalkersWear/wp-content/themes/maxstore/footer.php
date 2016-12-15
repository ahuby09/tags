<?php if ( is_active_sidebar( 'maxstore-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="row clearfix">    				
		<?php dynamic_sidebar( 'maxstore-footer-area' ) ?>  				
	</div>		
<?php } ?>         
<footer id="colophon" class="rsrc-footer" role="contentinfo">                
	<div class="row rsrc-author-credits">                                       
		<div class="text-center">
			<?php printf( __( 'Copyright &copy; %1$s | MaxStore designed by %2$s', 'maxstore' ), date( "Y" ), '<a href="' . esc_url( 'http://themes4wp.com/' ) . '" title="Free WooCommerce WordPress Theme">Themes4WP</a>' ); ?>
		</div>                                  
	</div>    
</footer>
<div id="back-top">  
	<a href="#top">
		<span></span>
	</a>
</div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>