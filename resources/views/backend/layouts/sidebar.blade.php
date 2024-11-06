<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            @role('Employee')
            <li class="nav-item" data-item="">
                <a class="nav-item-hold" href="{{url('admin-dashboard')}}"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">DASHBOARD</span></a>
                <!-- <div class="triangle"></div> -->
            </li>
            <li class="nav-item" data-item="setting">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-Administrator"></i><span class="nav-text">PROFILE</span></a>
                <!-- <div class="triangle"></div> -->
            </li>
            @endrole
            @role('Student')
            <li class="nav-item" data-item="">
                <a class="nav-item-hold" href="{{url('student_calender')}}"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">CALENDER</span></a>
                <!-- <div class="triangle"></div> -->
            </li>
            <li class="nav-item" data-item="">
                <a class="nav-item-hold" href="{{url('student_announcement')}}"><i class="nav-icon i-Double-Tap"></i><span class="nav-text">ANNOUNCEMENT</span></a>
                <!-- <div class="triangle"></div> -->
            </li>
            @endrole

            @role('Admin')
            <li class="nav-item" data-item="dashboard">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>
            @endrole
            @role('Admin')
            <li class="nav-item" data-item="setting">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-Gear"></i><span class="nav-text">Setting</span></a>
                <div class="triangle"></div>
            </li>

            {{-- HRMS --}}



            <!-- <li class="nav-item" data-item="hrms">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">HRMS</span></a>
                <div class="triangle"></div>
            </li> -->
            @endrole

            </li>
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <!-- schalars-->
        {{-- Dashboard  --}}

        <!-- end schalars-->
        <!-- Fees-->
        <ul class="childNav" data-parent="fees">
        </ul>
        <!-- Academics -->
        <ul class="childNav" data-parent="Academic">
            <li class="nav-item">
                <a href="{{url('Academics')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li>
            {{-- @endrole  --}}

            {{-- <ul class="childNav" data-parent="Academic">
              <li class="nav-item">
                  <a href="{{url('Academics')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li>

        </ul>

        <style>
            .hidden-after-subject-combination {
                display: none;
            }

        </style> --}}

        </ul>
        <!-- End Academic -->
        {{-- HRMS --}}


        <ul class="childNav" data-parent="hrms">
            {{-- <li class="nav-item">
     <a href="{{url('hrms')}}"
            ><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li> --}}
            <!-- schalars-->
            <ul class="childNav" data-parent="setting">
                @role('Student')
                <li class="nav-item">
                    <a href="{{url('scholars_profile/')}}/{{Auth::user()->id}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Scholars Profile</span></a>
                </li>
                @endrole
                <!-- @role('Admin')
            <li class="nav-item">
              <a href="{{url('users')}}"
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                ><span class="item-name">Users</span></a
              >
            </li>
            <li class="nav-item">
              <a href="{{ url('roles') }}"
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                ><span class="item-name">Roles</span></a
              >
            </li>
            @endrole -->
            </ul>
            <!-- End schalars-->

    </div>
    <div class="sidebar-overlay"></div>
</div>
