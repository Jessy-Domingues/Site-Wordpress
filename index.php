<?php get_header();
//Template name: Index
?>

<main id="hero">

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="heroimg" text="white" style="background-image: url('<?php echo $thumb;?>')"><h2><em> A mari usque ad mare</em><br>Explore Canada</h2></div>

<?php the_content(); ?>



</main>

<?php get_footer();?>
