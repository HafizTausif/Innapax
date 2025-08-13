<aside class="sidebar-wrapper">
    <div class="logo-wrapper">
        <a href="{{ route('admin.dashboard') }}" class="admin-logo">
            <img src="{{ asset('assets/admin/images/logo.png') }}" alt="" class="sp_logo">
            <img src="{{ asset('assets/admin/images/logo.png') }}" alt="" class="sp_mini_logo" style="max-height: 40px;">
        </a>
    </div>
    
    <div class="side-menu-wrap">
        <ul class="main-menu">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            
            <!-- Events Menu -->
            <li class="{{ request()->is('admin/events*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="{{ request()->is('admin/events*') ? 'active' : '' }}">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </span>
                    <span class="menu-text">Events</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ request()->is('admin/events') ? 'active' : '' }}">
                        <a href="{{ route('admin.events.index') }}">
                            <span class="icon-dash"></span>
                            <span class="menu-text">All Events</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/events/create') ? 'active' : '' }}">
                        <a href="{{ route('admin.events.create') }}">
                            <span class="icon-dash"></span>
                            <span class="menu-text">Add New</span>
                        </a>
                    </li>
                 
                    <li class="{{ request()->is('admin/rsvps*') ? 'active' : '' }}">
                        <a href="{{ route('admin.rsvps.index') }}">
                            <span class="icon-dash"></span>
                            <span class="menu-text">RSVPs</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Users Menu -->
            <li class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </span>
                    <span class="menu-text">Users</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ request()->is('admin/users') ? 'active' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <span class="icon-dash"></span>
                            <span class="menu-text">All Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Removed Mentors and Cars Menus (commented out for reference) -->
            {{--
            <li class="{{ request()->is('admin/mentors*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="{{ request()->is('admin/mentors*') ? 'active' : '' }}">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </svg>
                    </span>
                    <span class="menu-text">Mentors</span>
                </a>
            </li>
            
            <li class="{{ request()->is('admin/cars*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="{{ request()->is('admin/cars*') ? 'active' : '' }}">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </span>
                    <span class="menu-text">Cars</span>
                </a>
            </li>
            --}}
            
            <!-- Settings Menu -->
            <li class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="icon-menu feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                    </span>
                    <span class="menu-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</aside>