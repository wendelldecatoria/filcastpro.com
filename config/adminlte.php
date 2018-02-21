<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'iBillboard',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>iBillboard</b>',

    'logo_mini' => '',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        [
            'text'        => 'Home',
            'url'         => '',
            'icon'        => 'home',
            //'label'       => 4,
            //'label_color' => 'success',
            // 'can'  => 'manage-blog',
        ],  
        'ACCOUNT MANAGEMENT',
        [
            'text'        => 'Subscriber',
            'url'         => 'manage/subscriber',
            'icon'        => 'users',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/subscriber',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/subscriber/add',
                    'icon' => 'plus'
                ],
            ],
        ],  
        [
            'text'        => 'Subscription',
            'url'         => 'manage/subscription',
            'icon'        => 'list',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/subscription',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/subscription/add',
                    'icon' => 'plus'
                ],
            ],
            
        ],  
        [
            'text'        => 'User',
            'url'         => 'manage/user',
            'icon'        => 'user',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/user',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/user/add',
                    'icon' => 'plus'
                ],
            ],
        ],
        'ADMINISTRATION',
        [
            'text' => 'Category',
            'icon' => 'th-large',
             'submenu' => [
                [
                    'text' => 'View',
                    'url'  => 'manage/category',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/category/add',
                    'icon' => 'plus'
                ],
            ],
        ],
        [
            'text'        => 'Event',
            'url'         => 'manage/event',
            'icon'        => 'calendar',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/event',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/event/add',
                    'icon' => 'plus'
                ],
            ],
        ],  
        [
            'text'        => 'Kiosk',
            'url'         => 'manage/kiosk',
            'icon'        => 'info-circle',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/kiosk',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/kiosk/add',
                    'icon' => 'plus'
                ],
            ],
        ],  
        [
            'text'        => 'Mall-Shop',
            'url'         => 'manage/mallshop',
            'icon'        => 'building',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/mallshop',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/mallshop/add',
                    'icon' => 'plus'
                ],
            ],
        ],  
        [
            'text'        => 'Map',
            'url'         => 'manage/map',
            'icon'        => 'map',
        ],   
        [
            'text'        => 'Shop',
            'url'         => 'manage/shop',
            'icon'        => 'shopping-bag',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/shop',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/shop/add',
                    'icon' => 'plus'
                ],
            ],
        ],    
        [
            'text'        => 'Kiosk Status',
            'url'         => 'kioskStatus',
            'icon'        => 'heartbeat',
            //'label'       => 4,
            //'label_color' => 'success',
        ],  
        [
            'text'        => 'Approvals',
            'url'         => 'approvals',
            'icon'        => 'check-circle',
            //'label'       => 4,
            //'label_color' => 'success',
        ],  
        [
            'text'        => 'Reports',
            'url'         => 'reports',
            'icon'        => 'file',
            //'label'       => 4,
            //'label_color' => 'success',
        ],
        'ADVERTISEMENT', 
        [
            'text'        => 'Banner Ad/Fullscreen ',
            'url'         => 'manage/multirotator',
            'icon'        => 'mobile',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/multirotator',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/multirotator/add',
                    'icon' => 'plus'
                ],
            ],
        ],  
        [
            'text'        => 'Products',
            'url'         => 'manage/product',
            'icon'        => 'product-hunt',
            'submenu'     => [
                [
                    'text' => 'View',
                    'url'  => 'manage/product',
                    'icon' => 'th-list'
                ],
                [
                    'text' => 'Add',
                    'url'  => 'manage/product/add',
                    'icon' => 'plus'
                ],
            ],
        ],  
        [
            'text'        => 'Promo',
            'url'         => 'manage/promo',
            'icon'        => 'money',
        ],  
         [
            'text'        => 'Tags',
            'url'         => 'manage/tag',
            'icon'        => 'tags',
        ],  
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
    ],
];
