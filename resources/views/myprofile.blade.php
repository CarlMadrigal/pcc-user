<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('home-images/favicon.png')}}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>Home - PCC</title>
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
            <a href="/profile" class="active"><span class="material-symbols-rounded">person</span><p>My Profile</p></a>
            <a href="/help"><span class="material-symbols-rounded">help</span><p>Help Center</p></a>
            <a href="/aboutUs"><span class="material-symbols-rounded">info</span><p>About Us</p></a>
            <a href="/logout"><span class="material-symbols-rounded">logout</span><p>Log out</p></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">

        <!-- Head -->
        <div class="profileHead">
            <div class="headTop">
                <div class="myAccountTop">
                    <a href="/"><span class="material-symbols-rounded">arrow_back</span></a>     
                    <h3>My Profile</h3>
                </div>
                <div class="carabao">
                    <a href="{{asset('mycarabao.blade.php')}}"><span class="material-symbols-rounded">grass</span></a>
                </div>
            </div>
            <div class="myAccount">
                <div class="userAccount">
                    <div class="profilePic">
                        <img src="{{asset('home-images/profile.jpg')}}" alt="">
                    </div>
                    <div class="myInfo">
                        <h1>{{auth()->user()->name}}</h1>
                        <h2>{{auth()->user()->email}}</h2>
                    </div>
                </div>
                <div class="qr">
                    <img src="{{asset('home-images/qr.png')}}">
                </div>
            </div>
        </div>
        <div class="accountDetails">
            <h2>Account Details</h2>
            <div class="button">
                <span class="material-symbols-rounded">edit<h4> Edit</h4></span>
            </div>
        </div>
        <div class="accountDetails2">
            <span class="material-symbols-rounded">call <h3>+639566493152</h3></span>
            <span class="material-symbols-rounded">location_on <h3>Tanza Boac, Marinduque</h3></span>
        </div>
        <div class="contract">
            <div class="contracts">
                <h2>Contracts</h2>
                <div class="button">
                    <span class="material-symbols-rounded">add_box<h4> Add</h4></span>
                    <span class="material-symbols-rounded">edit<h4> Edit</h4></span>
                </div>
            </div>
            <div class="contractInfo">
                <span class="material-symbols-rounded">file_copy<h3>My Contract</h3></span>
                <h3>View pdf file</h3>
            </div>
            
        </div>
        <div class="appointment">
            <div class="Appoint">
                <h2>Appointment</h2>
            </div>
            <div class="appointmentInfo">
                <span class="material-symbols-rounded">event_note<h3>My Appointments</h3></span>
                <h3>View Appointments</h3>
            </div>
            
        </div>
        
    </div>


</body>
</html>