<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
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
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

.form-container {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    width: 400px;
}

.form h2 {
    margin-bottom: 20px;
    text-align: center;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #2980b9;
}

p {
    text-align: center;
    margin-top: 15px;
}

a {
    color: #3498db;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.hidden {
    display: none;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            

            <!-- Register Form -->
            <form id="register-form" class="form" action="{{ route('register') }}" method="POST">
                <h2>Register</h2>
                @csrf

                <div class="input-group">
                    <label for="register-name">Name</label>
                    <input type="text" id="register-name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <button type="submit" class="btn">Register</button>
                <!-- <p>Already have an account? <a href="#login-form" onclick="switchForm('login')">Login here</a></p> -->
            </form>
        </div>
    </div>

    
</body>
</html>
