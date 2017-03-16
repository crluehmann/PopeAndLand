														</div>		</div>		<footer id="footer" class="center white full_width">			<div class="main">			<div class="column fl_left footer_left">				<div id="wrap_footer_nav" class="full_width center">				<?php				$walker = new My_Walker();				echo wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav none_mobile', 'menu_id' => 'footer-nav' ,'walker' => $walker, 'fallback_cb' => '' ) );				echo wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav mobile_version', 'menu_id' => 'footer-nav' , 'fallback_cb' => '' ) );				?>				</div>				<div class="full_width center"><?php ds_ao('footer_copyright'); ?></div>			</div>			<div class="footer_right fl_right column">				<?php ds_ao('footer_right'); ?>			</div>						</div>			</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>