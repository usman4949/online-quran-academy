<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{url('/dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <!-- Profile Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('user_profile')}}">
                        <i class="bi bi-person" style="font-size: 0.8rem;"></i><span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('user_profile')}}">
                        <i class="bi bi-gear" style="font-size: 0.8rem;"></i><span>Change Password</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Profile Nav -->

        <!-- Attendance Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-check-square"></i>
                <span>Attendance</span>
            </a>
        </li>
        <!-- End Attendance Nav -->

        <!-- Registration Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/user_registeration')}}">
                <i class="bi bi-pencil-square"></i>
                <span>Registration</span>
            </a>
        </li>
        <!-- End Registration Nav -->

        <!-- Current Course Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/course_detail')}}">
                <i class="bi bi-book"></i>
                <span>Selected Course</span>
            </a>
        </li>
        <!-- End Current Course Nav -->

        <!-- Teachers Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/assigned_teacher')}}">
                <i class="bi bi-person"></i>
                <span>Assigned Teachers</span>
            </a>
        </li>
        <!-- End Teachers Nav -->

        <!-- Contact Us Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-envelope"></i>
                <span>Contact Us</span>
            </a>
        </li>
        <!-- End Contact Us Nav -->

        <!-- Payment Method Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-credit-card"></i>
                <span>Payment Method</span>
            </a>
        </li>
        <!-- End Payment Method Nav -->

        <!-- Need Help Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/help')}}">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
            </a>
        </li>
        <!-- End Need Help Nav -->

        <!-- Donation Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/donate')}}">
                <i class="bi bi-heart"></i>
                <span>Donation</span>
            </a>
        </li>
        <!-- End Donation Nav -->

        <!-- Logout Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>
        <!-- End Logout Nav -->

    </ul>

</aside>
<!-- End Sidebar-->
