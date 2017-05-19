<!--======= BLOG POST=========-->

<?php

$labelPost = has_category( 'noticia' ) ? 'post-noticia' : 'post-artigo';

?>

<div class="blog-post <?php echo $labelPost; ?>">
    <!--<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog-img-1.jpg" alt="" >-->
    <?php the_post_thumbnail('large'); ?>
    <span class="date">
        <i class="fa fa-clock-o"></i> <?php the_time('M d, Y') ?>
    </span>
    <a href="<?php the_permalink(); ?>" class="title-hed"><?php the_title(); ?></a>
    <!--======= CATEGORIA =========-->
    <ul class="small-tag">
        <li> <span> <strong>Categoria:</strong> </span> <span> <?php the_category( ', ' ); ?></span></li>
    </ul>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn"> LEIA MAIS</a>
</div>