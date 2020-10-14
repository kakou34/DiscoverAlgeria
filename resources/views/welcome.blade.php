<!DOCTYPE html>
<html>
<!-- information about the document-->
<head>
    <meta charset="utf-8">
    <title>My Web Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<!-- navigation bar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only">Toggle nav</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav  ">
                <li> <a style="padding: 0;" href="#"><img width="80px" height="45px" src="{{asset('img/logoo.jpg')}}"></a></li>
                <li> <a class="active" href="#">Home</a></li>
                <li><a href="{{route('coming')}}">History</a></li>
                <li><a href="{{route('coming')}}">Cuisine</a></li>
                <li><a href="{{route('coming')}}">Transportation and Visa</a></li>
                <li><a href="{{route('coming')}}">Cities</a></li>
                <li><a href="{{route('coming')}}">Shop</a></li>
                <li><a href="{{route('coming')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--End of navigation bar -->
<div id="home">
    <div class=" landing-text text-center ">
        <h1 style="color: white">Welcome To Algeria!</h1>
        <h3 style="color: white">Enjoy Your Journey :)</h3>
    </div>
</div>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <!--weather card-->
                <div class="card card-weather
                            @if($weather['weather'][0]['id']<300) Thunderstorm
                            @elseif($weather['weather'][0]['id']<400) Drizzle
                            @elseif($weather['weather'][0]['id']<600) Rain
                            @elseif($weather['weather'][0]['id']<700) Snow
                            @elseif($weather['weather'][0]['id']<800) Atmosphere
                            @elseif($weather['weather'][0]['id']==800) Clear
                            @else Clouds
                            @endif
                            " data-aos="zoom-in">
                    <div class="card-body" style="background-color: transparent">
                        <div class="weather-date-location ">
                            <h2 >{{$weather['weather'][0]['main']}}</h2>
                            <p ><span class="weather-date">{{$weather['weather'][0]['description']}}</span> </p>
                        </div>
                        <div class="weather-data d-flex">
                            <div class="mr-auto">
                                <h4 class="display-3">{{$weather['main']['temp'] - 272.15}} <span class="symbol">°</span>C</h4>
                                <p> Humidity: {{$weather['main']['humidity']}} % </p>
                                <p> Sunrise: {{date('H:i:s', $weather['sys']['sunrise'] ) }} </p>
                                <p> Sunset: {{date('H:i:s', $weather['sys']['sunset'] ) }} </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--weather card ends-->
        </div>
    </div>
</div>

<div class="padding">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="sec" data-aos="zoom-in">
                <img src="{{asset('/img/hero.jpg')}}" class="sec-icon" alt="watch">
                <div class="sec-body" style="background-color: #2c7873">
                    <div class="sec-body-content text-center">
                        <h3>{{$hero->name}}</h3>
                        <div class="liner"></div>
                        <a href="{{$hero->link}}"><img src="{{$hero->picture}}" class="sec-img"></a>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="sec" data-aos="zoom-in">
                <img src="{{asset('/img/food.jpg')}}" class="sec-icon" alt="watch">
                <div class="sec-body" style="background-color: #52de97">
                    <div class="sec-body-content text-center">
                        <h3>{{$food->name}}</h3>
                        <div class="liner"></div>
                        <a href="{{$food->link}}"><img src="{{$food->picture}}" class="sec-img"></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="sec" data-aos="zoom-in">
                <img src="{{asset('/img/destination.jpg')}}" class="sec-icon" alt="watch">
                <div class="sec-body" style="background-color: #6effbf">
                    <div class="sec-body-content text-center">
                        <h3>{{$destination->name}}</h3>
                        <div class="liner"></div>
                        <a target="_blank" href="{{$destination->link}}"><img src="{{$destination->picture}}" class="sec-img"></a>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

</div>


<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <!--question card-->
                <div class="card question-card" data-aos="zoom-in">
                    <div class="card-header question-header">
                        Try answering the following question
                    </div>
                    <div class="card-body question-body" id="{{$question->correct}}">
                        <h6 class="card-title question">{{$question->question}}</h6>
                        <form class="options">
                            <input class="op-radio" type="radio" id="option1" name="question" value="{{$question->correct==1}}">
                            <label for="option1">{{$question->option1}}</label><br>
                            <input class="op-radio" type="radio" id="option2" name="question" value="{{$question->correct==2}}">
                            <label for="option2">{{$question->option2}}</label><br>
                            <input class="op-radio" type="radio" id="option3" name="question" value="{{$question->correct==3}}">
                            <label for="option3">{{$question->option3}}</label>

                            <br>
                            <div class="check">
                                <a href="#" class="btn btn-primary checkbtn">Check</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="padding">
    <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">

                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                        <li data-target="#myCarousel" data-slide-to="8"></li>
                        <li data-target="#myCarousel" data-slide-to="9"></li>
                        <li data-target="#myCarousel" data-slide-to="10"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="https://img1.goodfon.com/wallpaper/nbig/3/3b/alzhir-algeria-flag-kraski.jpg" alt="Algerian flag" >
                            <div class="carousel-caption">

                                <p>Algeria RED GREEN WHITE</p>
                            </div>
                        </div>

                        @foreach($pics as $pic)
                            <div class="item">
                                <img src="{{$pic->link}}" alt="{{$pic->title}}">
                                <div class="carousel-caption">
                                    <p>{{$pic->title}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
</div>


<!-- Footer -->
<footer class="page-footer footer">
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h5>Subscribe to the newsletter</h5>
        <form  method="POST" action="{{route('storeMail')}}">
            @csrf
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="subscribe">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>


    </div>


    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">


        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="contactf">
                    <h4 style="color: aliceblue" class="text-uppercase font-weight-bold">Useful Links</h4>
                    <hr >

                    <a href="http://www.mae.gov.dz/default.aspx">Ministry Of External Affairs</a> <br>
                    <a href="http://www.sante.dz/chu-batna/telephone_utile.htm">Hospitals</a> <br>
                    <a href="http://www.mtatf.gov.dz/?lang=en">Ministry of Tourism</a>

                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="contactf">
                    <h4 style="color: aliceblue" class="text-uppercase font-weight-bold">Contact</h4>
                    <hr>

                    <p>
                        <i class="fas fa-home mr-3"></i> Dellys, 35033 - Algeria</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> kmouheb@esi.dz</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 213 111111111</p>

                </div>

            </div>

        </div>



    </div>

</div>
    <div class="socialmedia">
        <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
        </a>
    </div>
</footer>
<!-- Footer -->


<script>
    AOS.init();
</script>

<script>
    $(document).on('click', '.checkbtn', function(){

        var radios = $('.op-radio');
        if(radios.length>0){
            radios.each(function(i){
                var parent = $(this).parents('li');
                if($(this).is(':checked') && $(this).val()==1){
                    parent.css({"color": "green"});
                    alert("Good Job there! Your answer is correct.")
                }
                if ($(this).is(':checked') && $(this).val()==0){
                    parent.css({"color": "red"});
                    alert("Not really... Try again!")
                }

            });

        }
    });
</script>
</body>