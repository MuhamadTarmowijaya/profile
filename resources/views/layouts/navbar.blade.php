<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('images/Company.png') }}" alt="" class="logo logo-lg" />
                <img src="assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <div class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span>
                        {{-- <span class="nxl-arrow"><i class="feather-chevron-right"></i></span> --}}
                    </a>
                </div>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-settings"></i></span>
                        <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="settings-general.html">Profile Company</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-seo.html">About Us</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-tags.html">Products</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-email.html">Services</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-tasks.html">Article</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="settings-leads.html">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>USER</label>
                </li>
                <div class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span>
                        <span class="nxl-mtext">User Managements</span>
                        {{-- <span class="nxl-arrow"><i class="feather-chevron-right"></i></span> --}}
                    </a>
                </div>
            </ul>
        </div>
    </div>
</nav>
