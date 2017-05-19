<?php

$destaques = get_post_meta( get_the_ID(), 'destaques_group_description', true);



foreach ($destaques as $key => $value) {

?>

<li class="col-md-3">
    <div class="sec-in afazer-icon">
    <a href="<?php echo get_permalink( get_page_by_path( 'solucoes' ) ); ?>">
        <img src="<?php echo $value['image']; ?>" alt="">
        <h6><?php echo $value['title']; ?></h6>
        <p><?php echo $value['description']; ?></p>
    </a>
    </div>
</li>

<?php

}

?>