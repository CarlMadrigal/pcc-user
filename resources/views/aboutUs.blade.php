<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
    <link rel="icon" type="image/x-icon" href="{{('home-images/favicon.png')}}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>About Us - PCC</title>
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
            <a href="/help"><span class="material-symbols-rounded">help</span><p>Help Center</p></a>
            <a href="/aboutUs" class="active"><span class="material-symbols-rounded">info</span><p>About Us</p></a>
            <a href="/logout"><span class="material-symbols-rounded">logout</span><p>Log out</p></a>
        </div>
    </div>
        <!-- Main Content -->
    <div class="container">

        <!--Banner-->
        <div class="pcc-banner">
            <div class="banner-content">
                <h1>PHILIPPINE CARABAO CENTER</h1>
                <p>"Empowering farmers, enriching<br>
                    communities, and nurturing the nation's<br>
                    agricultural legacy – that's the spirit of<br> 
                    the Philippines Carabao Center."</p>
                <a href="https://www.pcc.gov.ph/mandatevisionmission/">See More!</a>
            </div>
        </div>

        <!--Content-->
        <div class="AboutUs">
        <h1>About Us</h1>
            <div class="mandate">
                <h2>Mandate</h2>
                <p>The Philippine Carabao Center (PCC), operating as an attached agency of the Department of Agriculture, 
                    is mandated to conserve, propagate, and promote the Carabao as a source of milk, meat, draft power and
                    hide to benefit the rural farmers.</p>
            </div>
            <br>
            <div class="vission">
                <h3>Vission</h3>
                <p>A premier research and development institution propelling sustainable growth of the livestock industry.</p>
            </div>
            <br>
            <div class="mission">
                <h4>Mission</h4>
                <p>Improve the general well-being and competitiveness of the livestock industry stakeholders through animal 
                    biotechnology and technology development, technology dissemination and knowledge resource management, 
                    active private sector participation, livestock-based enterprises, and policy reforms to sustain development
                    of livestock enterprises, thus ensuring socio-economic empowerment for nation building.</p>
            </div>
        </div>    
    </div>


</body>
</html>