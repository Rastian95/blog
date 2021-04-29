<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Custom',
        ],
        [
            'title' => 'Ventas',
            'desc' => '',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Cotización',
                    'page' => 'features/miscellaneous/kanban-board'
                ],
                [
                    'title' => 'Pedido',
                    'page' => 'features/miscellaneous/sticky-panels'
                ],
            ]
        ],
        [
            'title' => 'Listados',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Cotizaciones',
                    'page' => 'features/miscellaneous/kanban-board'
                ],
                [
                    'title' => 'Pedidos',
                    'page' => 'features/miscellaneous/sticky-panels'
                ],
            ]
        ],

    ]

];
