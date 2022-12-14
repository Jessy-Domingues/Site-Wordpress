<?php get_header();
//Template Name: Canada
?>



<?php if ( have_rows( 'regions' ) ) : ?>
	<?php while ( have_rows( 'regions' ) ) : the_row(); ?>
		<section>
	<?php the_sub_field( 'regions_2' ); ?>
		<?php if ( have_rows( 'provinces_de_latlantique' ) ) : ?>
			<?php while ( have_rows( 'provinces_de_latlantique' ) ) : the_row(); ?>
				<?php the_sub_field( 'les_provinces_de_latlantique' ); ?>
				<?php the_sub_field( 'capitale_ile-du-prince-edouard' ); ?>
				<?php the_sub_field( 'capitale_nouvelle-ecosse' ); ?>
				<?php the_sub_field( 'capitale_terre-neuve-et-labrador' ); ?>
				<?php the_sub_field( 'capitale_nouveau-brunswick' ); ?>
				<?php $terre_neuve = get_sub_field( 'terre_neuve' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $terre_neuve ) : ?>
					<?php echo wp_get_attachment_image( $terre_neuve, $size ); ?>
				<?php endif; ?>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if ( have_rows( 'provinces_du_centre_du_canada' ) ) : ?>
			<?php while ( have_rows( 'provinces_du_centre_du_canada' ) ) : the_row(); ?>
				<?php the_sub_field( 'les_provinces_du_centre' ); ?>
				<?php if ( have_rows( 'les_capitales_du_centre' ) ) : ?>
					<?php while ( have_rows( 'les_capitales_du_centre' ) ) : the_row(); ?>
						<?php the_sub_field( 'capitale_quebec' ); ?>
						<?php the_sub_field( 'capitale_ontario' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php $quebec = get_sub_field( 'quebec' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $quebec ) : ?>
					<?php echo wp_get_attachment_image( $quebec, $size ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if ( have_rows( 'provinces_des_prairies' ) ) : ?>
			<?php while ( have_rows( 'provinces_des_prairies' ) ) : the_row(); ?>
				<?php the_sub_field( 'les_provinces_de_la_region_des_prairies' ); ?>
				<?php if ( have_rows( 'les_capitales_des_prairies' ) ) : ?>
					<?php while ( have_rows( 'les_capitales_des_prairies' ) ) : the_row(); ?>
						<?php the_sub_field( 'capitale_manitoba' ); ?>
						<?php the_sub_field( 'capitale_saskatchewan' ); ?>
						<?php the_sub_field( 'capitale_alberta' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php $winnipeg = get_sub_field( 'winnipeg' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $winnipeg ) : ?>
					<?php echo wp_get_attachment_image( $winnipeg, $size ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if ( have_rows( 'provinces_de_louest' ) ) : ?>
			<?php while ( have_rows( 'provinces_de_louest' ) ) : the_row(); ?>
				<?php the_sub_field( 'les_provinces_de_louest' ); ?>
				<?php the_sub_field( 'la_capitale_de_louest' ); ?>
				<?php $victoria = get_sub_field( 'victoria' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $victoria ) : ?>
					<?php echo wp_get_attachment_image( $victoria, $size ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if ( have_rows( 'provinces_du_nord' ) ) : ?>
			<?php while ( have_rows( 'provinces_du_nord' ) ) : the_row(); ?>
				<?php the_sub_field( 'les_provinces_de_la_region_du_nord' ); ?>
				<?php if ( have_rows( 'les_capitales_du_nord' ) ) : ?>
					<?php while ( have_rows( 'les_capitales_du_nord' ) ) : the_row(); ?>
						<?php the_sub_field( 'capitale_nunavut' ); ?>
						<?php the_sub_field( 'capitale_territoires_du_nord-ouest' ); ?>
						<?php the_sub_field( 'capitale_yukon' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php $nord = get_sub_field( 'nord' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $nord ) : ?>
					<?php echo wp_get_attachment_image( $nord, $size ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer();?>