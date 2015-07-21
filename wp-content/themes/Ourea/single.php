<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
      <div class="container post">
      <div id="top-cat" class="top-cat col-xs-12 col-md-10"><?php $category = get_the_category();
echo $category[0]->cat_name;?></div>
      <script>
      var y = document.getElementById("top-cat");
        switch(y.innerHTML){
            case 'Mobile':
                 y.style.backgroundColor = navColors[1];
                break;
            case 'Apps':
                y.style.backgroundColor = navColors[4];
                break;
            case 'Electric Vehicles':
                y.style.backgroundColor = navColors[2];
                break;
            case 'Science':
                y.style.backgroundColor = navColors[3];
                break;
            case 'Web':
                y.style.backgroundColor = navColors[5];
                break;
            default:
                y.style.backgroundColor = navColors[0];
                break;
        }
      
      </script>
     
      
       <div class="col-xs-12 col-md-10">
           <h2>    <?php the_title();?>    </h2>
      <h6> Author: <?php the_author(); ?> on <?php the_Date(); ?></h6>
           <p> <?php the_content(); ?></p>
        </div>
        </div>
    <?php endwhile; ?>
    <div class="container">
    <h4><?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number() ),number_format_i18n( get_comments_number() ) );
?></h4>
    <?php comments_template( '', true ); ?>
    <?php if ( have_comments() ) : ?>

 
<?php else: ?>
<h4>No comments</h4>
<?php endif; ?>

<?php if ( ! comments_open() ) : ?>
    <h4>Comments are closed.</h4>
<?php else: ?>
 
<h4>Leave a Comment</h4> 
<a name="comments"></a>
            <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform"> 
                <input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' /> 
                <input type="text" value="Name" name="author" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>Name / Alias (required)</label><br /> 
                <input type="text" value="Email" name="email" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>Email Address (required, not shown)</label><br /> 
                <input type="text" value="" name="url"><label>Website (optional)</label><br /> 
                <textarea rows="7" cols="60" name="comment"></textarea><br /> 
                <input type="submit" value="Add Your Comment" /> 
            </form>
 
<?php endif; ?>
</div>

</body>
<?php get_footer(); ?>
