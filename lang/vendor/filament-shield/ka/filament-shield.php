<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.name' => 'სახელი',
    'column.guard_name' => 'გუარდის სახელი',
    'column.roles' => 'როლები',
    'column.permissions' => 'ნებართვები',
    'column.updated_at' => 'განახლების თარიღი',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'სახელი',
    'field.guard_name' => 'გუარდის სახელი',
    'field.permissions' => 'ნებართვები',
    'field.select_all.name' => 'ყველას მონიშვნა',
    'field.select_all.message' => 'ჩართეთ ყველა ნებართვა, რომელიც ამჟამად <span class="text-primary font-medium">ჩართულია</span> ამ როლისთვის',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Settings',
    'nav.role.label' => 'როლები',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'როლი',
    'resource.label.roles' => 'როლები',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'ერთეულები',
    'resources' => 'რესურსები',
    'widgets' => 'ვიდჯეტები',
    'pages' => 'გვერდები',
    'custom' => 'მომხმარებლის ნებართვები',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'თქვენ არ გაქვთ წვდომის ნებართვა',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'ნახვა',
        'view_any' => 'ნებისმიერის ნახვა',
        'create' => 'შექმნა',
        'update' => 'განახლება',
        'delete' => 'წაშლა',
        'delete_any' => 'ნებისმიერის წაშლა',
        'force_delete' => 'იძულებითი წაშლა',
        'force_delete_any' => 'ნებისმიერის იძულებითი წაშლა',
        'restore' => 'აღდგენა',
        'reorder' => 'გადალაგება',
        'restore_any' => 'ნებისმიერის აღდგენა',
        'replicate' => 'დუბლირება',
    ],
];
