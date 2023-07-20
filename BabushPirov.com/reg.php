<?php
	$register = array(

	);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>регистрация</title>
        <link rel="stylesheet" type="text/css" href="reg.css"/>
        <script src="reg.js"></script>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>регистрация</h1>
        <a href="index.php"><h2 class="hub">на главную</h2></a>
        <div class="reg">
            <p>Полное имя:</p>
            <input name="name" class="reg1" type="text"/>
            <p>email:</p>
            <input name="email" class="reg2" type="text">
            <p>пароль:</p>
            <input name="password" class="reg3" type="password">
            <p>повтор пароля:</p>
            <input name="password2" class="reg4" type="password" > 
            <p class="void">нажмите чтобы зарегистрироваться</p>
            <button class="but1">зарегистрироваться</button>
        </div>
    </body>
</html>