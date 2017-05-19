<?php

$funcionalidades = get_post_meta( get_the_ID(), '_afazer_funcionalidades', true);

$total = count($funcionalidades);
$half  = count($funcionalidades) / 2;
$count = 1;

foreach ($funcionalidades as $key => $value) {

    if($count == 1 || $count == $half) {
        echo '<div class="col-md-6">';
    }

?>

<div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>">
        <span class="icon-accor"><i class="fa fa-check-circle"></i></span>
        <?php echo $value['_afazer_titulo']; ?>
        </a>
    </h4>
    </div>
    <div id="collapse<?php echo $count; ?>" class="panel-collapse collapse <?php if($count == 1) echo "in"; ?>">
    <div class="panel-body">
        <p><?php echo $value['description']; ?></p>
    </div>
    </div>
</div>

<?php

    if($count == ($half - 1) || $count == $total) {
        echo '</div>';
    }

$count++;
}

?>