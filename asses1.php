<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carewroks Foundation</title>
  <style>
  body {
     background-image: url("logo.png");
     background-color: #cccccc;
     background-repeat: no-repeat;
     background-size:auto;
     background-position:top left;

  }
      
       .container h1{
            color: teal;
            font-family: Montserrat,sans-serif;
        }
        .container h2,h3{
            color: tomato;
            font-family: Montserrat,sans-serif;
        }
        button{
            padding: 10px;
            margin: 10px;
            background-color: tomato;
            font-family: cursive,sans-serif;
            border-radius: 6px;
        }  
</style>
    <?php
 include_once 'dbcon.php';
session_start();

  if(!(isset($_SESSION['email']))){
header("location:index.html");
  }
else
{
    $name=$_SESSION['name'];
    echo "<center><h3>Hello $name ! Kindly fill the form</h3></center>";
}
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background image>

<div class="container">
  <h1 align="center">Careworks Foundation</h1>
  <h2 align="center">NEED ASSESSMENT</h2><br><hr>
    <center>
  <form action="insert_ass.php" method="post">
    <div class="form-group">
      <label for="sid">School Name</label>
      <input type="text" style="width: 250px;" class="form-control" id="sid" placeholder="Enter School Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="sid">Locality</label>
      <input type="text" style="width: 250px;" class="form-control" id="sid" placeholder="Enter Address" name="add" required>
    </div>
      <div class="form-group">
      <label for="sid">Head Master's Name</label>
      <input type="text" style="width: 250px;" class="form-control" id="sid" placeholder="Enter fullname" name="hm_name" required>
    </div>
      <div class="form-group">
      <label for="sid">Phone Number</label>
      <input type="text" style="width: 250px;" class="form-control" id="sid" placeholder="Enter Address" name="phone" required>
    </div>
      <div class="form-group">
      <label for="computer">Number of Computers</label>
      <input type="text" style="width: 250px;" class="form-control" id="no_of_com" placeholder="Enter the number" name="computer" required>
    </div>
    <div class="form-group">
      <label for="library">Is Library Arranged</label><br>
      <input type="radio" name="library" value="yes"> YES
      <input type="radio" name="library" value="no"> NO
    </div>
    <div class="form-group">
      <label for="science">Are Chemicals available in Labs</label><br>
      <input type="radio" name="science" value="yes" required> YES
      <input type="radio" name="science" value="no" required> NO
    </div>
    <div class="form-group">
      <label for="water">Storage Facility for Drinking Water</label><br>
      <input type="radio" name="water" value="yes" > YES
      <input type="radio" name="water" value="no"> NO
    </div>
    <div class="form-group">
      <label for="toilet">Sanitation Facility</label><br>
      <input type="radio" name="sanitation" value="yes" > YES
      <input type="radio" name="sanitation" value="no"> NO
    </div>
    <div class="form-group">
      <label for="handwash">Handwash/Restrooms Area</label><br>
      <input type="radio" name="handwash" value="yes" > YES
      <input type="radio" name="handwash" value="no"> NO
    </div>
    <div class="form-group">
      <label for="handwash">Any NGO involved?</label><br>
      <input type="radio" name="ngo" value="yes" > YES
      <input type="radio" name="ngo" value="no"> NO
    </div>
    <div class="form-group">
      <label for="handwash">Are any health services provided free?</label><br>
      <input type="radio" name="health" value="yes" > YES
      <input type="radio" name="health" value="no"> NO
    </div>
    <br>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
      <br><hr><br>
  </form></center>
</div>

</body>
</html>
