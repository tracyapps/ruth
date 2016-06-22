<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<?php
$additional_page_content_array = get_field( 'additional_page_content' );

/*// check if the repeater field has rows of data
if( have_rows('additional_page_content') ):

	// loop through the rows of data
	while ( have_rows('additional_page_content') ) : the_row();

		the_sub_field('page_content_column');

	endwhile;

else :

	// no rows found

endif;*/

?>