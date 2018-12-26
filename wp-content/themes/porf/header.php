
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<h1> 
    <a href="<?php echo home_url(); ?>">
        Back To Home
    </a>
</h1>
<nav>
<?php
    
    $args = array(
         'theme_location' => 'main_nav'
    ); 
 
 
 ?> 
 <?php wp_nav_menu($args) ?>

</nav>


