# Drag & Drop menu builder like WordPress for Laravel 12.x

![Laravel drag and drop menu](https://i.postimg.cc/38TSNH8P/Screenshot.png)

### Installation

1. Run

```php
composer require bdhabib/laravel-menu
```

2. Run publish

```php
php artisan vendor:publish --provider="Bdhabib\LaravelMenu\LaravelMenuServiceProvider"
```

3. Configure (optional) in **_config/menu.php_** :

- **_CUSTOM MIDDLEWARE:_** You can add you own middleware
- **_TABLE PREFIX:_** By default this package will create 2 new tables named "menus" and "menu_items" but you can still add your own table prefix avoiding conflict with existing table
- **_TABLE NAMES_** If you want use specific name of tables you have to modify that and the migrations
- **_Custom routes_** If you want to edit the route path you can edit the field
- **_Role Access_** If you want to enable roles (permissions) on menu items
- **_Post Model_** You can add your own post model. Default is Post
- **_Category Model_** You can add your own category model. Default is Category
- **_Post Title Column_** You can add your own post model title column. Default is title
- **_Category Title Column_** You can add your own category model title column. Default is name

4. Run migrate

```php
php artisan migrate
```

DONE

### Laravel Menu Usage Example - displays the UI

On your view blade file

```php
@extends('app')

@section('contents')
    {!! LaravelMenu::render() !!}
@endsection

// Recommended to Add Font Awesome CDN In Your Backend Header

//maxcdn.bootstrapcdn.com/font-awesome/6.1.1/css/font-awesome.min.css

//YOU MUST HAVE JQUERY LOADED BEFORE menu scripts
@push('scripts')
    {!! LaravelMenu::scripts() !!}
@endpush
```

### Using The Model

Call the model class

```php
use Bdhabib\LaravelMenu\Models\Menus;
use Bdhabib\LaravelMenu\Models\MenuItems;

```

### Menu Usage Example (a)

A basic two-level menu can be displayed in your blade template

##### Using Model Class

```php

/* get menu by id*/
$menu = Menus::find(1);
/* or by name */
$menu = Menus::where('name','Your Menu name')->first();

/* or get menu by name and the items with EAGER LOADING (RECOMENDED for better performance and less query call)*/
$menu = Menus::where('name','Your Menu name')->with('items')->first();
/*or by id */
$menu = Menus::where('id', 1)->with('items')->first();

//you can access by model result
$primary_menu = $menu->items;

//or you can convert it to array
$primary_menu = $menu->items->toArray();

```

##### or Using helper

```php
// Using Helper
$primary_menu = LaravelMenu::getByName('Primary'); //return array

```

### Menu Usage Example (b)

Now inside your blade template file place the menu using this simple example

```php
<nav class="" id="navbar">
    <div class="navbar__menu container">
        <ul>
            @if ($primary_menu)
                @foreach ($primary_menu as $menu)
                    <li>
                        <a href="{{ $menu['link'] }}" title="{{ $menu['label'] }}">{{ $menu['label'] }}</a>
                        @if ($menu['child'])
                            <ul class="sub-menu">
                                @foreach ($menu['child'] as $child)
                                    <li class=""><a href="{{ $child['link'] }}"
                                            title="">{{ $child['label'] }}</a>
                                    </li>
                                @endforeach
                            </ul><!-- /.sub-menu -->
                        @endif
                    </li>
                @endforeach
            @endif
    </div>
</nav>

```

### HELPERS

### Get Menu Items By Menu ID

```php
use Bdhabib\LaravelMenu\Facades\LaravelMenu;
...
/*
Parameter: Menu ID
Return: Array
*/
$menuList = LaravelMenu::get(1);
```

### Get Menu Items By Menu Name

In this example, you must have a menu named _Admin_

```php
use Bdhabib\LaravelMenu\Facades\LaravelMenu;
...
/*
Parameter: Menu ID
Return: Array
*/
$menuList = LaravelMenu::getByName('Admin');
```

### Customization

you can edit the menu interface in **_resources/views/vendor/laravel-menu/menu.blade.php_**

### Credits

- [wmenu](https://github.com/lordmacu/wmenu) laravel package menu like wordpress

### Compatibility

- Tested with laravel 11.x
- Work only laravel 11.x
