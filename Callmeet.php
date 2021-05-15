<?php
session_start();
include "admin/config.php";
$sub = str_replace(" ", "-", $_SESSION["c"]);
$msg = "";

if(isset($_POST["call"])) {
    $sql = "insert into meeting_details (TEAM, PLATFORM, MEET_TIME, MEET_DATE) VALUES ('".$sub."','".$_POST["platform"]."', '".$_POST["time"]."', '".$_POST["date"]."')";

    if (mysqli_query($conn, $sql)) {
    $msg = "Meeting Added";
    } else {
        $msg = "Error, Please try again";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>doc</title>
   <style>
       *{
               margin: 0;
               padding: 0;
           }
           .banner{
                background-image: url(images/call_meet.png);
                min-height: 100vh;
                background-size:contain;
                background-size: 100% 100%;
                background-repeat: no-repeat;
                overflow-y:hidden;
           }

           .box{
                 margin-left: 65%;
                 padding-top: 15%;
             }
 
             .box div:not(:last-child){
                 margin-bottom: 8%;
             }
 
 
            .txt{
                 text-align: center;
                 border-radius: 35px;
                 font-weight: 500;
                 font-size: large;
                 /* background-color: #FA0498; */
                 border: 2px solid white;
                 letter-spacing: 1.5PX;
                 padding: 3% 20% ;
                 outline: none;
                 width: 77%;  
             }
 
             .btn{
                 text-decoration: none;
                 margin-left: 32%;
                 color:white;
                 font-weight: bold;
                 letter-spacing: 2px;
                 font-size: larger;
                 padding: 12px 28px;
                 border-radius:25px ;
                 background-color:#FA0498;
            }
            .btn:hover{
                color: rgb(226, 223, 223);
            }
           

            .logout a{
                position: absolute;
                top: 8px;
                left: 5px;
                color: #D3CEF2;
                font-size:20px;
                font-weight: bold;
                text-decoration: none;
                border: solid 2px  #FA0498;
                border-radius: 15px;
                padding: 10px;
            }
            .logout a:hover{
                color: white;
            }

   </style>
    
</head>
<body>
    <section class="banner">
        <div class="logout">
            <a href="logout.php" type="button"> LOGOUT </a>
           </div>

        <div class="box">
            <?php 
                if($msg != "") {
                    echo "<font color='white' font face='ocraextended' size='5pt'>".$msg."<br /></font>";
                }
            ?>
            <form method="POST">
                <div class="mydiv">
                    <input type="text" class="txt" name="platform" required placeholder="Enter Platform"> 
                </div>
                <div class="mydiv">
                    <input type="text" class="txt" name="time" required placeholder=" Enter the time">
                </div>
                <div class="mydiv">
                    <input type="text" class="txt" name="date" required placeholder="Enter the date">
                </div>
                <button class="btn" type="submit" name="call"> CALL </button>
            </form>
        </div>
    
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>