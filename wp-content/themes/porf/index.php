

<?php

get_header();




//The Loop Start
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
<div class="container">

    <div class="row">

        <div class="col-sm-6">

<h1>
    <a href="<?php the_permalink()?>">
        <?php echo the_title(); ?>
    </a>
</h1>

</div>
<div class="col-sm-6">
<p>
    <?php echo the_content(); ?>
</p>


</div>
    
    
    </div>

</div>


<?php
}
}
//The Loop Ends


get_footer();
?>