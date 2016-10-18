<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="template.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>leave a comment</title>
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
                </div> 
            </div><!--/container-->
        </div><!--/masthead-->

        <!--main-->
        <div class="container">
            <div class="row">
                <!--left-->
                <div class="col-md-3" id="leftCol">
                    <ul class="nav nav-stacked" id="sidebar">
                        <li><a href="#sec0">(→_→)</a></li>
                    </ul>
                </div><!--/left-->

                <!--right-->
                <div class="col-md-9">
                    <h2 id="sec0">post a comment :)</h2>
                    <form action=<?php echo htmlspecialchars("comments.php") ?> method="post">
                        comment: <br>
                        <input row = 5 style="width: 700px" type="text" name="comment"><br><br>
                        from:<br>
                        <input type="text" name="from"><br><br>
                        <input type="submit">
                    </form> 
                    <br>
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
            var navHeight = $('.navbar').outerHeight(true) + 10;

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