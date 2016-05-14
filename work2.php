<?php if (isset($_POST[ "submit"])) { $name=$ _POST[ 'name']; $email=$ _POST[ 'email']; $message=$ _POST[ 'message']; $human=i ntval($_POST[ 'human']); $from='Demo Contact Form' ; $to='example@domain.com' ; $subject='Message from Contact Demo ' ; $body="From: $name\n E-Mail: $email\n Message:\n $message" ; if (!$_POST[ 'name']) { $errName='Please enter your name' ; } if (!$_POST[ 'email'] || !filter_var($_POST[ 'email'], FILTER_VALIDATE_EMAIL)) { $errEmail='Please enter a valid email address' ; } if (!$_POST[ 'message']) { $errMessage='Please enter your message' ; } if (!$errName && !$errEmail && !$errMessage && !$errHuman) { if (mail ($to, $subject, $body, $from)) { $result='<div class="alert alert-success">Thank You! I will be in touch</div>' ; } else { $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>' ; } } } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favico.ico">

    <title>Sanchit Sharma | UX/UI Designer</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/css" href="assets/less/styles.less" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Static navbar -->
    <div class="fontAleg otherNavbar">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">

            <!--        <div class="navbar fontAleg mainFileNavbar" role="navigation">-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand centered" href="index.html">SANCHIT SHARMA<p class="regulartext roboto300"style="font-size:15px;color:#90A4AE;letter-spacing:0.6px;margin-top:5px">
                        UX/UI Designer
                    </p></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about.html">About</a>
                        </li>
                        <li><a class="active" href="work.html">Work</a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div id="workwrap">
        <div class="container">

            <div class="row mb mt">
                <h1 style="margin-bottom:10px; margin-top:70px;letter-spacing:2px; font-size:50px;" class="centered">EXPERIENCE</h1>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="page-header text-center">Contact Form Example</h1>
                        <form class="form-horizontal" role="form" method="post" action="index.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message">
                                        <?php echo htmlspecialchars($_POST[ 'message']);?>
                                    </textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="footerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 mb20">
                    <br>
                    <div id="navcontainer" class="mt">
                        <ul>
                            <li id="behance">
                                <a target="_blank" href="https://www.behance.net/sanchits"><i class="fa fa-behance fa-1x"></i></a>
                            </li>

                            <li id="facebook">
                                <a target="_blank" href="https://www.facebook.com/sanchit1209"><i class="fa fa-facebook fa-1x"></i></a>
                            </li>

                            <li id="twitter">
                                <a target="_blank" href="https://twitter.com/SanchitSh"><i class="fa fa-twitter fa-1x"></i></a>
                            </li>

                            <li id="likedin">
                                <a target="_blank" href="https://in.linkedin.com/in/sanchitsh"><i class="fa fa-linkedin fa-1x"></i></a>
                            </li>

                            <li id="instagram">
                                <a target="_blank" href="https://www.instagram.com/sanchit.sharma/"><i class="fa fa-instagram fa-1x"></i></a>
                            </li>

                        </ul>
                    </div>
                    <p class="mb10 mt" style="color:#9E9E9E; font-size:12px;">Designed and Developed with :)</p>
                    <p class="mt10" style="color:#9E9E9E; font-size:12px;">&copy; 2016 SANCHIT SHARMA.</p>
                </div>

            </div>
        </div>
    </div>
    <!--/footerwrap -->





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/style.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>

</html>