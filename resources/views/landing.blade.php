<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset ('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset ('css/landingstyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>PCC - WARRIORS</title>
</head>
<body>
    <!-- Heading -->
    <div class="heading">
        <!-- logo -->
        <div class="logo">
            <a href="/portal">
                <img src="{{asset('images/pcc-logo.png')}}" alt="">
                <h2>PHILIPPINE CARABAO<br>CENTER</h2>
            </a>
        </div>
        <!-- Nav Bar -->
        <div class="navbar">
            <a href="/portal" class="active">Home</a>
            <a href="#">Programs</a>
            <a href="#">Services</a>
            <a href="#">Careers</a>
            <a href="#">Contacts</a>
        </div>

        <div class="login-register">
            <a href="/signin">Login</a> 
            <a href="/signup">Register</a>
        </div>
    </div>

    <div class="main-content">
        <div class="welcome">
            <h1>WELCOME TO <br>
                <span class="highlight">PHILIPPINE CARABAO CENTER</span>
            </h1>
    
            <p>“Towards better nutrition, higher levels of income and improved 
                general well-being of the overwhelming sector, the rural farming 
                families… through the conservation, propagation and promotion of 
                water buffalo as important source of milk and meat, in addition 
                to draft power and hide.”
            </p>
        </div>
        


        <div class="banner">
            <div class="see-more">
                <h1>MOO-VING FORWARD TOGETHER</h1>
                <p>"Empowering farmers, enriching<br>
                    communities, and nurturing the nation's<br>
                    agricultural legacy – that's the spirit of<br> 
                    the Philippines Carabao Center."</p>
                <a href="https://www.pcc.gov.ph/mandatevisionmission/">See More!</a>
            </div>
        </div>

        <div class="mandate-vission">
            <!-- Rigt Side Bar -->
            <div class="left-sidebar">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#mandate">
                        <img src="{{asset('images/mission.png')}}" alt="">
                        <p>Mandate</p></a>
                    </li>
                    <li><a href="#vision">
                        <img src="{{asset('images/vission.png')}}" alt="">
                        <p>Vission</p></a>
                    </li>
                    <li><a href="#mission">
                        <img src="{{asset('images/history.png')}}" alt="">
                        <p>Mission</p></a>
                    </li>
                </ul>
            </div>
             
            <div class="details">
                <h1>About Us</h1>
                <div class="mandate" id="mandate">
                    <h2>Mandate</h2>
                    <p>The Philippine Carabao Center (PCC), operating as an attached agency
                        of the Department of Agriculture, is mandated to conserve, propagate,
                        and promote the Carabao as a source of milk, meat, draft power and
                        hide to benefit the rural farmers.</p>
                </div>

                <div class="vision" id="vision">
                    <h2>Vision</h2>
                    <p>A premier research and development institution propelling sustainable 
                        growth of the livestock industry.</p>
                </div>

                <div class="mission" id="mission">
                    <h2>Mission</h2>
                    <p>Improve the general well-being and competitiveness of the livestock industry 
                        stakeholders through animal biotechnology and technology development, technology 
                        dissemination and knowledge resource management, active private sector participation, 
                        livestock-based enterprises, and policy reforms to sustain development of livestock 
                        enterprises, thus ensuring socio-economic empowerment for nation building.</p>
                </div>
            </div>
            <!-- Right Side Bar -->
            <div class="right-sidebar">
                <h3>Services</h3>
                <a href="">
                    <div class="campus">
                        <img src="{{asset('images/artificial-insemination.png')}}" width="300px">
                        <div class="layer">
                            <p>ARTIFICIAL INSEMINATION</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="campus">
                        <img src="{{asset('images/bull-loan-program.png')}}" width="300px">
                        <div class="layer">
                            <p>BULL LOAN PROGRAM</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="campus">
                        <img src="{{asset('images/frozen-buffalo.png')}}" width="300px">
                        <div class="layer">
                            <p>SEMEN DISTRIBUTION</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="campus">
                        <img src="{{asset('images/breeding-animals.png')}}" width="300px">
                        <div class="layer">
                            <p>BREEDING ANIMALS</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="campus">
                        <img src="{{asset('images/tranings.png')}}" width="300px">
                        <div class="layer">
                            <p>TRAININGS</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="campus">
                        <img src="{{asset('images/technical-assistance.png')}}" width="300px">
                        <div class="layer">
                            <p>TECHNICAL ASSISTANCE</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="campus">
                        <img src="{{asset('images/analysis-of-milk.png')}}" width="300px">
                        <div class="layer">
                            <p>ANALYSIS OF MILK SAMPLES</p>
                        </div>
                    </div>
                </a>
            </div>
    </div>





    <div class="foot">
        <p>&copy; PHILIPPINE CARABAO CENTER<br> National Headquarters and Gene Pool, Science City of Muñoz, Nueva Ecija Philippines 3120<br>Trunkline: 044-456-0731 | 456-0735 All Rights Reserved.</p>
        <div class="links">
            <a href="https://www.facebook.com/PhilippineCarabaoCenter/" target="_blank"><img src="images/facebook.png"></a>
            <a href="hhttps://ph.linkedin.com/company/philippine-carabao-center" target="_blank"><img src="images/linked-in.png"></a>
            <a href="https://www.instagram.com/explore/locations/9652212/philippine-carabao-center/" target="_blank"><img src="images/instagram.png"></a>
            <a href="https://www.youtube.com/@philippinecarabaocenter978" target="_blank"><img src="images/youtube.png"></a>
        </div>
        
        <p>Developed by: 
            <a>PCC Warriors - Alagad ni sir wil</a> 
    </div>
</body>
</html>