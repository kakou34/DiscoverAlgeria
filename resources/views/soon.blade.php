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
                <li><a href="/">Home</a></li>
                <li><a href="">History</a></li>
                <li><a href="">Cuisine</a></li>
                <li><a href="">Transportation and Visa</a></li>
                <li><a href="">Cities</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--End of navigation bar -->

<div id="home" style="background-image: url({{asset('img/b.jpg')}})">
    <div class=" landing-text text-center ">
        <h1 style="color: white">Coming Soon!</h1>
        <h3 style="color: tomato">Stay tuned</h3>
    </div>
</div>





</body>
</html>