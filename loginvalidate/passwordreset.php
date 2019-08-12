<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/favicon.ico">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Smart Grader | Reset Password</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #3c4f74;
        }
        
        footer.page-footer {
            background-color: #3c4f74;
            margin-top: 2rem;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("http://mdbootstrap.com/img/Photos/Horizontal/Work/full page/img%20(2).jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /*Contact section*/
        
        #contact .fa {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1C2331;
        }
    </style>

</head>

<body>



    <?php include '../helpers/navbar.php'; ?> 

    <div class="row container mx-auto wow" style="margin-top: 10%">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-block">

                <!--Header-->
                <div class="form-header  blue darken-3">
                    <h3><i class="fa fa-lock"></i> &nbsp; Password Recovery</h3>
                </div>

                <!--Body-->
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="email" class="form-control">
                    <label for="form2">Your email</label>
                </div>

                <!-- <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="password" class="form-control">
                    <label for="form4">Your password</label>
                </div> -->

                <div class="text-center">
                    <button onclick="updatepassword()" class="btn blue darken-4">Send activaion link</button>
                        <h5 class="red-text" id="message"></h5>

                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                    <!-- <p>Returning User? <a href="#">Log In</a></p> -->
                    <!-- <p>Forgot <a href="passrecovery.php">Password?</a></p> -->
                </div>
            </div>

        </div>
        </div>
        <div class="col-sm-3"></div>

    </div>
    

<?php include '../helpers/footer.php'; ?>


    <!-- SCRIPTS -->

    <script>
                    function updatepassword() 
                    {

                            var xmlhttp = new XMLHttpRequest();
                            var email = document.getElementById("email").value;
                            xmlhttp.onreadystatechange = function() 
                            {
                                if (this.readyState == 4 && this.status == 200) 
                                {
                                    document.getElementById("message").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp.open("GET", "mailvalidate.php?email=" + email, true);
                            xmlhttp.send();

                        // var xhttp = XMLHttpRequest();
                        // var email = document.getElementById("email").value;
                        // xhttp.onreadystatechange = function()
                        //  {
                        //     if(this.readyState == 4 & this.status == 200)
                        //     {
                        //         document.getElementById("message").innerHTML = this.responseText;
                        //     }
                        //  };
                        //  xhttp.open("GET","mailvalidate.php?email="+email,true);
                        //  xhttp.send();
                        // body...
                    }
                </script>


    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!--Google Maps-->
    <!-- <script src="http://maps.google.com/maps/api/js"></script> -->

    

    <!-- Animations init-->
    <script>
        new WOW().init();
        $( ".wow" ).addClass( "fadeInUp" );

    </script>


</body>

</html>