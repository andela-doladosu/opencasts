        <div id="customnav">
          <a class="nav-link site-logo" href="/">Opencasts</a>
          <a class="nav-link" href="/categories">Categories</a>
          @if(Auth::check())
          <div class="dropdown">
  <img class="nav-right dropdown-toggle nav-img"

src="{{ $user->avatar }}"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    
   
   <ul class="dropdown-menu-right dropdown-menu " aria-labelledby="dropdownMenu1">
    <li class="navlink"><a class="navlink" href="/profile">Edit Profile</a></li>
    <li><a class="navlink" href="/new">Add video</a></li>
    <li><a class="navlink" href="/personal">My videos</a></li>
    <li><a class="navlink" href="/logout">Logout</a></li>
  </ul>
</div>          
@else 
          <span class="auth-links"><a class="nav-link auth-link" href="/login">Login</a> 
          <a class="nav-link auth-link" href="/register">Sign up</a></span>
          @endif      
        </div>