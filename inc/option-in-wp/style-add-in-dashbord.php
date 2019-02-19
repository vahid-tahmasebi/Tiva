<?php
add_action('admin_head', 'admin_custom_css');
function admin_custom_css(){
    echo '<style>  
          #adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap {width: 170px;background-color: #28353d;}
          #adminmenu .wp-submenu-head, #adminmenu a.menu-top { font-size: 14px;font-weight: 400;line-height: 18px;font-family: IRANsans;padding: 0;}
           #adminmenu .wp-submenu a { font-size: 13px;line-height: 18px;margin: 0;padding: 5px 0;font-family: IRANsans;}   
        </style>';
}