<?php 
// Esta función activca las imágenes destacadas en el tema.
add_theme_support('post-thumbnails');



// Esta función nos añade tamaños personalizados a la imagen destacada.
// Los tamaños por defecto son tres. Yo puedo añadir un tamaño personalizado
// Podemos definir el tamaño creándolo. 
// Los parámetros vienen en pixels
// Al añadir el parámetro true corta la imagen haciéndola proporcional.
// Estas proporciones se aplican a las nuevas imágenes importadas. 
// para que se aplicar tamaño personalizado a las imágenes anteriores
// Hay un pligin: thumbnail generaitor
add_image_size( 'custom', 220, 180, true); 




// Esta función llama al menú
// Estamos creando un espacio en el que incrustar Menús
// los elementos que vayan dentro de los menús se configuran 
// desde admin/menús 
function register_my_menus() {
	register_nav_menus( 
			array(
				'menu-header' => __('Navegación del encabezado'), //menu-header es el ID del menú
				'menu-footer' => __('Navegación del footer') // lo del () es la descripción del menú
				)
		);
} 
// Cuando añadimos una función tenemos que llamarla para que se ejecute
// Es una especie de sistema de seguridad
add_action( 'init', 'register_my_menus' );




// Esta función añade un sidebar
function miplugin_register_sidebar() {
	register_sidebar( 
		array (
			'id' => 'sidebar-footer', 
			'name' => 'Sidebar del Footer',
			'description' => 'Sidebar donde colocar links del footer',
			// por defecto cada widget va dentro de un li, 
			// y el título en un h2.
			// podemos modificar esta semántica con atrib.
			'before_widget' => '<div class="sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<strong>',
			'after_title' => '</strong>'
		)	
	);
}
add_action( 'widgets_init', 'miplugin_register_sidebar' );

// Esta función añade un sidebar
function miplugin_register_sidebar2() {
	register_sidebar( 
		array (
			'id' => 'sidebar-header', 
			'name' => 'Sidebar del Header',
			'description' => 'Sidebar donde colocar links del header',
			// por defecto cada widget va dentro de un li, 
			// y el título en un h2.
			// podemos modificar esta semántica con atrib.
			'before_widget' => '<div class="sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<strong>',
			'after_title' => '</strong>'
		)	
	);
}
add_action( 'widgets_init', 'miplugin_register_sidebar2' );




