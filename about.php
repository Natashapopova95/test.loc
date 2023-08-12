<?php 
$title = "про нас"; 
require "blocks/header.php"
?>
<div class="container mt-2">
  <h1>Про нас</h1>

  <form action="check_post.php" method="post">
    <input type="text" name="username" placeholder="Введите имя" class="form-control mb-4">
    <input type="email" name="email" placeholder="Введите email" class="form-control mb-4">
    <input type="password" name="password" placeholder="Введите пароль" class="form-control mb-4">
    <textarea name="message" class="form-control mb-4" placeholder="Введите сообщение"></textarea><br>
    <input type="submit" value="Отправить" class="btn btn-success">
  </form>
</div>
<?php 
require "blocks/footer.php"
?>
