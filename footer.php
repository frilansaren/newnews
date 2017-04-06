
</div><!--/.container-->
<footer class="site-footer">
	<hr>
	<ul class="list-inline col-md-12">
		<?php if ( is_active_sidebar( 'footer_area' ) ) : ?>
			<?php dynamic_sidebar( 'footer_area' ); ?>
		<?php endif; ?>
	</ul> <!-- list-inline -->
	<p>&copy; Philip Persson 2017</p>
</footer> <!-- site-footer -->
<?php wp_footer(); ?>
</body>
</html>

