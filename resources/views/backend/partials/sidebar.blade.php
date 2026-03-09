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
