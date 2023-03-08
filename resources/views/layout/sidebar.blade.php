<div class="leftside-menu menuitem-active">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-dark-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Show Full Sidebar"
        data-bs-original-title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100 show" id="leftside-menu-container" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <!-- Leftbar User -->
                            <div class="leftbar-user">
                                <a href="pages-profile.html">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                        class="rounded-circle shadow-sm">
                                    <span class="leftbar-user-name mt-2">Dominic Keller</span>
                                </a>
                            </div>

                            <!--- Sidemenu -->
                            <ul class="side-nav">

                                <li class="side-nav-title">Navigation</li>

                                <li class="side-nav-item menuitem-active">
                                    <div>
                                        <a class="btn btn-info" href="{{ route('books.index') }}">Books</a>
                                    </div>
                                   <div class="">
                                    <a  class="btn btn-info" href="{{ route('users.index') }}">Users</a>
                                   </div>
                                    <div class="collapse show" id="sidebarDashboards">
                                        <ul class="side-nav-second-level">
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--- End Sidemenu -->


                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 109px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);">
            </div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;">
            </div>
        </div>
    </div>
</div>
