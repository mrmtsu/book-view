<!-- SideNav slide-out button -->
<a href="#" data-activates="slide-out" class="btn btn-primary p-3 button-collapse"><i
    class="fas fa-bars"></i></a>

<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav fixed wide sn-bg-1">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li>
      <div class="logo-wrapper sn-ad-avatar-wrapper">
        <a href="#"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
            class="rounded-circle"><span>Anna
            Deynah</span></a>
      </div>
    </li>
    <!--/. Logo -->
    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header waves-effect arrow-r active"><i
              class="sv-slim-icon fas fa-chevron-right"></i>
            Submit blog<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect active">
                  <span class="sv-slim"> SL </span>
                  <span class="sv-normal">Submit listing</span></a>
              </li>
              <li><a href="#" class="waves-effect">
                  <span class="sv-slim"> RF </span>
                  <span class="sv-normal">Registration form</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i
              class="sv-slim-icon far fa-hand-point-right"></i>
            Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">
                  <span class="sv-slim"> FB </span>
                  <span class="sv-normal">For bloggers</span></a>
              </li>
              <li><a href="#" class="waves-effect">
                  <span class="sv-slim"> FA </span>
                  <span class="sv-normal">For authors</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon fas fa-eye"></i> About<i
              class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">
                  <span class="sv-slim"> I </span>
                  <span class="sv-normal">Introduction</span></a>
              </li>
              <li><a href="#" class="waves-effect">
                  <span class="sv-slim"> MM </span>
                  <span class="sv-normal">Monthly meetings</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon far fa-envelope"></i>
            Contact me<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="#" class="waves-effect">
                  <span class="sv-slim"> F </span>
                  <span class="sv-normal">FAQ</span>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                  <span class="sv-slim"> W </span>
                  <span class="sv-normal">Write a message</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li><a id="toggle" class="waves-effect"><i class="sv-slim-icon fas fa-angle-double-left"></i>Minimize
            menu</a>
        </li>
      </ul>
    </li>
    <!--/. Side navigation links -->
  </ul>
  <div class="sidenav-bg rgba-blue-strong"></div>
</div>
<!--/. Sidebar navigation -->


<nav class="navbar navbar-expand navbar-dark blue-gradient">

  <a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>Memo</a>

  <ul class="navbar-nav ml-auto">

    @guest 
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
    @endguest 

    @guest 
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest 
      
    @auth 
    <li class="nav-item">
      <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth 
    
    @auth 
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
      @csrf 
    </form>
    <!-- Dropdown -->
    @endauth 

  </ul>

</nav>