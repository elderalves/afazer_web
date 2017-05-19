<?php

$clientes = get_post_meta( get_the_ID(), '_afazer_clientes', true);



foreach ($clientes as $key => $value) {

?>

<div class="part"> 
    <a href="<?php echo $value['_afazer_site']; ?>" target="_blank"> 
        <img src="<?php echo $value['_afazer_image']; ?>" alt="<?php echo $value['_afazer_titulo']; ?>" > 
    </a> 
</div>


<?php

}

?>