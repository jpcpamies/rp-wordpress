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
add_image_size( 'my-size', 220, 180, true); 




// Para que funcionen los menús tenemos que hacer un array
function register_my_menus() {
	register_nav_menus( 
			array(
				'menu-header' => __('Menú del encabezado'),
				'menu-footer' => __('Menú del footer')	
				)
		);
}
add_action( 'init', 'register_my_menus' );