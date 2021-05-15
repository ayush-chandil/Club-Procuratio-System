<?php
include "admin/config.php";
$msg = "";

if(isset($_POST["send"])) {
    $sql = "INSERT INTO visitors (name, email, query) 
    VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["query"]."')";

    if (mysqli_query($conn, $sql)) {
    $msg = "Message Submitted";
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
    <title>Contact Us</title>
   <style>
       .banner{
      background: url(images/contactpage.png);
      min-height: 100vh;
      background-size:contain;
      background-size: 100% 100%;
      background-repeat: no-repeat;
    }

    /* #contact{
        padding-top: 230px;
        padding-left: 1160px;
    }
    .content{
     max-width: 500px;
     padding: 60px;
     background-color: white;
     box-shadow: 0 15px 50px rgba(0,0,0, 0.1);
    
    }
    input,textarea{
        text-align: center;
    } */
    .content{
        padding-top: 13%;
        padding-left: 70%;
    }
   input{
       border-radius: 30px;
       padding: 17px;
   }
   input,textarea{
        text-align: center;
        border: none;
        outline:none;
        /* font-weight: bold; */
      
    } 
    textarea{
        border-radius: 25px;
        padding: 15px;
    }
    .text{
        padding-left: 80px;
        padding-right: 80px;
    }
    .txt{
        margin-top: 26px;
    }

    .input-icons i {
            position: absolute;
        }
          
        .icon {
            padding-top: 20px;
            min-width: 50px;
            text-align: center;
        }
        .fa-envelope{
            padding-top: 43px;
        }
       button{
           margin-left: 30%;
           margin-top: 2%;
           padding: 12px;
           background-color: #D3CEF2;
            color:black;
            font-weight: bold;
            letter-spacing: 2px;
           
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
            <div id="contact">
                <div class="content">
                    <!-- <h4 class="text-dark mb-3">Send Message</h4> -->
                    <?php 
                    if($msg != "") {
                        echo "<font color='white' font face='ocraextended' size='5pt'>".$msg."<br /></font>";
                    }
                    ?>
                    <form method="POST">
                        <div class="input-icons">
                            <i class="fa fa-user icon text-dark"></i>
                        <input class="text input-field" name="name" type="text" placeholder="Name" required>
                       </div>
                       <div class="input-icons">
                        <i class="fa fa-envelope icon text-dark"></i>
                        <input class="txt text text-field" name="email" type="email" placeholder="E-mail" required>
                       </div>
                       <div>
                        <!-- <i class="fa fa-edit icon text-dark"></i> -->
                            <textarea class="txt" placeholder="MESSAGE" rows="7" name="query" cols="41"></textarea>
                        </div>

                        <button type="submit" name="send"> SUBMIT <i class="fas fa-arrow-right"></i></button>
                      

                          <!-- <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-lg"><i class="far fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                          </div>
    
                          <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-lg"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="E-mail" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                          </div>

                          <div class="form-group">
                            <textarea class="form-control form-control-lg " placeholder="MESSAGE" rows="6"></textarea>
                        </div> -->
    
    


                        <!-- <div class="form-group">
                            <input class=" form-control mt-4 " type="text" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input class=" form-control mt-4 emailid" type="email" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg " placeholder="MESSAGE" rows="6"></textarea>
                        </div> -->
                        
                        <!-- <button type="submit" class="btn-lg btn-info text-white">Send <i class="fas fa-arrow-right"></i></button> -->
                    </form>
                </div>
            </div>
   
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>