<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lawyeriax-lite
 */

get_header(); ?>
    <div id="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="https://www.123dentist.com/wp-content/uploads/2016/01/female-associate-dentist.jpg" alt="Logo" width="HERE" height="HERE" />
        </a>
    </div>
	<div class="content-wrap">

		<div id="primary" class="col-sm-12 col-md-9 content-area">
			<main id="main" class="site-main" role="main">

			

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php
		get_sidebar();
		?>

	</div><!-- .content-wrap -->

<?php
get_footer();
