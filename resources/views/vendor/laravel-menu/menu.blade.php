<?php
$currentUrl = url()->current();

$post_name = config('menu.post.name');
$post_url = config('menu.post.prefix');

$cat_name = config('menu.category.name');
$cat_url = config('menu.category.prefix');
?>
<link href="{{ asset('vendor/laravel-menu/style.css') }}" rel="stylesheet">
<div id="hwpwrap">
    <div class="custom-wp-admin wp-admin wp-core-ui js menu-max-depth-0 nav-menus-php auto-fold admin-bar">
        <div id="wpwrap">
            <div id="wpcontent">
                <div id="wpbody">
                    <div id="wpbody-content">

                        <div class="wrap">

                            <div class="manage-menus">
                                <form method="get" action="{{ $currentUrl }}">
                                    <label for="menu" class="selected-menu">Select the menu you want to
                                        edit:</label>

                                        {!! LaravelMenu::select('menu', $menulist) !!}

                                        <span class="submit-btn">
                                            <input type="submit" class="button-secondary" value="Choose">
                                        </span>
                                        <span class="add-new-menu-action"> or <a
                                            href="{{ $currentUrl }}?action=edit&menu=0">Create new menu</a>. </span>
                                        </form>
                                    </div>
                                    <div id="nav-menus-frame">

                                        @if (request()->has('menu') && !empty(request()->input('menu')))
                                        <div id="menu-settings-column" class="metabox-holder">

                                            <div class="clear"></div>

                                            <form id="nav-menu-meta" action="" class="nav-menu-meta" method="post"
                                            enctype="multipart/form-data">
                                            <div id="side-sortables" class="mb-4 accordion-container">
                                                <ul class="outer-border">
                                                    <li class="control-section accordion-section add-page"
                                                    id="add-page">
                                                    <h3 class="accordion-section-title hndle" tabindex="0"> Custom
                                                        Link <span class="screen-reader-text">Press return or enter
                                                            to expand</span></h3>
                                                            <div class="accordion-section-content ">
                                                                <div class="inside">
                                                                    <div class="customlinkdiv" id="customlinkdiv">
                                                                        <div class="form-group">
                                                                            <label class="form-label">{{ __('Label') }} <span class="text-danger">*</span></label>
                                                                            <input type="text" name="label" id="custom-menu-item-name" class="form-control" placeholder="Enter label" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">
                                                                                {{ __('Link') }} <span class="text-danger">*</span>
                                                                                <button type="button" class="btn btn-info btn-xs"
                                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                                data-bs-custom-class="custom-tooltip"
                                                                                data-bs-title="Jika ingin menambahkan link eksternal, pastikan untuk menyertakan http:// atau https:// di awal URL. Contoh: http://www.example.com atau https://www.example.com jika panjang gunakan link pendek bisa menggunakan http://bit.ly/namalink">
                                                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                            </button>
                                                                        </label>
                                                                        <input type="url" name="url" id="custom-menu-item-url" class="form-control" placeholder="Enter URL" required>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="form-label">{{ __('Target') }} </label>
                                                                        <select class="form-control select2" style="width: 100%;" name="targetmenu" id="custom-menu-item-target" >
                                                                            <option value="_self" selected>Tab Internal</option>
                                                                            <option value="_blank" >Tab Baru</option>
                                                                        </select>
                                                                    </div>


                                                                    @if (!empty($roles))
                                                                    <p id="menu-item-role_id-wrap">
                                                                        <label class="howto"
                                                                        for="custom-menu-item-name">
                                                                        <span>Role</span>&nbsp;
                                                                        <select id="custom-menu-item-role"
                                                                        name="role">
                                                                        <option value="0">Select Role
                                                                        </option>
                                                                        @foreach ($roles as $role)
                                                                        <option
                                                                        value="{{ $role->$role_pk }}">
                                                                        {{ ucfirst($role->$role_title_field) }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </label>
                                                        </p>
                                                        @endif

                                                        <p class="button-controls">

                                                            <a href="#" onclick="addcustommenu()"
                                                            class="button-primary submit-add-to-menu right">Add
                                                            menu item</a>
                                                            <span class="spinner" id="spincustomu"></span>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                        {{-- categories --}}

                                        <li class="control-section accordion-section add-page"
                                        id="add-page">
                                        <h3 class="accordion-section-title hndle" tabindex="0">
                                            Categories <span class="screen-reader-text">Press return or
                                                enter
                                                to expand</span></h3>
                                                <div class="accordion-section-content ">
                                                    <div class="inside">
                                                        <div class="customlinkdiv" id="customlinkdiv">
                                                            <ul class="mb-3 menu-item-list">
                                                                @if ($categories)

                                                                @foreach ($categories as $cat)
                                                                <li class="menu-list">
                                                                    <input type="hidden" name="name-{{ $cat->id }}" value="{{ $cat->$cat_name }}">
                                                                    <input type="hidden" name="slug-{{ $cat->id }}" value="{{ $cat_url . $cat->slug }}">
                                                                    <input type="checkbox" class="checkbox"
                                                                    name="category[]" id="cat-{{ $cat->id }}" value="{{ $cat->id }}">
                                                                    <label for="cat-{{ $cat->id }}">{{ $cat->title }}</label>
                                                                </li>
                                                                @endforeach
                                                                @endif
                                                            </ul>

                                                            @if (!empty($roles))
                                                            <p id="menu-item-role_id-wrap">
                                                                <label class="howto"
                                                                for="custom-menu-item-name">
                                                                <span>Role</span>&nbsp;
                                                                <select id="custom-menu-item-role"
                                                                name="role">
                                                                <option value="0">Select Role
                                                                </option>
                                                                @foreach ($roles as $role)
                                                                <option
                                                                value="{{ $role->$role_pk }}">
                                                                {{ ucfirst($role->$role_title_field) }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                </p>
                                                @endif

                                                <p class="button-controls">
                                                    <p class="button-secondary">
                                                        <input type="checkbox" name="select_all"
                                                        id="select-all-cat">
                                                        <label for="select-all-cat" onclick="selectallcategory()">Select All</label>
                                                    </p>

                                                    <a href="#" onclick="addcategorymenu()"
                                                    class="button-secondary submit-add-to-menu right">Add
                                                    menu item</a>
                                                    <span class="spinner" id="spincustomu"></span>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {{-- categories / --}}


                                {{-- posts --}}

                                <li class="control-section accordion-section add-page"
                                id="add-page">
                                <h3 class="accordion-section-title hndle" tabindex="0">
                                    Posts <span class="screen-reader-text">Press return or
                                        enter
                                        to expand</span></h3>
                                        <div class="accordion-section-content ">
                                            <div class="inside">
                                                <div class="customlinkdiv" id="customlinkdiv">
                                                    <ul class="mb-3 menu-item-list">
                                                        @if ($posts)

                                                        @foreach ($posts as $post)
                                                        <li class="post-list">
                                                            <input type="hidden" name="name-{{ $post->id }}" value="{{ $post->$post_name }}">
                                                            <input type="hidden" name="slug-{{ $post->id }}" value="{{ $post_url . $post->slug }}">
                                                            <input type="checkbox" class="checkbox"
                                                            name="postegory[]" id="post-{{ $post->id }}" value="{{ $post->id }}">
                                                            <label for="post-{{ $post->id }}">{{ $post->$post_name }}</label>
                                                        </li>
                                                        @endforeach
                                                        @endif
                                                    </ul>

                                                    @if (!empty($roles))
                                                    <p id="menu-item-role_id-wrap">
                                                        <label class="howto"
                                                        for="custom-menu-item-name">
                                                        <span>Role</span>&nbsp;
                                                        <select id="custom-menu-item-role"
                                                        name="role">
                                                        <option value="0">Select Role
                                                        </option>
                                                        @foreach ($roles as $role)
                                                        <option
                                                        value="{{ $role->$role_pk }}">
                                                        {{ ucfirst($role->$role_title_field) }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </p>
                                        @endif

                                        <p class="button-controls">
                                            <p class="button-secondary">
                                                <input type="checkbox" name="select_all"
                                                id="select-all-post">
                                                <label for="select-all-post" onclick="selectallpost()">Select All</label>
                                            </p>

                                            <a href="#" onclick="addpostmenu()"
                                            class="button-secondary submit-add-to-menu right">Add
                                            menu item</a>
                                            <span class="spinner" id="spincustomu"></span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- posts / --}}

                    </ul>
                </div>
            </form>

        </div>
        @endif
        <div id="menu-management-liquid">
            <div id="menu-management">
                <form id="update-nav-menu" action="" method="post"
                enctype="multipart/form-data">
                <div class="menu-edit ">
                    <div id="nav-menu-header">
                        <div class="major-publishing-actions">
                            <label class="menu-name-label howto open-label"
                            for="menu-name">
                            <span>Name</span>
                            <input name="menu-name" id="menu-name" type="text"
                            class="menu-name regular-text menu-item-textbox"
                            title="Enter menu name"
                            value="@if (isset($indmenu)) {{ $indmenu->name }} @endif">
                            <input type="hidden" id="idmenu"
                            value="@if (isset($indmenu)) {{ $indmenu->id }} @endif" />
                        </label>

                        @if (request()->has('action'))
                        <div class="publishing-action">
                            <a onclick="createnewmenu()" name="save_menu"
                            id="save_menu_header"
                            class="button button-primary menu-save">Create
                            menu</a>
                        </div>
                        @elseif(request()->has('menu'))
                        <div class="publishing-action">
                            <a onclick="getmenus()" name="save_menu"
                            id="save_menu_header"
                            class="button button-primary menu-save">Save
                            menu</a>
                            <span class="spinner" id="spincustomu2"></span>
                        </div>
                        @else
                        <div class="publishing-action">
                            <a onclick="createnewmenu()" name="save_menu"
                            id="save_menu_header"
                            class="button button-primary menu-save">Create
                            menu</a>
                        </div>
                        @endif
                    </div>
                </div>
                <div id="post-body">
                    <div id="post-body-content">

                        @if (request()->has('menu'))
                        <h3>Menu Structure</h3>
                        <div class="drag-instructions post-body-plain"
                        style="">
                        <p>
                            Place each item in the order you prefer. Click on
                            the arrow to the right of the item to display more
                            configuration options.
                        </p>
                    </div>
                    @else
                    <h3>Menu Creation</h3>
                    <div class="drag-instructions post-body-plain"
                    style="">
                    <p>
                        Please enter the name and select "Create menu"
                        button
                    </p>
                </div>
                @endif

                <ul class="menu ui-sortable" id="menu-to-edit">
                    @if (isset($menus))
                    @foreach ($menus as $m)
                    <li id="menu-item-{{ $m->id }}"
                        class="menu-item menu-item-depth-{{ $m->depth }} menu-item-page menu-item-edit-inactive pending"
                        style="display: list-item;">
                        <dl class="menu-item-bar">
                            <dt class="menu-item-handle">
                                <span class="item-title"> <span
                                    class="menu-item-title"> <span
                                    id="menutitletemp_{{ $m->id }}">@if ($m->status == '0')
                                    <span style="color: red;">{{ $m->label }} (Inactive)</span>

                                    @else
                                    {{ $m->label }}
                                    @endif</span>
                                    <span
                                    style="color: transparent;">|{{ $m->id }}|</span>
                                </span> <span class="is-submenu"
                                style="@if ($m->depth == 0) display: none; @endif">Subelement</span>
                            </span>
                            <span class="item-controls"> <span
                                class="item-type">Edit</span>
                                <span
                                class="item-order hide-if-js">
                                <a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{ $m->id }}&_wpnonce=8b3eb7ac44"
                                    class="item-move-up"><abbr
                                    title="Move Up">↑</abbr></a>
                                    | <a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{ $m->id }}&_wpnonce=8b3eb7ac44"
                                        class="item-move-down"><abbr
                                        title="Move Down">↓</abbr></a>
                                    </span> <a class="item-edit"
                                    id="edit-{{ $m->id }}"
                                    title=" "
                                    href="{{ $currentUrl }}?edit-menu-item={{ $m->id }}#menu-item-settings-{{ $m->id }}">
                                </a> </span>
                            </dt>
                        </dl>

                        <div class="menu-item-settings"
                        id="menu-item-settings-{{ $m->id }}">
                        <input type="hidden"
                        class="edit-menu-item-id"
                        name="menuid_{{ $m->id }}"
                        value="{{ $m->id }}" />
                        {{-- perubahan  --}}
                        <div class="form-group">
                            <label class="form-label" for="edit-menu-item-title-{{ $m->id }}">{{ __('Label') }} <span class="text-danger">*</span></label>
                            <input type="text" name="idlabelmenu_{{ $m->id }}" value="{{ $m->label }}" id="idlabelmenu_{{ $m->id }}" class="form-control edit-menu-item-title" placeholder="Enter label" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-menu-item-classes-{{ $m->id }}">{{ __('Class') }} </label>
                            <input type="text" name="clases_menu_{{ $m->id }}" value="{{ $m->class }}" id="clases_menu_{{ $m->id }}" class="form-control code edit-menu-item-classes" placeholder="Enter classes" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-menu-item-url-{{ $m->id }}">
                                {{ __('Link') }} <span class="text-danger">*</span>
                                <button type="button" class="btn btn-info btn-xs"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip"
                                data-bs-title="Jika ingin menambahkan link eksternal, pastikan untuk menyertakan http:// atau https:// di awal URL. Contoh: http://www.example.com atau https://www.example.com jika panjang gunakan link pendek bisa menggunakan http://bit.ly/namalink">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </button>
                        </label>
                        <input type="url" name="url_menu_{{ $m->id }}" value="{{ $m->link }}" id="url_menu_{{ $m->id }}" class="form-control edit-menu-item-url" placeholder="Enter URL" required>
                    </div>

                    <div class="form-group ">
                        <label class="form-label" for="edit-menu-item-target-{{ $m->id }}">{{ __('Target') }} </label>

                        <select class="form-control select2 edit-menu-item-target" style="width: 100%;" name="target_menu_{{ $m->id }}" value="{{ $m->target }}" id="target_menu_{{ $m->id }}" >
                            <option value="_self" @if ($m->target == '_self')
                                @selected(true)
                                @endif>Tab Internal</option>
                                <option value="_blank" @if ($m->target == '_blank')
                                    @selected(true)
                                    @endif>Tab Baru</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label class="form-label" for="edit-menu-item-status-{{ $m->id }}">{{ __('Status') }} </label>
                                <select class="form-control select2 edit-menu-item-status" style="width: 100%;" name="status_menu_{{ $m->id }}" value="{{ $m->status }}" id="status_menu_{{ $m->id }}" >
                                    <option value="1" @if ($m->status == '1')
                                        @selected(true)
                                        @endif>Active</option>
                                        <option value="0" @if ($m->status == '0')
                                            @selected(true)
                                            @endif>Inactive</option>
                                        </select>
                                    </div>
                                    {{-- perubahan  --}}

                                    @if (!empty($roles))
                                    <p
                                    class="field-css-role description description-wide">
                                    <label
                                    for="edit-menu-item-role-{{ $m->id }}">
                                    Role
                                    <br>
                                    <select
                                    id="role_menu_{{ $m->id }}"
                                    class="widefat code edit-menu-item-role"
                                    name="role_menu_[{{ $m->id }}]">
                                    <option value="0">
                                        Select Role</option>
                                        @foreach ($roles as $role)
                                        <option
                                        @if ($role->id == $m->role_id) selected @endif
                                        value="{{ $role->$role_pk }}">
                                        {{ ucwords($role->$role_title_field) }}
                                    </option>
                                    @endforeach
                                </select>
                            </label>
                        </p>
                        @endif

                        <p
                        class="field-move hide-if-no-js description description-wide">
                        <label> <span>Move</span> <a
                            href="{{ $currentUrl }}"
                            class="menus-move-up"
                            style="display: none;">Move
                            up</a> <a
                            href="{{ $currentUrl }}"
                            class="menus-move-down"
                            title="Mover uno abajo"
                            style="display: inline;">Move
                            Down</a> <a
                            href="{{ $currentUrl }}"
                            class="menus-move-left"
                            style="display: none;"></a> <a
                            href="{{ $currentUrl }}"
                            class="menus-move-right"
                            style="display: none;"></a> <a
                            href="{{ $currentUrl }}"
                            class="menus-move-top"
                            style="display: none;">Top</a>
                        </label>
                    </p>

                    <div
                    class="menu-item-actions description-wide submitbox">

                    <a class="item-delete submitdelete deletion"
                    id="delete-{{ $m->id }}"
                    href="{{ $currentUrl }}?action=delete-menu-item&menu-item={{ $m->id }}&_wpnonce=2844002501">Delete</a>
                    <span class="meta-sep hide-if-no-js">
                        | </span>
                        <a class="item-cancel submitcancel hide-if-no-js button-secondary"
                        id="cancel-{{ $m->id }}"
                        href="{{ $currentUrl }}?edit-menu-item={{ $m->id }}&cancel=1424297719#menu-item-settings-{{ $m->id }}">Cancel</a>
                        <span class="meta-sep hide-if-no-js">
                            | </span>
                            <a onclick="getmenus()"
                            class="button button-primary updatemenu"
                            id="update-{{ $m->id }}"
                            href="javascript:void(0)">Update
                            item</a>

                        </div>

                    </div>
                    <ul class="menu-item-transport"></ul>
                </li>
                @endforeach
                @endif
            </ul>
            <div class="menu-settings">

            </div>
        </div>
    </div>
    <div id="nav-menu-footer">
        <div class="major-publishing-actions">

            @if (request()->has('action'))
            <div class="publishing-action">
                <a onclick="createnewmenu()" name="save_menu"
                id="save_menu_header"
                class="button button-primary menu-save">Create
                menu</a>
            </div>
            @elseif(request()->has('menu'))
            {{-- <span class="delete-action"> <a
                class="submitdelete deletion menu-delete"
                onclick="deletemenu()"
                href="javascript:void(9)">Delete menu</a> </span> --}}
                <div class="publishing-action">

                    <a onclick="getmenus()" name="save_menu"
                    id="save_menu_header"
                    class="button button-primary menu-save">Save
                    menu</a>
                    <span class="spinner" id="spincustomu2"></span>
                </div>
                @else
                <div class="publishing-action">
                    <a onclick="createnewmenu()" name="save_menu"
                    id="save_menu_header"
                    class="button button-primary menu-save">Create
                    menu</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>

<div class="clear"></div>
</div>

<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

<div class="clear"></div>
</div>
</div>
</div>
@push('scripts')
	<script src="{{asset('')}}assets/vendor_components/select2/dist/js/select2.full.js"></script>

@endpush
