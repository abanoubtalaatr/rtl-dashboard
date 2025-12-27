<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Abanoub',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => 'نيو سندريلا ',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration. Currently, two
    | modes are supported: 'fullscreen' for a fullscreen preloader animation
    | and 'cwrapper' to attach the preloader animation into the content-wrapper
    | element and avoid overlapping it with the sidebars and the top navbar.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'mode' => 'fullscreen',
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => 'rtl',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => false,
    'password_reset_url' => 'password.reset',
    'password_email_url' => 'password.request',
    'profile_url' => false,
    'disable_darkmode_routes' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Asset Bundling
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Asset Bundling option for the admin panel.
    | Currently, the next modes are supported: 'mix', 'vite' and 'vite_js_only'.
    | When using 'vite_js_only', it's expected that your CSS is imported using
    | JavaScript. Typically, in your application's 'resources/js/app.js' file.
    | If you are not using any of these, leave it as 'false'.
    |
    | For detailed instructions you can look the asset bundling section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'laravel_asset_bundling' => false,
    'laravel_css_path' => 'css/app.css',
    'laravel_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type' => 'navbar-search',
            'text' => 'search',
            'topnav_right' => true,
        ],
        [
            'type' => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:

        // Main Dashboard
        [
            'text' => 'Dashboard',
            'url' => 'home',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'active' => ['home'],
        ],

        // Drivers
        [
            'text' => 'السائقين',
            'url' => 'drivers',
            'icon' => 'fas fa-fw fa-user-tie',
            'active' => ['drivers*'],
        ],

        // Customers
        [
            'text' => 'العملاء',
            'url' => 'customers',
            'icon' => 'fas fa-fw fa-users',
            'active' => ['customers*'],
        ],

        // Companies
        [
            'text' => 'الشركات',
            'url' => 'companies',
            'icon' => 'fas fa-fw fa-building',
            'active' => ['companies*'],
        ],

        // Currencies
        [
            'text' => 'العملات',
            'url' => 'currencies',
            'icon' => 'fas fa-fw fa-coins',
            'active' => ['currencies*'],
        ],

        // Bookings Section
        ['header' => 'إدارة الحجوزات'],

        // Internal Bookings
        [
            'text' => 'الحجوزات الداخلية',
            'url' => 'internal-bookings',
            'icon' => 'fas fa-fw fa-calendar-alt',
            'active' => ['internal-bookings*'],
        ],

        // External Bookings
        [
            'text' => 'الحجوزات الخارجية',
            'url' => 'external-bookings',
            'icon' => 'fas fa-fw fa-calendar-plus',
            'active' => ['external-bookings*'],
        ],

        // Old Bookings (للحفاظ على التوافقية)

        // Car Types
        [
            'text' => 'أنواع السيارات',
            'url' => 'car-types',
            'icon' => 'fas fa-fw fa-car-side',
            'active' => ['car-types*'],
        ],

        // Locations
        [
            'text' => 'المواقع (التشغيلات)',
            'url' => 'locations',
            'icon' => 'fas fa-fw fa-map-marked-alt',
            'active' => ['locations*'],
        ],

        // external locations
        [
            'text' => 'التشغيلات الخارجية',
            'url' => 'external-locations',
            'icon' => 'fas fa-fw fa-map-marked-alt',
            'active' => ['external-locations*'],
        ],

        // Retrieveds
        [
            'text' => 'المبالغ المستردة',
            'url' => 'retrieveds',
            'icon' => 'fas fa-fw fa-money-bill-wave',
            'active' => ['retrieveds*'],
        ],

        ['header' => 'إدارة السيارات'],

        // Cars
        [
            'text' => 'السيارات',
            'url' => 'cars',
            'icon' => 'fas fa-fw fa-car',
            'active' => ['cars*'],
        ],

        // Car Availability
        [
            'text' => 'السيارات المتاحة',
            'url' => 'availability',
            'icon' => 'fas fa-fw fa-search',
            'active' => ['cars-availability*'],
        ],

        // Car Expenses
        [
            'text' => 'مصروفات السيارات',
            'url' => 'car-expenses',
            'icon' => 'fas fa-fw fa-dollar-sign',
            'active' => ['car-expenses*'],
        ],

        // Users
        [
            'text' => 'الفنادق',
            'url' => 'users',
            'icon' => 'fas fa-fw fa-users-cog',
            'active' => ['users*'],
        ],

        [
            'text' => 'المشرفين',
            'url' => 'supervisors',
            'icon' => 'fas fa-fw fa-users-cog',
            'active' => ['supervisors*'],
        ],

        // Reports Section (Super Admin Only)
        ['header' => 'التقارير (للمدير العام فقط)', 'can' => 'super_admin'],

        // Internal Bookings Reports
        [
            'text' => 'تقارير الحجوزات الداخلية',
            'url' => 'reports/internal-bookings',
            'icon' => 'fas fa-fw fa-chart-line',
            'active' => ['reports/internal-bookings*'],
            'can' => 'super_admin',
        ],

        // External Bookings Reports
        [
            'text' => 'تقارير الحجوزات الخارجية',
            'url' => 'reports/external-bookings',
            'icon' => 'fas fa-fw fa-chart-bar',
            'active' => ['reports/external-bookings*'],
            'can' => 'super_admin',
        ],

        // Car Financial Report
        [
            'text' => 'التقرير المالي للسيارات',
            'url' => 'reports/car-report',
            'icon' => 'fas fa-fw fa-car-side',
            'active' => ['reports/car-report*'],
            'can' => 'super_admin',
        ],

        // Users Bookings Report
        [
            'text' => 'تقرير الحسابات',
            'url' => 'reports/users-bookings',
            'icon' => 'fas fa-fw fa-users',
            'active' => ['reports/users-bookings*'],
            'can' => 'super_admin',
        ],
        // Expenses
        [
            'text' => 'المصروفات',
            'url' => 'reports/expenses',
            'icon' => 'fas fa-fw fa-money-bill-wave',
            'active' => ['expenses*'],
            'can' => 'super_admin',
        ],
        // Incomes
        [
            'text' => 'الإيرادات',
            'url' => 'reports/incomes',
            'icon' => 'fas fa-fw fa-money-bill-wave',
            'active' => ['incomes*'],
            'can' => 'super_admin',
        ],
        // Income Expense Report
        [
            'text' => 'المصروفات والإيرادات',
            'url' => 'reports/income-expense-reports',
            'icon' => 'fas fa-fw fa-money-bill-wave',
            'active' => ['income-expense*'],
            'can' => 'super_admin',
        ],
        // Settings
        [
            'text' => 'الإعدادات',
            'url' => 'settings',
            'icon' => 'fas fa-fw fa-cog',
            'active' => ['settings*'],
            'can' => 'super_admin',
        ],
        // Example: Simple link with icon
        // [
        //     'text' => 'Users',
        //     'url' => 'users',
        //     'icon' => 'fas fa-fw fa-users',
        //     'active' => ['users*'],
        // ],

        // Example: Link with badge/label
        // [
        //     'text' => 'Orders',
        //     'url' => 'orders',
        //     'icon' => 'fas fa-fw fa-shopping-cart',
        //     'label' => 12,
        //     'label_color' => 'success',
        //     'active' => ['orders*'],
        // ],

        // Example: Link with route name
        // [
        //     'text' => 'Products',
        //     'route' => 'products.index',
        //     'icon' => 'fas fa-fw fa-box',
        //     'active' => ['products*'],
        // ],

        // Section Header
        // ['header' => 'MANAGEMENT'],

        // Example: Menu with submenu
        // [
        //     'text' => 'Settings',
        //     'icon' => 'fas fa-fw fa-cog',
        //     'submenu' => [
        //         [
        //             'text' => 'General',
        //             'url' => 'settings/general',
        //             'icon' => 'fas fa-fw fa-sliders-h',
        //         ],
        //         [
        //             'text' => 'Email',
        //             'url' => 'settings/email',
        //             'icon' => 'fas fa-fw fa-envelope',
        //         ],
        //         [
        //             'text' => 'Security',
        //             'url' => 'settings/security',
        //             'icon' => 'fas fa-fw fa-shield-alt',
        //         ],
        //     ],
        // ],

        // Example: Link with permission check
        // [
        //     'text' => 'Admin Panel',
        //     'url' => 'admin',
        //     'icon' => 'fas fa-fw fa-user-shield',
        //     'can' => 'access-admin',
        // ],

        // Section Header
        // ['header' => 'ACCOUNT'],

        // [
        //     'text' => 'Profile',
        //     'url' => 'profile',
        //     'icon' => 'fas fa-fw fa-user',
        // ],
        // [
        //     'text' => 'Change Password',
        //     'url' => 'password/change',
        //     'icon' => 'fas fa-fw fa-lock',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
    // Enable RTL layout
    'enabled_laravel_rtl' => true,   // This automatically handles most RTL fixes

    // Force right-to-left direction
    'layout_direction' => 'lrt',     // Options: 'ltr' or 'rtl'

    // Optional: Use darker/nice RTL sidebar (recommended for Arabic/Persian)
    'dashboard_url' => 'home',
    'sidebar_mini' => true,
    'right_sidebar' => false,
    'layout' => 'sidebar-mini layout-fixed layout-navbar-fixed',
    'sidebar_collapse' => false,
    'right_sidebar_push' => false,
];
