<?php 

session_start();
include "admin/config.php";
$msg = "";
$columnName = str_replace(" ", "_", $_SESSION["c"]);
if($_SESSION["category"] == "cultural_society") {
    $tableName = "cult_bud";
}elseif($_SESSION["category"] == "sports_society") {
    $tableName = "sports_bud";
}elseif($_SESSION["category"] == "lit_society") {
    $tableName = "lit_bud";
}elseif($_SESSION["category"] == "tech_society") {
    $tableName = "technical_bud";
}

$sql = "select ".$columnName." from ".$tableName;
if($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $msg = $row[$columnName];
    } else {
        $msg = "";
    }
}

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
                 background-image: url(images/club\ bud.png);
                 min-height: 100vh;
                 background-size:contain;
                 background-size: 100% 100%;
                 background-repeat: no-repeat;
            }
 
            .box{
                position: absolute;
                top: 53%;
                left: 63%;
                width: 22%;
                
                 
            }
 
            .mydiv{
                font-weight: 490;
                font-size: large;
                text-align: center;
                padding: 10px;
                background-color: white;
                border-radius: 25px;
                height: 50px;
             }
 
             .logout a{
                 position: absolute;
                 top: 8px;
                 left: 5px;
                 color: #D3CEF2;
                 font-size:20px;
                 font-weight: bold;
                 text-decoration: none;
                 border: solid 2px blue;
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
             <div class="mydiv">
             <?php echo $msg; ?>
            </div>
          
        </div>

    
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>