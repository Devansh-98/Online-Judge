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
<h1 class="card-title h2-responsive font-bold mt-3"><strong>Problem 2</strong></h1>


<!--Text-->
<div class="d-flex justify-content-center" align="left">
    <p class="card-text my-3" >
      Sharma likes magical numbers. Numbers having their digits sorted in non-decreasing order when written in base 10 with no leading zeroes are called magical.Some examples of this are 7, 143, 666, and 335588. Numbers that do not have this property, like 202, 3213, 4955 and 9999909, are not magical.
He just finished counting all positive integers in ascending order from 1 to N. What was the last magical number he counted? <br><br>
<b>Input:</b><br>
The first line of the input gives the number of test cases, T. T lines follow. Each line describes a test case with a single integer N, the last number counted by Sharma. <br><br>
<b>Output:</b><br>
For each test case, output one line containing y, where y is the last magical number counted by Sharma. <br><br>
<b>Limits:</b><br>
1 ≤ T ≤ 100.<br>
1 ≤ N ≤ 10^18.<br><br>
<b>Sample Test Cases:<br></b>
<b>Input:<br></b>
4<br>
143<br>
10000<br>
9<br>
11111111111111110<br><br>

<b>Output:<br></b>
139<br>
9999<br>
9<br>
9999999999999999<br>




    </p>
</div>
<hr class="my-4 pb-2">
Download input test file here<br>
<a href="input2.php" class ="btn btn-blue waves-effect">input2.txt<i class="fa fa-download ml-1"></i></a><br><br>
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
        $folder="uploads/prob2/";
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
    echo shell_exec("sh prob2.sh");
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
