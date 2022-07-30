<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="mdi mdi-close"></i>
        </button>

        <div class="left-side-logo d-block d-lg-none">
            <div class="text-center">

                <a href="index.html" class="logo"><img src="{{asset('admin/assets/images/logo_dark.png')}}" height="20"
                                                       alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{route('dashboard')}}" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> Dashboard</span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Reviews  </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('add_review')}}">Add Review</a></li>
                            <li><a href="{{route('review')}}">All Reviews</a></li>
                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Testmeniols  </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('testmeniol')}}">All Testmeniols</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> ourParten </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('ourParten.create')}}">Add ourParten</a></li>
                            <li><a href="{{route('ourParten.index')}}">All ourParten</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Why Choose Us </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('add_why')}}">Add why choose</a></li>
                            <li><a href="{{route('why')}}">All why choose</a></li>
                        </ul>
                    </li>


                    
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-th"></i> <span> TripsType </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('add_TripsType')}}">add Trips Type</a></li>
                            <li><a href="{{route('TripsType')}}">All TripsType</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> blog </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('blog.create')}}">Add blog</a></li>
                            <li><a href="{{route('blog.index')}}">All blog</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> car </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('car.create')}}">Add car</a></li>
                            <li><a href="{{route('car.index')}}">All car</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> team </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('teams.create')}}">Add team</a></li>
                            <li><a href="{{route('teams.index')}}">All team</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> aboutUs </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('aboutUs.index')}}">All aboutUs</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> questionsAnswer </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('questionsAnswer.create')}}">Add questionsAnswer</a></li>
                            <li><a href="{{route('questionsAnswer.index')}}">All questionsAnswer</a></li>
                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> callToAction </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('callToAction.create')}}">Add callToAction</a></li>
                            <li><a href="{{route('callToAction.index')}}">All callToAction</a></li>
                        </ul>
                    </li>

                    {{--                    <li class="has_sub">--}}
                    {{--                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> termsService </span>--}}
                    {{--                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                    {{--                        <ul class="list-unstyled">--}}
                    {{--                            <li><a href="{{route('termsService.create')}}">Add termsService</a></li>--}}
                    {{--                            <li><a href="{{route('termsService.index')}}">All termsService</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> privacyPolicy </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('privacyPolicy.create')}}">Add privacyPolicy</a></li>
                            <li><a href="{{route('privacyPolicy.index')}}">All privacyPolicy</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Destination </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('destenation.create')}}">Add Destination</a></li>
                            <li><a href="{{route('destenation.index')}}">All Destination</a></li>
                        </ul>
                    </li>

                    {{--                    <li class="has_sub">--}}
                    {{--                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> Currency's </span>--}}
                    {{--                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                    {{--                        <ul class="list-unstyled">--}}
                    {{--                            <li><a href="{{route('currencies.create')}}">Add Currency</a></li>--}}
                    {{--                            <li><a href="{{route('currencies.index')}}">All Currency's</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i
                                class="dripicons-copy"></i><span> Extra </span> <span class="menu-arrow float-right"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('extra.create')}} "> Add Extra</a></li>
                            <li><a href="{{route('extra.index')}}"> all Extra</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i
                                class="dripicons-copy"></i><span> dates </span> <span class="menu-arrow float-right"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('dates.create')}} "> Add dates</a></li>
                            <li><a href="{{route('dates.index')}}"> all dates</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span> Trip's </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('trips.create')}}">Add Trip's</a></li>
                            <li><a href="{{route('trips.index')}}">All Trip's</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Transfer </span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('transfer.create')}}">Add Transfer</a></li>
                            <li><a href="{{route('transfer.index')}}">All Transfer</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> Package's </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('package.create')}}">Add Package's</a></li>
                            <li><a href="{{route('package.index')}}">All Package's</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Order's </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('admin_getAllOrder')}}">All Order's</a></li>
                            <li><a href="{{route('admin_orders','pending')}}">Pending Order's</a></li>
                            <li><a href="{{route('admin_orders','confirmed')}}">Accepted Order's</a></li>
                            <li><a href="{{route('admin_orders','canceled')}}">Canceled Order's</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span>Customer Account </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('create_user.create')}}"> Add Customer</a></li>
                            <li><a href="{{route('create_user.index')}}"> All Customer</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span>Admin Account </span>
                            <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('create_admin.create')}}"> Add Admin</a></li>
                            <li><a href="{{route('create_admin.index')}}"> All Admin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('setting.index')}}" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> Site Setting</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('contact_us.index')}}" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> contact us</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('slider')}}" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> Slider</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('Newsletter.index')}}" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> News letter</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->
