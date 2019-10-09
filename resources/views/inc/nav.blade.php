<nav id="ttr_menu" class="navbar-default navbar">
    <div id="ttr_menu_inner_in">
        <div id="navigationmenu">
            <div class="ttr_menu_element_alignment container">
            </div>
            <div class="ttr_menu_logo">
            </div>
            <div class="navbar-header">
                <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="ttr_menu_toggle_button">
<span class="sr-only">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</span>
                    <span class="ttr_menu_button_text">
Menu
</span>
                </button>
            </div>
            <div class="menu-center collapse navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="ttr_menu_items nav navbar-nav navbar-left "  style="padding-left: 30px; padding-top: 50px; ">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item" style="padding-right: 20px">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown" >
                            <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-left"  aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="width: 40px;" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

                <ul class="ttr_menu_items nav navbar-nav navbar-right">
                    <li class="ttr_menu_items_parent dropdown active"><a href="index" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
                        <hr class ="horiz_separator"/>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown"><a href="about" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About Us</a>
                        <hr class ="horiz_separator"/>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown"><a href="services" class="ttr_menu_items_parent_link_arrow dropdown-toggle" data-toggle="dropdown"><span class="menuchildicon"></span>Services</a>
                        <hr class ="horiz_separator"/>
                        <ul class="child dropdown-menu" role="menu">
                            <li><a href="business-growth"><span class="menuchildicon"></span>Business Growth</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="research-and-strategy"><span class="menuchildicon"></span>Research and Strategy</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="liabilities-management"><span class="menuchildicon"></span>Liabilities Management</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="clearing-and-execution"><span class="menuchildicon"></span>Clearing and Execution</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="product-solutions"><span class="menuchildicon"></span>Product Solutions</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="transition-services"><span class="menuchildicon"></span>Transition Services</a>
                            </li> <!-- 1st level child list closing -->
                        </ul>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown"><a href="resource" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Resource</a>
                        <hr class ="horiz_separator"/>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown"><a href="contact" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact</a>
                    </li> <!-- main menu list closing -->
                </ul>
            </div>
        </div>
    </div>
</nav>
