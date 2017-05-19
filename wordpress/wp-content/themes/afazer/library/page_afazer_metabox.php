<?php

function cmb2_afazer_destaques() {
	$prefix = 'destaques_group_';

	/**
	 * Destaques Grupo
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Destaques do AFAZER', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 13 ),
		),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'description',
		'type'        => 'group',
		'description' => esc_html__( 'Items destaques do AFAZER', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Destaque {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Título do Destaque', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Escreve uma breve descrição para esse item', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Icone', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
        'preview_size' => array( 50, 50 ),
	) );
}
add_action( 'cmb2_admin_init', 'cmb2_afazer_destaques' );

function cmb2_afazer_sobre() {
    $prefix = '_afazer_';

    /**
	 * AFAZER: Sobre Metabox
	 */
	$cmb_sobre = new_cmb2_box( array(
		'id'            => 'sobre_metabox',
		'title'         => __( 'Sobre o AFAZER', 'cmb2' ),
		'object_types'  => array( 'page', ),
		'context'       => 'normal',
		'show_names'    => true,
        'show_on'      => array(
			'id' => array( 13 ),
		),
	) );

	// Regular text field
	$cmb_sobre->add_field( array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Digite o Titulo', 'cmb2' ),
		'id'         => $prefix . 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

    $cmb_sobre->add_field( array(
		'name'    => esc_html__( 'Sobre o AFAZER', 'cmb2' ),
		'id'      => $prefix . 'description',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 10,
		),
	) );

    $cmb_sobre->add_field( array(
		'name' => esc_html__( 'Foto AFAZER', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	));
}
add_action( 'cmb2_admin_init', 'cmb2_afazer_sobre' );


function cmb2_afazer_porque() {

    $prefix = '_afazer_';

    /**
	 * AFAZER:  Porque o Afazer?
	 */
	$cmb_porque = new_cmb2_box( array(
		'id'           => $prefix . 'porque',
		'title'        => esc_html__( 'PORQUE O AFAZER?', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 13 ),
		),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_porque_id = $cmb_porque->add_field( array(
		'id'          => $prefix . 'porque',
		'type'        => 'group',
		'description' => esc_html__( 'Motivos para usar o AFAZER', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Motivo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_porque->add_group_field( $group_porque_id, array(
		'name'        => esc_html__( 'Descrição', 'cmb2' ),
		'description' => esc_html__( 'Escreve uma breve descrição para esse item', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

}
add_action( 'cmb2_admin_init', 'cmb2_afazer_porque' );


function cmb2_afazer_fluxo() {

    $prefix = '_afazer_';

    /**
	 * AFAZER:  Porque o Afazer?
	 */
	$cmb_fluxo = new_cmb2_box( array(
		'id'           => $prefix . 'fluxo',
		'title'        => esc_html__( 'COMO FUNCIONA O FLUXO DO SISTEMA?', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 13 ),
		),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_fluxo_id = $cmb_fluxo->add_field( array(
		'id'          => $prefix . 'fluxo',
		'type'        => 'group',
		'description' => esc_html__( 'Items para o Fluxo do Sistema', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Fluxo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_fluxo->add_group_field( $group_fluxo_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Digite o Titulo', 'cmb2' ),
		'id'         => $prefix . 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$cmb_fluxo->add_group_field( $group_fluxo_id, array(
		'name'        => esc_html__( 'Descrição', 'cmb2' ),
		'description' => esc_html__( 'Escreve uma breve descrição para esse item', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$cmb_fluxo->add_group_field( $group_fluxo_id,  array(
		'name' => esc_html__( 'Foto do Fluxo', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	));

}
add_action( 'cmb2_admin_init', 'cmb2_afazer_fluxo' );



function cmb2_afazer_funcionalidades() {

    $prefix = '_afazer_';

    /**
	 * AFAZER:  Porque o Afazer?
	 */
	$cmb_funcionalidades = new_cmb2_box( array(
		'id'           => $prefix . 'funcionalidades',
		'title'        => esc_html__( 'FUNCIONALIDADES', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 13 ),
		),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_funcionalidades_id = $cmb_funcionalidades->add_field( array(
		'id'          => $prefix . 'funcionalidades',
		'type'        => 'group',
		'description' => esc_html__( 'Items para as Funcionalidades do Sistema', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Funcionalidade {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_funcionalidades->add_group_field( $group_funcionalidades_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Digite o Titulo', 'cmb2' ),
		'id'         => $prefix . 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$cmb_funcionalidades->add_group_field( $group_funcionalidades_id, array(
		'name'        => esc_html__( 'Descrição', 'cmb2' ),
		'description' => esc_html__( 'Escreve uma breve descrição para esse item', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

}
add_action( 'cmb2_admin_init', 'cmb2_afazer_funcionalidades' );


function cmb2_afazer_beneficios() {

    $prefix = '_afazer_';

    /**
	 * AFAZER:  Porque o Afazer?
	 */
	$cmb_beneficios = new_cmb2_box( array(
		'id'           => $prefix . 'beneficios',
		'title'        => esc_html__( 'BENEFÍCIOS', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 13 ),
		),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_beneficios_id = $cmb_beneficios->add_field( array(
		'id'          => $prefix . 'beneficios',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Beneficios do Sistema', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Benefício {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_beneficios->add_group_field( $group_beneficios_id, array(
		'name'        => esc_html__( 'Descrição', 'cmb2' ),
		'description' => esc_html__( 'Escreve uma breve descrição para esse item', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

}
add_action( 'cmb2_admin_init', 'cmb2_afazer_beneficios' );


function cmb2_afazer_clientes() {

    $prefix = '_afazer_';

    /**
	 * AFAZER:  Porque o Afazer?
	 */
	$cmb_clientes = new_cmb2_box( array(
		'id'           => $prefix . 'clientes',
		'title'        => esc_html__( 'CLIENTES', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 13 ),
		),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_clientes_id = $cmb_clientes->add_field( array(
		'id'          => $prefix . 'clientes',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Clientes do Sistema', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Cliente {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_clientes->add_group_field( $group_clientes_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Nome do Cliente', 'cmb2' ),
		'id'         => $prefix . 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

    $cmb_clientes->add_group_field( $group_clientes_id,  array(
		'name'       => __( 'Link do Site', 'cmb2' ),
		'desc'       => __( 'Site do Cliente', 'cmb2' ),
		'id'         => $prefix . 'site',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$cmb_clientes->add_group_field( $group_clientes_id,  array(
		'name' => esc_html__( 'Imagem do Cliente', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	));

}
add_action( 'cmb2_admin_init', 'cmb2_afazer_clientes' );

