<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <!-- Bootstrap -->
    <link rel="icon" href="images/g.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        background: url("images/nn.jpg");
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .mai {
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.8);
        color: lightblue;
        font-weight: bold;
        border: 3px solid coral;
        border-radius: 20px;
        text-align: center;
        margin-top: 20vh;
    }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center"><strong>UNIVERSITY COLLEGE OF ENGINEERING</strong></h3>
                    <p class="text-center text-uppercase"><strong>( TIRUCHIRAPPALLI, ARIYALUR, THIRUKUVALAI, PATTUKOTTAI
                            )</strong></p>
                    <h4 class="text-center text-uppercase"><strong>GRADUATION DAY - 2022</strong></h4>
                    <h6 class="text-center text-uppercase"><strong>( 2017-2021 Batch )</strong></h6>
                </div>
            </div>
        </div>
    </header>
    <section>
        <?php	 
  
  if(!isset($_SESSION["name"]) && !isset($_SESSION["rid"])){
    echo "<script>window.location.href='index.html'</script>";
    die();
  }
$name = $_SESSION["name"];
$roll = $_SESSION["rid"];
if(isset($roll))	
{
  echo "<div class='section'>
  <div class='container animate__animated animate__fadeInDown animate__delay-0.5s'>
    <div class='row mai'>
      <center style='padding:20px'>
        <p style='font-style:bold'><strong>Register Number : $roll</strong></p>
  <p style='font-style:bold'><strong>Your Name&nbsp;&nbsp;&nbsp;: $name<br>
          </strong></p>
        <br>
        <button class='btn btn-success text-bg-dark' ><a style='color:white; text-decoration: none' href='data.php' target='_self'><strong>Proceed to complete registration</strong></a></button>
          </center>	
        </div></div>
    
    </div>";	
}
else{
 echo "<div class='outer animate__animated animate__heartBeat animate__delay-0.5s col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1 offset-1 col-10'>
    <center><h2>Unknown access to the page</h2><br><a href ='reges.php'><h5 class='btn btn-md-success'>Go to Registration</h5></a></center></div>";
}
?>
    </section>
    <br>
    <div style="height:180px"></div>
    <footer class="text-center">
        <div class="container">
            <div class="row my">
                <div class="col-12" style="color:white;font-weight:bolder">
                    <p>Copyright © aubit-webteam. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <?php die(); ?>
</body>

</html>