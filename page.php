<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscoretheme
 */

get_header();
?>

<!--Section-->
<section id="page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!--End Section-->

<?php
get_footer();
