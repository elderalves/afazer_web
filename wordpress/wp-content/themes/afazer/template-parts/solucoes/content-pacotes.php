
<?php

$pacotes = get_post_meta( get_the_ID(), '_solucoes_pacotes_values_group', true);

$count = 1;


foreach ($pacotes as $key => $value) {

?>


<tr>
    <td>
        <i class="icon-service fa fa-star"></i>
        <h5><?php echo $value["titulo"]; ?></h5>
    </td>
    <td><?php echo $value["basico"]; ?></td>
    <td><?php echo $value["completo"]; ?></td>
</tr>


<?php
    $count++;
}
?>

<?php

$pacotes = get_post_meta( get_the_ID(), '_solucoes_pacotes_checks_group', true);

foreach ($pacotes as $key => $value) {


$basico = ($value["basico"] == 'true') ? '<i class="fa fa-check"></i>' : 'OPCIONAL';
$completo = ($value["completo"] == 'true') ? '<i class="fa fa-check"></i>' : 'OPCIONAL';
?>


<tr>
    <td>
        <i class="icon-service fa fa-star"></i>
        <h5><?php echo $value["titulo"]; ?></h5>
    </td>
    <td><?php echo $basico; ?></td>
    <td><?php echo $completo; ?></td>
</tr>


<?php
    $count++;
}
?>