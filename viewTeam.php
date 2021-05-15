<?php
include"admin/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWILj8LYTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <title>Society</title>
    <style>
    
            .banner{
            background: url(images/view.png);
            min-height: 100vh;
            background-size:contain;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .card{
            height: 660px;
            border-radius:25px;
        }
        .content{
            overflow-y: scroll;
        }
        .card-header{
            font-size: large;
            font-weight: 700;
            color: crimson;
            text-transform: uppercase;
        }
        img{
            height: 300px;
        }
        .homepage a{
           color: #D3CEF2;
           font-size:20px;
       }
       .homepage a:hover{
           color: white;
       }
       
    </style>
</head>

<body>
    <section class="banner">
    <div class="homepage">
            <a href="index.php"><i class="fas fa-home"></i></a>
           </div>
        <div class="container-fluid">
            <div class="row box">
                <div class="col-lg-3 col-md-6 col-sm-8 col-12">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                           Cultural Society
                        </div>
                        <img src="images/Logos/cult.jpg" class="card-img-top">
                        <div class="card-body content">
                           
                            <p class="mt-2"> 
                                Cultural Committee of Indian Institute of Vadodara is responsible for conducting various cultural activities that happen around the year. For conducting a successful event, there is a lot that happens behind the scenes. The Cultural Committee is full of such enthusiastic people who are ready to overcome any obstacle to make any event memorable. 
                            </p>
                            <!--<button class="btn btn-dark"> view list</button>-->
                            <a href="cultural.html" class="btn btn-dark" type="button">View list</a>
                        </div>
                        <div class="card-body mt-1">
                        </div>
                    </div>
                </div>
                

                <div class="col-lg-3 col-md-6 col-sm-8 col-12">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                           Sports Society
                        </div>
                        <img src="images/Logos/image3A98133_Glitch.jpg" class="card-img-top">
                        <div class="card-body content">
                           
                            <p class="mt-2"> 
                                The Sports Committee of IIITV is an active functioning body under Student Gymkhana which manages all the sports activities organized in the institute. It aims to provide a healthy atmosphere along with a platform where students can improve these skills as well as can explore multiple sports activities. It also focuses on organizing various sports events and leagues throughout the academic year. 
                            </p>
                            <!--<button class="btn btn-dark"> view list</button>-->
                            <a href="Sports.html" class="btn btn-dark" type="button">View list</a>
                        </div>
                        
                        <div class="card-body mt-1">
                        </div>
                    </div>
                </div>
                

                <div class="col-lg-3 col-md-6 col-sm-8 col-12">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                           Technical Society
                        </div>
                        <img src="images/Logos/tech.jpg" class="card-img-top ">
                        <div class="card-body content">
                           
                            <p class="mt-2"> 
                                The Technical Committee is one of the 4 committees in the Student Gymkhana of IIIT Vadodara. The Tech Committee is responsible for organising technical festivals, hackathons and is responsible for all activities conducted by the IIITV Coding Club, DOT - The Design Club, Arcadia - The Gaming Club and Enigma - The Mathematics Club

                                
                            </p>
                            <!--<button class="btn btn-dark"> view list</button> -->
                            <a href="technical.html" class="btn btn-dark" type="button">View list</a>
                        </div>
                        <div class="card-body mt-1">
                        </div>
                    </div>
                </div>
                

                <div class="col-lg-3 col-md-6 col-sm-8 col-12">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                           Literature Society
                        </div>
                        <img src="images/Logos/lit.jpg" class="card-img-top">

                        <div class="card-body content">
                           
                            <p class="mt-2"> 
                                "Writing is perhaps the greatest of human inventions, binding together people who never knew each other, citizens of distant epochs. Books break the shackles of time. A book is proof that humans are capable of working magic." -Carl Sagan, Cosmos. The main objective of Literary committee at IIITV is to enhance the spoken and written skills and conduct various events providing a platform for the students to discover and show their hidden talents.
                            </p>
                            <!--<button class="btn btn-dark">view list</button>-->
                            <a href="Literature.html" class="btn btn-dark" type="button">View list</a>
                        </div>
                        <div class="card-body mt-1">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>