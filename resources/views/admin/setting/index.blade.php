

<nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
    <ul class="nav">
  
  
      <li class="nav-item">
        <a  class="nav-link" href="{{route('adminDashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
  
      <li class="nav-item" style="background: none;">
        <a  @if(Session::get('page')=="all_admins")
            style="background:#4B49AC !important; color:#fff !important;"  @endif 
            class="nav-link"data-toggle="collapse" href="#form-payment" aria-expanded="false" aria-controls="form-payment">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Admin</span>
          <i class="menu-arrow"></i>
        </a>
  
          <div class="collapse" id="form-payment">
            <ul class="nav flex-column sub-menu" style="background: none;">
              <li class="nav-item"><a class="nav-link"
                @if(Session::get('page')=="all_admins")
                    style="background:#4B49AC !important; color:#fff !important;"
                @else style="background:#ffffff !important; color:rgb(0, 0, 0) !important;" @endif
  
                href="{{route('allAdmin')}}">All Admin </a></li>
            </ul>
            <ul class="nav flex-column sub-menu" style="background: none;">
              <li class="nav-item"><a class="nav-link"
                @if(Session::get('page')=="all_admins")
                    style="background:#4B49AC !important; color:#fff !important;"
                @else style="background:#ffffff !important; color:rgb(0, 0, 0) !important;" @endif
  
                href="">Admin Setting </a></li>
            </ul>
          </div>
      </li>
  
      <li class="nav-item" style="background: none;">
          <a  @if(Session::get('page')=="all_categories" || Session::get('page')=="all_products")
                style="background:#4B49AC !important; color:#fff !important;"  @endif 
                class="nav-link"data-toggle="collapse" href="#form-category" aria-expanded="false" aria-controls="form-category">
                <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Catelog</span>
            <i class="menu-arrow"></i>
          </a>
  
          <div class="collapse" id="form-category">
            <ul class="nav flex-column sub-menu" style="background: none;">
              <li class="nav-item"><a class="nav-link"
                @if(Session::get('page')=="all_categories")
                    style="background:#4B49AC !important; color:#fff !important;"
                @else style="background:#ffffff !important; color:rgb(0, 0, 0) !important;" @endif
  
                href="{{route('addEditCategories')}}">Category </a></li>
  
                <li class="nav-item"><a class="nav-link"
                @if(Session::get('page')=="all_products")
                    style="background:#4B49AC !important; color:#fff !important;"
                @else style="background:#ffffff !important; color:rgb(0, 0, 0) !important;" @endif
  
                href="{{route('productIndex')}}"> Product </a></li>
  
            </ul>
          </div>
      </li>
  
  
    </ul>
  </nav>
  
       
  
  
  