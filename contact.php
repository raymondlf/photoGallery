<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="template.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>Home</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Home</a>
                </div>
                <nav class="collapse navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="postComment.php">Leave A Comment</a>
                        </li>
                        <li>
                            <a href="seeComments.php">See the Comments</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Me</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <div id="masthead">  
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Raymond Feng
                            <p class="lead">San Francisco State University</p>
                        </h1>
                    </div>
                    <div class="col-md-5">
                        <div class="well well-lg"> 
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="photos/myDog/myDog.JPG" class="img-responsive">
                                </div>
                                <div class="col-sm-6">
                                    Contact me
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div><!--/container-->
        </div><!--/masthead-->

        <!--main-->
        <div class="container">
            <div class="row">
                <!--left-->
                <div class="col-md-3" id="leftCol">
                    <ul class="nav nav-stacked" id="sidebar">
                        <li><a href="#sec0">Contact</a></li>
                    </ul>
                </div><!--/left-->

                <!--right-->
                <div class="col-md-9">
                    <h2 id="sec0">Contact Me</h2>
                    <p>
                        If you want to say something, feel free to click "Leave A Comment" link at the top,<br>
                        or contact me through my email: <br>
                        e-mail: ruif@mail.sfsu.edu<br>
                    </p>
                    <hr>
                </div><!--/right-->
            </div><!--/row-->
        </div><!--/container-->
        <script>
            /* activate sidebar */
            $('#sidebar').affix({
                offset: {
                    top: 235
                }
            });



            /* activate scrollspy menu */
            var $body = $(document.body);
            var navHeight = $('.navbar').outerHeight(true) + 500;

            $body.scrollspy({
                target: '#leftCol',
                offset: navHeight
            });

            /* smooth scrolling sections */
            $('a').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $("html,body").animate({
                            scrollTop: target.offset().top - 50
                        }, 1000);
                        return false;
                    }
                }
            });
        </script>
    </body>
</html>
