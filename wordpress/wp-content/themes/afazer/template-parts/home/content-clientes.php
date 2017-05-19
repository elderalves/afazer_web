<!--======= CLIENTS WORD =========-->

<?php

$nome = get_post_meta( get_the_ID(), '_clientes_nome', true );
$cargo = get_post_meta( get_the_ID(), '_clientes_cargo', true );
$mensagem = get_post_meta( get_the_ID(), '_clientes_mensagem', true );

if($cargo) {
    $cliente = $nome . ' - ' . $cargo;
} else {
    $cliente = $nome;
}

?>

<li class="col-md-4">
    <div class="avatar"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" > </div>
    <div class="clients-in">
    <p>
        <?php echo $mensagem; ?>
    </p>
    <h6><?php echo $cliente; ?></h6>
    </div>
</li>