<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <style>
        /* General Container Styling */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items horizontally */
            width: 80%; /* Adjust width as needed */
            margin: 20px auto; /* Center container and add vertical margin */
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Form Group Styling */
        .form-group {
            width: 100%; /* Make form group take full width of container */
            margin-bottom: 20px;
        }

        /* Textarea Styling */
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #4CAF50; /* Green border */
            border-radius: 8px;
            box-sizing: border-box; /* Includes padding in width */
            background-color: #f0f8f0; /* Light green background */
            resize: vertical; /* Allow vertical resizing only */
        }

        textarea:focus {
            border-color: #007BFF; /* Blue border on focus */
            outline: none;
        }

        /* Button Styling */
        button {
            background-color: #007BFF; /* Blue background */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Item Styling */
        .item {
            width: 100%; /* Make items take full width of container */
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9; /* Light grey background */
            border: 1px solid #ddd; /* Light grey border */
            border-radius: 5px; /* Rounded corners */
        }

        .item p {
            margin: 0; /* Remove default margins from paragraphs */
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
    <div class="container">

        <form action="{{ route('posts') }}" method="post">
            @csrf
            <div class="form-group">
                <textarea name="body" id="body" rows="4" placeholder="Post Something!"></textarea>
                <button type="submit">Post</button>
            </div>
        </form>
        <?php 
         foreach($posts as $info){
        ?>
        <div class="item">
           
           
            <p><?=$info->body?></p>
            <p><?=$info->name?></p>
            <p><button  onclick="showAlert('<?=$info->id?>')"  style="
                width: 40px; 
                height: 20px; 
                font-size: 12px; 
                text-align: center; 
                line-height: 20px; 
                padding: 0;
                cursor: pointer;
            ">like</button> <span id="result<?=$info->id?>"><?=$info->likes_count?></span></p>
        </div>
        <?php }?>
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
// $(document).ready(function(){
    function showAlert(id) {
      
     
        $.ajax({
                    url: '{{ route('likes') }}',
                    type: 'POST',        // Method type: POST or GET
                    data: {
                        _token: '{{ csrf_token() }}', 
                        post_id: id,   
                    },
                    success: function(response) {

                        // alert(response);
                        $('#result'+id).html(response); // Display response in a div
                    },
                    
                });

    };
// });
</script>
</body>
</html>
