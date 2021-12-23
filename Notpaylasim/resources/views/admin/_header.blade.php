        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Admin Paneli</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        @if(Auth::user()->profile_photo_path)
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="..." class="img-circle profile_img">
                            @endif
                    </div>
                    <div class="profile_info">
                        <span>Hoşgeldin</span>
                        @auth
                        <h2>{{Auth::user()->name}}</h2>
                            @endauth
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{route('admin_home')}}"><i class="fa fa-home"></i> Anasayfa</a></li>
                            <li><a><i class="fa fa-cogs"></i> Site Ayarları <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('admin_category')}}">Kategori Ayarları</a></li>
                                    <li><a href="{{route('admin_note')}}">Not Ayarları</a></li>
                                    <li><a href="{{route('admin_setting')}}">Genel Ayarlar</a></li>

                                </ul>
                            </li>

                            <li><a href="{{route('admin_users')}}"><i class="fa fa-users"></i> Kullanıcılar</a></li>
                            <li><a href="{{route('admin_message')}}"><i class="fa fa-user"></i>Contact Mesajları</a></li>
                            <li><a href="{{route('admin_review')}}"><i class="fa fa-user"></i>Reviews</a></li>
                            <li><a href="{{route('admin_faq')}}"><i class="fa fa-user"></i>Faqs</a></li>

                         <!--   <li><a href="menu.php"><i class="fa fa-list"></i> Menüler</a></li>
                            <li><a href="slider.php"><i class="fa fa-image"></i> Slider</a></li>-->

                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->

                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                @if(Auth::user()->profile_photo_path)
                                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="..." class="img-circle profile_img">
                                @endif
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profil bilgilerim</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Ayarlar</span>
                                    </a>
                                </li>
                                @auth
                                    <li><a href="{{route('admin_logout')}}"><i class="fa fa-sign-out pull-right"></i> Güvenli Çıkış</a></li>
                                @endauth
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('assets')}}/Admin/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('assets')}}/Admin/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('assets')}}/Admin/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('assets')}}/Admin/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
