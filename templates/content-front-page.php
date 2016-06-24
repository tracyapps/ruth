<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<?php
$additional_page_content_array = get_sub_field( 'additional_page_content' );

print_r($additional_page_content_array);

// check if the repeater field has rows of data
if( have_rows('additional_page_content') ):

	// loop through the rows of data
	while ( have_rows('additional_page_content') ) : the_row();

		echo '<div class="column"><hr>';

		$column_array = get_field( 'page_content_row' );
		print_r($column_array);
		echo $column_array;

		echo '</div>';

	endwhile;

else :

	// no rows found

endif;

?>