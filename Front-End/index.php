<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restraunt</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style.css" />
  <script src="https://kit.fontawesome.com/0af1d80857.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--............ Nav Bar ............-->
  <?php include('./component/navigation.php'); ?>

  <div class="home">
    <img id="home-image" src="https://scontent.fbkk22-2.fna.fbcdn.net/v/t1.15752-9/340919240_1360983184683202_2740031132046513215_n.png?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeEnGabnmaNjyxH7iWfjacMmU_BKFEWdiUxT8EoURZ2JTKheqfhIu8x5gFqpUHVeqKOq8Ga3RI89I9OIwcjpP23g&_nc_ohc=Oz3wtxmvwPwAX-OBLlU&_nc_ht=scontent.fbkk22-2.fna&oh=03_AdSG4agAeDSDtq4-xvKThUZZsMzYQMQugc59Hd5vFUtwPA&oe=64635348">
    <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <a href="/Front-End/view/hotel.php">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button></a>
   </div>
</div>
</div>
  
  </div>

  <!--............ Footer ............-->
  <?php include('./component/footer.php'); ?>

</body>

</html>
