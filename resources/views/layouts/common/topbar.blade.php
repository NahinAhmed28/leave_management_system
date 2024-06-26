<style>
    .notification-detail a:hover {
        text-decoration: none;
    }
</style>

<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200"
        style="background: rgb(125,235,119); !important;
background: linear-gradient(90deg, rgba(125,235,119,1) 0%, rgba(118,242,111,1) 61%, rgba(0,78,255,1) 100%); !important;">
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-dark " style="background-color: #7deb77 !important;">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="" class="m-brand__logo-wrapper">
                            <img src="{{ asset('assets/icon/a2i_logo.jpg') }}"  width="140px" height="60px" alt="" style="text-align: center; border-radius: 9px"/>

                        </a>
                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">

                        <!-- BEGIN: Left Aside Minimize Toggle -->
                        <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Responsive Header Menu Toggler -->
{{--                        <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">--}}
{{--                            <span></span>
{{--                        </a>--}}

                        <!-- END -->

                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>

                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>

            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                <!-- BEGIN: Horizontal Menu -->
                <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                <!-- END: Horizontal Menu -->

                <!-- BEGIN: Topbar -->
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                                <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                    <span class="m-nav__link-icon">
                                        <span class="m-nav__link-icon-wrapper"><i class="flaticon-alarm"></i></span>
                                        {{-- @if( $unseenNotifications != 0 )
                                            <span class="m-nav__link-badge m-badge m-badge--danger"> {{ $unseenNotifications }} </span>
                                        @endif--}}
                                    </span>
                                </a>
                                <div class="m-dropdown__wrapper" style="left: -5rem !important;">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center" style="background-color: #56bfa399;">
                                          <a href="#">
{{--                                              <span class="m-dropdown__header-title">{{\App\Models\Contact::count()}} Public Messages</span>--}}
                                          </a>

                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                   <span class="m-topbar__userpic">
                                      {{-- @php $imagePath = isset(Auth::user()->user_image) ? Auth::user()->user_image : 'default.png'; @endphp
                                        <img class="m--img-rounded m--marginless m--img-centered" src="{{url('storage/user_image/'.$imagePath)}}" alt="User image">--}}
                                       @php $imagePath = isset(Auth::user()->image) ?  asset('assets/uploads/users/'.Auth::user()->image)  : 'https://png.pngtree.com/png-vector/20190625/ourmid/pngtree-business-male-user-avatar-vector-png-image_1511454.jpg'; @endphp
                                       <img class="m--img-rounded m--marginless m--img-centered" style="max-height: 50px" src="{{isset(Auth::user()->image) ?  asset($imagePath)  : asset('assets/images/profile.jpg')}}" alt="User image">
{{--                                        <img class="m--img-rounded m--marginless m--img-centered" src="https://png.pngtree.com/png-vector/20190625/ourmid/pngtree-business-male-user-avatar-vector-png-image_1511454.jpg" alt="User image">--}}
                                    </span>

                                    <span class="m-nav__link-icon m-topbar__usericon  m--hide">
													<span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
												</span>
                                    <span class="m-topbar__username m--hide">Nick</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center">

                                                <div class="m-card-user m-card-user--skin-light">
                                                    <div class="m-card-user__pic">
                                                        @php $imagePath = isset(Auth::user()->image) ?  asset('assets/uploads/users/'.Auth::user()->image)  : 'https://png.pngtree.com/png-vector/20190625/ourmid/pngtree-business-male-user-avatar-vector-png-image_1511454.jpg'; @endphp
                                                        <img class="m--img-rounded m--marginless" src="{{isset(Auth::user()->image) ?  asset($imagePath)  : asset('assets/images/profile.jpg')}}" alt="User image">
                                                    </div>

                                                    <div class="m-card-user__details">

                                                       <span class="m-card-user__name m--font-weight-500">
                                                             {{ Auth::user()->name }}
                                                            </span>
                                                        <a class="m-card-user__email m--font-weight-300 m-link">
                                                            {{ Auth::user()->email }}
                                                        </a>

                                                    </div>
                                                </div>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">My Profile</span>
                                                                        </span>
                                                                    </span>
                                                                </a>

                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
{{--                                                            <a href="" class="btn m-btn--pill btn-block btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"--}}
{{--                                                               onclick="event.preventDefault();--}}
{{--                                                               document.getElementById('logout-form').submit();">Logout</a>--}}

                                                                <a class="btn m-btn--pill btn-block btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>


                                                            <form id="logout-form" action="" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- END: Topbar -->
            </div>
        </div>
    </div>
</header>
