<?php


function cmb2_solucoes_modulos() {

    $prefix = '_solucoes_';

	$cmb_modulos = new_cmb2_box( array(
		'id'           => $prefix . 'modulos',
		'title'        => esc_html__( 'MODULOS / SERVIÇOS', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 15 ),
		),
	) );

	$group_modulos_id = $cmb_modulos->add_field( array(
		'id'          => $prefix . 'modulos_group',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Modulos do Sistema', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Modulo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_modulos->add_group_field( $group_modulos_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Titulo do Modulo/Serviço', 'cmb2' ),
		'id'         => 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$cmb_modulos->add_group_field( $group_modulos_id, array(
		'name'    => esc_html__( 'Descriçao', 'cmb2' ),
		'id'      => 'descricao',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 10,
		),
	) );

}

add_action( 'cmb2_admin_init', 'cmb2_solucoes_modulos' );



function cmb2_solucoes_elementos() {

    $prefix = '_solucoes_';

	$cmb_elementos = new_cmb2_box( array(
		'id'           => $prefix . 'elementos',
		'title'        => esc_html__( 'ELEMENTOS DO SISTEMA', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 15 ),
		),
	) );

	$group_elementos_id = $cmb_elementos->add_field( array(
		'id'          => $prefix . 'elementos_group',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Elementos do Sistema', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Elemento {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_elementos->add_group_field( $group_elementos_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Titulo do Elemento', 'cmb2' ),
		'id'         => 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

    $cmb_elementos->add_group_field( $group_elementos_id, array(
		'name'    => esc_html__( 'Elementos', 'cmb2' ),
		'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => 'elementos',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 10,
		),
	) );

	$cmb_elementos->add_group_field( $group_elementos_id, array(
		'name'             => esc_html__( 'Icon', 'cmb2' ),
		'id'               => 'icon',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'clock-o' => esc_html__( 'Relogio', 'cmb2' ),
			'user'   => esc_html__( 'Usuário', 'cmb2' ),
			'usd'   => esc_html__( 'Dollar', 'cmb2' ),
			'area-chart'   => esc_html__( 'Grafico (Area)', 'cmb2' ),
			'bar-chart'   => esc_html__( 'Grafico (Barra)', 'cmb2' ),
			'line-chart'   => esc_html__( 'Grafico (Linha)', 'cmb2' ),
			'pie-chart'   => esc_html__( 'Grafico (Pizza)', 'cmb2' ),
		),
	) );


}

add_action( 'cmb2_admin_init', 'cmb2_solucoes_elementos' );





function cmb2_solucoes_pacotes_values() {

    $prefix = '_solucoes_';

	$cmb_pacotes = new_cmb2_box( array(
		'id'           => $prefix . 'pacotes_values',
		'title'        => esc_html__( 'PACOTES DE SERVIÇO', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 15 ),
		),
	) );

	$group_pacotes_id = $cmb_pacotes->add_field( array(
		'id'          => $prefix . 'pacotes_values_group',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Pacotes de Serviço', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Pacote {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_pacotes->add_group_field( $group_pacotes_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Titulo do Pacote', 'cmb2' ),
		'id'         => 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

    $cmb_pacotes->add_group_field( $group_pacotes_id,  array(
		'name'       => __( 'Básico', 'cmb2' ),
		'id'         => 'basico',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$cmb_pacotes->add_group_field( $group_pacotes_id,  array(
		'name'       => __( 'Completo', 'cmb2' ),
		'id'         => 'completo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

}
add_action( 'cmb2_admin_init', 'cmb2_solucoes_pacotes_values' );


function cmb2_solucoes_pacotes_checks() {

    $prefix = '_solucoes_';

	$cmb_pacotes_checks = new_cmb2_box( array(
		'id'           => $prefix . 'pacotes_checks',
		'title'        => esc_html__( 'PACOTES DE SERVIÇO - Continuação', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 15 ),
		),
	) );

	$group_pacotes_checks_id = $cmb_pacotes_checks->add_field( array(
		'id'          => $prefix . 'pacotes_checks_group',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Pacotes de Serviço', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Pacote {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_pacotes_checks->add_group_field( $group_pacotes_checks_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'desc'       => __( 'Titulo do Pacote', 'cmb2' ),
		'id'         => 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

    $cmb_pacotes_checks->add_group_field( $group_pacotes_checks_id, array(
		'name'             => esc_html__( 'Básico', 'cmb2' ),
		'id'               => 'basico',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'true' => esc_html__( 'Incluso', 'cmb2' ),
			'false'   => esc_html__( 'Opcional', 'cmb2' ),
		),
	) );

	$cmb_pacotes_checks->add_group_field( $group_pacotes_checks_id, array(
		'name'             => esc_html__( 'Completo', 'cmb2' ),
		'id'               => 'completo',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'true' => esc_html__( 'Incluso', 'cmb2' ),
			'false'   => esc_html__( 'Opcional', 'cmb2' ),
		),
	) );

}
add_action( 'cmb2_admin_init', 'cmb2_solucoes_pacotes_checks' );




function cmb2_solucoes_adicionais() {

    $prefix = '_solucoes_';

	$cmb_adicionais = new_cmb2_box( array(
		'id'           => $prefix . 'adicionais',
		'title'        => esc_html__( 'SERVIÇO ADICIONAIS', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 15 ),
		),
	) );

	$group_adicionais_id = $cmb_adicionais->add_field( array(
		'id'          => $prefix . 'adicionais',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Serviço Adicionais', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Adicional {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_adicionais->add_group_field( $group_adicionais_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'id'         => 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

}
add_action( 'cmb2_admin_init', 'cmb2_solucoes_adicionais' );



function cmb2_solucoes_independentes() {

    $prefix = '_solucoes_';

	$cmb_independentes = new_cmb2_box( array(
		'id'           => $prefix . 'independentes',
		'title'        => esc_html__( 'MÓDULOS INDEPENDENTES', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array(
			'id' => array( 15 ),
		),
	) );

	$group_independentes_id = $cmb_independentes->add_field( array(
		'id'          => $prefix . 'independentes',
		'type'        => 'group',
		'description' => esc_html__( 'Items para os Módulos Independentes', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Modulo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true,
		),
	) );

	$cmb_independentes->add_group_field( $group_independentes_id,  array(
		'name'       => __( 'Titulo', 'cmb2' ),
		'id'         => 'titulo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

}
add_action( 'cmb2_admin_init', 'cmb2_solucoes_independentes' );