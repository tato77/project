 
<div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
        
                                <img src="{{ asset('images/' . Auth::user()->image )}}" class="rounded">
                                
                            </a>
                         </li>   
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">{{ Auth::user()->name }}</span>
                                
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="{{  url('home') }}" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">الرئيسية</span>
                                    </a>
                                </li>    
                            </ul>
                        </li>
                        
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-off"></i>
                                <span class="title">حسابي</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="/changePassword" class="nav-link ">
                                        <span class="title">تغير كلمة المرور</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       

                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">الخطابات</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ route('latters.create')}}" class="nav-link ">
                                        <span class="title">انشاء خطاب جديد</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('latters.index')}}" class="nav-link ">
                                        <span class="title">الخطابات الواردة</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{  url('outbox') }}" class="nav-link ">

                                        <span class="title">الخطابات المرسلة</span>
                                    </a>
                                </li>
                                 @can('isAdmin')
                                <li class="nav-item  ">
                                    <a href="{{  url('Department-Reports') }}" class="nav-link ">

                                        <span class="title">تقرير خطابات الاقسام</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{  url('user-Reports') }}" class="nav-link ">

                                        <span class="title">تقرير خطابات المستخدمين</span>
                                    </a>
                                </li>
                                 @endcan
                            </ul>
                        </li>
                       @can('isAdmin')
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">انواع الخطابات</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                
                                <li class="nav-item  ">
                                    <a href="{{ route('lattertypes.index')}}" class="nav-link ">
                                        <span class="title">عرض انواع الخطابات</span>
                                    </a>
                                </li>
                                
                                <li class="nav-item  ">
                                    <a href="{{ route('lattertypes.create')}}" class="nav-link ">
                                        <span class="title">انشاء نوع خطاب</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        @can('isAdmin')
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-th"></i>
                                <span class="">الاقسام</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ route('depts.index')}}" class="nav-link ">
                                        <span class="title">عرض الاقسام</span>
                                    </a>
                                </li>
                                
                                <li class="nav-item  ">
                                    <a href="{{ route('depts.create')}}" class="nav-link ">
                                        <span class="title">انشاء قسم جديد</span>
                                    </a>
                                </li>                  
                            </ul>
                        </li>
                        @endcan
                        @can('isAdmin')
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">الموظفين</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ route('users.index')}}" class="nav-link ">
                                        <span class="title">عرض الموظفين</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('users.create')}}" class="nav-link ">
                                        <span class="title">اضافة موظف</span>
                                    </a>
                                </li>
                        
                            </ul>
                        </li>
                        @endcan
                        @can('isAdmin')
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-education"></i>
                                <span >الدرجات الوظيفية</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">

                                    <a href="{{ route('grads.index')}}" class="nav-link ">
                                        <span class="title">عرض الدرجات الوظيفيه</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('grads.create')}}" class="nav-link ">
                                        <span class="title">اضافة درجة وظيفية</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        @can('isAdmin')
                        <li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">الوظائف</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ route('jobs.index')}}" class="nav-link ">
                                        <span class="title">عرض الوظائف</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('jobs.create')}}" class="nav-link ">
                                        <span class="title">أضافة وظيفه</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        @can('isManager')
                       <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">اللجان</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ Request::is('latters') ? "active" : ""}}">
                                    <a href="{{ route('committees.index')}}" class="nav-link ">
                                        <span class="title">عرض اللجان</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('committees.create')}}" class="nav-link ">
                                        <span class="title">تكوين لجنة</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        @can('isManager')
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">اعضاء اللجان</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="">
                                    <a href="{{ route('committeemembers.index')}}" class="nav-link ">
                                        <span class="title">عرض اعضاء اللجان</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        <li class="nav-item  "> 
                            <a href="" class="nav-link ">
                                        <i class="icon-call-end"></i>
                                        <span class="title">الدعم الفنى 249911405218</span>
                                    </a>
                        </li>
                        
                        <li class="nav-item  ">
                            <a href="{{ route('user.logout') }}" class="nav-link ">
                                        <i class=""></i>
                                        <span class="title">خروج</span>
                            </a>
                            
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>