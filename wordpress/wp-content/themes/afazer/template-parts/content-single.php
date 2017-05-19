
<?php

$labelPost = has_category( 'noticia' ) ? 'post-noticia' : 'post-artigo';

?>

<!--======= BLOG POST=========-->
<div class="blog-post <?php echo $labelPost; ?>"> 
    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> 
    <span class="date">
        <i class="fa fa-clock-o"></i> <?php the_time('M d, Y') ?>
    </span> 
    <a href="#." class="title-hed"><?php the_title(); ?></a> 

    <!--======= TAGS =========-->
    <ul class="small-tag">
        <li> 
            <span>
                <i class="fa fa-tag"></i> <?php the_category( ', '); ?> 
            </span> /
            <span> 
                <i class="fa fa-comments"></i> <?php echo get_comments_number(); ?> Comments 
            </span>
        </li>
    </ul>
    <?php the_content(); ?>
    </div>

<!--======= SHARE POST =========-->
<div class="share-post">
<h6 class="pull-left text-uppercase">COMPARTILHE</h6>

<!--======= SOCIAL ICONS =========-->
<ul class="social_icons pull-right">
    <li class="facebook"> <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i> </a></li>
    <li class="twitter">  <a target="_blank" href="http://www.twitter.com/intent/tweet?url=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i> </a></li>
    <li class="linkedin"> <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i> </a></li>
    <li class="tumblr">   <a target="_blank" href="http://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i> </a></li>
</ul>
</div>

<?php comments_template(); ?> 

