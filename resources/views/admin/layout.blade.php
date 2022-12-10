<!DOCTYPE html>
<html>
@include('admin.includes.head')

<body class="page-header-fixed">
    <div class="overlay"></div>
    {{-- <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
        <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i
                    class="fa fa-times"></i></a></h3>
        <div class="slimscroll">
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar2.png"
                    alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar3.png"
                    alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar4.png"
                    alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar5.png"
                    alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar2.png"
                    alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar3.png"
                    alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar4.png"
                    alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="/admin_assets/images/avatar5.png"
                    alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
        </div>
    </nav>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right"
                id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
        <div class="slimscroll chat">
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="/admin_assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Hi There!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Hi! How are you?
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="/admin_assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Fine! do you like my project?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Yes, It's clean and creative, good job!
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="/admin_assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Thanks, I tried!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Good luck with your sales!
                </div>
            </div>
        </div>
        <div class="chat-write">
            <form class="form-horizontal" action="javascript:void(0);">
                <input type="text" class="form-control" placeholder="Say something">
            </form>
        </div>
    </nav> --}}
    {{-- <div class="menu-wrap">
        <nav class="profile-menu">
            <div class="profile"><img src="/admin_assets/images/profile-menu-image.png" width="60"
                    alt="David Green" /><span>David Green</span></div>
            <div class="profile-menu-list">
                <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div> --}}
    {{-- <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i
                        class="fa fa-times"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form --> --}}
    <main class="page-content content-wrap">
        @include('admin.includes.navbar')
        @include('admin.includes.sidebar')
        <div class="page-inner">
            @yield('content')
            <div class="page-footer">
                <p class="no-s">2022 &copy; Laravel Devs.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

    <div class="cd-overlay"></div>


    <!-- Javascripts -->
    {{-- <script src="/admin_assets/plugins/jquery/jquery-2.1.4.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    <script src="/admin_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/admin_assets/plugins/pace-master/pace.min.js"></script>
    <script src="/admin_assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/admin_assets/plugins/switchery/switchery.min.js"></script>
    <script src="/admin_assets/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="/admin_assets/plugins/offcanvasmenueffects/js/classie.js"></script>
    <script src="/admin_assets/plugins/offcanvasmenueffects/js/main.js"></script>
    <script src="/admin_assets/plugins/waves/waves.min.js"></script>
    <script src="/admin_assets/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="/admin_assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="/admin_assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
    <script src="/admin_assets/plugins/toastr/toastr.min.js"></script>
    <script src="/admin_assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admin_assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="/admin_assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="/admin_assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="/admin_assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/admin_assets/plugins/curvedlines/curvedLines.js"></script>
    <script src="/admin_assets/plugins/metrojs/MetroJs.min.js"></script>
    <script src="/admin_assets/js/modern.js"></script>
    <script src="/admin_assets/js/pages/dashboard.js"></script>


</body>


</html>
