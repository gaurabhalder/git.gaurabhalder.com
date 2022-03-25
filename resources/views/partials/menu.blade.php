<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('logo_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.logos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/logos") || request()->is("admin/logos/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-file-image c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.logo.title') }}
                </a>
            </li>
        @endcan
        @can('info_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.infos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/infos") || request()->is("admin/infos/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-info c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.info.title') }}
                </a>
            </li>
        @endcan
        @can('blog_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.blogs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/blogs") || request()->is("admin/blogs/*") ? "c-active" : "" }}">
                    <i class="fa-fw fab fa-blogger c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.blog.title') }}
                </a>
            </li>
        @endcan
        @can('portfolio_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.portfolios.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/portfolios") || request()->is("admin/portfolios/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-project-diagram c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.portfolio.title') }}
                </a>
            </li>
        @endcan
        @can('testimonial_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.testimonials.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/testimonials") || request()->is("admin/testimonials/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-thumbs-up c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.testimonial.title') }}
                </a>
            </li>
        @endcan
        @can('menu_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.menus.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/menus") || request()->is("admin/menus/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bars c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.menu.title') }}
                </a>
            </li>
        @endcan
        @can('pixel_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.pixels.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/pixels") || request()->is("admin/pixels/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-code c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.pixel.title') }}
                </a>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>