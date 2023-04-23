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
      position: fixed;
    }

    .nav-right {
      float: right;
    }

    .nav a {
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
      .nav a {
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
      .nav a {
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
      .nav a {
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


 /* for second part */

</style>
<body>
    <div class="nav">
        <div class="logo"><img src="logo.png"></div>
          <div class="nav-right">
            <a href="index.php"><i class="fa fa-home"></i></a>
            <a href="car-items.php"><i class="fa fa-car"></i></a>
            <a href="contact.php"><i class="fa fa-phone"></i></a>
            <a href="about.php"><i class="fa fa-info"></i></a>
            <a href="logout.php"><i class="fa fa-sign-out"></i></a>

<div class="search-bar">
  <input type="search" placeholder="Search...">
  <button><i class="fa fa-search"></i></button>
</div>
</div>
    </div>
    <br><br><br>
    <hr>

    <main>
		<section class="about-section">
			<h2>About Us</h2>
			<p>We are a team of car enthusiasts who love helping people find the perfect car for their needs. Our mission is to provide high-quality cars and exceptional customer service to our clients. We believe that buying a car should be an enjoyable experience, and we strive to make it as stress-free as possible.</p>
			<p>At Car Selling Website, we offer a wide range of cars to choose from, including both new and used cars. We carefully select each car in our inventory to ensure that it meets our high standards of quality and reliability. Our team is always happy to answer any questions you may have and to help you find the right car for your lifestyle and budget.</p>
			<p>We also offer a variety of services to make the car buying process even easier. Our financing options allow you to get the car you want at a price you can afford. We also offer maintenance and repair services to keep your car running smoothly for years to come.</p>
			<p>Thank you for considering Car Selling Website for your car buying needs. We look forward to helping you find your dream car!</p>
		</section>
	</main>

  <footer>
  <p>&copy; 2023 Car Selling Website</p>
  </footer>
  

  <script src="app.js"></script>
</body>
</html>