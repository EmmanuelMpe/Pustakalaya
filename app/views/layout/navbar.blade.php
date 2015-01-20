
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
      <form class="navbar-form navbar-left col-lg-12">
        <input class="form-control glyphicon glyphicon-search" placeholder="Search" type="text">
      </form>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Books <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a href="#"> Course </a>
            </li>
            <li><a href="#"> Reference </a>
            </li>
            <li class="divider"></li>
            <li><a href="#"> All </a>
            </li>
          </ul>
        </li>
      </ul>

      <!-- temporary links to other pages -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a href="{{{ URL::to('/admin') }}}"> Admin </a>
            </li>
            <li><a href="{{{ URL::to('/reset') }}}"> Forgot Password? </a>
            </li>
            <li><a href="{{{ URL::to('/librarian') }}}"> Librarian </a>
            </li>
            <li><a href="{{{ URL::to('/login') }}}"> Login </a>
            </li>
            <li><a href="{{{ URL::to('/search') }}}"> Search </a>
            </li>
            <li><a href="{{{ URL::to('/student') }}}"> Student </a>
            </li>
            <li><a href="{{{ URL::to('/verifier') }}}"> Verifier </a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- temporary links ended -->

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{{ URL::to('/contact') }}}"> Contact Us </a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Puspe <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a href="#">Fine  <span class="badge"><b>NRS. 44/-</b></span></a>
            </li>
            <li><a href="{{{ URL::to('/edit') }}}"> Edit Profile </a>
            </li>
            <li><a href="{{{ URL::to('/password') }}}"> Change Password</a>
            </li>
            <li class="divider"></li>
            <li><a href="#"> Log Out </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
