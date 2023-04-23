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

    .img1 {
      height: 60px;
      width: 60px;
      float: left;
    }

    .nav-right {
      float: right;
    }

    .nav a {
      margin-bottom: 20px;
      text-align: center;
      font-size: 36px;
      margin-right: 80px;
      padding: 10px;
      text-decoration: none;
    }

    i {
      font-size: 26px;
      margin-right: 80px;
      position: relative;
    }

    .fa {
      color: white;
      margin-top: 27px;
      display: contents;
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
        margin-right: 80px;
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
 h2{
    text-align: center;
    font-size: 30px;
    margin: 0;
    font-size: bolder;
    padding-top: 10px;
 }

 .card {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin: 50px 0;
}
.contain {
    width: 20%;
    margin: 15px;
    box-sizing: border-box;
    float: left;
    text-align: center;
    border-radius: 20px;
    cursor: pointer;
    padding: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),
    0 10px 10px rgba(0,0,0,0.22);
    transition: .4s;  
    background-color: #f2f2f2;  
}
.contain:hover{
    box-shadow: 0 3px 6px rgba(0,0,0,0.16),
    0 3px 6px rgba(0,0,0,0.23);
    transform: translate(0px, -8px);
}
img {
    width: 200px;
    height: 200px;
    text-align: center;
    margin: 0 auto;
    display: block;
}

h6 {
    text-align: center;
    font-size: 26px;
    color: orange;
    margin: 0;
    margin-top: 20px;
    margin-bottom: 5px;
}

.fa-star{

  font-size: 26px;
    transition: .4s;
    padding: 3px;
    color: #ccc;
    margin-top: 20px;
    margin-bottom: 20px;
}
.checked {
    color: orange;
}
span .fa-star:hover{
    transform: scale(1.3s);
    transition: .6s;
}
.a1{
  text-decoration: none;
    color: black;
}

</style>
<body>
    <div class="nav">
        <div class="logo"><img src="logo.png" class="img1"></div>
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


    <div class="card">

<div class="contain">
<a href="Verna.php" class="a1">
    <img src="car1.png">
    <h2>Hyundai Verna</h2>
    <h6>Rs. 10.89 Lakh</h6>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star "></i></span>
    <span><i class="fa fa-star"></i></span>
    <span><i class="fa fa-star"></i></span>
</div>
</a>


<div class="contain">
  <a href="city.php" class="a1">
 <img src="car2.png">
    <h2>Honda City</h2>
    <h6>Rs. 11.49 Lakh</h6>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star"></i></span>
    <span><i class="fa fa-star"></i></span>
</div>
</a>



<div class="contain">
  <a href="Citroen.php" class="a1">
    <img src="car3.png">
    <h2>Citroen eC3<h2>
        <h6>Rs. 11.50 Lakh</h6>
        <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star"></i></span>
</div>
</a>

<div class="contain">
  <a href="audi.php" class="a1">
    <img src="car4.png">
    <h2>Audi Sportback</h2>
    <h6>Rs. 51.43 Lakh</h6>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
</div>
</a>

<div class="contain">
  <a href="honda.php" class="a1">
    <img src="car5.png">
    <h2>Honda City</h2>
    <h6>Rs. 18.89 Lakh</h6>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star"></i></span>
</div>
</a>


<div class="contain">
  <a href="tata.php" class="a1">
    <img src="car6.png">
    <h2>Tata Tiago EV</h2>
    <h6>Rs. 8.69 Lakh</h6>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star"></i></span>
</div>
</a>

<div class="contain">
  <a href="kia.php" class="a1">
    <img src="car7.png">
    <h2>Kia EV6</h2>
    <h6>Rs. 60.95 Lakh</h6>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star"></i></span>
</div>
</a>

<div class="contain">
  <a href="tigor.php" class="a1">
    <img src="car8.png">
    <h2>Tata Tigor EV</h2>
    <h6>Rs. 12.49 Lakh</h6>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star checked"></i></span>
    <span><i class="fa fa-star"></i></span>
</div>
</a>


</body>
</html>