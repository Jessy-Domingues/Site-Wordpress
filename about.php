<?php get_header();
//Template name: About
?>
<section>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div id="h_about"class="image-class" text="white" style="background-image: url('<?php echo $thumb;?>')"></div>

<main>
<h2 class="ttla"><?php the_title()?></h2>
<?php the_content(); ?>

</main>
</section>

<?php get_footer();?>