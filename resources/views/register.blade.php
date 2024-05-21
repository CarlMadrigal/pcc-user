<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCC Register</title>
    <link rel="icon" href="{{asset('login-images/favicon.png')}}">
    <link rel="shortcut icon" href="{{asset('login-images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <img src="{{asset('login-images/sneak.png')}}" class="admin-pic">
    <div class="register">
        <form action="/register" method="POST">
            @csrf
            <div class="mainLogo">
                <img src="{{asset('login-images/logo.png')}}" class="logo" width="300px">
                <h1>Register</h1>
            </div>

            <div class="inputBox">
                <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" required>
                <i class='bx bx-user' ></i>
                <box-icon name='user'></box-icon>
            </div>
            
            <div class="inputBox">
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                <i class='bx bx-user' ></i>
                <box-icon name='envelope' ></box-icon>

            </div>  

            <div class="dropdown-box">
                <select name ="cooperative_id" id="cooperative_id" required>
                    <option disabled selected>Select Coop Head</option>
                    @foreach ($coopheads as $coophead)
                        <option value="{{$coophead->id}}">{{$coophead->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="inputBox">
                <input type="text" placeholder="Username" name="username" value="{{ old('username') }}" required>
                <i class='bx bx-user' ></i>
                <box-icon name='user'></box-icon>
            </div>

            <div class="inputBox">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bx-lock' ></i>
                <box-icon name='lock' ></box-icon>
            </div>

            <div class="Remember-Forgot">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn">
                Register
            </button>
        </form>
    </div> 
</body>
</html>
