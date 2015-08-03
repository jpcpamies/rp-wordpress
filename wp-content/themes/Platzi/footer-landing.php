<footer class='footer-negro'>
	<strong>With love in London</strong>
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'menu-footer',
			// En el Codex vemos que en la función wp_nav_menu podemos 
			// cambiar variables. Como por ejemplo, que el contenedor
			// del menú sea un nav en vez de un div.
			'container'       => 'nav',
			// También podenmos añadirle una clase
			'container_class' => 'nav--foter',
			'menu_class'      => 'nav--foter__list',
			)
		); 
	?>
</footer>

</body>
</html>