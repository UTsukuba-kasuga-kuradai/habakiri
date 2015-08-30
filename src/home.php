<?php
/**
 * Version    : 1.1.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<?php get_template_part( 'blog_templates/archive/' . Habakiri::get( 'blog_template' ) ); ?>

<?php get_footer(); ?>
