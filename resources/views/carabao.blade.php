<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
    <link rel="icon" type="image/x-icon" href="{{('home-images/favicon.png')}}">
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
        <div class="chead">
            <div class="top">
                <div class="mycarabao">
                    <a href="/carabao"><span class="material-symbols-rounded">arrow_back</span></a>        
                    <h3>My Carabaos</h3>
                </div>
                <div class="edit" id="editCarabao" style="cursor: pointer;">
                    <span class="material-symbols-rounded">edit</span>
                    <h4>Edit</h4>
                </div>
            </div>
            <div class="cinfo">
                <img src="{{asset('home-images/carabao 2.png')}}">
                <div class="cinfos">
                    <div class="cinfo2">
                        <h1>{{$carabao->name}}</h1>
                        <h2>#{{$carabao->id}}</h2>
                        <h3>{{$carabao->status}}</h3>
                    </div>
                    <div class="cinfo3">
                        <h1>Breed: <a>{{$carabao->breed}}</a></h1>
                        <h2>Age: <a>2yrs. 8m.</a></h2>
                        <h4>Gender: <a>Female</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="carabao-info">
            <div class="daily-needs">
                <div class="needs">
                    <h3>DAILY NEEDS</h3>
                    <div class="button">
                        <span class="material-symbols-rounded">add_box<h4> Add</h4></span>
                        <span class="material-symbols-rounded">edit<h4> Edit</h4></span>
                    </div>
                </div>
                <div class="reminders">
                    <div class="tasks">
                        @if($carabao->todayNeed() == null || $carabao->todayNeed()->feed == null)
                        <div class="checkbox" id="taskCheckbox">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @elseif($carabao->todayNeed()->feed != null)
                        <div class="checkbox checked" id="taskCheckbox">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @endif
                        <div class="taskInfo" id="editfeeds" >
                            <h4>Feeds</h4>
                            <div>
                                <div class="amount">
                                    <h5>33 lbs.</h5>
                                    <h6>Daily</h6>
                                </div>
                                <div class="time">
                                    <span class="material-symbols-rounded">schedule</span>
                                    <div class="quant">
                                        <h5>3 times</h5>
                                        <h6>Daily</h6>
                                    </div>
                                </div>
                                <img src="{{asset('home-images/grass.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Additional tasks -->
                    <div class="tasks">
                        @if($carabao->todayNeed() == null || $carabao->todayNeed()->water == null)
                        <div class="checkbox1" id="taskCheckbox1">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @elseif($carabao->todayNeed()->water != null)
                        <div class="checkbox1 checked" id="taskCheckbox1">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @endif
                        <div class="taskInfo water" id="editwater">
                            <h4>Water</h4>
                            <div>
                                <div class="amount">
                                    <h5>16 gal.</h5>
                                    <h6>Daily</h6>
                                </div>
                                <div class="time">
                                    <span class="material-symbols-rounded">schedule</span>
                                    <div class="quant">
                                        <h5>3 times</h5>
                                        <h6>Daily</h6>
                                    </div>
                                </div>
                                <img src="{{asset('home-images/water.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Additional tasks -->
                    <div class="tasks">
                        @if($carabao->todayNeed() == null || $carabao->todayNeed()->milk == null)
                        <div class="checkbox2" id="taskCheckbox2">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @elseif($carabao->todayNeed()->milk != null)
                        <div class="checkbox2 checked" id="taskCheckbox2">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @endif
                        <div class="taskInfo milk" id="editmilk">
                            <h4>Milking</h4>
                            <div>
                                <div class="amount">
                                    <h5>1-4 gal.</h5>
                                    <h6>Daily</h6>
                                </div>
                                <div class="time">
                                    <span class="material-symbols-rounded">schedule</span>
                                    <div class="quant">
                                        <h5>2 times</h5>
                                        <h6>Daily</h6>
                                    </div>
                                </div>
                                <img src="{{asset('home-images/milk.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Additional tasks -->
                    <div class="tasks">
                        @if($carabao->todayNeed() == null || $carabao->todayNeed()->vitamin == null)
                        <div class="checkbox3" id="taskCheckbox3">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @elseif($carabao->todayNeed()->vitamin != null)
                        <div class="checkbox3 checked" id="taskCheckbox3">
                            <label for="taskCheckbox"><span class="material-symbols-rounded">task_alt</span></label>
                        </div>
                        @endif
                        <div class="taskInfo vitamin" id="editvitamin">
                            <h4>Vitamins</h4>
                            <div>
                                <div class="amount">
                                    <h5>1 Dosage</h5>
                                    <h6>Daily</h6>
                                </div>
                                <div class="time">
                                    <span class="material-symbols-rounded">schedule</span>
                                    <div class="quant">
                                        <h5>1 time</h5>
                                        <h6>Daily</h6>
                                    </div>
                                </div>
                                <img src="{{asset('home-images/vitamin.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Babies Section -->
            <div class="babies">
                <div class="needs">
                    <h3>BABIES</h3>
                    <div class="button">
                        <span class="material-symbols-rounded">add_box<h4> Add</h4></span>
                        <span class="material-symbols-rounded">edit<h4> Edit</h4></span>
                    </div>
                </div>
                <div class="baby">
                    <div class="babyDetails">
                        <div class="babyProf">
                            <img src="{{asset('home-images/baby.png')}}" alt="">
                            <h2>Carabao 5</h2>
                            <h3>#53762860</h3>
                            <h4 id="status">Healthy</h4>
                        </div>
                        <div class="babyInfo">
                            <div class="babyCategory">
                                <h2>Breed:</h2>
                                <h2>Gender:</h2>
                                <h2>Age:</h2>
                                <h2>Date of Birth:</h2>
                                <h2>Weight:</h2>
                            </div>
                            <span class="centerLine"></span>
                            <div class="babyContent">
                                <h2>Murrah Buffalo</h2>
                                <h2>Female</h2>
                                <h2>3 Months</h2>
                                <h2>Dec. 03, 2023</h2>
                                <h2>48 Kilos</h2>
                            </div>
                        </div>
                    </div> 
                    <a href="">Register</a>
                </div>
            </div>
        </div>
    
    </div>

    <!-- Popup Edit Carabao -->
    <form action="/carabao/update" method="POST" id="carabaoForm" class="popupEditmyCarabao">
        @csrf
        <div class="popupContent">
            <div class="popupTop">
                <input type="text" id="carabaoName" class="editable popupInput" value="{{$carabao->name}}" readonly>
                <span class="material-symbols-rounded" id="closeEditCarabao">close</span>
            </div>
            <div class="carabaoProf">
                <img src="{{asset('home-images/carabao 2.png')}}" alt="">
                <input type="text" name="name" id="carabaoNameEdit" class="editable popupInput" value="{{$carabao->name}}">
                <input type="text" name="id" id="carabaoID" class="editable popupInput" value="#{{$carabao->id}}" readonly>
                <select name="status" id="sltStatus" class="editable popupInput">
                    <option disabled selected id="healthy">Healthy</option>
                    <option value="pregnant" id="pregnant">Pregnant</option>
                    <option value="sick" id="sick">Sick</option>
                    <option value="dead" id="dead">Dead</option>
                </select>
            </div>
            <div class="carabaoInfo">
                <div class="carabaoCategory">
                    <h2>Breed:</h2>
                    <h2>Gender:</h2>
                    <h2>Age:</h2>
                    <h2>Date of Birth:</h2>
                    <h2>Weight:</h2>
                </div>
                <div class="carabaoContent">
                    <input type="text" id="carabaoBreed" class="editable popupInput" value="{{$carabao->breed}}">
                    <input type="text" id="carabaoGender" class="editable popupInput" value="Female">
                    <input type="text" id="carabaoAge" class="editable popupInput" value="3 Months">
                    <input type="text" id="carabaoDOB" class="editable popupInput" value="Dec. 03, 2023">
                    <input type="text" id="carabaoWeight" class="editable popupInput" value="{{$carabao->weight}}">
                </div>
            </div>
            <div class="editBabies">
                <h3>BABIES</h3>
                <div class="button">
                    <span class="material-symbols-rounded">add_box<h4> Add</h4></span>
                    <span class="material-symbols-rounded">edit<h4> Edit</h4></span>
                </div>
            </div>
            <div class="editBaby">
                <div class="editBabyDetails">
                    <div class="editBabyProf">
                        <img src="{{asset('home-images/baby.png')}}" alt="">
                        <input type="text" id="babyName" class="editable popupInput" value="Carabao 6">
                        <input type="text" id="babyID" class="editable popupInput" value="#53762861">
                        <select name="sltstatus" id="sltBabyStatus" class="editable popupInput">
                            <option id="babyhealthy" disabled selected>Healthy</option>
                            <option id="babypregnant">Pregnant</option>
                            <option id="babysick">Sick</option>
                            <option id="babydead">Dead</option>
                        </select>                        
                    </div>
                    <div class="editBabyInfo">
                        <div class="editBabyCategory">
                            <h2>Breed:</h2>
                            <h2>Gender:</h2>
                            <h2>Age:</h2>
                            <h2>Date of Birth:</h2>
                            <h2>Weight:</h2>
                        </div>
                        <span class="centerLine"></span>
                        <div class="editBabyContent">
                            <input type="text" id="babyBreed" class="editable popupInput" value="Murrah Buffalo">
                            <input type="text" id="babyGender" class="editable popupInput" value="Female">
                            <input type="text" id="babyAge" class="editable popupInput" value="3 Months">
                            <input type="text" id="babyDOB" class="editable popupInput" value="Dec. 03, 2023">
                            <input type="text" id="babyWeight" class="editable popupInput" value="50 Kilos">
                        </div>
                    </div>
                </div> 
                <!-- Done link goes here -->
            </div>
            <button id="saveChangesButton">Done</button>
        </div>
    </form>
    
    <script>
        document.getElementById('carabaoForm').addEventListener('submit', function(e){
            e.preventDefault();
            var carabaoID = document.getElementById('carabaoID');
            console.log(carabaoID.value.replace('#', '')); 
            carabaoID.setAttribute('value', carabaoID.value.replace('#', ''));
            document.getElementById('carabaoForm').submit();
        })
    </script>

    <form action="/need/feed/update" method="POST" class="popupEditfeeds">
        @csrf
        <div class="popupContent">
            <div class="popupTop">
                <h1>Feeds</h1>
                <span class="material-symbols-rounded" id="closeEditfeeds">close</span>
                <br>
            </div>
            <div class="editfeeds">
                <img src="{{asset('home-images/grass.png')}}" alt="">
                <br>
                <label for="feedAmount">How much feeds did you fed to your carabao? (lbs):</label>
                <br>
                <input type="range" id="feedAmount" name="feed" min="0" max="60" step="1" value="0">
                <input type="text" style="display: none;" name="carabao_id" value="{{$carabao->id}}">
                <span id="feedAmountValue">0 lbs</span>

                <button id="enterButton">Enter</button>

            </div>
        
        </div>
    </form>
    <form action="/need/water/update" method="POST" class="popupEditwater">
        @csrf
        <div class="popupContent">
            <div class="popupTop">
                <h1>Water</h1>
                <span class="material-symbols-rounded" id="closeEditwater">close</span>
                <br>
            </div>
            <div class="editwater">
                <img src="{{asset('home-images/water.png')}}" alt="">
                <br>
                <label for="waterAmount">How much water did add?</label>
                <br>
                <input type="range" id="waterAmount" name="water" min="0" max="60" step="1" value="0">
                <input type="text" style="display: none;" name="carabao_id" value="{{$carabao->id}}">
                <span id="waterAmountValue">0 gal</span>

                <button id="enterButton">Enter</button>

            </div>
        
        </div>
    </form>
    <form action="/need/milk/update" method="POST" class="popupEditmilk">
        @csrf
        <div class="popupContent">
            <div class="popupTop">
                <h1>Milking</h1>
                <span class="material-symbols-rounded" id="closeEditmilk">close</span>
                <br>
            </div>
            <div class="editmilk">
                <img src="{{asset('home-images/milk.png')}}" alt="">
                <br>
                <label for="milkAmount">How many liters of milk did you collect?</label>
                <br>
                <input type="range" id="milkAmount" name="milk" min="0" max="23" step="1" value="0">
                <input type="text" style="display: none;" name="carabao_id" value="{{$carabao->id}}">
                <span id="milkAmountValue">0 liters</span>

                <button id="enterButton">Enter</button>

            </div>
        
        </div>
    </form>
    <form action="/need/vitamin/update" method="POST" class="popupEditvitamin">
        @csrf
        <div class="popupContent">
            <div class="popupTop">
                <h1>Vitamins</h1>
                <span class="material-symbols-rounded" id="closeEditvitamin">close</span>
                <br>
            </div>
            <div class="editvitamin">
                <img src="{{asset('home-images/vitamin.png')}}" alt="">
                <br>
                <label for="vitaminAmount">How much vitamins did you inject?</label>
                <br>
                <input type="range" id="vitaminAmount" name="vitamin" min="0" max="1000" step="1" value="0">
                <input type="text" style="display: none;" name="carabao_id" value="{{$carabao->id}}">
                <span id="vitaminAmountValue">0 ml</span>

                <button id="enterButton">Enter</button>

            </div>
        
        </div>
    </form>
    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>
