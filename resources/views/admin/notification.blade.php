@extends('layouts.admin-n')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        /* CSS for card form */
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }
    
    .card {
      width: 70%;
      margin-bottom: 20%;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
    
    form {
      display: flex;
      flex-direction: column;
    }
    
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    label {
      margin-bottom: 5px;
    }
    
    input[type="text"],
    input[type="password"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    input[type="submit"] {
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    
    </style>
    
    <div class="card">
        <form>
          <p>Name: <span>Kish Hart</span></p>
          <p>Email: <span>hart@gmail.com</span> </p>
          <p>Phone Number: <span>09981518420</span></p>
          <p>Message: <span>I want to change my date</span></p>
          <p>My mother has <span style="color:blue;font-weight:bold">blue</span> eyes and my father has <span style="color:darkolivegreen;font-weight:bold">dark green</span> eyes.</p>

        </form>
      </div>
    

</html>