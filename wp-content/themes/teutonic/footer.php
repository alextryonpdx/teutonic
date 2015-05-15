<?php global $woocommerce; if ( sizeof( $woocommerce->cart->cart_contents) > 0 ) : ?>
        <a id="show-cart-link" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">View your Cart</a>

   <?php endif; ?>

	</section>
	</main>
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div id="footer-content">
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> TEUTONIC WINE COMPANY
				</p>
				<!-- /social media links -->
				<p class="social-links">
					FIND US ON <a href="https://www.facebook.com/pages/Teutonic-Wine-Company/114632478546837">FACEBOOK</a>
					AND <a href="https://twitter.com/Teutonicwines">TWITTER</a>
				</p>
			</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/custom-styles.css' media='all' />
	</body>
</html>
