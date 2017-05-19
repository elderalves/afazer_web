<?php

$fluxo = get_post_meta( get_the_ID(), '_afazer_fluxo', true);
$count = 1;


foreach ($fluxo as $key => $value) {

?>

<li role="presentation" class="<?php if($count == 1) echo "active"; ?>">
    <a href="#fluxo<?php echo $count; ?>"  role="tab" data-toggle="tab">
        <?php echo $count . " - " . $value['_afazer_titulo']; ?> <i class="animated bounceInLeft fa fa-long-arrow-right"></i>
    </a>
</li>


<?php
$count++;
}

?>