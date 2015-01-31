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

      <!-- Search Bar -->
      <form class="navbar-form navbar-left col-lg-12" action="search" method="POST">
        <input class="form-control" placeholder="Search" type="text">
          <!--
          <select class="selectpicker" data-width="auto" id="inputAccess">
            <option>Book</option>
            <option>User</option>
          </select>
          -->
      </form>

      <ul class="nav navbar-nav">
        <!-- Links to particular book-->
  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">
            Particular Book <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a href="#"> Course </a>
            </li>
            <li><a href="#"> Reference </a>
            </li>
            <li><a href="#"> NonLendable </a>
            </li>
            <li class="divider"></li>
            <li><a href="{{URL::to('particularbook')}}"> All </a>
            </li>
          </ul>
        </li>



        <!-- Links to books (the parameters will do a advance listing) -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">
            Book <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a href="#"> Course </a>
            </li>
            <li><a href="#"> Reference </a>
            </li>
            <li><a href="#"> NonLendable </a>
            </li>
            <li class="divider"></li>
            <li><a href="{{URL::to('book')}}"> All </a>
            </li>
          </ul>
        </li>
        <!-- Links to users (the parameters will do a advance listing) -->
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">
            User <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a href="#"> Admin </a>
            </li>
            <li><a href="#"> Librarian </a>
            </li>
            <li><a href="#"> Verifier </a>
            </li>
            <li><a href="#"> Students </a>
            </li>
            <li class="divider"></li>
            <li><a href="{{URL::to('user')}}"> All </a>
            </li>
          </ul>
        </li>
      </ul>

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


    </div>
  </div>
</nav>
