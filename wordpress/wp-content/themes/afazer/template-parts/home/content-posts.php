
<?php

$labelPost = has_category( 'noticia' ) ? 'blog-news' : 'blog-article';

?>

<!--======= BLOG POST =========-->
<li class="col-sm-4">
    <div class="b-inner <?php echo $labelPost; ?>">
    <img class="img-responsive" src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="" >
    <div class="b-details"> <span><i class="fa fa-clock-o"></i> mar 26 ,2012 <?php echo $count; ?></span> <a href="#."><?php the_title(); ?></a> </div>
    </div>
</li>


