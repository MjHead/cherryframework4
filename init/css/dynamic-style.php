<?php
/**
 * Dynamic CSS template
 *
 * @package    Cherry_Framework
 * @author     Cherry Team <support@cherryframework.com>
 * @copyright  Copyright (c) 2012 - 2015, Cherry Team
 * @link       http://www.cherryframework.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}

$cherry_css_vars = cherry_get_css_varaibles();

$typography_link =$cherry_css_vars['typography-link'] ;
$body_typography = $cherry_css_vars['typography-body-text'] ;
$body_background = $cherry_css_vars['styling-body-content-background'] ;
$header_background = $cherry_css_vars['header-background'] ;
$footer_background = $cherry_css_vars['footer-background'] ;
$footer_typography = $cherry_css_vars['footer-typography'] ;
$logo_typography = $cherry_css_vars['logo-typography'] ;
$input_typography = $cherry_css_vars['typography-input-text'] ;
$typography_h1 = $cherry_css_vars['typography-h1'] ;
$typography_h2 = $cherry_css_vars['typography-h2'] ;
$typography_h3 = $cherry_css_vars['typography-h3'] ;
$typography_h4 = $cherry_css_vars['typography-h4'] ;
$typography_h5 = $cherry_css_vars['typography-h5'] ;
$typography_h6 = $cherry_css_vars['typography-h6'] ;
$lists_typography =$cherry_css_vars['lists-typography'] ;
$typography_breadcrumbs = $cherry_css_vars['typography-breadcrumbs'] ;
$header_menu_typography = $cherry_css_vars['navigation-header-menu-typography'] ;
$footer_menu_typography = $cherry_css_vars['navigation-footer-menu-typography'] ;


?>

<?php cherry_element_emphasis('.text-primary', cherry_esc_value( $cherry_css_vars, 'color-primary' ), 'color');?>
<?php cherry_element_emphasis('.text-success', cherry_esc_value( $cherry_css_vars, 'color-success' ), 'color');?>
<?php cherry_element_emphasis('.text-info', cherry_esc_value( $cherry_css_vars, 'color-info' ), 'color');?>
<?php cherry_element_emphasis('.text-warning', cherry_esc_value( $cherry_css_vars, 'color-warning' ), 'color');?>
<?php cherry_element_emphasis('.text-danger', cherry_esc_value( $cherry_css_vars, 'color-danger' ), 'color');?>

<?php cherry_element_emphasis('.bg-primary', cherry_esc_value( $cherry_css_vars, 'color-primary' ), 'background-color');?>
<?php cherry_element_emphasis('.bg-success', cherry_esc_value( $cherry_css_vars, 'color-success' ), 'background-color');?>
<?php cherry_element_emphasis('.bg-info', cherry_esc_value( $cherry_css_vars, 'color-info' ), 'background-color');?>
<?php cherry_element_emphasis('.bg-warning', cherry_esc_value( $cherry_css_vars, 'color-warning' ), 'background-color');?>
<?php cherry_element_emphasis('.bg-danger', cherry_esc_value( $cherry_css_vars, 'color-danger' ), 'background-color');?>



<?php //die ?>

input[type="text"],
input[type="search"],
input[type="password"],
input[type="email"],
input[type="tel"],
input[type="email"] {
	<?php echo cherry_get_typography_css($input_typography); ?>
}

footer {
	<?php echo cherry_get_typography_css($footer_typography); ?>
}


ul li {
	<?php echo cherry_get_typography_css($lists_typography); ?>
}


<?php echo cherry_get_background_css('footer', $footer_background); ?>

.site-title > a{
	<?php echo cherry_get_typography_css($logo_typography); ?>
}


body {
	color: <?php echo cherry_esc_value( $body_typography, 'color' ); ?>;
	font-size: <?php echo cherry_esc_value( $body_typography, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $body_typography, 'lineheight' ); ?>px;
}
<?php echo cherry_get_background_css('body', $body_background); ?>

<?php echo cherry_get_background_css('.site-header', $header_background); ?>

h1, .h1 {
	<?php echo cherry_get_typography_css($typography_h1, array('cherry_colors_lighten', 40)); ?>
}


h2, .h2 {
	font-size: <?php echo cherry_esc_value( $typography_h2, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $typography_h2, 'lineheight' ); ?>px;
	color: <?php echo cherry_esc_value( $typography_h2, 'color' ); ?>;
	font-family: <?php echo cherry_esc_value( $typography_h2, 'family' ); ?>;
	font-style: <?php echo cherry_esc_value( $typography_h2, 'style' ); ?>;
	<?php cherry_empty_value(cherry_esc_value( $typography_h2, 'letterspacing' ), 'letter-spacing');?>
	<?php cherry_empty_value(cherry_esc_value( $typography_h2, 'align' ), 'text-align');?>
}
h3, .h3 {
	font-size: <?php echo cherry_esc_value( $typography_h3, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $typography_h3, 'lineheight' ); ?>px;
	color: <?php echo cherry_esc_value( $typography_h3, 'color' ); ?>;
	font-family: <?php echo cherry_esc_value( $typography_h3, 'family' ); ?>;
	font-style: <?php echo cherry_esc_value( $typography_h3, 'style' ); ?>;
	<?php cherry_empty_value(cherry_esc_value( $typography_h3, 'letterspacing' ), 'letter-spacing');?>
	<?php cherry_empty_value(cherry_esc_value( $typography_h3, 'align' ), 'text-align');?>
}
h4, .h4 {
	font-size: <?php echo cherry_esc_value( $typography_h4, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $typography_h4, 'lineheight' ); ?>px;
	color: <?php echo cherry_esc_value( $typography_h4, 'color' ); ?>;
	font-family: <?php echo cherry_esc_value( $typography_h4, 'family' ); ?>;
	font-style: <?php echo cherry_esc_value( $typography_h4, 'style' ); ?>;
	<?php cherry_empty_value(cherry_esc_value( $typography_h4, 'letterspacing' ), 'letter-spacing');?>
	<?php cherry_empty_value(cherry_esc_value( $typography_h4, 'align' ), 'text-align');?>
}
h5, .h5 {
	font-size: <?php echo cherry_esc_value( $typography_h5, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $typography_h5, 'lineheight' ); ?>px;
	color: <?php echo cherry_esc_value( $typography_h5, 'color' ); ?>;
	font-family: <?php echo cherry_esc_value( $typography_h5, 'family' ); ?>;
	font-style: <?php echo cherry_esc_value( $typography_h5, 'style' ); ?>;
	<?php cherry_empty_value(cherry_esc_value( $typography_h5, 'letterspacing' ), 'letter-spacing');?>
	<?php cherry_empty_value(cherry_esc_value( $typography_h5, 'align' ), 'text-align');?>
}
h6, .h6 {
	font-size: <?php echo cherry_esc_value( $typography_h6, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $typography_h6, 'lineheight' ); ?>px;
	color: <?php echo cherry_esc_value( $typography_h6, 'color' ); ?>;
	font-family: <?php echo cherry_esc_value( $typography_h6, 'family' ); ?>;
	font-style: <?php echo cherry_esc_value( $typography_h6, 'style' ); ?>;
	<?php cherry_empty_value(cherry_esc_value( $typography_h6, 'letterspacing' ), 'letter-spacing');?>
	<?php cherry_empty_value(cherry_esc_value( $typography_h6, 'align' ), 'text-align');?>
}

h1, .h1,
h2, .h2,
h3, .h3 {
	margin-top: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2; ?>px;
}

h4, .h4,
h5, .h5,
h6, .h6 {
	margin-top: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2; ?>px;
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2; ?>px;
}

p {
	margin: 0 0 <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2; ?>px;
}

a {
	font-size: <?php echo cherry_esc_value( $typography_link, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $typography_link, 'lineheight' ); ?>px;
	color: <?php echo cherry_esc_value( $typography_link, 'color' ); ?>;
	<?php cherry_empty_value(cherry_esc_value( $typography_link, 'letterspacing' ), 'letter-spacing');?>
	<?php cherry_empty_value(cherry_esc_value( $typography_link, 'align' ), 'text-align');?>
}

ul,
ol {
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2; ?>px;
}

dl {
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
}

#menu-primary-items a {
	<?php echo cherry_get_typography_css($header_menu_typography); ?>
}
#menu-secondary-items a{
	<?php echo cherry_get_typography_css($footer_menu_typography); ?>
}

.cherry-breadcrumbs_item_link, .cherry-breadcrumbs_item_target {
	<?php echo cherry_get_typography_css($typography_breadcrumbs); ?>
}

.cherry-breadcrumbs {
	background-color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 60.8); ?>;
}



.cherry-mega-menu-sub.level-0 {
	border-top: 3px solid <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-mega-menu-sub-item > a {
	color: <?php echo cherry_esc_value( $body_typography, 'color' ); ?>;
}
.cherry-mega-menu-sub-item > a:hover {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-mega-menu-sub .sub-column-title > a {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-secondary' ); ?>;
}

.cherry-btn-primary {
	background-color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
	color: <?php echo cherry_contrast_color( cherry_esc_value( $cherry_css_vars, 'color-primary' ) ); ?>;
	border: 2px solid <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-btn-primary:hover {
	background-color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-secondary' ); ?>;
	border: 2px solid <?php echo cherry_esc_value( $cherry_css_vars, 'color-secondary' ); ?>;
}
.cherry-btn-link{
	color: <?php echo cherry_contrast_color( cherry_esc_value( $cherry_css_vars, 'color-primary' ) ); ?>;
}
.cherry-btn-link:hover {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-secondary' ); ?>;
}
.cherry-btn-primary-light {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
	border: 2px solid <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-btn-primary-light:hover {
	background-color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-btn-gray {
	border: 2px solid <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 54); ?>;
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-secondary' ); ?>;
}
.cherry-btn-gray:hover {
	background-color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 54); ?>;
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-secondary' ); ?>;
}

.cherry-list-numbered-circle > li, .cherry-list-numbered-slash > li, .cherry-list-icons > li {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}

.cherry-list-numbered-circle > li::before {
	background-color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-list-numbered-circle > li:hover::before {
	background-color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}
.cherry-list-numbered-circle > li:hover {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}


.cherry-list-simple > li {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-list-simple > li::before {
	color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
}
.cherry-list-simple > li:hover {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}
.cherry-list-simple > li:hover::before {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}


.cherry-list-numbered-slash > li::before {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-list-numbered-slash > li:hover {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-list-numbered-slash > li:hover::before {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}


.cherry-list-icons > li {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}
.cherry-list-icons > li:hover {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-list-icons > li i {
	color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
}
.cherry-list-icons > li:hover i {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}

.cherry-hr-primary{
	background-color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-hr-gray-lighter{
	background-color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
}
.cherry-hr-gray-dark{
	background-color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}

.cherry-drop-cap:first-letter {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-drop-cap-bg:first-letter {
	background-color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-drop-cap-bg-grey:first-letter {
		background-color: <?php echo cherry_colors_lighten( cherry_esc_value( $body_typography, 'color' ), 24); ?>;
}


.cherry-blockquote, .cherry-blockquote:before{
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
	}
.cherry-highlight {
	background-color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}
.cherry-highlight-grey {
	background-color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
}


.cherry-btn-transparent:hover{
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ); ?>;
}

<!---->
.cherry-tabs .cherry-tabs-nav span {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-secondary' ); ?>;
}
.cherry-tabs .cherry-tabs-nav span.cherry-tabs-current {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
	border-bottom: 2px solid <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 54); ?>;
}

.cherry-post-meta .cherry-post-date {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-primary' ); ?>;
}



.portfolio-wrap .portfolio-container .portfolio-pagination ul.page-link li a {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}
.portfolio-wrap .portfolio-container .portfolio-pagination .page-nav a {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}




<?php // Text muted color ?>
.text-muted {
	color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}
.help-block {
	color: <?php echo cherry_colors_lighten( cherry_esc_value( $body_typography, 'color' ), 20); ?>;
}
legend {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 20); ?>;
	font-size: <?php echo cherry_typography_size(cherry_esc_value( $body_typography, 'size' ), 'multiple', 'round', 1.5); ?>px;
	line-height: <?php echo floor(cherry_esc_value( $body_typography, 'size' ) * 1.428571429); ?>px;
	border-bottom: 1px solid <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 54); ?>;
}
.cherry-highlight-grey {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}


<?php //Abbreviations and acronyms border color ?>

abbr[title],
abbr[data-original-title] {
	border-bottom: 1px dotted <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}

output {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ); ?>;
	font-size: <?php echo cherry_esc_value( $body_typography, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $body_typography, 'lineheight' ); ?>px;
}

<!--Headings small color-->
small, .small {
	color: <?php echo cherry_colors_darken( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 13.2); ?>;
}
small, .small {
	font-size: <?php echo cherry_typography_size(cherry_esc_value( $body_typography, 'size' ), 'multiple', 'ceil', 0.85); ?>px;
}

<!--input disabled  background color-->

.form-control[disabled], .form-control[readonly], .form-control fieldset[disabled] {
	background-color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
}
.form-control {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ); ?>;
	font-size: <?php echo cherry_esc_value( $body_typography, 'size' ); ?>px;
	line-height: <?php echo cherry_esc_value( $body_typography, 'lineheight' ); ?>px;
}

<!--Blockquote border color-->


.blockquote-reverse, blockquote.pull-right {
	border-right: 5px solid <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
	}

<!--Page header border color-->
.page-header {
	border-bottom: 1px solid <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
	padding-bottom: <?php echo (floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2) -1; ?>px;
	margin: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) * 2; ?>px 0 <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
}

<!--Blockquote-->
blockquote {
	border-left: 5px solid <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
	font-size: <?php echo cherry_typography_size(cherry_esc_value( $body_typography, 'size' ), 'multiple', 'floor', 1.25); ?>px;
	padding: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2 . 'px '. floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) ; ?>px;
	margin: 0 0 <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
}

<!--Horizontal line color-->
hr {
	border-top: 1px solid <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
	margin-top: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
	}

.radio label,
.checkbox label {
	min-height: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
}

.close,
.close:hover,
.close:focus {
	color: <?php echo cherry_esc_value( $cherry_css_vars, 'color-warning' ); ?>;
	font-size: <?php echo cherry_typography_size(cherry_esc_value( $body_typography, 'size' ), 'multiple', 'round', 1.5); ?>px;
	font-weight: normal;
}
.lead {
	font-size: <?php echo cherry_typography_size(cherry_esc_value( $body_typography, 'size' ), 'multiple', 'round', 1.15); ?>px;
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
}
.table {
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
}
.table .table {
	background-color: <?php echo cherry_esc_value( $body_background, 'color' ); ?>;
}

.table > thead > tr > th,
.table > thead > tr > td,
.table > tbody > tr > th,
.table > tbody > tr > td,
.table > tfoot > tr > th,
.table > tfoot > tr > td {
	padding: 8px;
	line-height: <?php echo cherry_esc_value( $body_typography, 'lineheight' ); ?>px;
	vertical-align: top;
	border-top: 1px solid #dddddd;
}



dt,
dd {
	line-height: <?php echo cherry_esc_value( $body_typography, 'lineheight' ); ?>px;
}

blockquote footer,
blockquote small,
blockquote .small {
	line-height: <?php echo cherry_esc_value( $body_typography, 'lineheight' ); ?>px;
}
address {
	line-height: <?php echo cherry_esc_value( $body_typography, 'lineheight' ); ?>px;
	margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )); ?>px;
}

.has-feedback label ~ .form-control-feedback {
	top: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) + 5; ?>px;
}

.cherry-nav-divider {
  height: 1px;
  margin: <?php echo (floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) / 2 )-1 ?>px 0;
  overflow: hidden;
  background-color: <?php echo cherry_colors_lighten( cherry_esc_value( $cherry_css_vars, 'color-gray-variations' ), 53.2); ?>;
}

@media (max-width: 767px) {
	.table-responsive {
		margin-bottom: <?php echo floor(1.428571429 * cherry_esc_value( $body_typography, 'size' )) * 0.75; ?> px;
	}
}






