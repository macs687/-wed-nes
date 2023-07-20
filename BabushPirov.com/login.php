<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($password == "735162789" && $email == "macs38.hest@mail.ru") {
        echo("вход в акаунт админа выполнен");
    }
    else{
        echo("email или пароль не верен ");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>авторизация</title>
        <script src="avtor.js"></script>
        <meta charset="utf-8">
    </head>
    <body>
        <style type="text/css">
            .avtor{
    text-align: center;
    clear: both;
    size: 50px;
    margin: 0;
    margin-top: 0;
    height: auto;
}


h1{
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    width: 200px;
    margin-left: 560px;
}

.avtor1{
    margin-right: 150px;
    text-align: center;
    margin: 15px;
    margin-left: 400px;
    margin-right: 400px;
}

.avtor2{
    margin-right: 150px;
    text-align: center;
    margin: 15px;
    margin-left: 490px;
    margin-right: 490px;
}


p{
    margin-bottom: auto;
}
.but{
    align-items: center;
    margin: 0px;
    margin-top: 15px;
    margin-left: 100px;
    margin: 15px;
    margin-right: 10px;

    
}
.void{
    background-color: rgba(red, green, blue, 0);
}
body{
    background-image: url(pirovki.jpg);
}
.vse1{
    background: rgba(129, 129, 129, 0.5);
    height: 800px;
    margin: 0;
}
.hub{
    padding: 0%;
    margin: auto;
}
        </style>
        <div class="vse1">
            <h1>авторизация</h1>
            <button class="hub"><a href="index.php"><h2>на главную</h2></a></button>

            <form class="avtor" action="login.php" method="post">
                <p class="email">email:</p>
                <input class="avtor1" type="email" id="email" name="email">
                <p class="password">пароль:</p>
                <input class="avtor2" type="password" id="password" name="password">
                
               <div class="void">нажмите чтобы войти.</div> 
    
               <button>войти</button>
                
            </form>   
        </div>
        <script type="text/javascript">
              console.log("работает");
        </script>
    </body>
</html>