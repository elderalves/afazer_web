<?php

$porque = get_post_meta( get_the_ID(), '_afazer_porque', true);


foreach ($porque as $key => $value) {

?>

<p>
    <i class="fa fa-arrow-right"></i>
    <?php echo $value['description']; ?>
</p>



<?php

}

?>