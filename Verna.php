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
section{
  width: 90%;
  height: 515px;
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
.contain{
  flex-basis: 50%;
}
.contain-img{
  float: left;
}
.img2{
  height: 50%;
  width: 30%;
}
.contain-info{
  flex-basis: 40%;
}
.contain-info h1{
  font-size: 20px;
  font-weight: 700;
  margin-top: 20px;
}
.stars{
  margin-bottom: 35px;
  
}

.checked{
  color: orange;
}
.contain-info h2{
  color: orange;
  font-size: 30px;
}
button{
  color: white;
}
.btn-2{
        background-color: dodgerblue;
			padding: 16px 14px;
			margin: 8px 0;
			border: none;
			margin-top: 20px;
			margin-bottom: 20px;
			border-radius: 4px;
			cursor: pointer;
			width: 20%;
			transition: background-color 0.3s ease;
    }

    button:hover{
        background-color: blue;
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
    

    <section>

    <div class="contain">
      <div class="contain-img">
      <img src="car1.png" class="img2">
        
      </div>

      <div class="contain-info">
        <h1>Hyundai Verna</h1>
        <div class="stars">
          <span><li class="fa fa-star checked"></li></span>
          <span><li class="fa fa-star checked"></li></span>
          <span><li class="fa fa-star"></li></span>
          <span><li class="fa fa-star"></li></span>
          <span><li class="fa fa-star"></li></span>
        </div>
        <hr>
        <h2>Rs. 10.89 Lakh</h2>
        <hr>
       <h3>Color Family:  All Available</h3>

       <button class="btn-2">Buy Now</button>



      </div>
    </div>
    <h5>Hyundai Verna Key Specifications</h5>
    <table border="2" width=50% align="center">
    <tr align="center">
      <td>Fuel Type</td>
      <td>Engine</td>
      <td>Sun Roof</td>
      <td>Transmission</td>
      <td>Mileage</td>
    </tr>
    <tr>
      <td>Petrol Only</td>
      <td>1497 cc & 1482 cc</td>
      <td>Yes</td>
      <td>Transmission</td>
      <td>Mileage</td>
    </tr>

    </table>
    </section>
    </body>
</html>