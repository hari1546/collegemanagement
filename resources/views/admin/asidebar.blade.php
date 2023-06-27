


<aside id="sidebar-wrapper">
   <div class="sidebar-brand">
      {{-- <a href="index.html"> <img alt="image" src="#" class="header-logo" /> --}}

          <span class="logo-name">DMI EVENTS </span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <!-- <li class="menu-header">Main</li>-->
      <li class="dropdown active">
        <a href="#" class="nav-link"><i data-feather="monitor"></i><span>Management</span></a>
      </li>

      <li><a class="nav-link" href="{{url('/users')}}"><i data-feather="user"></i><span>users</span></a></li>


      {{-- <li><a class="nav-link" href="{{url('/model')}}"><i data-feather="briefcase"></i><span>Events View</span></a></li> --}}

      <li class="dropdown">
        <a href="{{url('/events')}}" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Events </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/model')}}">Events View</a></li>
          <li><a class="nav-link" href="{{url('/addnew')}}">Events Add</a></li>
        </ul>
      </li>

      {{-- <li><a class="nav-link" href="{{url('/categoryview')}}"><i data-feather="briefcase"></i><span>Category</span></a></li> --}}
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Category</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/categoryview')}}">Category View</a></li>
          <li><a class="nav-link" href="{{url('/categoryadd')}}">Category Add</a></li>
        </ul>
      </li>
      {{-- <li><a class="nav-link" href="{{url('/meeting')}}"><i data-feather="briefcase"></i><span>Meetings</span></a></li> --}}

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="shopping-bag"></i><span>Meetings</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{url('/semi')}}">Meeting View</a></li>
          <li><a class="nav-link" href="{{url('/semiadd')}}">Meeting Add</a></li>
        </ul>
      </li>


    </ul>
  </aside>
</div>
