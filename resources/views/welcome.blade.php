<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <style>
        a{
            color : white;
            text-decoration: none;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            margin: 0 10px;
        }

        .card-header {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .card-content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header"><a href="{{route('login')}}">LOGIN</a></div>
    </div>

    <div class="card">
        <div class="card-header"><a href="{{route('register')}}">REGISTER</a></div>
    </div>
</body>
</html>
