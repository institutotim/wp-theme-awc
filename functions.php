<?php

define("PE_THEME_NAME",'Visia');

// bootstrap the framework
define("PE_THEME_PATH",dirname( __FILE__));
require("framework/php/boot.php");

function visia_archive_init(){
    global $wp_rewrite;
    $wp_rewrite->date_structure = 'blog/archive/%year%/%monthnum%/%day%';
}
add_action( 'init', 'visia_archive_init' );

function tim_theme_customizer( $wp_customize ) {
   $wp_customize->add_section( 'tim_agenda_section' , array(
    'title'       => __( 'Agenda', 'tim' ),
    'priority'    => 30,
    'description' => 'Upload da agenda na página inicial',
) );

$wp_customize->add_setting( 'tim_agenda' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tim_agenda', array(
    'label'    => __( 'Agenda', 'tim' ),
    'section'  => 'tim_agenda_section',
    'settings' => 'tim_agenda',
) ) );

}
add_action( 'customize_register', 'tim_theme_customizer' );

// Funcao para o dropdown menu do header
require_once('wp_bootstrap_navwalker.php');


?>
