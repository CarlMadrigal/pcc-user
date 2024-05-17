<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('home-images/favicon.png')}}">
    <link rel="stylesheet" href="https://lucide.dev/icons/">
    <title>My Carabao - PCC</title>
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
            <a href="/carabao"class="active"><span class="material-symbols-rounded">grass</span><p>My Carabao</p></a>
            <a href="/profile"><span class="material-symbols-rounded">person</span><p>My Profile</p></a>
            <a href="/help"><span class="material-symbols-rounded">help</span><p>Help Center</p></a>
            <a href="/aboutUs"><span class="material-symbols-rounded">info</span><p>About Us</p></a>
            <a href="/logout"><span class="material-symbols-rounded">logout</span><p>Log out</p></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">

        <!-- Head -->
        <div class="head">
            <h1>My Carabao</h1>
            <div class="head-control">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <span class="material-symbols-rounded">search</span>
                </div>
                <a href="#"><p>Add Carabao</p><span class="material-symbols-rounded">add</span></a>
                <a id="backBtn"><span class="material-symbols-rounded">medication</span></a>
            </div>
        </div>
        
        <!-- Content -->
        <div class="content">
            @foreach ($carabaos as $carabao)
                <a href="/carabao/{{$carabao->id}}" class="carabao-con">
                    <div class="color">
                        <span class="material-symbols-rounded">more_vert</span>
                    </div>
                    <img class="carabao-profile" src="{{asset('home-images/carabao 1.png')}}">
                    <div class="carabao-details">
                        <h2>{{$carabao->name}}</h2>
                        <h3>#{{$carabao->id}}</h3>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


</body>
</html>