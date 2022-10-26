<?php
session_start();
$error="";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register page</title>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
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
    </style>
    <script>
    window.history.forward();
    </script>
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
        <div class="container my-5">
            <div class="row">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="myForm"
                    class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-1 offset-1 col-10 col-sm-10"
                    onsubmit="return validateForm()" style="background-color: white;border:2px solid red">
                    <center>
                        <h5>Enter your register number:</h5>
                        <input type="text" name="rid" minlength="12" maxlength="12" value="" required><br><br>
                        <input type="submit" value="SUBMIT" id="submit">
                    </center>
                    <br>
                </form>
            </div>
        </div>
    </section>
    <?php 
  $servername = "localhost";
  $username = "ucetrichy";
  $password = "ucetry";
  $dbname = "graduation";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['rid'])){
    $_SESSION["rid"]=$_POST['rid'];
    $ri = $_SESSION["rid"];
    $sql="SELECT rno,name,gender,email FROM grad_db where rno=$ri";
    $result = $conn->query($sql);
    if($result->num_rows>0){
      while($table = $result->fetch_assoc()) {

        if($table["gender"]=="" && $table["email"]==""){
          $_SESSION["name"] = $table['name'];
          echo "<script>window.location.href='stepone.php'</script>";
          exit();
        }
        else{
          echo "<div class='outer animate__animated animate__bounce animate__delay-0.5s col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1 offset-1 col-10'>
			 <center style='color:red;font-weight:bold; background-color:white;border:2px solid black'><p>Already Registered!</p></center>
			</div>";
          }
      }
    }
    else{
      echo "<div class='outer animate__animated animate__heartBeat animate__delay-0.5s col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1 offset-1 col-10'>
			 <center style='color:red;font-weight:bold; background-color:white;border:2px solid black'><p>Kindly enter a valid register number for registration process !...<br> otherwise, contact dean office or email:graduation@aubit.edu.in</p></center>
			</div>";
    }}
	?>
</body>

</html>