 <div class="vertical-menu">
     <div data-simplebar class="h-100">
         <div id="sidebar-menu">
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
                         <span>Member</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="/add-member">Add Member</a></li>
                         <li><a href="/list-member">List Member</a></li>
                     </ul>
                 </li>

                 @if (!$user->emirate)
                     <li>
                         <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="mdi mdi-newspaper-variant"></i>
                             <span>News</span>
                         </a>
                         <ul class="sub-menu" aria-expanded="false">
                             <li><a href="/add-news">Add News</a></li>
                             <li><a href="/list-news">List News</a></li>
                         </ul>
                     </li>

                     <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-account"></i>
                            <span>Committee</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/add-committee">Add Committee</a></li>
                            <li><a href="/list-committee">List Committee</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-file-upload"></i>
                            <span>Gallery</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/add-gallery">Add Gallery</a></li>
                            <li><a href="/list-gallery">List Gallery</a></li>
                        </ul>
                    </li>

                 

                
                 @endif

                 <li>
                    <a href="/profile" class=" waves-effect">
                        <i class="mdi mdi-card-account-details"></i>
                        <span>Profile</span>
                    </a>
                </li>

             </ul>
         </div>
     </div>
 </div>
