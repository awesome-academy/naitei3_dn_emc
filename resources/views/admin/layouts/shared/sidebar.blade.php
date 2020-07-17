<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>{{ trans('sidebar.dashboard') }}</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>{{ trans('sidebar.data') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('manage_users') }}">{{ trans('sidebar.mUser') }}</a></li>
                        <li><a href="{{ route('manage_categories') }}">{{ trans('sidebar.mCategory') }}</a></li>
                        <li><a href="basic_table.html">{{ trans('sidebar.mProduct') }}</a></li>
                        <li><a href="{{ route('manage_orders') }}">{{ trans('sidebar.mListOrder') }}</a></li>
                        <li><a href="basic_table.html">{{ trans('sidebar.mListRequest') }}</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        {{-- Cho nay khong dung --}}
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
                        <li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>{{ trans('sidebar.mail') }} </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">{{ trans('sidebar.ib') }}</a></li>
                        <li><a href="mail_compose.html">{{ trans('sidebar.cMail') }}</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>{{ trans('sidebar.chart') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
