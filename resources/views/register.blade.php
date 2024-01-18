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
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
        }

        label {
            display: inline-block;
            width: 100px;
            margin: 10px 0;
        }

        input, select {
            width: calc(100% - 120px);
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            display: inline-block;
        }

        input[type="radio"] {
            width: auto;
        }

        input[type="submit"] {
            width: calc(100% - 14px);
            padding: 10px; /* Butonun daha belirgin olması için padding ekledik */
            margin: 10px 0;
            box-sizing: border-box;
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Please fill out the form to register!</div>
        <div class="card-content">
            <!-- Login form goes here -->
            <form action="{{route('register.process')}}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label>Gender:</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="passwordAgain">Password Again:</label>
                <input type="password" id="passwordAgain" name="passwordAgain" required>

                <input type="submit" value="Register">
            </form>
        </div>
    </div>


</body>
</html>
<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
