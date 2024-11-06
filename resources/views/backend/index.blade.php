@extends('backend.layouts.main')
@section('main-container')
  <script type="text/javascript">jQuery.noConflict();</script> 

         <div class="main-content">
          <div class="breadcrumb">
              @role('Student')
            <h1 class="me-2">Student Panel</h1>
            @endrole
            <h1 class="me-2">Admin Panel</h1>
            <ul>
              <li><a href="">Dashboard</a></li>
               
            </ul>
          </div>
          <div class="separator-breadcrumb border-top"></div>
          <div class="row">          
            <div class="col-lg-12 col-md-12">
              <!-- CARD ICON-->
              <div class="row"> 
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                      <div class="card-body text-center"><i class="i-Bell"></i>
                          <div class="w-100 text-center">
                              <p class="text-muted mt-2 mb-0">Notification</p>                              
                              <p class="text-primary text-24 line-height-1 mb-2">0</p>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                      <div class="card-body text-center"><i class="i-Data-Upload"></i>
                          <div class="w-100 text-center">
                              <p class="text-muted mt-2 mb-0">Announcement</p>                              
                              <p class="text-primary text-24 line-height-1 mb-2">0</p>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                      <div class="card-body text-center"><i class="i-Add-User"></i>
                          <div class="w-100 text-center">
                              <p class="text-muted mt-2 mb-0">My Calender</p>
                              <p class="text-primary text-24 line-height-1 mb-2">0</p>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                      <div class="card-body text-center"><i class="i-Money-2"></i>
                          <div class="w-100 text-center">
                              <p class="text-muted mt-2 mb-0">Transport Notification</p>
                              <p class="text-primary text-24 line-height-1 mb-2">0</p>
                          </div>
                      </div>
                  </div>
              </div>

              {{-- <div class="row w-100">

                <div class="col-md-3 col-lg-3">
                  <div class="card mb-4 o-hidden">
                      <div class="card-body ul-card__widget-chart">
                          <div class="ul-widget__chart-info">
                              <h5 class="heading">INCOME</h5>
                              <div class="ul-widget__chart-number">
                                  <h2 class="t-font-boldest">$1000</h2><small class="text-muted">46% compared to last year</small>
                              </div>
                          </div>
                          <div id="basicArea-chart"></div>
                      </div>
                  </div>
              </div>


              </div> --}}

             
                
                {{-- <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Bell"></i>
                      <p class="text-muted mt-2 mb-2">Notification</p>
                      <p class="text-primary text-24 line-height-1 m-0">0</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Data-Upload"></i>
                      <p class="text-muted mt-2 mb-2">Announcement</p>
                      <p class="text-primary text-24 line-height-1 m-0">0</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-2">
                  <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                      <i class="i-Add-User"></i>
                      <p class="text-muted mt-2 mb-2">My Calender</p>
                      <p class="text-primary text-24 line-height-1 m-0">0</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Money-2"></i>
                      <p class="text-muted mt-2 mb-2">Transport Notification</p>
                      <p class="text-primary text-24 line-height-1 m-0">0</p>
                    </div>
                  </div>
                </div> --}}




                {{-- <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Add-User"></i>
                      <p class="text-muted mt-2 mb-2">Pre Enquiry</p>
                      <p class="text-primary text-16 line-height-1 m-0">{{$preenquirecount}} X 500 = {{$preenquirecount * 500}}</p>
                    </div>
                  </div>
                </div> --}}

                <div class="row w-100">

                  
 {{-- <a href="{{url('admin-pre-enquiryform')}}" class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Add-User"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Pre Enquiry</p>
                    <p class="lead text-primary text-24 mb-2">{{$preenquirecount}}</p>
                </div>
            </div>
        </div>
    </a> --}}

    <a href="{{url('admin-pre-enquiryform')}}" class="col-lg-2 col-md-6 col-sm-6" style="width: 20%">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      {{-- <i class="i-Money-2"></i> --}}
                      <i class="i-Add-User"></i>
                      <p class="text-muted mt-2 mb-2">Pre Enquiry</p>
                      {{-- <p class="lead text-primary text-24 mb-2">{{$preenquirecount}}</p> --}}
                      <p class="text-primary text-16 line-height-1 m-0">{{$preenquirecount}}</p>
                    </div>
                  </div>
                </a> 




                <a href="{{url('adminenquirylist')}}" class="col-lg-2 col-md-6 col-sm-6" style="width: 20%">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Add-User"></i>
                      <p class="text-muted mt-2 mb-2">Enquiry List</p>
                      <p class="text-primary text-16 line-height-1 m-0">{{$enquirecount}}</p>
                    </div>
                  </div>
                </a>
                <a href="{{url('student-registrations')}}" class="col-lg-2 col-md-6 col-sm-6" style="width: 20%">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Add-User"></i>
                      <p class="text-muted mt-2 mb-2">Registration list</p>
                      <p class="text-primary text-16 line-height-1 m-0">{{$registrationcount}}</p>
                    </div>
                  </div>
                </a>


                
                {{-- <div class="col-lg-2 col-md-6 col-sm-6"style="width: 20%">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Money-2"></i>
                      <p class="text-muted mt-2 mb-2">Enquiry List</p>
                      <p class="text-primary text-16 line-height-1 m-0">{{$enquirecount * 500}}</p>
                    </div>
                  </div>
                </div> --}}


                <a href="{{url('enquiry-data')}}" class="col-lg-2 col-md-6 col-sm-6" style="width: 20%">
                  <div class="card card-icon mb-2" >
                      <div class="card-body text-center">
                          <i class="i-Money-2"></i>
                          <p class="text-muted mt-2 mb-2">Enquiry List</p>
                          <p class="text-primary text-16 line-height-1 m-0">{{$enquirecount * 500}}</p>
                      </div>
                  </div>
                </a>

                
                
                <a href="{{url('duestuamount')}}" class="col-lg-2 col-md-6 col-sm-6" style="width: 20%">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Money-2"></i>
                      <p class="text-muted mt-2 mb-2">Registration list</p>
                      <p class="text-primary text-16 line-height-1 m-0">{{$registrationcount * 19000}}</p>
                    </div>
                  </div>
                </a>
                
               
                {{-- <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Add-User"></i>
                      <p class="text-muted mt-2 mb-2">Pre Enquiry</p>
                      <p class="text-primary text-16 line-height-1 m-0">{{$preenquirecount}}</p>
                    </div>
                  </div>
                </div> --}}

                
                
                
              </div>
                
                <!-- <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Money-2"></i>
                      <p class="text-muted mt-2 mb-2">Transport Notification</p>
                      <p class="line-height-1 text-title text-18 mt-2 mb-0">
                        4021
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="card card-icon mb-2">
                    <div class="card-body text-center">
                      <i class="i-Gear"></i>
                      <p class="text-muted mt-2 mb-2">Transport Notification</p>
                      <p class="line-height-1 text-title text-18 mt-2 mb-0">
                        4021
                      </p>
                    </div>
                  </div>
                </div> -->
                
              </div>
            </div>
            
            <!-- <div class="col-lg-6 col-md-12">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="card-title">Top Authors</div>
                  <div
                    class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"
                  >
                    <img
                      class="avatar-md rounded me-3"
                      src="../../dist-assets/images/faces/2.jpg"
                      alt=""
                    />
                    <div class="flex-grow-1">
                      <h6 class="m-0">David Hopkins</h6>
                      <p class="m-0 text-small text-muted">
                        Lorem ipsum dolor sit amet consectetur.
                      </p>
                    </div>
                    <div>
                      <button
                        class="btn btn-outline-primary btn-rounded btn-sm"
                      >
                        Follow
                      </button>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"
                  >
                    <img
                      class="avatar-md rounded me-3"
                      src="../../dist-assets/images/faces/3.jpg"
                      alt=""
                    />
                    <div class="flex-grow-1">
                      <h6 class="m-0">James Mitchell</h6>
                      <p class="m-0 text-small text-muted">
                        Lorem ipsum dolor sit amet consectetur.
                      </p>
                    </div>
                    <div>
                      <button
                        class="btn btn-outline-primary btn-rounded btn-sm"
                      >
                        Follow
                      </button>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"
                  >
                    <img
                      class="avatar-md rounded me-3"
                      src="../../dist-assets/images/faces/4.jpg"
                      alt=""
                    />
                    <div class="flex-grow-1">
                      <h6 class="m-0">Jessica Mitchell</h6>
                      <p class="m-0 text-small text-muted">
                        Lorem ipsum dolor sit amet consectetur.
                      </p>
                    </div>
                    <div>
                      <button
                        class="btn btn-outline-primary btn-rounded btn-sm"
                      >
                        Follow
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- end of row-->
          <!-- student list count  -->
          <div class="row d-flex">
    <!-- ICON BG-->

    {{-- <a href="{{url('admin-pre-enquiryform')}}" class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Add-User"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Pre Enquiry</p>
                    <p class="lead text-primary text-24 mb-2">{{$preenquirecount}}</p>
                </div>
            </div>
        </div>
    </a>

    <a href="{{url('adminenquirylist')}}" class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Add-User"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Enquiry List</p>
                    <p class="lead text-primary text-24 mb-2">{{$enquirecount}}</p>
                </div>
            </div>
        </div>
    </a>

    <a href="{{url('student-registrations')}}" class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
            <div class="card-body text-center"><i class="i-Add-User"></i>
                <div class="content">
                    <p class="text-muted mt-2 mb-0">Registration list</p>
                    <p class="lead text-primary text-24 mb-2">{{$registrationcount}}</p>
                </div>
            </div>
        </div>
    </a> --}}
</div>

          <!-- end student list count  -->

          <div class="row mt-4">
                      <!-- end of col-->
            
            
            <!-- notification-->
            <div class="col-lg-4 col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">Notification</div>
                  <div class="ul-widget-app__browser-list">
                    <div class="ul-widget-app__browser-list-1 mb-4">
                      <i
                        class="i-Bell1 text-white bg-warning rounded-circle p-2 me-3"
                      ></i
                      ><span class="text-15">You have 9 pending Tasks</span
                      ><span class="text-mute">in a sec</span>
                    </div>
                    <div class="ul-widget-app__browser-list-1 mb-4">
                      <i
                        class="i-Internet text-white green-500 rounded-circle p-2 me-3"
                      ></i
                      ><span class="text-15">Traffic Overloaded</span
                      ><span class="text-mute">4 Hours ago</span>
                    </div>
                    <div class="ul-widget-app__browser-list-1 mb-4">
                      <i
                        class="i-Shopping-Cart text-white cyan-500 rounded-circle p-2 me-3"
                      ></i
                      ><span class="text-15">New Order Received</span
                      ><span class="text-mute">yesterday </span>
                    </div>
                    <div class="ul-widget-app__browser-list-1 mb-4">
                      <i
                        class="i-Add-UserStar text-white teal-500 rounded-circle p-2 me-3"
                      ></i
                      ><span class="text-15">New User </span
                      ><span class="text-mute">2 April </span>
                    </div>
                    <div class="ul-widget-app__browser-list-1 mb-4">
                      <i
                        class="i-Bell text-white purple-500 rounded-circle p-2 me-3"
                      ></i
                      ><span class="text-15">New Update </span
                      ><span class="text-mute">2 April </span>
                    </div>
                    <div class="ul-widget-app__browser-list-1 mb-4">
                      <i
                        class="i-Shopping-Cart text-white bg-danger rounded-circle p-2 me-3"
                      ></i
                      ><span class="text-15">New Order Received</span
                      ><span class="text-mute">yesterday </span>
                    </div>
                    <div class="ul-widget-app__browser-list-1 mb-4">
                      <i
                        class="i-Internet text-white green-500 rounded-circle p-2 me-3"
                      ></i
                      ><span class="text-15">Traffic Overloaded</span
                      ><span class="text-mute">4 Hours ago</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- best-sellers-->
            <div class="col-xl-4 col-md-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="ul-widget__head">
                    <div class="ul-widget__head-label">
                      <h3 class="ul-widget__head-title">Calender</h3>
                    </div>
                    <div class="ul-widget__head-toolbar">
                      <ul
                        class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line"
                        role="tablist"
                      >
                        <li class="nav-item">
                          <a
                            class="nav-link active show"
                            data-bs-toggle="tab"
                            href="#ul-widget5-tab1-content"
                            role="tab"
                            aria-selected="true"
                            >Latest</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#ul-widget5-tab2-content"
                            role="tab"
                            aria-selected="false"
                            >Month</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="ul-widget__body">
                    <div class="tab-content">
                      <div
                        class="tab-pane active show"
                        id="ul-widget5-tab1-content"
                      >
                        <div class="ul-widget5">
                          <div class="ul-widget5__item">
                            <div class="ul-widget5__content">
                              <!-- <div class="ul-widget5__pic">
                                <img
                                  src="../../dist-assets/images/products/iphone-1.jpg"
                                  alt="Third slide"
                                />
                              </div> -->
                              <div class="ul-widget5__section">
                                <a class="ul-widget4__title" href="#"
                                  >Great Logo Designn</a
                                >
                                <p class="ul-widget5__desc">
                                  UI lib admin themes.
                                </p>
                                <div class="ul-widget5__info">
                                  <span>Author:</span
                                  ><span class="text-primary">Jon Snow</span
                                  ><span>Released:</span
                                  ><span class="text-primary">23.08.17</span>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="ul-widget5__content">
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">19,200</span
                                ><span class="ul-widget5__sales text-mute"
                                  >sales</span
                                >
                              </div>
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">1046</span
                                ><span class="ul-widget5__sales text-mute"
                                  >votes</span
                                >
                              </div>
                            </div> -->
                          </div>
                          <div class="ul-widget5__item">
                            <div class="ul-widget5__content">
                              <!-- <div class="ul-widget5__pic">
                                <img
                                  src="../../dist-assets/images/products/speaker-1.jpg"
                                  alt="Third slide"
                                />
                              </div> -->
                              <div class="ul-widget5__section">
                                <a class="ul-widget4__title" href="#"
                                  >Great Logo Designn</a
                                >
                                <p class="ul-widget5__desc">
                                  UI lib admin themes.
                                </p>
                                <div class="ul-widget5__info">
                                  <span>Author:</span
                                  ><span class="text-primary">Jon Snow</span
                                  ><span>Released:</span
                                  ><span class="text-primary">23.08.17</span>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="ul-widget5__content">
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">29,200</span
                                ><span class="ul-widget5__sales text-mute"
                                  >sales</span
                                >
                              </div>
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">4500</span
                                ><span class="ul-widget5__sales text-mute"
                                  >votes</span
                                >
                              </div>
                            </div> -->
                          </div>
                          <div class="ul-widget5__item">
                            <div class="ul-widget5__content">
                             <!--  <div class="ul-widget5__pic">
                                <img
                                  src="../../dist-assets/images/products/watch-1.jpg"
                                  alt="Third slide"
                                />
                              </div> -->
                              <div class="ul-widget5__section">
                                <a class="ul-widget4__title" href="#"
                                  >Great Logo Designn</a
                                >
                                <p class="ul-widget5__desc">
                                  UI lib admin themes.
                                </p>
                                <div class="ul-widget5__info">
                                  <span>Author:</span
                                  ><span class="text-primary">Jon Snow</span
                                  ><span>Released:</span
                                  ><span class="text-primary">23.08.17</span>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="ul-widget5__content">
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">23,200</span
                                ><span class="ul-widget5__sales text-mute"
                                  >sales</span
                                >
                              </div>
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">2046</span
                                ><span class="ul-widget5__sales text-mute"
                                  >votes</span
                                >
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="ul-widget5-tab2-content">
                        <div class="ul-widget5">
                          <div class="ul-widget5__item">
                            <div class="ul-widget5__content">
                              <!-- <div class="ul-widget5__pic">
                                <img
                                  src="../../dist-assets/images/products/speaker-1.jpg"
                                  alt="Third slide"
                                />
                              </div> -->
                              <div class="ul-widget5__section">
                                <a class="ul-widget4__title" href="#"
                                  >Great Logo Designn</a
                                >
                                <p class="ul-widget5__desc">
                                  UI lib admin themes.
                                </p>
                                <div class="ul-widget5__info">
                                  <span>Author:</span
                                  ><span class="text-primary">Jon Snow</span
                                  ><span>Released:</span
                                  ><span class="text-primary">23.08.17</span>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="ul-widget5__content">
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">19,200</span
                                ><span class="ul-widget5__sales text-mute"
                                  >sales</span
                                >
                              </div>
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">1046</span
                                ><span class="ul-widget5__sales text-mute"
                                  >votes</span
                                >
                              </div>
                            </div> -->
                          </div>
                          <div class="ul-widget5__item">
                            <div class="ul-widget5__content">
                              <!-- <div class="ul-widget5__pic">
                                <img
                                  src="../../dist-assets/images/products/iphone-1.jpg"
                                  alt="Third slide"
                                />
                              </div> -->
                              <div class="ul-widget5__section">
                                <a class="ul-widget4__title" href="#"
                                  >Great Logo Designn</a
                                >
                                <p class="ul-widget5__desc">
                                  UI lib admin themes.
                                </p>
                                <div class="ul-widget5__info">
                                  <span>Author:</span
                                  ><span class="text-primary">Jon Snow</span
                                  ><span>Released:</span
                                  ><span class="text-primary">23.08.17</span>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="ul-widget5__content">
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">29,200</span
                                ><span class="ul-widget5__sales text-mute"
                                  >sales</span
                                >
                              </div>
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">4500</span
                                ><span class="ul-widget5__sales text-mute"
                                  >votes</span
                                >
                              </div>
                            </div> -->
                          </div>
                          <div class="ul-widget5__item">
                            <div class="ul-widget5__content">
                              <!-- <div class="ul-widget5__pic">
                                <img
                                  src="../../dist-assets/images/products/watch-1.jpg"
                                  alt="Third slide"
                                />
                              </div> -->
                              <div class="ul-widget5__section">
                                <a class="ul-widget4__title" href="#"
                                  >Great Logo Designn</a
                                >
                                <p class="ul-widget5__desc">
                                  UI lib admin themes.
                                </p>
                                <div class="ul-widget5__info">
                                  <span>Author:</span
                                  ><span class="text-primary">Jon Snow</span
                                  ><span>Released:</span
                                  ><span class="text-primary">23.08.17</span>
                                </div>
                              </div>
                            </div>
                            <!-- <div class="ul-widget5__content">
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">23,200</span
                                ><span class="ul-widget5__sales text-mute"
                                  >sales</span
                                >
                              </div>
                              <div class="ul-widget5__stats">
                                <span class="ul-widget5__number">2046</span
                                ><span class="ul-widget5__sales text-mute"
                                  >votes</span
                                >
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- latest-log-->
            <div class="col-lg-4 col-xl-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="ul-widget__head">
                    <div class="ul-widget__head-label">
                      <h3 class="ul-widget__head-title">Annoucement</h3>
                    </div>
                    <div class="ul-widget__head-toolbar">
                      <ul
                        class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line"
                        role="tablist"
                      >
                        <li class="nav-item">
                          <a
                            class="nav-link active show"
                            data-bs-toggle="tab"
                            href="#__g-widget-s6-tab1-content"
                            role="tab"
                            aria-selected="true"
                            >Today</a
                          >
                        </li>
                        <!-- <li class="nav-item">
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#__g-widget-s6-tab2-content"
                            role="tab"
                            aria-selected="false"
                            >Month</a
                          >
                        </li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="ul-widget__body">
                    <div class="tab-content">
                      <div
                        class="tab-pane active show"
                        id="__g-widget-s6-tab1-content"
                      >
                        <div class="ul-widget-s6__items">
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p
                                class="badge-dot-primary ul-widget6__dot"
                              ></p> </span
                            ><span class="ul-widget-s6__text"
                              >12 new users registered</span
                            ><span class="ul-widget-s6__time">Just Now</span>
                          </div>
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p class="badge-dot-success ul-widget6__dot"></p>
                            </span>
                            <p class="ul-widget-s6__text">
                              System shutdown<span
                                class="badge rounded-pill text-bg-primary m-2"
                                >Primary</span
                              >
                            </p>
                            <span class="ul-widget-s6__time">14 mins</span>
                          </div>
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p
                                class="badge-dot-warning ul-widget6__dot"
                              ></p> </span
                            ><span class="ul-widget-s6__text"
                              >System error -<a
                                class="typo_link text-danger"
                                href=""
                                >Danger state text</a
                              ></span
                            ><span class="ul-widget-s6__time">2 hrs </span>
                          </div>
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p
                                class="badge-dot-danger ul-widget6__dot"
                              ></p> </span
                            ><span class="ul-widget-s6__text"
                              >12 new users registered</span
                            ><span class="ul-widget-s6__time">Just Now</span>
                          </div>
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p class="badge-dot-info ul-widget6__dot"></p>
                            </span>
                            <p class="ul-widget-s6__text">
                              System shutdown<span
                                class="badge rounded-pill text-bg-success m-2"
                                >Primary</span
                              >
                            </p>
                            <span class="ul-widget-s6__time">14 mins</span>
                          </div>
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p
                                class="badge-dot-dark ul-widget6__dot"
                              ></p> </span
                            ><span class="ul-widget-s6__text"
                              >System error -<a
                                class="typo_link text-danger"
                                href=""
                                >Danger state text</a
                              ></span
                            ><span class="ul-widget-s6__time">2 hrs </span>
                          </div>
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p
                                class="badge-dot-primary ul-widget6__dot"
                              ></p> </span
                            ><span class="ul-widget-s6__text"
                              >12 new users registered</span
                            ><span class="ul-widget-s6__time">Just Now</span>
                          </div>
                          <div class="ul-widget-s6__item">
                            <span class="ul-widget-s6__badge">
                              <p class="badge-dot-success ul-widget6__dot"></p>
                            </span>
                            <p class="ul-widget-s6__text">
                              System shutdown<span
                                class="badge rounded-pill text-bg-danger m-2"
                                >Primary</span
                              >
                            </p>
                            <span class="ul-widget-s6__time">14 mins</span>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="__g-widget-s6-tab2-content">
                        <div class="ul-widget2">
                          <div class="ul-widget-s6__items">
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p
                                  class="badge-dot-danger ul-widget6__dot"
                                ></p> </span
                              ><span class="ul-widget-s6__text"
                                >44 new users registered</span
                              ><span class="ul-widget-s6__time">Just Now</span>
                            </div>
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p
                                  class="badge-dot-warning ul-widget6__dot"
                                ></p>
                              </span>
                              <p class="ul-widget-s6__text">
                                System shutdown<span
                                  class="badge rounded-pill text-bg-primary m-2"
                                  >Primary</span
                                >
                              </p>
                              <span class="ul-widget-s6__time">14 mins</span>
                            </div>
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p
                                  class="badge-dot-primary ul-widget6__dot"
                                ></p> </span
                              ><span class="ul-widget-s6__text"
                                >System error -<a
                                  class="typo_link text-danger"
                                  href=""
                                  >Danger state text</a
                                ></span
                              ><span class="ul-widget-s6__time">2 hrs </span>
                            </div>
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p
                                  class="badge-dot-danger ul-widget6__dot"
                                ></p> </span
                              ><span class="ul-widget-s6__text"
                                >12 new users registered</span
                              ><span class="ul-widget-s6__time">Just Now</span>
                            </div>
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p class="badge-dot-info ul-widget6__dot"></p>
                              </span>
                              <p class="ul-widget-s6__text">
                                System shutdown<span
                                  class="badge rounded-pill text-bg-success m-2"
                                  >Primary</span
                                >
                              </p>
                              <span class="ul-widget-s6__time">14 mins</span>
                            </div>
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p
                                  class="badge-dot-dark ul-widget6__dot"
                                ></p> </span
                              ><span class="ul-widget-s6__text"
                                >System error -<a
                                  class="typo_link text-danger"
                                  href=""
                                  >Danger state text</a
                                ></span
                              ><span class="ul-widget-s6__time">2 hrs </span>
                            </div>
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p
                                  class="badge-dot-primary ul-widget6__dot"
                                ></p> </span
                              ><span class="ul-widget-s6__text"
                                >12 new users registered</span
                              ><span class="ul-widget-s6__time">Just Now</span>
                            </div>
                            <div class="ul-widget-s6__item">
                              <span class="ul-widget-s6__badge">
                                <p
                                  class="badge-dot-success ul-widget6__dot"
                                ></p> </span
                              ><span class="ul-widget-s6__text"
                                >System shutdown<span
                                  class="badge rounded-pill text-bg-danger m-2"
                                  >Primary</span
                                ></span
                              ><span class="ul-widget-s6__time">14 mins</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of row-->
          <!-- end of main-content -->
          <!-- end of main-content -->
          <!-- Footer Start -->
          <div class="flex-grow-1"></div>
          <!-- fotter end -->
        </div>
        <script>
          "use strict";

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(source, true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(source).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


document.addEventListener('DOMContentLoaded', function() {
    
  var echartElem1 = document.getElementById('echart1');

  if (echartElem1) {
    var echart1 = echarts.init(echartElem1);
    echart1.setOption(_objectSpread({}, echartOptions.defaultOptions, {}, {
      grid: echartOptions.gridAlignLeft,
      series: [_objectSpread({
        data: [30, 40, 20, 50, 40, 80, 90, 40]
      }, echartOptions.smoothLine, {
        lineStyle: _objectSpread({
          color: '#4CAF50'
        }, echartOptions.lineShadow),
        itemStyle: {
          color: '#4CAF50'
        }
      })]
    }));
    
  }

  
}, false);
        </script>

<script>
  function redirectToEnquiryData() {
      window.location.href = "{{ route('enquiry-data') }}"; // Replace 'enquiry-data' with your actual route name
  }
</script>

@endsection 
