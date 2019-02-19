<?php

add_action('admin_head', 'admin_custom_css');
function admin_custom_css(){
    echo '<style>  
  #adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap {width: 170px;background-color: #28353d;}
  #adminmenu .wp-submenu-head, #adminmenu a.menu-top { font-size: 14px;font-weight: 400;line-height: 18px;font-family: IRANsans!important;padding: 0;}
  #adminmenu .wp-submenu a { font-size: 13px;line-height: 18px;margin: 0;padding: 5px 0;font-family: IRANsans!important;}   
  .rtl h1, .rtl h2, .rtl h3, .rtl h4, .rtl h5, .rtl h6 {font-family: IRANsans !important;font-weight: 900 !important;}     
 .postbox .inside h2, .wrap [class$=icon32]+h2, .wrap h1, .wrap>h2:first-child { font-size:23px;font-weight:900 !important; margin: 0; padding: 9px 0 4px 0;line-height: 29px;font-family: IRANsans !important;}   
        </style>';
}