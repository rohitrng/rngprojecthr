<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            @role('Employee')
            <li class="nav-item" data-item="">
                <a class="nav-item-hold" href="{{url('admin-dashboard')}}"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">DASHBOARD</span></a>
                <!-- <div class="triangle"></div> -->
            </li>


            {{-- <ul class="navigation-left">
              @role('Admin')
             <li class="nav-item" data-item="">
               <a class="nav-item-hold" href="{{url('admin-dashboard')}}"
            ><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">DASHBOARD</span></a>
            <!-- <div class="triangle"></div> -->
            </li> --}}


            <li class="nav-item" data-item="setting">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-Administrator"></i><span class="nav-text">PROFILE</span></a>
                <!-- <div class="triangle"></div> -->
            </li>
            @endrole
            @role('Student')

            <li class="nav-item" data-item="transport">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">TRANS PORT</span></a>
                <!-- <div class="triangle"></div> -->
            </li>
            @endrole

            @role('Student')
            <li class="nav-item" data-item="feesdetail">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">FEES DETAIL</span></a>
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
            <!-- <li class="nav-item" data-item="scholars">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Scholars</span></a>
                <div class="triangle"></div>
            </li> -->
            @endrole
            <!-- Fees -->
            @role('Admin')
            <!-- <li class="nav-item" data-item="fees">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Fees</span></a>
                <div class="triangle"></div>
            </li> -->
            @endrole
            <!-- Transport  -->
            @role('Admin')
            <!-- <li class="nav-item" data-item="transport">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Transport</span></a>
                <div class="triangle"></div>
            </li> -->
            @endrole
            <!-- Academic Module  -->
            @role('Admin')
            <!-- <li class="nav-item" data-item="Academic">
                <a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Academic</span></a>
                <div class="triangle"></div>
            </li> -->
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
        <ul class="childNav" data-parent="scholars">
            <li class="nav-item">
                <a href="{{url('scholars')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li>
            <li class="nav-item dropdown-sidemenu">
                <a href="#"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Admission Process</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li><a href="{{url('admin-preenquiryform')}}">Pre-Enquiry Entry</a></li>
                    <li><a href="{{url('admin-pre-enquiryform')}}">Pre-Enquiry List</a></li>
                    <li><a href="{{url('admin-enquiryform')}}">Enquiry Entry</a></li>
                    <li><a href="{{url('adminenquirylist')}}">Enquiry List</a></li>
                    <!-- <li>a href="charts.apexSparklineCharts.html">Selection Process</a></li> -->
                    <li><a href="{{url('followupdate')}}">Follow Up Date</a></li>
                    <li><a href="{{url('selection-process')}}">Selection Process</a></li>
                    <li><a href="{{url('add-student-registrations')}}">Registration</a></li>
                    <li><a href="{{url('student-registrations')}}">Registration list</a></li>
                    <!-- <li><a href="{{url('student-master')}}">Master Registration</a></li> -->
                    <!-- <li><a href="{{url('student-registrations')}}">Registration</a></li> -->
                </ul>
            </li>
        </ul>
        {{-- Dashboard  --}}

        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item">
                <a href="{{url('admin-dashboard')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="{{url('mcq')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Mcq</span></a>
            </li>            {{-- <li class="nav-item dropdown-sidemenu">
              <a href="#"
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                {{-- ><span class="item-name">Admission Process</span --}}
            {{-- ><i class="dd-arrow i-Arrow-Down"></i --}}
            {{-- ></a> --}}
            {{-- <ul class="submenu"> --}}
            {{-- <li><a href="{{url('admin-preenquiryform')}}">Dashboard</a></li> --}}

            {{-- </ul> --}}
            {{-- </li>  --}}
        </ul>
        <!-- end schalars-->
        <!-- Fees-->
        <ul class="childNav" data-parent="fees">
            <li class="nav-item">
                <a href="{{url('Fees')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li>
            <li class="nav-item dropdown-sidemenu">
                <a href=""><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Fees</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li><a href="{{url('fees-types-master')}}">Fees Type Master</a></li>
                    <li><a href="{{url('bus-fees-master')}}">Bus Fees Master</a></li>
                    <li><a href="{{url('fees-master-student')}}">Student Fees Master</a></li>
                    <li><a href="{{url('advance-next-year-fees')}}">Advance Next Year Fees</a></li>
                    <li><a href="{{url('admin-pre-enquiryfeeslist')}}">Pre Enquiry fees list</a></li>
                    <li><a href="{{url('create-course-fees-structure-master')}}">Create Course Fees Structure Master</a></li>
                    <li><a href="{{url('course-fees-structure-master-list')}}">Course Fees Structure Master-List</a></li>
                    <li><a href="{{url('course-fees-head-orders')}}">Course Fees Head Order</a></li>
                    <li><a href="{{url('late-fees-master')}}">Late Fees Master</a></li>
                    <li><a href="{{url('generate-due-chart')}}">Generate Fees Due Chart</a></li>
                    <li><a href="{{url('fees_receipt_challan')}}">Fees Receipt Challan</a></li>
                    <li><a href="{{url('student_ledger')}}">Student Ledger</a></li>
                    <li><a href="{{url('cancle_student_ledger')}}">Student Ledger List </a></li>
                    <li><a href="{{url('defaulters_list')}}">Defaulters List</a></li>
                    <li><a href="{{url('terms')}}">Terms Master</a></li>
                    <li><a href="{{url('classes')}}">Classes</a></li>
                    <li><a href="{{url('collection')}}">Collection</a></li>

                </ul>
            </li>
        </ul>
        <!-- End Fees-->

        <!-- Transport -->
        <ul class="childNav" data-parent="transport">
            <!-- <li class="nav-item dropdown-sidemenu">
              <a href="{{url('all-transport-view')}}"
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                ><span class="item-name">All</span
                ></a>
            </li> -->
            @role('Admin')
            <li class="nav-item">
                <a href="{{url('all-transport-view')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li>
            <li class="nav-item dropdown-sidemenu">
                <a href="#">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">Configuration</span>
                    <i class="dd-arrow i-Arrow-Down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{url('addvehical')}}">Vehicle</a></li>
                    <li><a href="{{url('area-master')}}">Area Master</a></li>
                    <li><a href="{{url('bus-stop')}}">Bus Stops</a></li>
                    <li><a href="{{url('bus-attandence-list')}}">Bus Attandence</a></li>
                    <li><a href="{{url('NatureOfWork')}}">Nature of Work</a></li>
                    <li><a href="{{url('driver-conductor-master')}}">Driver / Conductor Master</a></li>
                    <li><a href="{{url('rtopaper')}}">R.T.O. Paper Master</a></li>
                    <li><a href="{{url('maintenance-head-master')}}">Maintenance Head Master</a></li>
                    <li><a href="{{url('route-master')}}">Route Master</a></li>
                    <li><a href="{{url('schedulemaster')}}">Schedule Master</a></li>
                    <li><a href="{{url('list-party-master')}}">Party Master</a></li>
                    <li><a href="{{url('scholarbusassign')}}">Scholar Bus Assign</a></li>
                    <li><a href="{{url('teacherbusassign')}}">Teacher Bus Assign</a></li>
                    <li><a href="{{url('bus_data')}}">Bus Data</a></li>
                </ul>
            </li>
            @endrole

            @role('Student')
            <li class="nav-item">
                <a href="{{url('bus_data')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Bus Status</span></a>
            </li>
            @endrole

            <!-- <li class="nav-item dropdown-sidemenu">
              <a href="#"
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                ><span class="item-name">Transactions</span
                ><i class="dd-arrow i-Arrow-Down"></i
              ></a>
              <ul class="submenu">
                <li><a href="{{url('student-registrations')}}">Registration</a></li>
              </ul>
            </li> -->
            <!-- <li class="nav-item dropdown-sidemenu">
              <a href="#"
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                ><span class="item-name">Reports</span
                ><i class="dd-arrow i-Arrow-Down"></i
              ></a>
              <ul class="submenu">
                <li><a href="{{url('student-registrations')}}">Registration</a></li>
              </ul>
            </li> -->
        </ul>
        <!-- End Transport -->
        <!-- Setting -->
        <ul class="childNav" data-parent="setting">
            @role('Admin')
            <li class="nav-item">
                <a href="{{url('users')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Users</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('roles') }}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Roles</span></a>
            </li>
            <!-- <li class="nav-item">
                <a href="{{ url('roles') }}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Permission</span></a>
            </li> -->
            @endrole
            @role('Employee')
            <li class="nav-item">
                <a href="#"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Scholars Profile</span></a>
            </li>
            @endrole
        </ul>
        <!-- End Setting -->



        <!-- feesdetail -->
        <ul class="childNav" data-parent="feesdetail">
            @role('Student')
            <li class="nav-item">
                <a href="{{url('fees_payments/'.Auth::user()->id)}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Fees Payments</span></a>
            </li>
            <li class="nav-item">
                <a href="{{url('student_fees_leadger')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Fees Details</span></a>
            </li>
            @endrole
        </ul>
        <!-- End feesdetail -->

        <!-- Academics -->
        <ul class="childNav" data-parent="Academic">
            <li class="nav-item">
                <a href="{{url('Academics')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li>

            <li class="nav-item dropdown-sidemenu">
                <a href="#"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Academic Management</span><i class="dd-arrow i-Arrow-Down"></i></a>

                <ul class="submenu">
                    <li><a href="{{url('session')}}">Make Session</a></li>
                    <li><a href="{{url('exammaster')}}">Exam</a></li>
                    <li><a href="{{url('examtype')}}">Exam Type</a></li>
                    <li><a href="{{url('teachers')}}">Teachers</a></li>
                    <li><a href="{{url('marksheet')}}">Marksheet</a></li>
                    <li><a href="{{url('marks')}}">Marks</a></li>
                    <li><a href="{{url('show_report_marks')}}">Show Report Marks</a></li>
                    <li><a href="{{url('AssignSubject')}}">Assigning Subject To Student</a></li>
                    <li><a href="{{url('student-attandence-report')}}">Student Wise Attandence</a></li>
                    <li><a href="{{url('subjectmaster')}}">Subject</a></li>
                    <li><a href="{{url('teachersubject')}}">Teachers subject</a></li>
                    {{-- <li><a href="{{url('Attandencelist')}}">Attandence list</a></li> --}}
                    <li><a href="{{url('Attandencereports')}}">Attandence Reports</a></li>
                    <li><a href="{{url('dailyattandence')}}">Daily Attandence</a></li>
                    <li><a href="{{url('primarygroup')}}">Primary Group</a></li>
                    <li><a href="{{url('groupmaster')}}">Group</a></li>
                    <li><a href="{{url('headmaster')}}">Head</a></li>
                    <li><a href="{{url('subheadmaster')}}">Sub Head</a></li>
                    <li><a href="{{url('greadingmaster')}}">Grading</a></li>
                    <li><a href="{{url('gread')}}">Grads</a></li>
                    <li><a href="{{url('calssese-assigne-to-teacher')}}">Assign Class To Teacher</a></li>
                    <li><a href="{{url('streammaster')}}">stream Master </a></li>
                    <li><a href="{{url('sectionmaster')}}">Section Master</a></li>
                    <li><a href="{{url('remarkmaster')}}">Remark Master</a></li>
                    <li><a href="{{url('subjectcombinatiomaster')}}">Subject Combination</a></li>
                </ul>
            </li>
            {{-- @endrole  --}}

            {{-- <ul class="childNav" data-parent="Academic">
              <li class="nav-item">
                  <a href="{{url('Academics')}}"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li>

            <li class="nav-item dropdown-sidemenu">
                <a href="#"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Academic Management</span><i class="dd-arrow i-Arrow-Down"></i></a>

                <ul class="submenu">
                    <li><a href="{{url('session')}}">Make Session</a></li>
                    <li><a href="{{url('exammaster')}}">Exam</a></li>
                    <li><a href="{{url('examtype')}}">Exam Type</a></li>
                    <li><a href="{{url('teachers')}}">Teachers</a></li>
                    <li><a href="{{url('marksheet')}}">Marksheet</a></li>
                    <li><a href="{{url('marks')}}">Marks</a></li>
                    <li><a href="{{url('AssignSubject')}}">Assigning Subject To Student</a></li>
                    <li><a href="{{url('student-attandence-report')}}">Student Wise Attendance</a></li>
                    <li><a href="{{url('subjectmaster')}}">Subject</a></li>
                    <li><a href="{{url('teachersubject')}}">Teachers subject</a></li>
                    <li><a href="{{url('Attandencelist')}}">Attendance list</a></li>
                    <li><a href="{{url('Attandencereports')}}">Attendance Reports</a></li>
                    <li><a href="{{url('dailyattandence')}}">Daily Attendance</a></li>
                    <li><a href="{{url('primarygroup')}}">Primary Group</a></li>
                    <li><a href="{{url('groupmaster')}}">Group</a></li>
                    <li><a href="{{url('headmaster')}}">Head</a></li>
                    <li><a href="{{url('subheadmaster')}}">Sub Head</a></li>
                    <li><a href="{{url('greadingmaster')}}">Grading</a></li>
                    <li><a href="{{url('calssese-assigne-to-teacher')}}">Assign Class To Teacher</a></li>
                    <li><a href="{{url('streammaster')}}">stream Master</a></li>
                    <li><a href="{{url('sectionmaster')}}">Section Master</a></li>
                    <li><a href="{{url('remarkmaster')}}">Remark Master</a></li>
                    <li><a href="{{url('subjectcombinatiomaster')}}">Subject Combination</a></li>
                    <li class="hidden-after-subject-combination"><a href="#">Hidden Item 1</a></li>
                    <li class="hidden-after-subject-combination"><a href="#">Hidden Item 2</a></li>
                    <!-- Add more hidden items as needed -->
                </ul>
            </li>
        </ul>

        <style>
            .hidden-after-subject-combination {
                display: none;
            }

        </style> --}}

        <!-- <li class="nav-item dropdown-sidemenu">
              <a href=""
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                ><span class="item-name">Transactions</span
                ><i class="dd-arrow i-Arrow-Down"></i
              ></a>
              <ul class="submenu">
                <li><a href="{{url('student-registrations')}}">Registration</a></li>
              </ul>
            </li> -->
        <!-- <li class="nav-item dropdown-sidemenu">
              <a href=""
                ><i class="nav-icon i-File-Clipboard-Text--Image"></i
                ><span class="item-name">Reports</span
                ><i class="dd-arrow i-Arrow-Down"></i
              ></a>
              <ul class="submenu">
                <li><a href="{{url('student-registrations')}}">Registration</a></li>
              </ul>
            </li> -->
        </ul>
        <!-- End Academic -->
        {{-- HRMS --}}


        <ul class="childNav" data-parent="hrms">
            {{-- <li class="nav-item">
     <a href="{{url('hrms')}}"
            ><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">All</span></a>
            </li> --}}
            <li class="nav-item dropdown-sidemenu">
                <a href="#"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">HRMS Management</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li><a href="{{url('employee')}}">Employees</a></li>
                    <li><a href="{{url('department')}}">Departments</a></li>
                    <li><a href="{{url('position')}}">Position</a></li>
                    <li><a href="{{url('attendance')}}">Attendance</a></li>
                    <li><a href="{{url('holidays')}}">Holidays</a></li>
                    <li><a href="{{url('salaries')}}">Salaries</a></li>
                    <li><a href="{{url('leaverequests')}}">Leaverequests</a></li>

                </ul>
            </li>

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
