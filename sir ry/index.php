<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://uiverse.io/">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document</title>
</head>
<body>

    
    <nav>
        <h1>
            ATTENDIFY
        </h1>
        <a class="att" href="attendance.php">Records</a>
        <a href="#banner">Creators</a>
    </nav>
    <div class="main">
        <div class="desc">
            <h1 class="heading">WELCOME TO <span>ATTENDIFY</span></h1>
            <p class="txt">The ultimate platform for effortless student attendance tracking</p>
            <button onclick="loginPage()" class="animated-button">
              <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                ></path>
              </svg>
              <span class="text">Login</span>
              <span class="circle"></span>
              <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                ></path>
              </svg>
            </button>

        </div>
        <div class="image">
            <img src="assets/homeLogo.png" alt="stock image">
        </div>
    </div>
    <center><a href="#banner" class="arrowdown">&#11033;</a></center>
    
    <div class="banner" id="banner">
        <br><br><br><br><center><h1>CREATORS</h1></center>
        <div class="slider" style="--quantity: 6">
            <div class="item" style="--position: 1"><img src="assets/1.png" alt="Elizabeth"></div>
            <div class="item" style="--position: 2"><img src="assets/2.png" alt="Quinto"></div>
            <div class="item" style="--position: 3"><img src="assets/3.png" alt="Herold"></div>
            <div class="item" style="--position: 4"><img src="assets/4.png" alt="Pearl"></div>
            <div class="item" style="--position: 5"><img src="assets/5.png" alt="Sam"></div>
            <div class="item" style="--position: 6"><img src="assets/6.png" alt="Marga"></div>
    </div>
</body>
</html>

<script>
    ScrollReveal({distance: '100px'})
    ScrollReveal().reveal('.image', {origin: 'left' , delay: 300});
    ScrollReveal().reveal('.desc', { origin: 'top' , delay : 500});
    ScrollReveal().reveal('.banner', { origin: 'bottom' ,delay: 500});
    function loginPage(){
        window.location.href = "login.php";
    }
</script>