<!DOCTYPE html>
<html lang="ru">
<head> 
    <link rel="stylesheet" href="css/main.css">
    <div id="contacts">
    <center><h5>Авторизация</h5></center>
    <form id="form_input">
      <label for="name">Ваше ФИО<span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email">Пароль <span>*</span></label><br>
      <input type="email" placeholder="Введите email" name="email" id="email"><br>
      <label for="message">Повторите пароль <span>*</span></label><br>
      <input type="message" placeholder="Повторите пароль" name="password" id="email"><br>
      <?php else: ?>
            <p><?=$_COOKIE['user']?>. Чтобы создать аккаунт нажмите <a href="
            /registration.php">здесь</a>.</p> 
      <?php endif;?>
      <div id="mess_send" class="btn">Войти</div>
    </form>
  </div>
</head>
<body>
</html>