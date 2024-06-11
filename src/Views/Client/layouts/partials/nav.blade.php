    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">
                <a class="navbar-brand order-1" href="{{ url('') }}">
                    <img class="img-fluid" width="100px" src="{{ asset('assets/client/images/logo.png') }}"
                        alt="Reader | Hugo Personal Blog Template">
                </a>
                <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('') }}">Trang Chủ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('list') }}">Danh Sách</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('info') }}">Thông Tin</a>
                        </li>

                        <li class="nav-item">
                            @if (is_admin())
                                <a class="nav-link" href="{{ url('admin') }}">Quản trị</a>
                            @endif
                        </li>

                        <li class="nav-item">
                            @if (!is_logged())
                                <a class="nav-link" href="{{ url('auth/login') }}">Login</a>
                            @endif
            
                            @if (is_logged())
                                <a class="nav-link" href="{{ url('auth/logout') }}">Logout</a>
                            @endif
                        </li>

                    </ul>
                </div>

                <div class="order-2 order-lg-3 d-flex align-items-center">

                    <!-- search -->
                    <form class="search-bar">
                        <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                    </form>

                    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                        data-target="#navigation">
                        <i class="ti-menu"></i>
                    </button>
                </div>

            </nav>
        </div>
    </header>
    <!-- /navigation -->