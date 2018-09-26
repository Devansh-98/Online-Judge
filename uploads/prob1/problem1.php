<!DOCTYPE html>
<html>
<head>
<title>File Uploading With PHP and MySql</title>
</head>
<body>
  <center><h1>CodeCursade</h1>
    <h2>Problem1</h2>
      copy-paste the above script and try to upload any file, You can use this for Uploading image's ,PDF's,MP3,Video, Doc any file types make sure you change the necessary parts in the script.
      that's it
      Download Script





      Like This Post? Please share!

      Subscribe Through Email And Get Free Updates


      Enter your email...
       SignUp
      You May Also Like...

      How to Send HTML Format eMails in PHP using PHPMailer
      Upload, Insert, Update, Delete an Image using PHP MySQL
      Easy Ajax Image Upload with jQuery, PHP
      Ajax Login Script with jQuery, PHP MySQL and Bootstrap
      AutoComplete Search with Href Link [PHP MySQL - Remote DataSource Example]
      SweetAlert2 – Ajax Delete Rows Example with PHP MySQL
      Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP
      Ajax Bootstrap Signup Form with jQuery PHP and MySQL
      How to Convert MySQL Rows into JSON Format in PHP
      Load Data on Drop Down Selection using PHP MySQL and Ajax
      <br>
      <br>
      <center>
      <fieldset style="width: 40%;">
        <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="srccode" />Source Code<br>
                <input type="file" name="outputfile" />Output File<br>
                <button type="submit" name="btn-upload">upload</button>
      </form>
    </fieldset>
</form>
</center>
</body>
</html>
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
    echo shell_exec("sh prob1.sh");
  }
  else
  {
    ?><script>alert('error while uploading file');</script><?php
  }
}

?>
