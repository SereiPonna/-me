<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>#me</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/../font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>#ME - Elite community</title>
    <!-- Bootstrap core CSS --
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template 
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
  
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <style>
            body {
                font-family:'Oleo Script', cursive;
                position: absolute;
                width: 100%;
                height: 100%;
                color: #000;
                background: url('/img/spark.jpg') no-repeat bottom center scroll;
                background-size: cover;
                
                
            }

            html {
                width: 100%;
                height: 100%
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Baloo Paaji', cursive;;
                font-weight: 700;
                margin-top:15px;
                margin-bottom: 0px;
                padding: 15px;
                letter-spacing: 1.5px;
                text-transform: inherit;
            }

            p {
                font-size: 16px;
                line-height: 1.5;
                margin: 0 0 25px
            }

            @media (min-width:768px) {
                p {
                    font-size: 18px;
                    line-height: 1.6;
                    margin: 0 0 35px
                }
            }

            a {
                -webkit-transition: all .2s ease-in-out;
                -moz-transition: all .2s ease-in-out;
                transition: all .2s ease-in-out;
                color: #42dca3
            }

            a:focus,
            a:hover {
                text-decoration: none;
                color: #1d9b6c;
                border-radius: 15px;
            }

            #mainNav {
                font-family: Cabin, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                margin-bottom: 0;
                text-transform: uppercase;
                border-bottom: 1px solid rgba(255, 255, 255, .3);
                background-color: rgba(100,100,100,.2);
            }

            @media (min-width:992px) {
                #mainNav {
                    padding-top: 20px;
                    padding-bottom: 20px;
                    -webkit-transition: background .3s ease-in-out, padding-top .3s ease-in-out, padding-bottom .3s;
                    -moz-transition: background .3s ease-in-out, padding-top .3s ease-in-out, padding-bottom .3s;
                    transition: background .3s ease-in-out, padding-top .3s ease-in-out, padding-bottom .3s;
                    letter-spacing: 1px;
                    border-bottom: none;
                    background: 0 0
                }
                #mainNav.navbar-shrink {
                    padding-top: 10px;
                    padding-bottom: 10px;
                    border-bottom: 1px solid rgba(255, 255, 255, .3);
                    background: #000
                }
                #mainNav .nav-link.active {
                    outline: 0;
                    background-color: rgba(255, 255, 255, .3)
                }
                #mainNav .nav-link.active:hover {
            
                }
            }

            .masthead {
                display: table;
                width: 100%;
                height: auto;
                padding: 2px 0;
                text-align: center;
                color: #fff;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: contain;
                border-color: green;
                border-radius: 25px

            }

            .masthead .intro-body {
                display: table-cell;
                vertical-align: middle
            }

            .masthead .intro-body .brand-heading {
                font-size: 50px
            }

            .masthead .intro-body .intro-text {
                font-size: 18px
            }

            @media (min-width:768px) {
                .masthead {
                    height: 100%;
                    padding: 0
                }
                .masthead .intro-body .brand-heading {
                    font-size: 100px
                }
                .masthead .intro-body .intro-text {
                    font-size: 22px
                }
            }

            
            .content-section {
                padding-top: 150px;
                padding-bottom: 150px
            }

            #map {
                width: 100%;
                height: 300px
            }

            @media (min-width:780px) {
                .content-section {
                    padding-top: 200px;
                    padding-bottom: 200px
                }
                #map {
                    height: 350px
                }
            }

 
            
            }

            footer {
                padding: 0 0
            }

            footer p {
                font-size: 14px;
                margin: 0
            }

            ::-moz-selection {
                background: #fcfcfc;
                background: rgba(255, 255, 255, .2);
                text-shadow: none
            }

            ::selection {
                background: #fcfcfc;
                background: rgba(255, 255, 255, .2);
                text-shadow: none
            }

            img::selection {
                background: 0 0
            }

            img::-moz-selection {
                background: 0 0
            }

            body {
                -webkit-tap-highlight-color: rgba(255, 255, 255, .2)
            }

    </style>


</head>

<body>

@yield('content')

</body>
</html>
