<?php
/* navwalker option available on another branch */
wp_nav_menu(
    array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        /* as per https://developer.wordpress.org/reference/functions/wp_nav_menu/
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'walker'          => '',
        */
    )
);
