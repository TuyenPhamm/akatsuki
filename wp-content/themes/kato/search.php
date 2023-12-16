<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Kato
 */

get_header();
?>

	<main id="primary" class="max-w-[1280px] w-full m-auto lg:pb-[100px] lg:pt-[70px] pb-[40px]">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="mb-5 font-bold text-xl px-3">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Kết quả timg kiếm cho từ khóa: %s', 'kato' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header/ -->
			<div class="lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4 grid">
				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>
			</div>

	</main><!-- #main -->

<?php
get_footer();
