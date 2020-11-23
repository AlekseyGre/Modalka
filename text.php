
<?php
//var_dump($_POST['get-name']);
  echo $_POST['phones1'];

//  echo $_POST['get-email'];
if (isset($_POST , $_FILES['avatar'])) {
    $file = $_FILES['avatar'];
    $current_path = $_FILES['avatar']['tmp_name'];
    $filename = $_FILES['avatar']['name'];
    $new_path = dirname(__FILE__) . '/upload/' . $filename;
    move_uploaded_file($current_path, $new_path);
    print("<br>Имя: " . $_POST['get-name']);
    print("<br>Email: " . $_POST['get-email']);
    print("<br>Загружен файл с именем " . $file['name'] . " и размером " . $file['size'] . " байт<br>");
    print($new_path . "<br>");
}

//$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
//header("Location: $redirect");
//exit();




