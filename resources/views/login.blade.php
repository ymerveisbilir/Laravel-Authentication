<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 500px;
            margin: 0 10px;
        }

        .card-header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .card-content {
            padding: 20px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            text-align: left;
        }

        label {
            display: inline-block;
            width: 80px;
            margin: 10px 0;
        }

        input {
            width: calc(100% - 90px);
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            display: inline-block;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            background-color: #005eff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056ff;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Welcome to the login page !</div>
        <div class="card-content">
            <!-- Login form goes here -->
            <form action="{{route('register.process')}}" method="post">
                @csrf
                <label for="username">Email:</label>
                <input type="text" id="email" name="email" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Login">

            </form>
        </div>
    </div>


</body>
</html>
