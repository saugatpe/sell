<?php
include 'connect.php';

if(isset($_POST['change_password'])){
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validate password length and complexity here
    
    if($new_password !== $confirm_password){
        $error = "New password and confirm password do not match";
    } else {
        // Get the user's email address from the form
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        // Check if the email exists in the database
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 1){
            // Update the password in the database
            $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
            $query = $sql = "UPDATE users SET pass='$new_password_hash' WHERE email='$email'";
            mysqli_query($conn, $query);
            
            // Redirect to success page
            header("Location: loginin.php");
            exit();
        } else {
            // Email address is not valid
            $error = "Invalid email address";
        }

    }
}

mysqli_close($conn);
?>
<?php
   echo "<p style='color:red;'>$error</p>";
?>

