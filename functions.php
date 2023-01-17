<?php

//MENU

function register_my_menu() {
  register_nav_menu('topmenu',__( 'Menu superior' ));
}
add_action( 'init', 'register_my_menu' );




//JQUERY

function replace_jquery() {
    if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.1.0.min.js' , false, NULL, true );
      wp_enqueue_script('jquery');
    }
  }
  add_action('init', 'replace_jquery');



  //JS

  function main_scripts() {
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ));
}
add_action( 'wp_footer', 'main_scripts' );



// copyright
function display_copyright( $iYear = null, $szSeparator = " - ", $szTail = 'Todos los derechos reservados' )
{echo '<div class="copyright">' . display_years( $iYear, $szSeparator, false ) . ' &copy; ' . 'Copyright' . '<p>' . $szTail . '</p>' . '</div>';}
function display_years( $iYear = null, $szSeparator = " - ", $bPrint = true )
{
$iCurrentYear = ( date( "Y" ) );
if ( is_int( $iYear ) )
{$iYear = ( $iCurrentYear > $iYear ) ? $iYear = $iYear . $szSeparator . $iCurrentYear : $iYear;
} else {
$iYear = $iCurrentYear;}
if ( $bPrint == true ) echo $iYear; else return $iYear;
}



//IMAGEN DESTACADA

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); }




//SVG

  function dmc_add_svg_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'dmc_add_svg_mime_types');




  // PAGINACION
function function_name()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}



//Decidir qué bloques se verán en el editor
add_filter( 'allowed_block_types', 'ayudawp_allowed_block_types' );
function ayudawp_allowed_block_types( $allowed_blocks ) {
return array(
'core/image',
'core/paragraph',
'core/heading',
'core/list',
'core/gallery',
'core/html'
);
}




  
?>