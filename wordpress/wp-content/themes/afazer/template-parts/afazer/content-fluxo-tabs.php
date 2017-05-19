<?php

$fluxo = get_post_meta( get_the_ID(), '_afazer_fluxo', true);
$count = 1;


foreach ($fluxo as $key => $value) {

?>


<div role="tabpanel" class="tab-pane animated fadeInRight <?php if($count == 1) echo "active"; ?>" id="fluxo<?php echo $count; ?>">
    <div class="col-sm-3">
    <img class="img-responsive img-fluxo" src="<?php echo $value['_afazer_image']; ?>" alt="" >
    </div>
    <div class="col-sm-8">
    <h4><?php echo $value['_afazer_titulo']; ?></h4>
    <p>
        <?php echo $value['description']; ?>
    </p>
    </div>
</div>


<?php
$count++;
}

?>