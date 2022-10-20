<nav class="navbar navbar-expand-lg  menu_one sticky-nav d-lg-block d-none">
    <div class="container">
        <a class="navbar-brand header_logo" href="/">
            <img class="first_logo sticky_logo" src="/img/logo.png" srcset="/img/logo-2x.png 2x" alt="logo">
            <img class="white_logo main_logo" src="/img/logo-w.png" srcset="/img/logo-w2x.png 2x"
                alt="logo">
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ms-auto">
                <li class="nav-item dropdown submenu active">
                    <a href="/" class="nav-link dropdown-toggle">Home</a>
                </li>
               
                {{-- <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="/all-question" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Forum
                    </a>
                </li> --}}
            </ul>
            @if (Auth::check())
            <div class="right-nav">
                <a class="action_btn btn_small_two btn-text-medium" href="/user-profile">{{Auth::user()->name}}</a>
                <a class="btn_small_two btn-text-medium" href="/logout">Logout</a>
                <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                    <label for="something" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something"></label>
                    <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                </div>
            </div>
            @else 
            <div class="right-nav">
                <a class="action_btn btn_small_two btn-text-medium" href="/sign-in">Sign In</a>
                <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                    <label for="something" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something"></label>
                    <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                </div>
            </div>
            @endif
           
        </div>
    </div>
</nav>
<div class="mobile_main_menu sticky-nav menu_one">
    <div class="container">
        <div class="mobile_menu_left">
            <button type="button" class="navbar-toggler mobile_menu_btn">
                <span class="menu_toggle ">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>
            <a class="navbar-brand header_logo" href="/">
                <img class="sticky_logo " src="/img/logo.png" srcset="/img/logo-2x.png 2x" alt="logo">
                <img class="main_logo white_logo" src="/img/logo-w.png" srcset="/img/logo-w2x.png 2x"
                    alt="logo">
            </a>
        </div>
        <div class="mobile_menu_right">
            <div class="right-nav">
                <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                    <label for="something2" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something2" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something2"></label>
                    <input type="checkbox" name="something2" id="something2" class="dark_mode_switcher">
                </div>
            </div>
        </div>

    </div>
</div>
<div class="side_menu">
    <div class="mobile_menu_header">
        <div class="close_nav">
            <i class="icon_close"></i>
        </div>
        <div class="mobile_logo">
            <a class="navbar-brand header_logo me-0" href="/">
                <img class="sticky_logo main_logo" src="/img/logo.png" srcset="/img/logo-2x.png 2x"
                    alt="logo">
                <img class="white_logo" src="/img/logo-w.png" srcset="/img/logo-w2x.png 2x" alt="logo">
            </a>
        </div>
    </div>
    <div class="mobile_nav_wrapper">
        <nav class="mobile_nav_top">
            <ul class="navbar-nav menu ms-auto">
                <li class="nav-item dropdown submenu active">
                    <a href="/" class="nav-link dropdown-toggle">Home</a>
                </li>
                {{-- <li class="nav-item dropdown submenu ">
                    <a class="nav-link dropdown-toggle" href="/all-question">
                        Forum
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
</div>