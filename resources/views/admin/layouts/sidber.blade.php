
<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{ asset('admin/asset') }}/index.html"><img src="{{ asset('admin/asset') }}/img/logo.png" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" {{ asset('admin/asset') }} aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('admin/asset') }}/img/menu-icon/dashboard.svg" alt>
                </div>
                <span>Dashboard</span>
            </a>
            <ul>
                     <li><a href="{{ route('dashboard.basic.create') }}">create</a></li>
            </ul>
        </li>
       
    </ul>
</nav>
