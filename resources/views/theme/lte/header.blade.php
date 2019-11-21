<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
 
 
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
        <span class="hidden-xs">Hola, {{session()->get('nombre_usuario') ?? 'Invitado'}}</span>
      
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
        <div class="dropdown-divider"></div>
        <a href="{{route('login')}}" class="btn btn-default btn-flat">Login</a>
        <div class="dropdown-divider"></div>
        <a href="{{route('logout')}}" class="btn btn-default btn-flat">Salir</a>
        <div class="dropdown-divider"></div>
        
    </li>
    
  </ul>
</nav>