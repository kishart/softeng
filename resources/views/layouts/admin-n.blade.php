<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="{{url('css/admin-n.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<style>
    /* Added CSS */
    .main-menu li a {
        display: block;
        padding: 10px 0 20px; /* Added bottom padding */
        text-decoration: none;
    }

    .main-menu li a i {
        font-size: 30px; /* Increased icon size */
        padding-top: 10px;
    }
</style>
</head>

  <body>
  
  
    <nav class="main-menu">
            <ul>
                <li>
                    <a href="{{url('admin/admin')}}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                           Home
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/booking-list')}}">
                        <i class="fa fa-list fa-2x"></i>
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
                        <i class="fa fa-picture-o fa-2x"></i>
                        <span class="nav-text">
                          Show Post
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="{{url('/notification')}}">
                        <i class="fa fa-comment"></i>
                        <span class="nav-text">
                            Message
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