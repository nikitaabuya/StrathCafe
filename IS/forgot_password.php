<?php
    use PHPMailer;





	$conn = new mysqli('localhost','root','','strathcafe');
	if (mysqli_connect_errno()) 
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
		
	if (!isset($_POST['Email'])) 
        die ('Please fill in your Email!');
        
    $stmt = $conn->prepare('SELECT * FROM Users WHERE Email = ?');
    
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['Email']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    if ($stmt->num_rows > 0) 
    {
        $stmt->bind_result($UserID, $FirstName, $LastName, $AdmissionNumber, $Gender, $Email, $Password);
        $stmt->fetch();
        
        $token = "abcdefghijklmnopqrstuvwxyz0123456789";
        $token = str_shuffle($token);
        $token = substr($token,0,6);
        $Email = $_POST['Email'];
        
        $stmt = mysqli_query($conn, "UPDATE password_resets SET Token='$token', TokenExpiration=DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE Email='$Email'");
        mysqli_close($conn);
        
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();
        $mail->addAddress($Email);
        $mail->setFrom("strathcafe@strathmore.edu", "cafe");  
        $mail->subject = "Reset Password";
        $mail->body = "Hiii";
    } 
    else 
    {
        echo '<h1>The Email you entered does no exist in the database</h1>';
        header( "refresh:2; url=forgot_password.html" );
    }
    ;
    
    
?>