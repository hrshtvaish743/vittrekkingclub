        <!DOCTYPE html>
                    <html lang="en">

                        <head>

                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <meta name="description" content="">
                            <meta name="author" content="">

                            <title>VIT Trekking Club</title>
                            <link rel="shortcut icon" href="/img/trek_icon.jpg">

                            <!-- Bootstrap Core CSS -->
                            <link href="css/bootstrap.min.css" rel="stylesheet">

                            <!-- Custom CSS -->
                            <link href="css/style.css" rel="stylesheet">

                            <!-- Custom Fonts -->
                            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                            <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
                            <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

                            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                            <!--[if lt IE 9]>
                            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                            <![endif]-->
                            <script src='https://www.google.com/recaptcha/api.js'></script>

                        </head>


                        <body id="page-top" data-spy="scroll" data-target="navbar-fixed-top">

                            <!-- Navigation -->
                            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <a class="navbar-brand page-scroll" href="#page-top">
                                            <i class="fa fa-play-circle"></i>  <span class="light">VIT Trekking Club</span>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                                        <ul class="nav navbar-nav">
                                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                                            <li class="hidden">
                                                <a href="#page-top"></a>
                                            </li>
                                            <li>
                                                <a class="page-scroll" href="index.html">Back to Home</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.container -->
                            </nav>

                            <section id="event_report" class="container content-section text-center">
                                <?php
                                        $servername = "mysql.hostinger.in";
                                        $username = "u828621389_trek";
                                        $password = "mydatabase";
                                        $dbname = "u828621389_trek";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 
                                        $sql = "SELECT * FROM events";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            $rows=$result->num_rows;
                                            while($row = $result->fetch_assoc()) {
                                                echo "<div class=\"row\">";
                                                echo "<div class=\"col-lg-8 col-lg-offset-2\">";
                                                echo "<p>Event Name - </p>"."<h1>".$row["event_name"]."</h1>";
                                                echo "<h4>".$row["conductor_name"]."</h4>";
                                                echo "<h6>".$row["date"]."</h6>";
                                                echo "<p>".$row["report"]."</p>";
                                                echo "</div>";
                                                echo "</div>";

                                            }
                                        } else {
                                            echo "0 results";
                                            }
                                            $conn->close();
                                ?>
                                
                            </section>

                            <!-- Footer -->
                            <footer>
                                <div class="container text-center">
                                    <p>Copyright &copy; VIT Trekking Club 2015</p>
                                </div>
                            </footer>


                            <script src="js/jquery.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                            <script src="js/jquery.easing.min.js"></script>
                            <script src="js/trek.js"></script>
                            <script src="js/contact_me.js"></script>
                            <script src="js/jqBootstrapValidation.js"></script>
                            <script>
                                $('.carousel').carousel({
                                interval: 3000 //changes the speed
                                })
                            </script>

                            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false">
                            </script>
                            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
                            </script>

                        </body>
                    
                    </html>