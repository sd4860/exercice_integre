<?php 
    /*** Déclarations des menus ***/
    register_nav_menu('main_nav','Navigation principale');

    /*** Déclaration des zones de widgets ***/
    register_sidebar (array(
        'id'            =>  'search',
        'name'          =>  'search_header',
        'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
        'after_widget'  =>  '</div>'
    ));
?>