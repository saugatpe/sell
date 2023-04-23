<html>
<head>
	<title>Forget Password</title>
</head>
<style>
	body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        .contain {
            margin: 0  auto;
			background-color: white;
			width: 400px;
			margin-top: 60px;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
		}
		input[type=email], input[type=password]{
        width: 100%;
			padding: 14px;
			margin: 8px 0;
			font-size: 16px;
			display: block;
			border: 1px solid #ddd;
			border-radius: 3px;
			box-sizing: border-box;
			background-color: #f6f6f6;
        
        }
        input[type=text]{
			
			width: 100%;
			padding: 14px;
			margin: 8px 0;
			font-size: 16px;
			display: block;
			border: 1px solid #ddd;
			border-radius: 3px;
			box-sizing: border-box;
			background-color: #f6f6f6;
        }
    input[type=submit]{
        background-color: blue;
			color: white;
			padding: 10px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
            font-size: 20px;
			display: inline-block;
			transition: background-color 0.3s ease;
           
        
    }
    input[type=submit]:hover {
			background-color: blue;
		}
		input[type=text]:focus, 
 input[type=email]:focus, 
 input[type=password]:focus {
  outline: none;
  border: 1px solid #007bff;
}
@media only screen and (max-width: 768px) {
	  /* styles for mobile devices */
	  .contain {
	    margin-top: 60px;
	    padding: 10px;
	  }
	}
	@media only screen and (min-width: 768px) {
  /* styles for larger screens */
  .contain {
    margin-top: 60px;
    width: 30%;
    padding: 10px;
  }
  input[type=submit] {
    font-size: 20px;
    padding: 10px;
}
	}

</style>
<body>
<?php
if(isset($error)){
	echo "<p style='color:red'>$error</p>";
}
?>
	<div class="contain">
	<form method="post" action="sucess.php">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="new_password">New Password:</label>
		<input type="password" id="new_password" name="new_password" required>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br>
		<input type="submit" name="change_password" value="Change Password">
	</form>
	</div>
</body>
</html>