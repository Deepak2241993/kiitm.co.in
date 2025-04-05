<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{url('/admin/dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Sections</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Teams</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{url('/admin/teams')}}" key="t-light-sidebar">All Team Member</a></li>
                                <li><a href="{{url('/admin/teams/create')}}" key="t-compact-sidebar">Add New Member</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Faqs</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{url('/admin/faqs')}}" key="t-light-sidebar">All Faqs</a></li>
                                <li><a href="{{url('/admin/faqs/create')}}" key="t-compact-sidebar">Add New Faq</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Partners & Collage</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{url('/admin/clients')}}" key="t-light-sidebar">All Partners</a></li>
                                <li><a href="{{url('/admin/clients/create')}}" key="t-compact-sidebar">Add New Partners</a></li>
                            </ul>
                        </li>
                       
                       
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Testimonials</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{url('/admin/testimonials')}}" key="t-light-sidebar">All Testimonials</a></li>
                                <li><a href="{{url('/admin/testimonials/create')}}" key="t-compact-sidebar">Add New Testimonials</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Sliders</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{url('/admin/sliders')}}" key="t-tui-calendar">All Sliders</a></li>
                                <li><a href="{{url('/admin/sliders/create')}}" key="t-full-calendar">Add New Sliders</a></li></ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Programs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Programs Category</a>
                            <ul class="sub-menu" aria-expanded="true">
                            <li><a href="{{url('/admin/categories')}}" key="t-light-sidebar">All Category</a></li>
                            <li><a href="{{url('/admin/categories/create')}}" key="t-compact-sidebar">Add New Category</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="all-programs">All Programs</a>
                            <ul class="sub-menu" aria-expanded="true">
                            <li><a href="{{url('/admin/pages')}}" key="programs-list">Program List</a></li>
                            <li><a href="{{url('/admin/pages/create')}}" key="add-new-programs">Add Programs</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Blogs/News</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-layouts">Blog</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <li><a href="{{url('/admin/blogs')}}" key="t-light-sidebar">All Blog </a></li>
                                    <li><a href="{{url('/admin/blogs/create')}}" key="t-compact-sidebar">Add New Blog</a></li>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">JOB</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <li><a href="{{url('/admin/jobs')}}" key="t-light-sidebar">All Job </a></li>
                            <li><a href="{{url('/admin/jobs/create')}}" key="t-compact-sidebar">Add New Job</a></li>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Static Content</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('/admin/contents')}}" key="t-tui-content">All Content</a></li>
                        
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Enquiry</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('/admin/enquirys')}}" key="t-tui-content">Enquiry Contact</a></li>
                        <li><a href="{{url('/admin/career')}}" key="t-tui-content">Enquiry Career</a></li>
                        <li><a href="{{url('/admin/subscribers')}}" key="t-tui-content">Subscriber</a></li>
                        
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Newsletter</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('/admin/newsletters')}}" key="t-tui-calendar">All Newsletter</a></li>
                        <li><a href="{{url('/admin/newsletters/create')}}" key="t-full-calendar">Add New Newsletter</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Services Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('/admin/pages')}}" key="t-tui-calendar">All Pages</a></li>
                        <li><a href="{{url('/admin/pages/create')}}" key="t-full-calendar">Add New Page</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Portfolio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('/admin/portfolios')}}" key="t-tui-Portfolio">All Portfolios</a></li>
                        <li><a href="{{url('/admin/portfolios/create')}}" key="t-full-Portfolio">Add New Portfolio</a></li>
                        
                    </ul>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Web Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('/admin/settings')}}" key="t-tui-calendar">Settings</a></li>
                        {{-- <li><a href="{{url('/admin/settings/create')}}" key="t-full-calendar">Update Web Settings</a></li> --}}
                        
                    </ul>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->