<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        background: url("images/dd.jpeg");
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    </style>
</head>
<script>
function validate() {
    if (document.getElementById("gender").value == "none" || document.getElementById("campus").value == "none" ||
        document.getElementById("department").value == "none") {
        alert("Please select all the select fields")
        return false
    }
}
</script>
<?php
 if(isset($_SESSION["rid"]) && isset($_SESSION["name"])){
  $id = $_SESSION["name"];
  echo "<body>
    <header>
    <div class='container'>
    <div class='row'>
    <div class='col-12'>
    <h3 class='text-center'><strong>UNIVERSITY COLLEGE OF ENGINEERING</strong></h3>
    <p class='text-center text-uppercase'><strong>( TIRUCHIRAPPALLI, ARIYALUR, THIRUKUVALAI, PATTUKOTTAI )</strong></p>
    <h4 class='text-center text-uppercase'><strong>GRADUATION DAY - 2022</strong></h4>
    <h6 class='text-center text-uppercase'><strong>( 2017-2021 Batch )</strong></h6>
    </div>
    </div>
    </div>
    </header>
    <br>
    <br>
    <section>
    <div class='container'>
    <div class='row' >
    <div class='col-lg-12 mb-4' >
    <form name='myForm' style='background-color:white;border:2px solid red;' onsubmit='return validate()' class='offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-1 offset-1 col-10 col-sm-10 p-3 ' action='indata.php' method='POST'>
    <center>
       <p style='font-weight:bold;text-decoration: underline'>Enter your data correctly for futher communication</p>
        </center>
         <div class='form-inline'>
             <label for='name'><strong>Name</strong></label>
             <input type='text' class='form-control input-group-text' name='name' value='$id' disabled required='required'>
          </div>
          <div class='form-group'>
          <label for='gender'><strong>Gender</strong></label>
        <select name='gender' required='required' id='gender' class='input-group-text form-select form-control'>
            <option value='none' selected disabled hidden>Select an Option</option>
            <option value='male'>Male</option>
            <option value='female'>Female</option>
              </select>
          </div>
          <div class='form-inline'>
           <label for='gender'><strong>Campus</strong></label><select name='campus' id='campus' class=' campus input-group-text form-select form-control' required='required'>
              <option value='none' selected disabled hidden>Select an Option</option>
              <option value='UCE BIT Campus'>UCE BIT Campus</option>
              <option value='UCE Ariyalur'>UCE Ariyalur</option>
              <option value='UCE Pattukottai'>UCE Pattukottai</option>
              <option value='UCE Thirukuvalai'>UCE Thirukuvalai</option>
            </select>
          </div>
          <div class='form-inline'>
           <label for='Department'><strong>Department</strong></label><select name='dept' id='department' class=' course form-select form-control input-group-text ' required='required'>
            <option value='none' selected disabled hidden>Select an Option</option>
            <option value='B.E. Automobile Engineering'>B.E. Automobile Engineering</option>
            <option value='B.E Civil Engineering'>B.E Civil Engineering</option>
            <option value='B.E Computer Science and Engineering'>B.E Computer Science and Engineering</option>
            <option value='B.E Electrical and Eletronics Engineering'>B.E Electrical and Eletronics Engineering</option>
            <option value='B.E Eletronics and Communication Engineering'>B.E Eletronics and Communication Engineering</option>
            <option value='B.E Mechanical Engineering'>B.E Mechanical Engineering</option>
            <option value='B.E Civil Engineering(Tamil Medium)'>B.E Civil Engineering(Tamil Medium)</option>
            <option value='B.E Mechanical Engineering(Tamil Medium)'>B.E Mechanical Engineering(Tamil Medium)</option>
            <option value='B.Tech Information Technology'>B.Tech Information Technology</option>
            <option value='B.Tech Biotechnology'>B.Tech Biotechnology</option>
            <option value='B.Tech Pharmaceutical Technology'>B.Tech Pharmaceutical Technology</option>
            <option value='B.Tech Petrochemical Technology'>B.Tech Petrochemical Technology</option>
            <option value='M.E Computer Science and Engineering'>M.E Computer Science and Engineering</option>
            <option value='M.E Energy Engineering'>M.E Energy Engineering</option>
            <option value='M.E Environmental Engineering'>M.E Environmental Engineering</option>
            <option value='M.Tech Biotechnology'>M.Tech Biotechnology</option>
            <option value='M.Tech Biopharmaceutical Technology'>M.Tech Biopharmaceutical Technology</option>
            <option value='M.C.A'>M.C.A</option>
            <option value='M.B.A'>M.B.A</option>
          </select>
          </div>
            <div class='form-inline'>
           <label for='Phone number'><strong>Phone number</strong></label><input name='phone' type='text' required='required' minlength='10' maxlength='10' class='input-group-text form-control'  pattern='\d{10}'></div>
              
          <div class='form-inline'>
           <label for='email'><strong>Email</strong></label> <input  class='input-group-text form-control' type='email' name='email' required='required'>
        </div>  
          <div class='form-group'><label for='address'><strong>Address</strong></label> 
             <textarea name='address' rows='6' cols='20' class='input-group-text form-control' required='required' minlength='15'></textarea>
          </div>
         <div class='form-group'><label for='address'><strong>Aadhaar number</strong></label><input type='text' class='form-control input-group-text' minlength='12' maxlength='12' name='aadhar' required='required'>
         </div>
        <br>
       <input type='submit' value='Submit' id='submit' class='form-control btn btn-success'>
        </form>
        </div></div>
        </div>
        </section>
        </body>
        </html>";
}
else{
    echo "<script>window.location.href='index.html'</script>";
}
?>