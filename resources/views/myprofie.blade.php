<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Cards</title>
    <link rel="stylesheet" href="styles.css">
    <style>
/* styles.css */

/* Container for the profile cards */
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px; /* Space between cards */
    padding: 20px;
}

/* Individual profile card */
.card {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    width: 200px; /* Card width */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05); /* Scale up the card on hover */
}

/* Profile image section */
.card-image img {
    width: 100%;
    height: 150px; /* Fixed height for profile image */
    object-fit: cover; /* Ensure image covers the area */
}

/* Content section of the card */
.card-content {
    padding: 15px;
}

.card-name {
    font-size: 1.5rem;
    margin: 0;
}

.card-title {
    font-size: 1.2rem;
    color: #666;
    margin: 5px 0;
}

.card-description {
    font-size: 1rem;
    color: #333;
    margin: 10px 0;
}

.card-button {
    display: inline-block;
    background-color: #007BFF;
    color: #ffffff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    text-align: center;
    transition: background-color 0.3s ease;
}

.card-button:hover {
    background-color: #0056b3;
}
.tabs-container {
            display: flex;
            justify-content: center; /* Center tabs horizontally */
            gap: 20px; /* Space between tabs */
        }

    </style>
</head>
<body>
<div class="tabs-container">
        <div class="tab active"><a href="{{ route('home') }}">Home</a></div>
        <div class="tab"><a href="{{ route('myprofile') }}">My Profile</a></div>
        <div class="tab"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="tab"><a href="{{ route('logout') }}">logout</a></div>
    </div>
    <div><h1>My Profile</h1></div>
    <div class="card-container">
        <?php foreach($userdetails as $info){?>
        <div class="card">
            <div class="card-image">
                <img src="https://via.placeholder.com/150" alt="Profile Image">
            </div>
            <div class="card-content">
                <h2 class="card-name"><?=$info->name?></h2>
               
                <a href="#" class="card-button" onclick="showAlert(<?=$info->id?>)">friend</a>
            </div>
        </div>
<?php }?>
        
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</html>
