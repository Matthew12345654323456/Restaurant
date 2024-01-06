<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <style>
        .form{
            background-color: white; 
            width: 50vh;
            height: 50vh;
            position: absolute;
            left: 40%;
            z-index: 2;
            border-radius: 1vh;
            top: 23%;
            display: flex;
            flex-direction: column;
            align-items: center;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .form input{
          font-size: 3vh;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: black;
            color: white;
        }
              .swiper {
                position: absolute;
                left: 22%;
                top: 12%;
                width: 30%;
        margin-top: -4vh;
        margin-bottom: 10vh;

        border-radius: 1vh;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .bg-gold {
            height: 100vh;
            background: linear-gradient(135deg, #ffcf5c 25%, #f8b434 25%, #f8b434 70% ,  #ffcf5c 50%);
        }
        .input{
          background-color: rgb(255, 72, 0);
            border: 0;
          color: white;
          height: 5vh;
          border-radius: 0.5vh;
          width: 38vh;
          margin-top: 5vh;
          font-size: 3vh;
        }
        .text{
          border: 0;
          border-bottom: 1px solid black;
                    padding: 1vh;

        }
        .text:hover{
          border-bottom: 1px solid orange;
        }
        text,
input::-webkit-input-placeholder {
    font-size: 25px;
    line-height: 4;
}
    </style>
</head>
<body>
    <header class="bg-gold">
 
<div style="        box-shadow: 4px 6px 30px 30px rgba(0, 0, 0, 0.1);">
     <div id="1" class="swiper">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <img src="pizza.jpg" alt="" width="550" height="650">
            </div>
            <div class="swiper-slide">
              <img src="pizza3.jpg" alt="" width="550" height="650">
            </div>
            <div class="swiper-slide">
              <img src="pizza2.jpg" alt="" width="550" height="650">
            </div>
        </div>
    
    
    </div>
    
    <script>
      const swiper = new Swiper('.swiper', {
          loop: true,
  
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
      });

         swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 5000,
  },
});
  </script>
</div>
<div class="form">
  <h1 style="color:black; margin-top: 2vh">Login Form</h1>
    <form style="display: flex; flex-direction: column;" action="proseslogin.php" method="post">
        <input style="margin-top: 4.5vh;"  class="text" type="text" placeholder="Username" name="username">
        <br>
        <input style="margin-top: 7vh;" class="text" type="text" placeholder="Password" name="password">
        <br>
        <input class="input" type="submit">
    </form>
</div>
</header>
</body>
</html>