@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
           @endcan

            
            <!-- Menu Bar -->
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-commenting"></i>
                    <span class="title">Configrution</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-users"></i>
                    <span class="title">Members</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-gift"></i>
                    <span class="title">Voucher</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-plane"></i>
                    <span class="title">Holiday Request</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">Payment Update</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-cc-mastercard"></i>
                    <span class="title">AMC Update</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-commenting"></i>
                    <span class="title">Customer Support</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>
 
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
