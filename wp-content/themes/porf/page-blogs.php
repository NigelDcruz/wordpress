

<h1>For the blog page Only</h1>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

<h1>
    <a href="<?php the_permalink()?>">
        <?php echo the_title(); ?>
    </a>
</h1>
<p>
    <?php echo the_content(); ?>
</p>

<?php
}
}



?>