<?php
/**
 * Template Name: No Sidebar
 *
 * Version      : 1.2.0
 * Author       : inc2734
 * Author URI   : http://2inc.org
 * Created      : April 17, 2015
 * Modified     : August 30, 2015
 * License      : GPLv2 or later
 * License URI  : license.txt
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<main id="main" role="main">

				<?php get_template_part( 'modules/bread-crumb' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>
				
			<!-- end #main --></main>
		<!-- end .col-md-10 --></div>
	<!-- end .row --></div>
<!-- end .container --></div>

<?php get_footer(); ?>
