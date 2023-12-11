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
      background-color: #f4f4f4;
    }

    h1 {
      margin-bottom: 20px;
    }

    nav {
      display: inline-block;
      background-color: #333;
      padding: 10px 20px;
      border-radius: 5px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }

    nav a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h1>Welcome to Your Dashboard</h1>
  <nav>
    <a href="{{url('admin/booking-list')}}">Booking List</a>
    <a href="{{url('post_photo')}}">Upload Photos</a>
    <a href="{{url('/show_post')}}">Show Post</a>
    <a href="{{url('/notification')}}">Message</a>
  </nav>
</body>
</html>
