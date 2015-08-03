<?php wp_nav_menu(
	array(
		'theme_location'  => 'menu-header',
		// En el Codex vemos que en la función wp_nav_menu podemos 
		// cambiar variables. Como por ejemplo, que el contenedor
		// del menú sea un nav en vez de un div.
		'container'       => 'nav',
		// También podenmos añadirle una clase
		'container_class' => 'nav',
		'menu_class'      => 'nav__list',
		)
	); 
?>