<?php 
// Esta línea habilita el uso de thumbnails, imágenes destacadas en el tema.
add_theme_support('post-thumbnails');

// Los tamaños por defecto son tres. Yo puedo añadir un tamaño personalizado
// Podemos definir el tamaño creándolo. 
// Los parámetros vienen en pixels
// Al añadir el parámetro true corta la imagen haciéndola proporcional.
// Estas proporciones se aplican a las nuevas imágenes importadas. 
// para que se aplicar tamaño personalizado a las imágenes anteriores
// Hay un pligin: thumbnail generaitor
add_image_size( 'custom', 220, 180, true); 




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