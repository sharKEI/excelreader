<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  {{ URL::current() == route('home') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="{{ route('home') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Dashboard</span>
                            <span class="m-menu__link-badge">
                            </span>
                        </span>
                    </span>
                </a>
            </li>

            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Settings</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>

            <li class="m-menu__item  m-menu__item--submenu m-menu__item--open" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Manage</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item {{ URL::current() == route('object.index') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('object.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Objects</span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ URL::current() == route('place.index') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('place.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Places</span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ URL::current() == route('quarter.index') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('quarter.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Quarters</span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ URL::current() == route('excels.index') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('excels.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Excels</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Reports</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Assessment Reports FY2018</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Requirement_Study_for_GIS_Data_Analytics_in_dPET_20181224_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">dPET</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Requirement_Study_for_GIS_Data_Analytics_in_DNMP_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">DNMP</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Final_Report_MRU_Assessment_20181224_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">MRU Boundary</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Final_Report_Land_Based_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Land Based Data</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Final_Report_Land_Parcel_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Land Parcel (NDCDB)</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Requirement_Study_for_GIS_Data_Analytics_in_Technical Losses_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Technical Losses</span></a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
    </div>
    <!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->