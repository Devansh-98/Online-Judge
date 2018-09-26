<!DOCTYPE html>
<html lang="en" class="full-height">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CodeCrusade</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        .flex-center {
            color: #fff;
        }
        .intro-1 {
            background: url("coding.jpg")no-repeat center center;
            background-size: cover;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        .color-code{
            background-color: grey;
        }

    </style>

</head>

<body>



        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">CodeCrusade</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">

                      <li class="nav-item">
                          <a class="nav-link" href="prob1.php">Problem 1</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="prob2.php">Problem 2</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="prob3.php">Problem 3</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="prob4.php">Problem 4</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="prob5.php">Problem 5</a>
                      </li>
                  </ul>

                </div>
            </div>
        </nav>



  <p><br><br><br></p>
<!--Jumbotron-->
<div class="jumbotron text-center blue-grey lighten-5 wow fadeIn ">

<!--Title-->
<h1 class="card-title h2-responsive font-bold mt-3"><strong>Problem 1</strong></h1>


<!--Text-->
<div class="d-flex justify-content-center" align="left">
    <p class="card-text my-3" >

      You are given two character layouts, each having 26 distinct letters corresponding to the English alphabet. All keys but the letters are the same in both layouts.<br>

      Now given a string typed in the first layout your task is to convert this string into it’s representation in the second layout. Since all keys but letters are the same in both layouts, the capitalization of the letters should remain the same, as well as all other characters.<br><br>

      <b>Input:</b><br>

      The first line contains a number T denoting the number of test cases. This is followed by the T test cases.<br>

      The first line of each test case contains a string of length 26 consisting of distinct lowercase English letters. This is the first layout.<br>

      The second line of each test case contains a string of length 26 consisting of distinct lowercase English letters. This is the second layout.<br>

      The third line of each test case contains a non-empty string s consisting of lowercase and uppercase English letters and digits. This is the text typed in the first layout. The length of s does not exceed 1000.<br><br>

      <b>Constraints</b><br>

      1 <= T <= 10<br>
      1 <= s <= 1000<br><br>

      <b>Output:</b><br>

      Print the text if the same keys were pressed in the second layout.<br><br>

      <b>Example:</b><br>

      <b>Input:</b><br>

      1<br>
      mnbvcxzlkjhgfdsapoiuytrewq<br>
      asdfghjklqwertyuiopzxcvbnm<br>
      7abaCABAABAcaba7<br><br>

      <b>Output</b><br>

      7uduGUDUUDUgudu7<br><br>
    </p>
</div>
<hr class="my-4 pb-2">
Download input test file here<br>
<a href="input1.php" class ="btn btn-blue waves-effect">input1.txt<i class="fa fa-download ml-1"></i></a><br><br>
<hr class="my-4 pb-2">
Upload files here
<form action="" method="post" enctype="multipart/form-data">
<b>Source Code &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Output</b><br>
<input type="file" name="srccode"class="btn btn-outline-primary waves-effect"></button>

<input type="file" name="outputfile"class="btn btn-outline-primary waves-effect"></button><br>
     <button type="uplo" name="btn-upload" class="btn btn-blue waves-effect">Upload <i class="fa fa-upload ml-1"></i></button>
</form>
</div>
<?php
if(isset($_POST['btn-upload']))
{
  $pic = $_FILES['srccode']['name'];
        $pic_loc = $_FILES['srccode']['tmp_name'];
        $folder="uploads/prob1/";
        if(move_uploaded_file($pic_loc,$folder.$pic))
        {
            ?><script>alert('successfully uploaded');</script><?php
        }
        else
        {
            ?><script>alert('error while uploading file');</script><?php
        }
  $pic = pathinfo($_FILES['outputfile']['name']);
  $ext=$pic['extension'];
  $pic_loc = $_FILES['outputfile']['tmp_name'];
  $folder="outputs/output.".$ext;
  if(move_uploaded_file($pic_loc,$folder))
  {
    ?><script>alert('successfully uploaded');</script><?php
    echo "<center>";
    echo shell_exec("sh prob1.sh");
    echo "</center>";
  }
  else
  {
    ?><script>alert('error while uploading file');</script><?php
  }
}

?>
<!--Jumbotron-->


        <footer class="page-footer center-on-small-only elegant-color-dark">

       <p class="display-4 text-center"></p>

    </footer>

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js"></script>

    <script>
        function init_map() {

            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,

                zoom: 14
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
            var_marker.setMap(var_map);
        }
        google.maps.event.addDomListener(window, 'load', init_map);
    </script>

    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>

</body>
</html>
