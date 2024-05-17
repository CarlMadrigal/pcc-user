<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
    <link rel="icon" type="image/x-icon" href="{{('home-images/favicon.png')}}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>Help Center - PCC</title>
</head>
<body>
    <!-- Navigational Bar -->
    <div class="sidebar">
        <!-- Logo -->
        <a href="{{asset('home.blade.php')}}">
            <img src="{{asset('home-images/logo.png')}}" class="logo">
        </a>

        <!-- User Profile -->
        <div class="user">
            <img class="profile-pic" src="{{asset('home-images/profile.jpg')}}" alt="">
            <h2 id="name">{{auth()->user()->name}}</h2>
        </div>

        <!-- Controls -->
        <div class="buttons">
            <a href="/"><span class="material-symbols-rounded">home</span><p>Home</p></a>
            <a href="/notification"><span class="material-symbols-rounded">notifications</span><p>Notifications</p><p id="count"></p></a>
            <a href="/carabao"><span class="material-symbols-rounded">grass</span><p>My Carabao</p></p></a>
            <a href="/profile"><span class="material-symbols-rounded">person</span><p>My Profile</p></a>
            <a href="/help" span class="active"><span class="material-symbols-rounded">help</span><p>Help Center</p></a>
            <a href="/aboutUs"><span class="material-symbols-rounded">info</span><p>About Us</p></a>
            <a href="/logout"><span class="material-symbols-rounded">logout</span><p>Log out</p></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="help-center">

        <!-- Head -->
        <div class="headControl">
            <a href="/"><span class="material-symbols-rounded">arrow_back<h1>Help Center</h1></span></a>
        </div>
        
        <!-- Content -->
          
        <div class="helpSearch">
            <h2>Hi, how can we help you?</h2>
            <div class="helpSearchBar"><input type="text" placeholder="Search..."><span class="material-symbols-rounded">search</span></div>
        </div>
        <div class="helpControls">
            <div class="helpCont">
                <span class="material-symbols-rounded">person</span>
                <h3>Account Settings</h3>
            </div>
            <div class="helpCont">
                <span class="material-symbols-rounded">key</span>
                <h3>Login & Password</h3>
            </div>
            <div class="helpCont">
                <span class="material-symbols-rounded">lock</span>
                <h3>Privacy & Security</h3>
            </div>
            <div class="helpCont">
                <span class="material-symbols-rounded">help</span>
                <h3>Report a problem</h3>
            </div>
        </div>
        
        <h3 class="qs">Looking for something else?</h3>  
        <div class="foot">
            <h4>Contact Us</h4>
            <br>
            <p>&copy; PHILIPPINE CARABAO CENTER <br> NATIONAL HEADQUARTERS AND GENE POOL <br> Science City of Muñoz, Nueva Ecija Philippines 3120 <br> Trunkline: 044-0731 | 456-0735 <br> Email: <a href="oed@pcc.gov.ph">oed@pcc.gov.ph</a></p>
            <br>
            <hr>
            <br>
            <img src="{{asset('home-images/logo.png')}}">
            <br>
            <span class="material-symbols-rounded">copyright<h2>Copyright All Rights Reserve</h2></span>
        </div>
        
    </div>
  
  
  </body>
  </html>