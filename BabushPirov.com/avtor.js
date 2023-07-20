
function CheckPassword(){
    var email = document.getElementById("email"); // создание email
    var emailText = email.value;
    var password = document.getElementById("password"); // создание пароля
    var passwordText = password.value;
    if(emailText == "macs38.hest@mail.ru" & passwordText == "735162789"){ // проверка пароля и почты
        alert(" авторизация успешна.");
        return true;
    }
    else{
        alert(" email или пароль не верен.");
        return false;
    }
}
console.log("работает");