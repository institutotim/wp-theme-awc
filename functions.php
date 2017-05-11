<?php

register_nav_menus( array(
            'header-1' => __( 'Header Menu 1', 'Nexus' ),
) );


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



function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Página ".$paged." de ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Anterior</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Próximo &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Último &raquo;</a>";
         echo "</div>\n";
     }
}
add_filter('wp_npagination','pagination');



?>
