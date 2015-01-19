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
      <form class="navbar-form navbar-left">
        <input class="form-control col-lg-8" placeholder="Search" type="text">
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
            <li><a href="/">Home</a>
            </li>
            <li><a href="/404">404</a>
            </li>
            <li><a href="/addbooks"> Add Books </a>
            </li>
            <li><a href="/admin"> Admin </a>
            </li>
            <li><a href="/booklist"> Book List </a>
            </li>
            <li><a href="/contact"> Contact Us </a>
            </li>
            <li><a href="/edit"> Edit Profile </a>
            </li>
            <li><a href="/forget"> Forget Password </a>
            </li>
            <li><a href="/history"> History </a>
            </li>
            <li><a href="/librarian"> Librarian </a>
            </li>
            <li><a href="/login"> Login </a>
            </li>
            <li><a href="/password"> Change Password </a>
            </li>
            <li><a href="/search"> Search </a>
            </li>
            <li><a href="/student"> Student </a>
            </li>
            <li><a href="/verifier"> Verifier </a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- temporary links ended -->

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{{ URL::to('/contact') }}}"> Contact Us </a>
        </li>
        <li>
          <a href="{{{ URL::to('/login') }}}"> Log in </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
