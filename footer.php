<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Cherry Framework
 */
		do_action( 'cherry_footer_before' );
		do_action( 'cherry_footer' );
		do_action( 'cherry_footer_after' ); ?>

	</div>

<?php
	wp_footer();
	do_action( 'cherry_body_end' );
?>
</body>
</html>