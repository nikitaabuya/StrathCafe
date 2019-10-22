<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Strath Cafe | Registration</title>
  </head>
  <body>
    <?php
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $AdmissionNumber = $_POST['AdmissionNumber'];
      $Gender = $_POST['Gender'];
      $Email = $_POST['Email'];
      $Password = $_POST['Password'];  
  
      $conn = new mysqli('localhost','root','','strathcafe');
      if ($conn->connect_error)
      {
        die('connection failed : '.$conn->connect_error);
      }
      else
      {
        $sql_e = "SELECT * FROM Users WHERE Email='$Email'";
        $sql_am = "SELECT * FROM users WHERE AdmissionNumber='$AdmissionNumber'";
        $res_e = mysqli_query($conn, $sql_e);
        $res_am = mysqli_query($conn, $sql_am);
    
        if (mysqli_num_rows($res_e) > 0) 
        {
          echo "<h1>Email already exist</h1>"; 
          header( "refresh:2; url=registration.html" ); 
        }
        else if(mysqli_num_rows($res_am) > 0)
        {
          echo "<h1>Admission number already exists</h1>";
          header( "refresh:2; url=registration.html" );
        }
        else
        {
          $stmt = $conn->prepare("INSERT INTO users (FirstName, LastName, AdmissionNumber, Gender, Email, Password)
          VALUES (?,?,?,?,?,?)");
          $stmt->bind_param("ssisss", $FirstName, $LastName, $AdmissionNumber, $Gender, $Email, $Password);
          $stmt->execute();
          echo"<h1>Registration Successful</h1>";
          $stmt->close();
          $conn->close();
          header( "refresh:2; url=login.html" );
        }
      }
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>