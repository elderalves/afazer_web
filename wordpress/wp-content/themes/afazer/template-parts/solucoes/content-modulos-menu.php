
<?php

$modulos = get_post_meta( get_the_ID(), '_solucoes_modulos_group', true);
$count = 1;


foreach ($modulos as $key => $value) {

?>

<li role="presentation" class="<?php if($count == 1) echo "active"; ?>">
    <a href="#fluxo<?php echo $count; ?>"  role="tab" data-toggle="tab">
        <?php echo $value['titulo']; ?><i class="animated bounceInLeft fa fa-long-arrow-right"></i>
    </a>
</li>
              

<?php
$count++;
}
?>