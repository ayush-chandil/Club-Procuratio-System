<?php
include"admin/config.php";
$culturalList = "";
$sportsList = "";
$technicalList = "";
$literatureList = "";

$sql = "SELECT * FROM events_list where SOCIETY = 'CULTURAL'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $culturalList .= 
        "
        <tr>
            <td>".$row["EVENT_NAME"]."</td>
            <td>".$row["TENTATIVE_DATE"]."</td>
        </tr>
        
        ";
    }
}

$sql = "SELECT * FROM events_list where SOCIETY = 'TECHNICAL'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $technicalList .= 
        "
        <tr>
            <td>".$row["EVENT_NAME"]."</td>
            <td>".$row["TENTATIVE_DATE"]."</td>
        </tr>
        
        ";
    }
}

$sql = "SELECT * FROM events_list where SOCIETY = 'SPORTS'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $sportsList .= 
        "
        <tr>
            <td>".$row["EVENT_NAME"]."</td>
            <td>".$row["TENTATIVE_DATE"]."</td>
        </tr>
        
        ";
    }
}

$sql = "SELECT * FROM events_list where SOCIETY = 'LITERATURE'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $literatureList .= 
        "
        <tr>
            <td>".$row["EVENT_NAME"]."</td>
            <td>".$row["TENTATIVE_DATE"]."</td>
        </tr>
        
        ";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWILj8LYTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <title>Events</title>
    <style>
    
            .banner{
            background: url(images/society.jpg);
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
            color: black;
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

                        <div class="row">
                            <div class="col">
                                <div id="mycontainer" class="carousel slide carousel-fade" data-ride="carousel">
                                <!-- <div id="mycontainer" class="carousel slide" data-ride="carousel"> -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#mycontainer" data-slide-to="0" class="active"></li>
                                        <li data-target="#mycontainer" data-slide-to="1"></li>
                                        <li data-target="#mycontainer" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="3000">
                                            <img src="images/cult/img1.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/cult/img2.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/cult/img3.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                    </div>
                                    <a href="#mycontainer" class="carousel-control-prev" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a href="#mycontainer" class="carousel-control-next" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-body content">
                            
                            <p class="mt-2"> 
                               <table class="table-bordered">
                                   <thead>
                                       <tr>
                                           <th>Event name</th>
                                           <th>Tentative Date</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php 
                                        echo $culturalList;
                                       ?>
                                   </tbody>
                               </table>
                            </p>

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
                       
                        <div class="row">
                            <div class="col">
                                <div id="mycontainer" class="carousel slide carousel-fade" data-ride="carousel">
                                <!-- <div id="mycontainer" class="carousel slide" data-ride="carousel"> -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#mycontainer" data-slide-to="0" class="active"></li>
                                        <li data-target="#mycontainer" data-slide-to="1"></li>
                                        <li data-target="#mycontainer" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="3000">
                                            <img src="images/sports/img1.jpg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/sports/img2.jpg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/sports/img3.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                    </div>
                                    <a href="#mycontainer" class="carousel-control-prev" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a href="#mycontainer" class="carousel-control-next" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-body content">
                           
                            <p class="mt-2"> 
                            <table class="table-bordered">
                                   <thead>
                                       <tr>
                                           <th>Event name</th>
                                           <th>Tentative Date</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php 
                                        echo $sportsList;
                                       ?>
                                   </tbody>
                               </table>
                            </p>
                           
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
                    
                        <div class="row">
                            <div class="col">
                                <div id="mycontainer" class="carousel slide carousel-fade" data-ride="carousel">
                                <!-- <div id="mycontainer" class="carousel slide" data-ride="carousel"> -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#mycontainer" data-slide-to="0" class="active"></li>
                                        <li data-target="#mycontainer" data-slide-to="1"></li>
                                        <li data-target="#mycontainer" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="3000">
                                            <img src="images/Tech/img1.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/Tech/img2.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/Tech/img3.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                    </div>
                                    <a href="#mycontainer" class="carousel-control-prev" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a href="#mycontainer" class="carousel-control-next" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-body content">
                            
                            <p class="mt-2"> 
                            <table class="table-bordered">
                                   <thead>
                                       <tr>
                                           <th>Event name</th>
                                           <th>Tentative Date</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php 
                                        echo $technicalList;
                                       ?>
                                   </tbody>
                               </table>
                            </p>
                           
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

                        <div class="row">
                            <div class="col">
                                <div id="mycontainer" class="carousel slide carousel-fade" data-ride="carousel">
                                <!-- <div id="mycontainer" class="carousel slide" data-ride="carousel"> -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#mycontainer" data-slide-to="0" class="active"></li>
                                        <li data-target="#mycontainer" data-slide-to="1"></li>
                                        <li data-target="#mycontainer" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="3000">
                                            <img src="images/Litr/img1.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/Litr/img2.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3></h3>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item" data-interval="3000">
                                            <img src="images/Litr/img3.jpeg" class="d-block w-100">
                                            <!-- <div class="carousel-caption">
                                                <h3 class="text-warning"></h3>
                                            </div> -->
                                        </div>
                                    </div>
                                    <a href="#mycontainer" class="carousel-control-prev" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a href="#mycontainer" class="carousel-control-next" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-body content">
                            
                            <p class="mt-2"> 
                            <table class="table-bordered">
                                   <thead>
                                       <tr>
                                           <th>Event name</th>
                                           <th>Tentative Date</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php 
                                        echo $literatureList;
                                       ?>
                                   </tbody>
                               </table>
                            </p>
                           
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


















