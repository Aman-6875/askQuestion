<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
            <li class="active"><a href="/admin-dashboard" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-home"></span>
                    <p>Dashboard</p>
                </a></li>


            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-th"></span>
                    <p>Categories</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('category.index') }}">All Categories</a></li>
                    {{-- <li><a href="layout-boxed.html">Boxed Page</a></li> --}}
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-th"></span>
                    <p>Comments</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('comments.index') }}">All Comments</a></li>
                    {{-- <li><a href="layout-boxed.html">Boxed Page</a></li> --}}
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-th"></span>
                    <p>Questions</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('questions.index') }}">All Questions</a></li>
                    {{-- <li><a href="layout-boxed.html">Boxed Page</a></li> --}}
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-th"></span>
                    <p>Users</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('users.index') }}">All Users</a></li>
                    {{-- <li><a href="layout-boxed.html">Boxed Page</a></li> --}}
                </ul>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
