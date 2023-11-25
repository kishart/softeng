<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="{{url('css/admin-n.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

</head>

  <body>
  
  
  <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    
                    <a href="{{url('admin/booking-list')}}">
                        <span class="material-symbols-outlined">
                            assignment
                            </span>
                    </a>
                </li>

                


                <li>
                    
                    <a href="{{url('admin/booking-list')}}">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                           Booking List
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="{{url('post_photo')}}">
                       <i class="fa fa-camera-retro fa-2x"></i>
                        <span class="nav-text">
                            Upload Photos
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="{{url('/show_post')}}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                          Show Post
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Notification
                        </span>
                    </a>
                    
                </li>
                
               
                <li>
                   <a href="#">
                       <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            Tools & Resources
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Member Map
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                           
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>

                <li class="nav-item dropdown">
              
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                </li>

                
            
        </nav>

    
</body>
</html>