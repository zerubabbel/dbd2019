
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
  
   <a class="navbar-brand responsive" href="#"><img src={{asset('img/logo.jpg')}} class="rounded" width="80" height="80" class="d-inline-block align-top" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="dcollapse navbar-collapse flex-column align-items-start ml-lg-2 ml-0">    
                    <!-- Top Part Of Navbar -->
                    <ul class="navbar-nav ml-auto" id="login_section">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
                    <!--Top part of navbar-->
                    <!-- Bottom Part Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item active">
                         <a class="nav-link" href=".">Home <span class="sr-only">(current)</span></a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="/contact">Contact</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#">About</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#">Shopper Solutions</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#">Store</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="/encodercalc">Encoder Calculator</a>
                       </li>
                    </ul>
                    <!--Bottom part of navbar-->
          </div><!--d-inline-block ml-auto-->
        </div><!--collapse navbar-collapse-->

</nav>