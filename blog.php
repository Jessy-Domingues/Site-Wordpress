<?php get_header();
//Template Name: Blog
?>

<main id="blog">

<div class="container">
<section id="allarticles">

<!-- affiche 8 extraits d'article -->

<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts=8');
?>
<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="imgdebut" text="white" style="background-image: url('<?php echo $thumb;?>')"></div>
<!-- fin affiche 8 extraits d'article -->

<h2 class="ttl"><?php the_title()?></h2>
<div class="corps">
<?php the_content(); ?>

<!-- boucle wordpress pour afficher les extraits d'article -->
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

<!-- permet d'afficher un extrait d'article -->
<?php the_excerpt(); ?>

<!-- fin permet d'afficher un extrait d'article -->
<?php endwhile; ?>
<!-- fin boucle wordpress pour afficher les extraits d'article -->
</div>
</section>
</div>
</main>
<?php get_footer(); ?>