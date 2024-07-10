<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('path/to/your/image.jpg') center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            animation: gradientAnimation 15s infinite alternate; /* Add animation */
        }

        @keyframes gradientAnimation {
            0% {
                background-color: #ff00cc; /* Dark pink */
            }
            50% {
                background-color: #00ccff; /* Light blue */
            }
            100% {
                background-color: #ff00cc; /* Dark pink */
            }
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Add opacity to maintain readability */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center; /* Center align content */
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #6a0dad; /* Dark purple */
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .form-group button {
            background: linear-gradient(to right, #007bff, #0056b3); /* Gradient background */
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        .form-group button:hover {
            background: linear-gradient(to right, #0056b3, #007bff); /* Hover gradient */
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 style="color: #6a0dad;">Login</h2>
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
