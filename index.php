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
      background-image: url(background.png);
      background-size: cover;
      background-repeat: no-repeat;
      overflow: hidden;
      background-attachment: fixed;
      background-position: center;
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
    .text {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  height: 90%;
  width: 20%;
  margin-top: 80px;
  float: right;
  margin-right: 10px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  background-color: green;
  border: 2px solid blue;
    }
    .text:hover{
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2)
    }
    p{
      color: black;
    }
    .a2 {
      text-decoration: none;
      font-size: 20px;
      color: white;
    }
    .btn-2{
      margin-top: 4px;
      background-color: dodgerblue;
      margin-left: 20px;
    }
    .btn-3{
      background-color: blue;
			padding: 16px 14px;
			margin: 8px 0;
			border: none;
			margin-top: 20px;
			margin-bottom: 20px;
			border-radius: 4px;
			cursor: pointer;
			width: 10%;
			transition: background-color 0.3s ease;
    }
    .btn-3:hover{
      background-color: #1877f2;
    }
    a{
      color: white;
      text-decoration: none;
      font-size: 20px;
    }
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
<button class="btn-3"><a href="loginin.php">login</a></button>
<footer>
  <div class="text">
    <p>Welcome to our car selling website! We offer a wide selection of quality vehicles at competitive prices. Our goal is to make your car buying experience as easy and enjoyable as possible. With our user-friendly website, you can easily browse our inventory, compare prices, and schedule a test drive. Our knowledgeable and friendly staff are always available to answer any questions you may have and to help you find the perfect car to fit your needs and budget. Thank you for considering us for your next car purchase!</p>
    <button class="btn-2"><a href="about.php" class="a2">Explore more</a></button>
  </div>
</footer>
</body>
</html>