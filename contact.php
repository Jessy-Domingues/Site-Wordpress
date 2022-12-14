<?php get_header();
//Template Name: Contact
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="imgctc" text="white" style="background-image: url('<?php echo $thumb;?>')"></div>
<div class="bg">
<main id="contact">
<h2><?php the_title()?></h2>

<?php the_content(); ?>

</main>
</div>

<footer id="footctc">
<?php
wp_nav_menu(array(
'menu' => 'Menu footer',
'container' => 'footer'
));
?>
</footer>

</body>

</html>