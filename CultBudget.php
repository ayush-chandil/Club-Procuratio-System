<?php 
session_start();
include "admin/config.php";
$tableName = "cult_bud";
$danceb="";
$artb="";
$musicb="";
$dramab="";
$cultb="";
$totalbudget = "CULT_SOCIETY";
$cult="CULTURAL_COMMITTEE";
$dance="DANCE_CLUB";
$art="ART_CLUB";
$music="MUSIC_CLUB";
$drama="DRAMA_CLUB";
$msg = "";
$budget = "";

$sql = "select * from ".$tableName;
if($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $budget = $row[$totalbudget];
        $dramab = $row[$drama];
        $artb = $row[$art];
        $musicb = $row[$music];
        $danceb = $row[$dance];
        $cultb = $row[$cult];
    } else {
        $budget = "";
        $danceb="";
        $artb="";
        $musicb="";
        $dramab="";
        $cultb="";
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $dancemod = $_POST["mod5"];
    $artshades = $_POST["shades"];
    $musicencore = $_POST["encore"];
    $dramamasquerade = $_POST["masquerade"];
    $sql = "update ".$tableName." set ".$dance." = ".$dancemod.",".$art."=".$artshades.",".$music."=".$musicencore.",".$drama."=".$dramamasquerade ;

    if (mysqli_query($conn, $sql)) {
    $msg = "Budget Updated";
    } else {
        $msg = "Error, Please Try Again";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                 text-transform: uppercase;
             }
          .banner{
              background-image: url(images/budget.png);
              min-height: 100vh;
              background-size:contain;
              background-size: 100% 100%;
              background-repeat: no-repeat;
          }
  
          .card{
              position: absolute;
              top: 15%;
              left: 45%;
              border-radius: 25px;
              padding: 8px;
              background-color:#D50372;
              opacity: 70%;
              /* background-blend-mode: darken; */
              color: #EFE9FB;
              max-height: 1000px;
              width: 40%;
          }
  
          .header{
              font-size: 25px;
              font-weight: bold;
  
          }
  
          .mydiv{
                  font-weight: 500;
                   font-size: 18px;
                  text-align: center;
                  padding: 2.5px;
                  color: black;
                  background-color: white;
                  /* border-color: #F2F1F8; */
                  border-radius: 25px;
                  height: 30px;
                  width: 60%;
               }
  
              .total{
                   display: flex;
                   /*text-align: center;
                   align-items: center;*/
              }
  
               p{
                   font-size: 16px;
                   font-weight: 500;
               }
  
               .new{
                   padding-left: 10%;
  
               }
  
               .txt{
                   text-align: center;
                   border-radius: 10px;
                   font-weight: 500;
                   font-size: 17px;
                   border: 1px solid white;
                    /* border-color: #F2F1F8; */
                   /*letter-spacing: 1.5PX;*/
                   padding:0.1px;
                   outline: none;
                   width: 95%;  
                   margin-left:5%;
                   text-transform:none !important;
               }
  
               .btn{
                   font-weight: bold;
                   letter-spacing: 2px;
                   font-size: larger;
                   padding: 2px;
                   border-radius:20px ;
                   width: 70%;
                   background-color:white;
              }
              /* .btn:hover{
                  color: rgb(226, 223, 223);
              } */
              .button{
                  text-align: center;
              }
  
      
          .logout a{
                  position: absolute;
                  top: 8px;
                  /* left: 5px; */
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

           <div class="card">
               <form method="POST">
              <div class="header text-center mb-1">
                  Edit
                    <?php 
                    if($msg != "") {
                    echo "<font color='white' font face='ocraextended' size='5pt'>".$msg."<br /></font>";
                }
            ?>
              </div>

              <h5> Total Society</h5>
              <div class="total">
                <div class="mydiv">
                <?php echo $budget; ?>
                   </div>
                   <p class="px-2"> FIXED</p>
              </div>

              <h5> Cultural Committee</h5>
              <div class="total">
                <div class="mydiv">
                <?php echo $cultb; ?>
                   </div>
                   <p class="px-2"> Auto-update</p>
              </div>

              <h5> Dance club</h5>
              <div class="total">
                
                   <p class="px-2"> Old</p>
                   <div class="mydiv">
                   <?php echo $danceb; ?>
                   </div>
                  
                   <p class="new"> New</p>
                   <div>
                    <input type="text" class="txt" name = "mod5" required placeholder="NEW">
                 </div>

              </div>

              <h5> Art club</h5>
              <div class="total">
                
                   <p class="px-2"> Old</p>
                   <div class="mydiv">
                   <?php echo $artb; ?>
                   </div>
                  
                   <p class="new"> New</p>
                   <div>
                    <input type="text" class="txt" name = "shades" required placeholder="NEW">
                 </div>

              </div>

              <h5> Music club</h5>
              <div class="total">
                
                   <p class="px-2"> Old</p>
                   <div class="mydiv">
                   <?php echo $musicb; ?>
                   </div>
                  
                   <p class="new"> New</p>
                   <div>
                    <input type="text" class="txt" name = "encore" required placeholder="NEW">
                 </div>

              </div>

              <h5> Drama club</h5>
              <div class="total">
                
                   <p class="px-2"> Old</p>
                   <div class="mydiv">
                   <?php echo $dramab; ?>
                   </div>
                  
                   <p class="new"> New</p>
                   <div>
                    <input type="text" class="txt" name = "masquerade" required placeholder="NEW">
                 </div>

              </div>

             <div class="button">
               <button type="submit" class="btn"> CHANGE </button>
             </div>
            </form>
            </div>                
                
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>