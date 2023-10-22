<?php
    if(isset($_GET['u'])){
        include "php/config.php";
        $u=mysqli_real_escape_string($conn, $_GET['u']);

        $sql=mysqli_query($conn, "SELECT full_url FROM url WHERE shorten_url = '{$u}'");  // getting full url of short url from table
        if(mysqli_num_rows($sql)>0){   //redirect user
            $full_url = mysqli_fetch_assoc($sql);
            header("Location:".$full_url['full_url']);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Shortner</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>
<body>
    <div class="wrapper">
        <form action="#" autocomplete="off">
            <input type="text" name="full-url" placeholder="Enter or paste a long url" required>
            <i class="url-icon uil uil-link"></i>
            <button>Shorten</button> 
        </form>
        <div class="count">
            <span>Total Links: <span>10</span> & Total Clicks: <span>140</span></span>
            <a href='#'>Clear All</a>
        </div>
        <div class ="urls-area">
            <div class ="title">
                <li>Shorten URL</li>
                <li>Original URL</li>
                <li>Clicks</li>
                <li>Action</li>
            </div>
            <div class ="data">
                <li><a href='#'>example.com/xyz234</a></li>
                <li>www.google.comadasddasdsadsadasdsadasdsadasdasdsadasd</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
        </div>
    </div>

    <div class="blur-effect"></div>
    <div class="popup-box">
        <div class="info-box">Your link is ready</div>
        <form action="#">
            <label>Edit Your URL</label>
            <input type="text" spellcheck="false" value="">
            <i class="copy-icon uil uil-copy-alt"></i>
            <button>Save</button>
        </form>
    </div>

<script src="script.js"></script>
    
</body>
</html>