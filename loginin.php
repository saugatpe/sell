<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login page</title>
</head>
<body>
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
    a {
        text-decoration: none;
        font-size: 16px;
		color: blue;
        text-align: center;
        align-items: center;
    }

    button {
        background-color: green;
			padding: 16px 14px;
			margin: 8px 0;
			border: none;
			margin-top: 20px;
			margin-bottom: 20px;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			transition: background-color 0.3s ease;
    }
	input[type=text]:focus, 
 input[type=email]:focus, 
 input[type=password]:focus {
  outline: none;
  border: 1px solid #007bff;
}
    button:hover{
        background-color: green;
    }
    .forget {
		color: blue;
		margin-top: 10px;
		margin-bottom: 20px;
		text-align: center;
    }
	.btn {
		color: #f2f2f2;
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
</head>
<body>
<?php
session_start();
	if(isset($error)){
		echo "<p style='color:red'>$error</p>";
	}
	?>
	<form method="post" action="check.php" autocomplete="off">

	<div class="contain">
		<input type="email" id="email" name="email" placeholder="Email or phone number" required><br>

		<input type="password" id="password" name="password" placeholder="password" required><br>
		<input type="checkbox" onclick="myfunction()">show password<br><br>
		<input type="submit" value="Login">
		<div class="forget"><a href="forgetpassword.php">Forget password?</a></div>
		<hr>
		<button><a href="singin.php" class="btn">create new account</a></button>
	</form>
	</div>
	<script>
		function myfunction(){
			var x = document.getElementById("password");
			if(x.type=== "password"){
				x.type = "text";
			}else{
				x.type = "password";
			}
		}
	</script>
</body>
</html>