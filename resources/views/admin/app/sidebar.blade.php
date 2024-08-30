<aside id="sidebar" class="js-custom-scroll side-nav">
    <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
        <!-- Title -->
        <li class="sidebar-heading h6">Dashboard</li>
        <!-- End Title -->

        <!-- Dashboard -->
        <li class="side-nav-menu-item active">
            <a class="side-nav-menu-link media align-items-center" href="{{ route('home') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="gd-home"></i>
          </span>
                <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard -->
        <li class="side-nav-menu-item active">
            <a class="side-nav-menu-link media align-items-center" href="{{ route('product') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="gd-folder"></i>
          </span>
                <span class="side-nav-fadeout-on-closed media-body">Products</span>
            </a>
        </li>
        
        <li class="side-nav-menu-item active">
          <a class="side-nav-menu-link media align-items-center" href="{{ route('nameuser') }}">
        <span class="side-nav-menu-icon d-flex mr-3">
          <i class="gd-user"></i>
        </span>
              <span class="side-nav-fadeout-on-closed media-body">Users</span>
          </a>
      </li>

      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('ContactUsindex') }}">
      <span class="side-nav-menu-icon d-flex mr-3">
        <i class="gd-location-arrow"></i>
      </span>
            <span class="side-nav-fadeout-on-closed media-body">ConactUs</span>
        </a>
    </li>


    
    <li class="side-nav-menu-item">
      <a class="side-nav-menu-link media align-items-center" href="{{ route('staticpages') }}">
    <span class="side-nav-menu-icon d-flex mr-3">
      <i class="gd-file"></i>
    </span>
          <span class="side-nav-fadeout-on-closed media-body">Static page</span>
      </a>
  </li>

  
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('logout') }}">
      <span class="side-nav-menu-icon d-flex mr-3">
        <i class="gd-power-off"></i>
      </span>
            <span class="side-nav-fadeout-on-closed media-body">SigOut</span>
        </a>
    </li>

    
        {{-- <li class="side-nav-menu-item active">
            <a class="side-nav-menu-link media align-items-center" href="{{ route('queen') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="gd-calendar"></i>
          </span>
                <span class="side-nav-fadeout-on-closed media-body">Queen</span>
            </a>
        </li>

        <li class="side-nav-menu-item active">
            <a class="side-nav-menu-link media align-items-center" href="{{ route('honey') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="gd-book"></i>
          </span>
                <span class="side-nav-fadeout-on-closed media-body">Honey</span>
            </a>
        </li>


        <li class="side-nav-menu-item active">
            <a class="side-nav-menu-link media align-items-center" href="{{ route('others') }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="gd-bag"></i>
          </span>
                <span class="side-nav-fadeout-on-closed media-body">Others</span>
            </a>
        </li>


 



    
    <li class="side-nav-menu-item">
      <a class="side-nav-menu-link media align-items-center" href="{{ route('orderindex') }}">
    <span class="side-nav-menu-icon d-flex mr-3">
      <i class="gd-crown"></i>
    </span>
          <span class="side-nav-fadeout-on-closed media-body">Orders</span>
      </a>
  </li>

      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{ route('staticpages') }}">
      <span class="side-nav-menu-icon d-flex mr-3">
        <i class="gd-file"></i>
      </span>
            <span class="side-nav-fadeout-on-closed media-body">Static page</span>
        </a>
    </li>


 --}}

    </ul>
</aside>