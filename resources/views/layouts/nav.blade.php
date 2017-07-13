
<nav class="navbar is-primary" style="margin-bottom: 1.5rem;">
    <div class="navbar-brand">
        <a class="navbar-item" href="">
            {{--<img src="" alt="" width="112" height="28">--}}
        </a>

        <a class="navbar-item is-hidden-desktop" href="" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
        </a>

        <a class="navbar-item is-hidden-desktop" href="" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-twitter"></i>
      </span>
        </a>

        <div class="navbar-burger burger" data-target="navMenuExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenuExample" class="navbar-menu ">
        <div class="navbar-start">
            <a class="navbar-item" href="/" >
                Home
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link  is-active" href="/documentation/overview/start/">
                    Docs
                </a>
                <div class="navbar-dropdown ">
                    <a class="navbar-item " href="/documentation/overview/start/">
                        Overview
                    </a>
                    <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
                        Modifiers
                    </a>
                    <a class="navbar-item " href="http://bulma.io/documentation/grid/columns/">
                        Grid
                    </a>
                    <a class="navbar-item " href="http://bulma.io/documentation/elements/box/">
                        Elements
                    </a>

                    <a class="navbar-item is-active" href="http://bulma.io/documentation/components/breadcrumb/">
                        Components
                    </a>

                    <a class="navbar-item " href="http://bulma.io/documentation/layout/container/">
                        Layout
                    </a>
                    <hr class="navbar-divider">
                    <div class="navbar-item">
                        <div>version <p class="has-text-info">0.4.3</p></div>
                    </div>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link " href="http://bulma.io/blog/">
                    Blog
                </a>
                <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">

                    <a class="navbar-item" href="/2017/03/10/new-field-element/">
                        <div class="navbar-content">
                            <p>
                                <small class="has-text-info">10 Mar 2017</small>
                            </p>
                            <p>New field element (for better controls)</p>
                        </div>
                    </a>

                    <a class="navbar-item" href="/2016/04/11/metro-ui-css-grid-with-bulma-tiles/">
                        <div class="navbar-content">
                            <p>
                                <small class="has-text-info">11 Apr 2016</small>
                            </p>
                            <p>Metro UI CSS grid with Bulma tiles</p>
                        </div>
                    </a>

                    <a class="navbar-item" href="/2016/02/09/blog-launched-new-responsive-columns-new-helpers/">
                        <div class="navbar-content">
                            <p>
                                <small class="has-text-info">09 Feb 2016</small>
                            </p>
                            <p>Blog launched, new responsive columns, new helpers</p>
                        </div>
                    </a>

                    <a class="navbar-item" href="http://bulma.io/blog/">
                        More posts
                    </a>
                    <hr class="navbar-divider">
                    <div class="navbar-item">
                        <div class="navbar-content">
                            <div class="level is-mobile">
                                <div class="level-left">
                                    <div class="level-item">
                                        <strong>Stay up to date!</strong>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="level-item">
                                        <a class="button is-rss is-small" href="http://bulma.io/atom.xml">
                      <span class="icon is-small">
                        <i class="fa fa-rss"></i>
                      </span>
                                            <span>Subscribe</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        @if (Auth::guest())
                        <a class="button is-transparent" href="{{ route('login') }}">
                                          <span class="icon">
                                             <i class="fa fa-lock"></i>
                                          </span>
                            <span>Login</span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button is-transparent" href="{{ route('register') }}">
                                      <span class="icon">
                                         <i class="fa fa-lock"></i>
                                      </span>
                            <span>Register</span>
                        </a>
                    </p>
                    @else
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle button is-transparent" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span>{{ Auth::user()->name }}</span> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="text-align: center;">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endif
                    {{--<p class="control">--}}
                                    {{--<a class="button is-transparent" href="/register">--}}
                                      {{--<span class="icon">--}}
                                         {{--<i class="fa fa-lock"></i>--}}
                                      {{--</span>--}}
                                        {{--<span>Sign Up</span>--}}
                                    {{--</a>--}}
                    {{--</p>--}}
                    {{--<p class="control">--}}
                                    {{--<a class="button is-transparent" href="login">--}}
                                      {{--<span class="icon">--}}
                                        {{--<i class="fa fa-lock"></i>--}}
                                      {{--</span>--}}
                                        {{--<span>Login</span>--}}
                                    {{--</a>--}}
                    {{--</p>--}}
                </div>
            </div>
        </div>
    </div>
  </nav>


