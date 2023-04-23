<!DOCTYPE html>
<html>
<head>
	<title>Signin page</title>
	<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        .contain {
            margin: 0 auto;
			width: 400px;
			margin-top: 120px;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
            
        }
       input[type=email], input[type=password]{
        width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
           
        
        }
        input[type=text]{
        
            width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
        
        }
    input[type=submit]{
        background-color: green;
			color: white;
			padding: 16px 20px;
			margin: 16px 0;
			text-transform: uppercase;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
            font-size: 16px;
			transition: background-color 0.3s ease;
           
        
    }
	input[type=text]:focus, 
 input[type=email]:focus, 
 input[type=password]:focus {
  outline: none;
  border: 1px solid #007bff;
}
    input[type=submit]:hover {
			background-color: green;
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
    width: 50%;
    padding: 40px;
  }
  input[type=submit] {
    font-size: 20px;
    padding: 10px;
  }
}

    </style>
</head>
<body>
	
	<form method="post" action="this.php" autocomplete="off">
		<div class="contain">

		<input type="text" id="name" name="name" placeholder="Name" required><br>


		<input type="email" id="email" name="email" placeholder="Email or Phone number" required><br>

		<input type="password" id="password" name="password" placeholder="Password" required><br>
		<input type="checkbox" onclick="myfunction()">show password<br>
		<input type="submit" value="signin">
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
