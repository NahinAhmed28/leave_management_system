<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
        class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
         m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
        <ul class="m-menu__nav ">


            {{-- <li class="m-menu__item {{ Request::is('home') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">--}}
            <li class="m-menu__item  {{ Request::is('admin/home') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
                <a href="" class="m-menu__link " >
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon fas fa-chart-line"></i>
                    <span class="m-menu__link-text">Dashboard</span>
                </a>
            </li>


        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->
