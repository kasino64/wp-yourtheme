<?php

function yourtheme_sanitize_email( $email, $setting ) {
	return ( is_email($email) ? $email : $setting->default );
}

function yourtheme_customize_register( $wp_customize ){   
	//add Section
	$wp_customize->add_section(
		 'sec_email', array(
				'title'       => 'Fale Conosco',
				'priority'    => 160,
		 )
	);
	//add Setting
	$wp_customize->add_setting(
		 'set_email', array(
				'type'               => 'theme_mod',
				'default'            => '',
				'sanitize_callback'  => 'yourtheme_sanitize_email'
		 )
	);
	//add Input Field
	$wp_customize->add_control(
		 'set_email', array(
				'label'       => 'Fale Conosco',
				'description' => 'Adicione seu email para contato',
				'section'     => 'sec_email',
				'type'        => 'text',
				'input_attrs' => array(
					'placeholder' => __( 'email@dominio.com.br' ),
				),
		 )
	);
}
add_action( 'customize_register', 'yourtheme_customize_register' );


?>