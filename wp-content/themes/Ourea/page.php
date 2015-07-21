<?php get_header(); ?>
   
    <?php
if (is_page()) {
  $cat=get_cat_ID($post->post_title); //use page title to get a category ID
  $posts = get_posts ("cat=$cat"); //&showposts=5" ZA BROJ POSTOVA
  if ($posts) {
    foreach ($posts as $post):
      setup_postdata($post); ?>
      <div class="container page-hline-post">
         <div class="col-md-2 col-xs-3 col-xs-offset-2 col-md-offset-0 col-sm-5 col-sm-offset-4">
             <?php the_post_thumbnail("thumbnail"); ?>
         </div>
          <div class="col-md-8 col-md-offset-0 col-xs-12 col-xs-offset-0">
             <h3><a class="site-title" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a> </h3>
             <div class="post-desc"> <?php the_content(""); ?> </div>
            
          </div>
      </div>
    <?php endforeach;
  }
}
?>
    

<?php get_footer(); ?>