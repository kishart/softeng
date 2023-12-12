<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #F2C1A8;
    }

    h1 {
      margin-bottom: 20px;
    }

    nav {
      display: inline-block;
      background-color: #ce6b4d;
      padding: 30px 20px;
      border-radius: 5px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      
  transition: background-color 0.5s ease;
    }

    nav a:hover {
      background-color: #854836;
      padding: 20px 20px;
    }
  </style>
</head>
<body>
  <nav>
    <a href="{{url('admin/booking-list')}}">Booking List</a>
    <a href="{{url('post_photo')}}">Upload Photos</a>
    <a href="{{url('/show_post')}}">Show Post</a>
    <a href="{{url('/notification')}}">Message</a>
  </nav>
</body>
</html>
