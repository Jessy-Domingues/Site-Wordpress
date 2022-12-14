<!DOCTYPE html>
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<title><?php the_title(); ?> </title>

<?php wp_head(); ?>

</head>

<body>

<header>
    <h1>Découvrir le Canada</h1>
<?php
wp_nav_menu(array(
'menu' => 'Menu principal',
'container' => 'nav'
));
?>
    </header>
