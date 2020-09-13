<?php
/**
 * Plugin Name:  Demogorgon
 * Plugin URI: http://webnova.com.ar/
 * Description: Plugin de pruebas, expansion en proceso
 * Version: 1.1
 * Author: Iván Delgado
 * Author URI: http://webnova.com.ar/
 */

/**
 * Register the "book" custom post type
 */
function pluginprefix_setup_post_type() {
    register_post_type( 'book', ['public' => true ] ); 
} 
add_action( 'init', 'pluginprefix_setup_post_type' );
/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
    // Trigger our function that registers the custom post type plugin.
    pluginprefix_setup_post_type(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
function Desactivar(){
      flush_rewrite_rules();
}

function Desinstalar(){
      require_once 'unistall.php';
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );
register_deactivation_hook(__FILE__,'Desactivar');
register_uninstall_hook( __FILE__,  'Desinstalar');

add_action('admin_menu', 'crearMenu', 'crearMenu2');

function crearMenu(){
    add_menu_page(
        'Nueva Pagina',//Titulo de la pagina
        'Super Menu',//Titulo del menu
        'manage_options',//(Capabilities)User que puede ver este menu
        'sp_menu',//opciones que despliega la pagina previamente especificada (slug)
        'mostrarContenido',//function del contenido
         plugin_dir_url('_FILE_').'admin/img/icon.png',
         '5');

    add_submenu_page(
         'sp_menu',//parent slug
         'Ajustes',//nombre de la pagina
         'Ajustes',//titulo del menu
         'manage_options',
         'sp_menu_settings',
         'subMenuSettings'// en proceso
    );

    add_submenu_page(
     'sp_menu',
     'Resultados',
     'Resultados',
     'manage_options',
     'sp_menu_results',
     'mostrarResultados'
     ); // en proceso

    add_submenu_page(
     'sp_menu',
     'Extra',
     'Extra',
     'manage_options',
     'sp_menu_extra',
     'mostrarExtras'
     ); //en proceso tambien
}
function subMenuSettings(){
    echo "Esta seccion esta en proceso";
}
function mostrarContenido(){
  require_once "form.php";
}
function mostrarResultados(){
  require_once "formbox.php";
}
function mostrarExtras(){
    echo "Esta seccion esta en proceso";
}


