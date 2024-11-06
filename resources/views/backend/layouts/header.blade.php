<style>
  .app-admin-wrap {
    /* margin-top: -30px; */
}
.text-red{
  color: red!important;
}
.text-success{
  color: green!important;
}
.fontcolor-error{
    color: crimson;
    font-weight: bold;
}

.uperletter {
  text-transform: capitalize;
}

  
.select2-search__field, .select2-results__options{
  text-transform: capitalize;
}

.sidebar-left-secondary .childNav li.nav-item.open > .submenu{
  max-height: 2000px!important;
}

</style>

      <div class="main-header">
        <div class="logo">
          <img src="{{url('assets/backend')}}/images/header-logo.png" alt="" />
        </div>
        <div class="menu-toggle">
          <div></div>
          <div></div>
          <div></div>
        </div>
        
        <div class="col-md-3 align-items-center ">         
          <!-- Mega menu -->
          <!-- <label for="lastName1">Please Select Scholar:</label> -->
          <!-- <select id="inq-form-nomenu" class="form-control uperletter " onchange="getValAndAssign(event);" name="inq_form_selection" required>
                <option selected></option>
                <?php //$student_data = app('global_areas');
                // print_r($student_data);              
                
                ?>
                @if (!empty($student_data))
                           
                @foreach ($student_data as $each)
                @if ($each->type != 't')
                <option value="{{ $each->id }}">
                    {{ $each->student_name }}

                    @if ($each->form_number)
                    - {{ $each->form_number }}
                    @endif

                    <?php
                    //$jsondata = json_decode($each->json_str);
                    ?>
                    @if ($each->json_str)
                    @if (isset($jsondata->is_staff_applied_for_admission) && $jsondata->is_staff_applied_for_admission != '')
                    - Staff
                    @else
                    @if ($each->application_for == 'RTE')
                    - RTE
                    @else
                    - Non RTE
                    @endif
                    @endif
                    @else
                    @if ($each->application_for == 'RTE')
                    - RTE
                    @else
                    - Non RTE
                    @endif
                    @endif

                    @if ($each->json_str)
                    @if (isset($jsondata->siblings_name) && $jsondata->siblings_name != '')
                    - Sibling
                    @endif
                    @endif
                </option>
                @endif
                @endforeach
                @endif
            </select> -->
          <!-- / Mega menu -->
        </div>



        <div style="margin: auto"></div>

        <div class="col-md-1 form-group mb-3">
          <div class="form-outline w-auto">
              <label class="form-label" for="form1"></label>
              <?php 
                $currentYear = date('Y');
                $nextYear = date('Y') + 1;
                // $currentSchoolYear = $currentYear . '_' . $nextYear;
                $currentSchoolYear = session('db_names');
                // if (!empty($currentSchoolYear)){
                //   unset($_COOKIE['selectedYear']); 
                //   setcookie("selectedYear", "", -1, '/');
                //   Session::put('db_names',null);
                // }
                // echo $currentSchoolYear; // Outputs something like "kb"
              ?>
              <!-- <input type="date" name="student_dob" class="form-control" id="student_dob" placeholder="Enter Student DOB"/> -->
              
              <script>
                // function setCookie(name, value, days) {
                //     var expires = "";
                //     if (days) {
                //         var date = new Date();
                //         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                //         expires = "; expires=" + date.toUTCString();
                //     }
                //     document.cookie = name + "=" + value + expires + "; path=/";
                //     alert(document.cookie);
                // }

                // Function to get a cookie value
                // function getCookie(name) {
                //     var nameEQ = name + "=";
                //     var ca = document.cookie.split(';');
                //     for (var i = 0; i < ca.length; i++) {
                //         var c = ca[i];
                //         while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                //         if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                //     }
                //     return null;
                // }

                // Function to handle the change event of the select element
                document.getElementById('year').addEventListener('change', function () {
                    setCookie('selectedYear', this.value, 1); // Store the selected value in a cookie for 1 year
                    window.location.reload(); // Reload the page
                    
                });

                // Function to set the selected option based on the cookie value
                window.addEventListener('load', function () {
                    var selectedYear = getCookie('selectedYear');
                    if (selectedYear) {
                        document.getElementById('year').value = selectedYear;
                    }
                    if(selectedYear == null){
                      setCookie('selectedYear', document.getElementById('year').value, 1);
                      // alert(document.getElementById('year').value);
                    }
                    
                });

              </script>
          </div>
      </div>


        <div class="header-part-right">

          <!-- Full screen toggle -->
          <i
            class="i-Full-Screen header-icon d-none d-sm-inline-block"
            data-fullscreen
          ></i>
          <!-- Grid menu Dropdown -->
          <!-- Notificaiton -->
          <!-- Notificaiton -->





          
          @role('Student')
            <div class="dropdown">
              <div
                class="badge-top-container"
                role="button"
                id="dropdownNotification"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <span class="badge bg-primary">3</span>
                <i class="i-Bell text-muted header-icon"></i>
              </div>
              <!-- Notification dropdown -->
              <div
                class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none"
                aria-labelledby="dropdownNotification"
                data-perfect-scrollbar
                data-suppress-scroll-x="true"
              >
                <div class="dropdown-item d-flex">
                  <div class="notification-icon">
                    <i class="i-Speach-Bubble-6 text-primary me-1"></i>
                  </div>
                  <div class="notification-details flex-grow-1">
                    <p class="m-0 d-flex align-items-center">
                      <span>New message</span>
                      <span class="badge rounded-pill text-bg-primary ms-1 me-1"
                        >new</span
                      >
                      <span class="flex-grow-1"></span>
                      <span class="text-small text-muted ms-auto"
                        >10 sec ago</span
                      >
                    </p>
                    <p class="text-small text-muted m-0">
                      James: Hey! are you busy?
                    </p>
                  </div>
                </div>
                <div class="dropdown-item d-flex">
                  <div class="notification-icon">
                    <i class="i-Receipt-3 text-success me-1"></i>
                  </div>
                  <div class="notification-details flex-grow-1">
                    <p class="m-0 d-flex align-items-center">
                      <span>New order received</span>
                      <span class="badge rounded-pill text-bg-success ms-1 me-1"
                        >new</span
                      >
                      <span class="flex-grow-1"></span>
                      <span class="text-small text-muted ms-auto"
                        >2 hours ago</span
                      >
                    </p>
                    <p class="text-small text-muted m-0">
                      1 Headphone, 3 iPhone x
                    </p>
                  </div>
                </div>
                <div class="dropdown-item d-flex">
                  <div class="notification-icon">
                    <i class="i-Empty-Box text-danger me-1"></i>
                  </div>
                  <div class="notification-details flex-grow-1">
                    <p class="m-0 d-flex align-items-center">
                      <span>Product out of stock</span>
                      <span class="badge rounded-pill text-bg-danger ms-1 me-1"
                        >3</span
                      >
                      <span class="flex-grow-1"></span>
                      <span class="text-small text-muted ms-auto"
                        >10 hours ago</span
                      >
                    </p>
                    <p class="text-small text-muted m-0">
                      Headphone E67, R98, XL90, Q77
                    </p>
                  </div>
                </div>
                <div class="dropdown-item d-flex">
                  <div class="notification-icon">
                    <i class="i-Data-Power text-success me-1"></i>
                  </div>
                  <div class="notification-details flex-grow-1">
                    <p class="m-0 d-flex align-items-center">
                      <span>Server Up!</span>
                      <span class="badge rounded-pill text-bg-success ms-1 me-1"
                        >3</span
                      >
                      <span class="flex-grow-1"></span>
                      <span class="text-small text-muted ms-auto"
                        >14 hours ago</span
                      >
                    </p>
                    <p class="text-small text-muted m-0">
                      Server rebooted successfully
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Notificaiton End -->
            @endrole
          <!-- Notificaiton End -->
          <!-- User avatar dropdown -->

          <div class="dropdown">
            <div class="user col align-self-end">
              <img
                src="{{url('assets/backend')}}/images/faces/avatar-lvn.jpeg"
                id="userDropdown"
                alt=""
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              />
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="userDropdown"
              >
                <div class="dropdown-header">
                  <i class="i-Lock-User me-1"></i> {{Auth::user()->student_name}}
                </div>
                <!-- <a class="dropdown-item" href="signin.html">Sign out</a> -->

                 <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      
<script>
    // $(document).ready(function () {

      jQuery(document).ready(function($){
// standard on load code goes here with $ prefix
// note: the $ is setup inside the anonymous function of the ready command

// document.addEventListener('DOMContentLoaded', ()=>{
  
  
  $('#inq-form-nomenu').select2();
  
  // Capitalize the text in the search box
  $('.select2-search__field').css('text-transform', 'capitalize');
});
      // }, false);
    // });
</script>