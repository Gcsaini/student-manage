<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/icofont/icofont.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/elegant_icons/elegant-icons.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/apex/apexcharts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link href="{{asset('ckeditor/samples/css/samples.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">  </head>
  <body>
  <div class="offcanvas-overlay"></div>
    <div class="wrapper">
      <header class="header fixed-top d-flex align-content-center flex-wrap">
        <div class="logo">
            <a href="{{url('home')}}" class="default-logo">
              <img src="{{asset('assets/img/logo.png')}}" alt="" />
            </a>
            <a href="{{url('home')}}" class="mobile-logo">
              <img src="{{asset('assets/img/mobile-logo.png')}}" alt=""/>
            </a>
        </div>
        <div class="main-header">
          <div class="container-fluid">
            <div class="row justify-content-between">
              <div class="col-3 col-lg-1 col-xl-4">
                <div class="main-header-left h-100 d-flex align-items-center">
                  <div class="main-header-user">
                    <a
                      href="#"
                      class="d-flex align-items-center"
                      data-toggle="dropdown"
                      ><div class="menu-icon">
                        <span></span> <span></span> <span></span>
                      </div>
                      <div
                        class="user-profile d-xl-flex align-items-center d-none"
                      >
                        <div class="user-avatar">
                          <img src="{{asset('assets/img/avatar/user.png')}}" alt="" />
                        </div>
                        <div class="user-info">
                          <h4 class="user-name">Abrilay Khatun</h4>
                          <p class="user-email">abrilakh@gmail.com</p>
                        </div>
                      </div></a
                    >
                    <div class="dropdown-menu">
                      <a href="#">My Profile</a> 
                      <a href="{{ url('admin/logout') }}">Log Out</a>
                    </div>
                  </div>
                  <div class="main-header-menu d-block d-lg-none">
                    <div class="header-toogle-menu">
                      <img src="{{asset('assets/img/menu.png')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-9 col-lg-11 col-xl-8">
                <div class="main-header-right d-flex justify-content-end">
                  <ul class="nav">
                   
                    <li class="ml-0 d-none d-lg-flex">
                      <div class="main-header-print">
                        <a href="#"
                          ><img src="{{asset('assets/img/svg/print-icon.svg')}}" alt=""
                        /></a>
                      </div>
                    </li>
                    <li class="d-none d-lg-flex">
                      <div class="main-header-date-time text-right">
                        <h3 class="time">
                          <span id="hours">21</span> <span id="point">:</span>
                          <span id="min">06</span>
                        </h3>
                        <span class="date"
                          ><span id="date">Tue, 12 October 2019</span></span
                        >
                      </div>
                    </li>
                   
                    <li>
                      <div class="main-header-message">
                        <a href="#" class="header-icon" data-toggle="dropdown"
                          ><img
                            src="{{asset('assets/img/svg/message-icon.svg')}}"
                            alt=""
                            class="svg"
                        /></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <div
                            class="
                              dropdown-header
                              d-flex
                              align-items-center
                              justify-content-between
                            "
                          >
                            <h5>3 Unread messages</h5>
                            <a href="#" class="text-mute d-inline-block"
                              >Clear all</a
                            >
                          </div>
                          <div class="dropdown-body">
                            <a
                              href="#"
                              class="
                                item-single
                                d-flex
                                media
                                align-items-center
                              "
                              ><div class="figure">
                                <img src="{{asset('assets/img/avatar/m1.png')}}" alt="" />
                                <span class="avatar-status bg-teal"></span>
                              </div>
                              <div class="content media-body">
                                <div class="d-flex align-items-center mb-2">
                                  <h6 class="name">Sender Name</h6>
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus.
                                  Duis sit amet accumsan justo.
                                </p>
                              </div></a
                            ><a
                              href="#"
                              class="
                                item-single
                                d-flex
                                media
                                align-items-center
                              "
                              ><div class="figure">
                                <img src="{{asset('assets/img/avatar/m2.png')}}" alt="" />
                                <span class="avatar-status bg-teal"></span>
                              </div>
                              <div class="content media-body">
                                <div class="d-flex align-items-center mb-2">
                                  <h6 class="name">Tonya Lee</h6>
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus.
                                  Duis sit amet accumsan justo.
                                </p>
                              </div></a
                            ><a
                              href="#"
                              class="
                                item-single
                                d-flex
                                media
                                align-items-center
                              "
                              ><div class="figure">
                                <img src="{{asset('assets/img/avatar/m3.png')}}" alt="" />
                                <span class="avatar-status bg-teal"></span>
                              </div>
                              <div class="content media-body">
                                <div class="d-flex align-items-center mb-2">
                                  <h6 class="name">Cathy Nichols</h6>
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus.
                                  Duis sit amet accumsan justo.
                                </p>
                              </div></a
                            ><a
                              href="#"
                              class="
                                item-single
                                d-flex
                                media
                                align-items-center
                              "
                              ><div class="figure">
                                <img src="{{asset('assets/img/avatar/m4.png')}}" alt="" />
                                <span class="avatar-status bg-teal"></span>
                              </div>
                              <div class="content media-body">
                                <div class="d-flex align-items-center mb-2">
                                  <h6 class="name">Hubert Griffith</h6>
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus.
                                  Duis sit amet accumsan justo.
                                </p>
                              </div></a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="main-header-notification">
                        <a
                          href="#"
                          class="header-icon notification-icon"
                          data-toggle="dropdown"
                          ><span
                            class="count"
                            data-bg-img="{{asset('assets/img/count-bg.png')}}"
                            >22</span
                          >
                          <img
                            src="{{asset('assets/img/svg/notification-icon.svg')}}"
                            alt=""
                            class="svg"
                        /></a>
                        <div
                          class="dropdown-menu style--two dropdown-menu-right"
                        >
                          <div
                            class="
                              dropdown-header
                              d-flex
                              align-items-center
                              justify-content-between
                            "
                          >
                            <h5>5 New notifications</h5>
                            <a href="#" class="text-mute d-inline-block"
                              >Clear all</a
                            >
                          </div>
                          <div class="dropdown-body">
                            <a
                              href="#"
                              class="item-single d-flex align-items-center"
                              ><div class="content">
                                <div class="mb-2">
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus
                                  amet.
                                </p>
                              </div></a
                            ><a
                              href="#"
                              class="item-single d-flex align-items-center"
                              ><div class="content">
                                <div class="mb-2">
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus.
                                  Duis sit amet accumsan justo.
                                </p>
                              </div></a
                            ><a
                              href="#"
                              class="item-single d-flex align-items-center"
                              ><div class="content">
                                <div class="mb-2">
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus.
                                  Duis sit amet accumsan justo.
                                </p>
                              </div></a
                            ><a
                              href="#"
                              class="item-single d-flex align-items-center"
                              ><div class="content">
                                <div class="mb-2">
                                  <p class="time">2 min ago</p>
                                </div>
                                <p class="main-text">
                                  Donec dapibus mauris id odio ornare tempus.
                                  Duis sit amet accumsan justo.
                                </p>
                              </div></a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      
    <div class="main-wrapper">
      <nav class="sidebar" data-trigger="scrollbar">
        <div class="sidebar-header d-none d-lg-block">
          <div class="sidebar-toogle-pin">
            <i class="icofont-tack-pin"></i>
          </div>
        </div>
        <div class="sidebar-body">
          <ul class="nav">
            <li class="nav-category">Main</li>
            <li class="@yield('home_active')">
              <a href="{{url('home')}}"
                ><i class="icofont-pie-chart"></i>
                <span class="link-title">Dashboard</span></a
              >
            </li>
           
            <li class="@yield('user_active')">
              <a href="{{url('admin/users')}}"
                ><i class="icofont-ui-user"></i>
                <span class="link-title">Students</span></a
              >
            </li>
            <li class="@yield('product_active')">
              <a href="{{url('admin/product')}}"
                ><i class="icofont-pie-chart"></i>
                <span class="link-title">Courses</span></a
              >
            </li>
            <li class="@yield('category_active')">
              <a href="{{url('admin/category')}}"
                ><i class="icofont-pie-chart"></i>
                <span class="link-title">School</span></a
              >
            </li>
          </ul>
        </div>
      </nav>
 
    @yield('container')

    </div>

    <footer class="footer">
      Admin © 2021 created by 
      <a href="https://www.facebook.com/gopichand.saini.3">&nbsp;&nbsp;<u>GCS</u></a>
    </footer>
  </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apex/custom-apexcharts.js')}}"></script>
    

  </body>
  </html>
