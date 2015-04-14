<?php
/**
 * @package    Cherry_Framework
 * @subpackage Class
 * @author     Cherry Team <support@cherryframework.com>
 * @copyright  Copyright (c) 2012 - 2015, Cherry Team
 * @link       http://www.cherryframework.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Footer info static
 */
class cherry_footer_info_static extends cherry_register_static {

	/**
	 * Callbck method for registered static
	 * @since 4.0.0
	 */
	public function callback() {
		$output = '<div class="site-info">';
		$output .= sprintf( __( 'Copyright &copy; %1$s %2$s. Powered by %3$s and %4$s.', 'cherry' ),
						date_i18n( 'Y' ),
						cherry_get_site_link(),
						cherry_get_wp_link(),
						cherry_get_theme_link()
					);
		$output .= '</div>';

		$output = apply_filters( 'cherry_footer_info', $output );
		echo $output;
	}
}

/**
 * Call footer info static registration
 */
new cherry_footer_info_static(
	array(
		'id'      => 'footer_info',
		'name'    => __( 'Footer Info', 'cherry' ),
		'options' => array(
			'col-lg'   => 'col-lg-4',
			'col-md'   => 'col-md-4',
			'col-sm'   => 'col-sm-12',
			'col-xs'   => 'col-xs-12',
			'priority' => 3,
			'area'     => 'footer-bottom',
		)
	)
);