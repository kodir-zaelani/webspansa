<?php

use App\Models\Postcategory;
use App\Models\Post;
use App\Models\Page;

return [
    /* you can add your own middleware here */

    'middleware' => [],

    /*
* your category title colum name
* default name
*/
    'category' => [
        'name' => 'title',
        'category_model' => Postcategory::class,
        'prefix' => 'berita/kategori/',
    ],

    /*
* your post title colum name
* default title
*/
    'post' => [
        'name' => 'title',
        'post_model' => Post::class,
        'prefix' => 'berita/details/',
    ],

      /*
* your post title colum name
* default title
*/
    'page' => [
        'name' => 'title',
        'page_model' => Page::class,
        'prefix' => 'halaman/detail/',
    ],

    /* you can set your own table prefix here */
    'table_prefix' => '',

    /* you can set your own table names */
    'table_name_menus' => 'menus',

    'table_name_items' => 'menu_items',

    /* you can set your route path*/
    'route_path' => '/laravel-menu/',

    /* here you can make menu items visible to specific roles */
    'use_roles' => false,

    /* If use_roles = true above then must set the table name, primary key and title field to get roles details */
    'roles_table' => 'roles',

    'roles_pk' => 'id', // primary key of the roles table

    'roles_title_field' => 'name', // display name (field) of the roles table
];