<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="relative">
            <div class="user-panel p-3 user-panel-bg light text-white mb-2">
                <div class="mt-5
            ">
                    <div class="float-left avatar avatar-md  mt-1 mr-2 image">
                        @if (Auth::user()->profile != Null)
                            <img src="{{ asset('image/'.Auth::user()->profile) }}" class="user-image" alt="User Image">
                        @else
                            <span class="avatar-letter avatar-letter-{{ substr(Auth::user()->name, 0, 1); }} circle"></span>
                        @endif
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-1">{{ strtoupper(Auth::user()->name)}}</h6>
                        <p class="font-weight-light"><small>{{ strtoupper(Auth::user()->email)}}</small></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            @role('super-admin')
                <li class="treeview"><a href="#"><i class="icon icon-account_box s-18"></i>User Management<i
                        class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('user.index')}}"><i class="icon icon-users"></i>All Users</a>
                        </li>
                        <li><a href="{{route('user.create')}}"><i class="icon icon-user-plus"></i>Add User</a>
                        </li>
                        {{-- <li><a href="{{route('role.index')}}"><i class="icon icon-circle-o"></i>All Roles</a>
                        </li>
                        <li><a href="{{route('role.create')}}"><i class="icon icon-add"></i>Add Role</a>
                        </li>
                        <li><a href="{{route('permission.index')}}"><i class="icon icon-eye3"></i>All Permissions</a>
                        </li>
                        <li><a href="{{route('permission.create')}}"><i class="icon icon-add"></i>Add Permission</a>
                        </li> --}}
                    </ul>
                </li>
            @endrole

            @role('super-admin')
                <li class="treeview"><a href="#"><i class="icon icon-desktop s-18"></i>Courses<i
                        class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                        @can('show-course')
                            <li><a href="{{route('course.index')}}"><i class="icon icon-desktop2"></i>All courses</a>
                            </li>
                        @endcan
                        @can('add-course')
                            <li><a href="{{route('course.create')}}"><i class="icon icon-desk-chair"></i>Add cource</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endrole

            {{-- @role('branch-incharge') --}}
                    <li><a href="{{route('location.index')}}"><i class="icon icon-desktop2"></i>Locations</a>
                    </li>
            {{-- @endrole --}}
        </ul>
    </section>
</aside>
