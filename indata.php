<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Congratulations</title>
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
        background: url("images/85327.jpg");
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    </style>
</head>

<body>
    <?php
if(!isset($_SESSION['rid']) && !isset($_SESSION['name'])){
   echo "<script>window.location.href='index.html'</script>";
   session_destroy();
}
// $_SESSION["name"]=$_POST['name'];
$_SESSION["campus"]=$_POST['campus'];
$_SESSION["dept"]=$_POST['dept'];
// $_SESSION["course"]=$_POST['course'];
$_SESSION["phone"]=$_POST['phone'];
$_SESSION["aadhar"]=$_POST['aadhar'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["address"]=$_POST['address'];
$_SESSION["gender"]=$_POST['gender'];
?>

    <?php
  $servername = "localhost";
  $username = "ucetrichy";
  $password = "ucetry";
  $dbname = "graduation";
$conn = mysqli_connect($servername,$username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$rno=$_SESSION["rid"];
$name=$_SESSION["name"];
$email=$_SESSION["email"];
$name=$_SESSION["name"];
$dept=$_SESSION["dept"];
$campus=$_SESSION["campus"];
$phone=$_SESSION["phone"];
$address=$_SESSION["address"];
$aadhar=$_SESSION["aadhar"];
$gender=$_SESSION["gender"];

$sql="UPDATE `grad_db` SET `rno`='$rno',`name`='$name',`gender`='$gender',`campus`='$campus',`course`='$dept',`aadhaar`='$aadhar',`email`='$email',`phone`='$phone',`address`='$address' WHERE rno = '$rno'";
if($conn->query($sql) === TRUE) {
    $insert = "INSERT INTO `grad_result` (`rno`, `name`, `gender`, `aadhar`, `campus`, `course`, `email`, `phone`, `address`) VALUES ('$rno','$name','$gender','$aadhar','$campus','$dept','$email','$phone','$address')";
    $conn->query($insert);
    echo  "<div class='container'>
	<div class='row'>
		<center class='animate__animated animate__bounce animate__delay-0.5s'>
		<div class='my-5'>
		<img src='images/GD-SR.png' alt='f' width='300vw' height='70%'>
			<br><br>
		<a class='text-wrap' href='index.html'>
			<button class='btn btn-md btn-success'>Back to home page</button></a></div></center>
		</div>
	</div>"; 
    } else {
    echo "Error acuired on admin side " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
    <br>
    </form>
    <?php
    session_destroy();
    header( "refresh:6;url=index.html");
    ?>
</body>

</html>