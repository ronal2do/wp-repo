<?php get_header();?>
   
    <?php $postNumber = 0; while ( have_posts() ) : the_post(); $postNumber = $postNumber +1;
        if( $postNumber%3 == 1) : ?>
        
        <div class="container-homepage">
        
    <?php endif;
    if ( has_post_thumbnail() ) : ?> 
       
        <a href="<?php the_permalink(); ?> ">
            <div class="head-thumb"> 
                <?php the_post_thumbnail(); ?>
                <div class="thumb-title"><b><?php the_title(); ?></b></div>
            </div>
        </a>
<?php endif;    ?>
        
    <?php if( $postNumber%3 == 0){ echo "</div>";} ?>
    <?php endwhile; ?>

<?php get_footer(); ?>
