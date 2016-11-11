
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Countdown landing page Bootstrap template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap and Font Awesome css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700">
        <!-- Theme stylesheet-->
        <link rel="stylesheet" href="../css/countdown/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="../css/countdown/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>

        <div style="background-image: url('../src/img/system/countdown/beach.jpg')" class="main"> 
            <div class="overlay"></div>
            <div class="container">
                <br><br><br><br>
              
                <p class="social"> <img src="../src/img/system/logo.png" ><br>
                    <label style="font-size: 30px;color: whitesmoke;">Profiles</label>
                </p>
                
                <div class="row">
                    <div class="col-md-12">
                       
                        
                        <h2 class="sub">We are still tweaking few details, stay tuned!</h2>
                    </div>
                </div>
                <!-- countdown-->
                <div id="countdown" class="countdown">
                    <div class="row">
                        <div class="countdown-item col-sm-3 col-xs-6">
                            <div id="countdown-days" class="countdown-number">&nbsp;</div>
                            <div class="countdown-label">days</div>
                        </div>
                        <div class="countdown-item col-sm-3 col-xs-6">
                            <div id="countdown-hours" class="countdown-number">&nbsp;</div>
                            <div class="countdown-label">hours</div>
                        </div>
                        <div class="countdown-item col-sm-3 col-xs-6">
                            <div id="countdown-minutes" class="countdown-number">&nbsp;</div>
                            <div class="countdown-label">minutes</div>
                        </div>
                        <div class="countdown-item col-sm-3 col-xs-6">
                            <div id="countdown-seconds" class="countdown-number">&nbsp;</div>
                            <div class="countdown-label">seconds</div>
                        </div>
                    </div>
                      <p class="social"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" title="" class="instagram"><i class="fa fa-instagram"></i></a></p>
                </div>
                <!-- /.countdown-->
                <div class="mailing-list">
                    <h3 class="mailing-list-heading">Join our mailing list and we will let you know all the news!</h3>
                    <div class="row">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="email" class="sr-only"></label>
                                <input type="email" placeholder="jane.doe@example.com" id="email" class="form-control transparent">
                            </div>
                            <button class="btn btn-danger">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy;2016 Synapse Software Technologies</p>
                        </div>
                        <div class="col-md-6">
                            <p class="credit">Made with <i class="fa fa-heart-o" aria-hidden="false" style="color: red;"></i> by Synapse Software Technologies</p>
                            <!-- Please do not remove the backlink to us unless you support the development at https://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :) -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JAVASCRIPT FILES -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-1.11.0.js"><\/script>');</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="../js/countdown/jquery.cookie.js"></script>
        <script src="../js/countdown/jquery.countdown.min.js"></script>
        <script src="../js/countdown/front.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments);
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r);
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXXXX-X');
            ga('send', 'pageview');
        </script>
    </body>
</html>