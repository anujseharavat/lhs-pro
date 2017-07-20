<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
<div class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-blue" id="sidebar-menu" data-type="collapse">
    <div data-scrollable>

        <ul class="sidebar-menu sm-icons-right">
            <li><a href="app-student-dashboard.html"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
            <li class="hasSubmenu active open">
                <a href="#course-menu"><i class="fa fa-mortar-board"></i><span>Intractive Board</span></a>
                <ul id="course-menu" class="in">
                    <li class="active"><a href="acadamic_room.html"><span>Acadamic Room</span></a></li>
                    <li><a href="Extra-curriculam-room.html"><span>ExtraCurriculamRoom</span></a></li>
                    <li><a href="e_library.html"><span>E-library</span></a></li>
                    <li><a href="student_room.html"><span>Student Room</span></a></li>
                    <li><a href="league_room.html"><span>League Room</span></a></li>
                    <li><a href="progress_report_room.html"><span>ProgressReport Room</span></a></li>
                </ul>
            </li>
            <li class="hasSubmenu">
                <a href="#forum-menu"><i class="fa fa-file-text-o"></i><span>Forum</span></a>
                <ul id="forum-menu">
                    <li><a href="app-forum.html"><span>Forum Home</span></a></li>
                    <li><a href="app-forum-category.html"><span>Forum Category</span></a></li>
                    <li><a href="app-forum-thread.html"><span>Forum Thread</span></a></li>
                </ul>
            </li>
            <li class="hasSubmenu">
                <a href="#account-menu"><i class="fa fa-user"></i><span>Account</span></a>
                <ul id="account-menu">
                    <li><a href="{{ URL::to('user/profile') }}">My Profile</a></li>
                    <li><a href="{{ URL::to('user/reset-password') }}">Password Reset</a></li>
                    <li><a href="{{ URL::to('user/order-history-room') }}">Order History</a></li>
                </ul>
            </li>
            <li><a href="app-student-messages.html"><i class="fa fa-comments"></i><span>Messages</span></a></li>
            <li><a href="/user/logout/{{Auth::user()->id}}">logout<span class="c-arrow c-toggler"></span></a></li>

        </ul>
    </div>
</div>
