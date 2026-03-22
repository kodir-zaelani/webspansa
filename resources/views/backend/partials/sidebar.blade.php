    <aside class="main-sidebar">
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 100%;">
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>
                            <a href="{{ route('root') }}" target="_blank" title="View Site">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="header">Dashboard & Apps</li>
                        <li class="{{ setActive('backend/home') }}">
                            <a href="{{ route('backend.dashboard') }}" title="Dashboard">
                                <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="header">{{ __('Post') }}</li>
                        @if (auth()->user()->can('posts.index') ||
                        auth()->user()->can('pagecategories.index') || auth()->user()->can('editorials.index') )
                        @can('posts.index')
                        <li class="{{ setActive('backend/posts') }}">
                            <a href="{{ route('backend.posts.index') }}" title="Post">
                                <i class="fa fa-file-text-o"><span class="path1"></span><span class="path2"></span></i>
                                <span>Post</span>
                            </a>
                        </li>
                        @endcan
                        @can('categoryposts.index')
                        <li class="{{ setActive('backend/postcategories') }}">
                            <a href="{{ route('backend.postscategories.index') }}" title="Post Category">
                                <i class="fa fa-folder"><span class="path1"></span><span class="path2"></span></i>
                                <span>Post Category</span>
                            </a>
                        </li>
                        @endcan
                        @can('tags.index')
                        <li class="{{ setActive('backend/tags') }}">
                            <a href="{{ route('backend.tags.index') }}" title="Tag">
                                <i class="fa fa-tags"><span class="path1"></span><span class="path2"></span></i>
                                <span>Tag</span>
                            </a>
                        </li>
                        @endcan

                        @endif
                        <li class="header">{{ __('Pages') }}</li>
                        @if (auth()->user()->can('pages.index') ||
                        auth()->user()->can('pagecategories.index'))
                        @can('pagecategories.index')
                        <li class="{{ setActive('backend/pagecategories') }}">
                            <a href="{{ route('backend.pagecategories.index') }}" title="Page Category">
                                <i class="fa fa-folder"><span class="path1"></span><span class="path2"></span></i>
                                <span>Page Category</span>
                            </a>
                        </li>
                        @endcan
                        @can('pages.index')
                        <li class="{{ setActive('backend/pages') }}">
                            <a href="{{ route('backend.pages.index') }}" title="Pages">
                                <i class="fa fa-file-text-o"><span class="path1"></span><span class="path2"></span></i>
                                <span>Pages</span>
                            </a>
                        </li>
                        @endcan
                        @endif
                        {{-- Pages Menu  --}}
                        <li class="header">Galleries</li>
                        {{-- Galeries Menu --}}
                        @if (auth()->user()->can('agendas.index') ||
                        auth()->user()->can('downloadfiles.index') ||
                        auth()->user()->can('downloadcategories.index') ||
                        auth()->user()->can('sliders.index') ||
                        auth()->user()->can('hero.index') ||
                        auth()->user()->can('albums.index') ||
                        auth()->user()->can('albums.create') ||
                        auth()->user()->can('advertisements.index') ||
                        auth()->user()->can('advertisements.create') ||
                        auth()->user()->can('video.index') ||
                        auth()->user()->can('haribesar.index') ||
                        auth()->user()->can('facility.index') ||
                        auth()->user()->can('video.create'))
                        <li
                        class="treeview {{ setActive('backend/agenda') . setActive('backend/dldcategory') . setActive('backend/facility') . setActive('backend/haribesar') . setActive('backend/sliders') . setActive('backend/albums') . setActive('backend/photos') . setActive('backend/advertisements') . setActive('backend/video') . setActive('backend/heros')}}
                        {{ setOpen('backend/agenda') . setOpen('backend/dldcategory') . setOpen('backend/facility') . setOpen('backend/haribesar') . setOpen('backend/sliders') . setOpen('backend/sliders') . setOpen('backend/photos') . setOpen('backend/advertisements') . setOpen('backend/video') . setOpen('backend/heros') }}">
                        <a href="#">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            <span class="path1"></span><span class="path2"></span></i>
                            <span>Galeries</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @can('albums.index')
                            <li class="{{ setActive('backend/albums') }}">
                                <a href="{{ route('backend.albums.index') }}">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span>
                                    </i>Albums Photo
                                </a>
                            </li>
                            @endcan
                            @can('sliders.index')
                            <li class="{{ setActive('backend/sliders') }}">
                                <a href="{{ route('backend.sliders.index') }}">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                    Sliders
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endif
                    {{-- End Galeries Menu --}}
                    @if (
                    auth()->user()->can('settings.index') ||
                    auth()->user()->can('socialmedia.index') ||
                    auth()->user()->can('menu.index') ||
                    auth()->user()->can('roles.index') ||
                    auth()->user()->can('permissions.index') ||
                    auth()->user()->can('employee.index') ||
                    auth()->user()->can('users.index')
                    )
                    <li class="header">LOGIN && CONFIGURATION</li>
                    @if (auth()->user()->can('settings.index') ||
                    auth()->user()->can('socialmedia.index') ||
                    auth()->user()->can('employee.index') ||
                    auth()->user()->can('menu.index'))
                    <li class="treeview {{setActive('backend/menu') . setActive('backend/settings') . setActive('backend/ptk') . setActive('backend/socialmedia') }}
                        {{  setOpen('backend/menu') . setOpen('backend/settings') . setOpen('backend/ptk')  . setOpen('backend/socialmedia') }}">
                    <a href="#">
                        <i class="icon-Settings-2">
                            <span class="path1"></span><span class="path2"></span>
                        </i>
                        <span>Configuration</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @can('settings.index')
                        <li class="{{ setActive('backend/settings') }}">
                            <a href="{{ route('backend.settings') }}">
                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                Setting Web
                            </a>
                        </li>
                        @endcan
                        @can('menu.index')
                        <li class="{{ setActive('backend/menu') }}">
                            <a href="{{ route('backend.menu.index') }}">
                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                Menu
                            </a>
                        </li>
                        @endcan
                        <li class="{{ setActive('backend/socialmedia') }}">
                            <a href="{{ route('backend.socialmedia.index') }}">
                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                Social Media
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                {{-- Authentication Menu  --}}
                @if (auth()->user()->can('roles.index') ||
                auth()->user()->can('permissions.index') ||
                auth()->user()->can('users.index'))
                <li
                class="treeview {{ setActive('backend/roles/index') . setActive('backend/permissions/index') . setActive('backend/users/index') }} {{ setOpen('backend/roles/index') . setOpen('backend/permissions/index') . setOpen('backend/users/index') }}">
                <a href="#">
                    <i class="icon-Chat-locked"><span class="path1"></span><span
                        class="path2"></span></i>
                        <span>Authentication</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permissions.index')
                        <li class="{{ setActive('backend/permissions/index') }}">
                            <a href="{{ route('backend.permissions.index') }}">
                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                Permissions
                            </a>
                        </li>
                        @endcan
                        @can('roles.index')
                        <li class="{{ setActive('backend/roles/index') }}">
                            <a href="{{ route('backend.roles.index') }}">
                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                Roles
                            </a>
                        </li>
                        @endcan
                        @can('users.index')
                        <li class="{{ setActive('backend/users/index') }}">
                            <a href="{{ route('backend.users.index') }}">
                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                Users
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endif
                {{-- Authentication Menu  --}}
                @endif

            </ul>
        </div>
    </div>
</section>
<div class="sidebar-footer">
    <a href="#" class="link" data-bs-toggle="tooltip" title="Email">
        <span class="icon-Mail"></span>
    </a>

</div>
</aside>
