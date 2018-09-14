<?php
return [
    'viewIndex' => [
        'type' => 2,
        'description' => 'View the main page',
    ],
    'managePages' => [
        'type' => 2,
        'description' => 'Manage pages',
    ],
    'admin' => [
        'type' => 1,
        'ruleName' => 'userRole',
        'children' => [
            'content',
            'manageEmployees',

        ],
    ],
    'content' => [
        'type' => 1,
        'ruleName' => 'userRole',
        'children' => [
            'managePages',
            'manageMenu',
            'manageWidgetHtml',
            'viewIndex',
            'manageOrders',
            'manageUsers',
            'editUser',
        ],
    ],
    'manageUsers' => [
        'type' => 2,
        'description' => 'Manage users',
    ],
    'manageEmployees' => [
        'type' => 2,
        'description' => 'Manage employees',
    ],
    'editUser' => [
        'type' => 2,
        'description' => 'Edit user profile',
    ],
    'manageMenu' => [
        'type' => 2,
        'description' => 'Manage menus',
    ],
    'manageWidgetHtml' => [
        'type' => 2,
        'description' => 'Manage blocks',
    ],
    'manageOrders' => [
        'type' => 2,
        'description' => 'Manage orders',
    ],
];
