
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                
                <li> <a class="waves-effect waves-dark" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-graduation-cap"></i><span class="hide-menu">Academics </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('subject')}}">Subject</a></li>
                        <li><a href="{{route('class')}}">Class</a></li>
                    
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Course Manage </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.course.list')}}">Courses</a></li>
                        <li><a href="{{route('admin.course.lessons')}}">Lessons</a></li>
                        <li><a href="{{route('category')}}">Main Category</a></li>
                        <li><a href="{{route('subcategory')}}">Sub Category</a></li>
                        <li><a href="{{route('attribute')}}">Attribute</a></li>
                        
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu"> Enrolment </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.orderList')}}"> Enrol History </a></li>
                        <li><a href="#">Enrol Student </a></li>
                       
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Student </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('student.list')}}">Student</a></li>
                        <li><a href="{{route('student.walletHistory')}}">Wallet Balance</a></li>
                       
                    </ul>
                </li>

                <li> <a class="waves-effect waves-dark" href="{{route('adminReviewList')}}" aria-expanded="false"><i class="fa fa-comments"></i><span class="hide-menu">Reviews</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{route('paymentGateway')}}" aria-expanded="false"><i class="fa fa-dollar-sign"></i><span class="hide-menu">Payment Gateway</span></a></li>

                
                

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Settings</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('generalSetting')}}">General Setting</a></li>
                        <li><a href="{{route('logoSetting')}}">Logo Setting</a></li>
                        <li><a href="{{route('socialSetting')}}">Social Link</a></li>
                    </ul>
                </li>

                <li> <a class="waves-effect waves-dark" href="{{ route('adminLogout') }}"  aria-expanded="false"><i class="fa fa-power-off text-success"></i><span class="hide-menu">Log Out</span></a></li>
               
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>