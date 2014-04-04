<?php get_header( cherry_template_base() ); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">

			<!-- Primary column -->
			<div id="primary" class="content-area <?php cherry_content_class(); ?>">
				<main id="main" class="site-main" role="main">
					<?php include cherry_template_path(); ?>
				</main>
			</div>

			<?php if ( cherry_display_sidebar( 'sidebar-main' ) ) {
				include cherry_sidebar_path();
			} ?>

		</div>
	</div>
</div>

<?php get_footer( cherry_template_base() ); ?>