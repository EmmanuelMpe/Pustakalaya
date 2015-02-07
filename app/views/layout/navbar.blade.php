<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">
      <a href="{{{ URL::to('/') }}}" class="navbar-brand"> Pustakalaya </a>
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-main">

      <ul class="nav navbar-nav navbar-right">
        @if (!Auth::check())
        <li>
          <a href="{{URL::to('/login')}}">Login</a>
        </li>
        @else
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">{{{Auth::user()->name}}}
            <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li>
              <a href="#"> Profile </a>
              <li>
                <a href="{{{ URL::to('/edit') }}}"> Edit Profile </a>
              </li>
              <li>
                <a href="{{{ URL::to('/changepassword') }}}"> Change Password</a>
              </li>
              <li class="divider">
              </li>
              <li>
                <form action="{{URL::to('/logout')}}" method="POST" name="logoutForm">
                  <input type="hidden" name="really" value="yes">
                </form>
                <a href="#" onClick="document.logoutForm.submit()"> Log Out </a>
              </li>
          </ul>
          </li>
          @endif
      </ul>


      @if (Auth::check())
      <!-- Search Text -->
      <!-- Get data from hidden fields -->
      <form class="navbar-form col-lg-12 navbar-left" action="search" method="POST">
        <input class="form-control" placeholder="Search" type="text">
        <input class="form-control" name="type-select-topic" id="type-select-topic" type="hidden">
        <input class="form-control" name="book-select-topic" id="book-select-topic" type="hidden">
        <input class="form-control" name="user-select-topic" id="user-select-topic" type="hidden">
        <input class="form-control" name="depart-select-topic" id="depart-select-topic" type="hidden">
        <input class="form-control" name="year-select-topic" id="year-select-topic" type="hidden">
        <button class="btn-primary form-control" type="submit">Go</button>
      </form>


      <div class="select-sub" id="type-select-sub">
        <ul class="nav navbar-nav">
          <li class="dropdown interchange">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Select <b class="caret"></b></a>
            <ul class="dropdown-menu" id="type-select">
              <li><a href="#" id="book-select">Book</a>
              </li>
              <li><a href="#" id="user-select">User</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="select-sub" id="book-select-sub">
        <ul class="nav navbar-nav">
        <li class="dropdown interchange">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">All <b class="caret"></b></a>
          <ul class="dropdown-menu" id="book-select">
            <li><a href="#" id="refernce-select">Reference</a>
            </li>
            <li><a href="#" id="lendable-select">Lendable</a>
            </li>
            <li><a href="#" id="nonlendable-select">NonLendable</a>
            </li>
            <li class="divider"></li>
            <li><a href="#">All</a>
            </li>
          </ul>
        </li>
        </ul>
      </div>

      <div class="select-sub" id="user-select-sub">
        <ul class="nav navbar-nav">
        <li class="dropdown interchange">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">All <b class="caret"></b></a>
          <ul class="dropdown-menu" id="user-select">
            <li><a href="#" id="admin-select">Admin</a>
            </li>
            <li><a href="#" id="employee-select">Employee</a>
            </li>
            <li><a href="#" id="student-select">Student</a>
            </li>
            <li class="divider"></li>
            <li><a href="#">All</a>
            </li>
          </ul>
        </li>
        </ul>
      </div>

      <div class="select-sub" id="student-select-sub">
        <ul class="nav navbar-nav">
        <li class="dropdown interchange">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">All <b class="caret"></b></a>
          <ul class="dropdown-menu" id="year-select">
            <li><a href="#" id="67-select">067</a>
            </li>
            <li><a href="#" id="68-select">068</a>
            </li>
            <li><a href="#" id="69-select">069</a>
            </li>
            <li class="divider"></li>
            <li><a href="#">All</a>
            </li>
          </ul>
        </li>

        <li class="dropdown interchange">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">All <b class="caret"></b></a>
          <ul class="dropdown-menu" id="depart-select">
            <li><a href="#" id="bex-select">BEX</a>
            </li>
            <li><a href="#" id="bel-select">BEL</a>
            </li>
            <li><a href="#" id="bct-select">BCT</a>
            </li>
            <li class="divider"></li>
            <li><a href="#">All</a>
            </li>
          </ul>
        </li>
        </ul>
      </div>
      @endif

    </div>
  </div>
</nav>
