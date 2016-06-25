<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<?php
$additional_page_content_array = get_field( 'additional_page_content' );

// check if the repeater field has rows of data
if( have_rows('additional_page_content') ):

	// loop through the rows of data
	while ( have_rows('additional_page_content') ) : the_row();

		echo '<div class="flexbox-row">
				<div class="container">';

		// check if the embedded repeater field has rows of data
		if( have_rows('page_content_row') ):

			// and loop through that...
			while( have_rows('page_content_row') ) : the_row();

				printf(
					'<div class="column">%s</div>',
					wp_kses_post( the_sub_field('page_content_column') )
				);

			endwhile;
		endif;

		echo '</div>
			</div>';

	endwhile;

else :

	// no rows found

endif;

?>