<?php

$modulos = get_post_meta( get_the_ID(), '_solucoes_modulos_group', true);
$count = 1;


foreach ($modulos as $key => $value) {

?>

<div role="tabpanel" class="tab-pane animated fadeInRight <?php if($count == 1) echo "active";?>" id="fluxo<?php echo $count; ?>">
    <div class="col-sm-12">
        <h4><?php echo $value['titulo']; ?></h4>
        <p>
            <?php echo $value['descricao']; ?>
        </p>
    </div>
</div>


<?php
$count++;
}

?>