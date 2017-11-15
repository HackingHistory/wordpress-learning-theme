

<?php
function register_my_menu('menu1') {
  register_nav_menu('primary',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
