<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
  body {
  background-color: #aaa;
    }

    nav {
      overflow: hidden;
      display: block;
    }

    img {
      height: 60px;
      width: 60px;
      float: left;
    }

    .nav-right {
      float: right;
    }

    .nav .a1 {
      padding-top: 10px;
      text-align: center;
      font-size: 36px;
      margin-right: 80px;
      padding: 10px;
      text-decoration: none;
    }

    i {
      font-size: 26px;
      margin-right: 50px;
      position: relative;
    }

    .fa {
      color: white;
      margin-top: 27px;
      position: relative;
    }

    .fa:hover {
      color: dodgerblue;
    }

    .fa .active {
      color: dodgerblue;
      padding-left: 20px;
    }

    .search-bar {
      float: right;
      margin-top: 10px;
    }

    .search-bar input[type="search"] {
      border: none;
      outline: none;
      font-size: 16px;
      border-radius: 20px;
      padding: 5px 10px;
      margin-right: 5px;
    }

    .search-bar input[type="search"]::placeholder {
      color: #aaa;
    }

    .search-bar button {
      border: none;
      background-color: transparent;
      font-size: 18px;
      color: #1877f2;
      cursor: pointer;
      margin-right: 10px;
    }

    .search-bar button:hover {
      text-decoration: underline;
    }

    /* Media queries */
    @media screen and (max-width: 992px) {
      .nav .a1 {
        padding-top: 10px;
      text-align: center;
      font-size: 36px;
      margin-right: 80px;
      padding: 10px;
      text-decoration: none;
        display: block;
      }

      i {
        margin-right: 40px;
        font-size: 24px;
        display: block;
      }

      .search-bar input[type="search"] {
        font-size: 14px;
        display: block;
      }
    }

    @media screen and (max-width: 768px) {
      .nav .a1 {
        margin-right: 40px;
        font-size: 28px;
        display: block;
      }

      i {
        margin-right: 30px;
        font-size: 22px;
        display: block;
      }

      .search-bar input[type="search"] {
        font-size: 14px;
        display: block;
      }
    }

    @media screen and (max-width: 576px) {
      .nav .a1 {
        margin-right: 20px;
        font-size: 20px;
        display: block;
      }

      i {
        margin-right: 20px;
        font-size: 18px;
        display: block;
      }

      .search-bar input[type="search"] {
        font-size: 12px;
        display: block;
      }
    }
    /* Contact Section */
.contact-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  padding: 50px;
}

.contact-form-container {
  flex-basis: 50%;
}

.contact-form-container h2 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 20px;
}

.contact-form-container form {
  display: flex;
  flex-wrap: wrap;
}

.contact-form-container form label {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  font-size: 16px;
  font-weight: 600;
}

.contact-form-container form input,
.contact-form-container form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}

.contact-form-container form button {
  background-color: #0066cc;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: 600;
}

.contact-info-container {
  flex-basis: 40%;
}

.contact-info-container h2 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 20px;
}

.contact-info-container ul {
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.contact-info-container ul li {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.contact-info-container ul li i {
  margin-right: 10px;
  font-size: 20px;
}

/* Footer */
footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f2f2f2;
  padding: 20px;
  font-size: 16px;
  font-weight: 600;
}

.footer-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links li {
  display: inline-block;
  margin-right: 20px;
}

.footer-links li:last-child {
  margin-right: 0;
}

.footer-links li a {
  color: #333;
  text-decoration: none;
}

.footer-links li a:hover {
  color: #0066cc;
}

</style>
<body>
    <div class="nav">
        <div class="logo"><img src="logo.png"></div>
          <div class="nav-right">
            <a href="index.php" class="a1"><i class="fa fa-home"></i></a>
            <a href="car-items.php" class="a1"><i class="fa fa-car"></i></a>
            <a href="contact.php" class="a1"><i class="fa fa-phone"></i></a>
            <a href="about.php" class="a1"><i class="fa fa-info"></i></a>
            <a href="logout.php" class="a1"><i class="fa fa-sign-out"></i></a>

      
<div class="search-bar">
  <input type="search" placeholder="Search...">
  <button><i class="fa fa-search"></i></button>
</div>
</div>
    </div>
    <br><br><br>
    <hr>

<section class="contact-section">
	<div class="contact-form-container">
		<h2>Contact Us</h2>
		<form action="mail.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" required>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" required>

			<label for="phone">Phone Number</label>
			<input type="tel" name="phone" id="phone" required>

			<label for="message">Message</label>
			<textarea name="message" id="message" cols="30" rows="10" required></textarea>

			<button type="submit">Send Message</button>
		</form>
	</div>
	<div class="contact-info-container">
		<h2>Contact Information</h2>
		<ul>
			<li><i class="fa fa-map-marker"></i>123 Main Street, kavre Nepal 12345</li>
			<li><i class="fa fa-phone"></i>1-800-CAR-SALE</li>
			<li><i class="fa fa-envelope"></i>sales@carsellingwebsite.com</li>
			<li>
				<i class="fa fa-clock-o"></i>
				<span>Open Monday-Saturday</span>
				<span>8:00 AM - 5:00 PM</span>
			</li>
		</ul>
	</div>
</section>


	<p>&copy; 2023 Car Selling Website</p>
</footer>




</body>
</html>