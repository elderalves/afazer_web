
<?php

$elementos = get_post_meta( get_the_ID(), '_solucoes_elementos_group', true);
$count = 1;


foreach ($elementos as $key => $value) {

?>


<!--======= SERVICES =========-->
<li class="col-md-6">
    <div class="sec-in">
    <i class="fa fa-<?php echo $value['icon']; ?>"></i>
    <h6><?php echo $value['titulo']; ?></h6>
    <hr>
    <div class="description">
        <?php echo $value['elementos']; ?>
    </div>
    </div>
</li>




<?php
$count++;
}
?>