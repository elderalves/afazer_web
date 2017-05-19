<?php

$beneficios = get_post_meta( get_the_ID(), '_afazer_beneficios', true);



foreach ($beneficios as $key => $value) {

?>


<p>
    <i class="fa fa-star"></i>
    <?php echo $value['description']; ?>
</p>



<?php

}

?>