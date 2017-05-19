
<?php

$adcionais = get_post_meta( get_the_ID(), '_solucoes_adicionais', true);

$count = 1;


foreach ($adcionais as $key => $value) {

?>


<tr>
    <td>
        <i class="icon-service fa fa-star"></i>
        <h5><?php echo $value['titulo']; ?></h5>
    </td>
</tr>


<?php
    $count++;
}
?>