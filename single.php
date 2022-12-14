<?php get_header();
?>

<main id="actu">

<!-- boucle wordpress -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="imgarti" text="white" style="background-image: url('<?php echo $thumb;?>')"></div>
    <div class="back">
    <article>

<h2><?php the_title()?></h2>
<!-- affiche le contenu -->
<?php the_content(); ?>
<!-- fin affiche le contenu -->

<div class="span">
<span><?php the_author();?></span>
<span> <?php the_category();?></span>
<span><?php the_time('j F, Y'); ?></span>
</div>
    </article>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<!-- fin boucle wordpress -->
</main>

<footer id="artfoot">
<?php
wp_nav_menu(array(
'menu' => 'Menu footer',
'container' => 'footer'
));
?>
</footer>

</body>

</html>
