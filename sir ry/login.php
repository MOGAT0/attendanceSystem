<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document</title>
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="admin()">Admin</button>
            </div>
            <form class="input-group" id="login" action="">
                <input type="text" class="input-field" placeholder="Student ID" required>
                <input type="password" class="input-field" id="Userpass" placeholder="Password" required>
                <div class="showPass">
                    <p>Show Password</p><input type="checkbox" value="show" id="checkBox" name="" id="">
                </div>
                <button type="submit" class="submit-btn" onclick="doneLogin()">Login</button>
            </form>
            <form class="input-group" id="register" action="">
                <input type="email" class="input-field" placeholder="Email" required>
                <input type="password" class="input-field" id="Adminpass" placeholder="Password" required>
                <div class="showPass">
                    <p>Show Password</p><input type="checkbox" id="AdmincheckBox" name="" id="">
                </div>
                <button type="submit" class="submit-btn">Admin</button>
            </form>
        </div>
    </div>
<script>
    function doneLogin(){
        window.location.href = "attendance.php";
    }

    let x = document.getElementById("login");
    let y = document.getElementById("register");
    let z = document.getElementById("btn");
    let cb = document.getElementById("checkBox");
    let userPass = document.getElementById("Userpass");
    let cb2 = document.getElementById("AdmincheckBox");
    let adminPass = document.getElementById("Adminpass");
    function admin(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";

    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    function checkIfShowed(){
        if(cb.checked){
            userPass.type = 'text';
        }
        else{
            userPass.type = 'password';
        }

        if(cb2.checked){
            adminPass.type = 'text';
        }
        else{
            adminPass.type = 'password';
        }
    }
    setInterval(checkIfShowed, 100);


    ScrollReveal({distance: '60px'});
    ScrollReveal().reveal('.hero' ,{origin: 'top', delay: 500})
    ScrollReveal().reveal('.input-field' ,{origin: 'left', delay: 600})
    ScrollReveal().reveal('.showPass' ,{origin: 'bottom', delay: 500})
    ScrollReveal().reveal('.submit-btn' ,{origin: 'right', delay: 700})

    
</script>
</body>
</html>