 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="/dashboard" class=" waves-effect">
                        <i class="mdi mdi-monitor-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/user-requests" class=" waves-effect">
                        <i class="fas fa-address-book"></i>
                        <span>User Requests</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/add-user">Add User</a></li>
                        <li><a href="/list-user">List User</a></li>
                    </ul>
                </li>

                @if (!$user->emirate)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-page-break"></i>
                        <span>News</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/add-news">Add News</a></li>
                        <li><a href="/list-news">List News</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-page-break"></i>
                        <span>Leader</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/add-blog">Add Leader</a></li>
                        <li><a href="/list-blog">List Leader</a></li>
                    </ul>
                </li>

                @endif
                

{{-- 
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-page-break"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/add-blog">Add Blog</a></li>
                        <li><a href="/list-blog">List Blog</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span>Team</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/add-team">Add Team</a></li>
                        <li><a href="/list-team">List Team</a></li>
                    </ul>
                </li> --}}
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->