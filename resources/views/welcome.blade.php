<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
        }

        .logo {
            width: 150px;
            margin-bottom: 30px;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .btn-primary {
            background-color: #3498db;
        }

        .btn-secondary {
            background-color: #2ecc71;
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .social-media {
            margin-top: 20px;
        }

        .social-btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            color: white;
            text-decoration: none;
            font-size: 1em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .facebook {
            background-color: #3b5998;
        }

        .twitter {
            background-color: #1da1f2;
        }

        .instagram {
            background-color: #e4405f;
        }

        .linkedin {
            background-color: #0077b5;
        }

        .social-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo -->
        <img src="logo.png" alt="Logo" class="logo">
        
        <!-- Buttons -->
        <div class="button-container">
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
           
        </div>
        
        <!-- Social Media Links -->
        <div class="social-media">
            <!-- <a href="https://www.facebook.com" class="social-btn facebook" target="_blank">Facebook</a>
            <a href="https://www.twitter.com" class="social-btn twitter" target="_blank">Twitter</a>
            <a href="https://www.instagram.com" class="social-btn instagram" target="_blank">Instagram</a>
            <a href="https://www.linkedin.com" class="social-btn linkedin" target="_blank">LinkedIn</a> -->
        </div>
    </div>
</body>
</html>
