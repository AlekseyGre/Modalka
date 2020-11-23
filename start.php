<?php

$form_name = "<label>Full name: <br>
              <input name='get-name' value='' type='text' id='get-name'></label>
              <br><br>
              <label>E-mail: <br>
              <input name='get-email' type='text' id='get-email'></label>
              <br><br>";

$dec_form = "<form method='POST' action='#'>
             <label>Phone number:</label><br>
             <input  type='submit'  name='decrement' value='-'>
             <input  type='submit'  name='increment' value='+'>
             </form>";


if ($_POST['increment'] && $_COOKIE['counter'] !== 0) {
    $_COOKIE['counter'] += 1;
    setcookie("counter", $_COOKIE['counter']);
}
elseif ($_POST['decrement'] and $_COOKIE['counter'] >= 1) {
    $_COOKIE['counter'] -= 1;
    setcookie("counter", $_COOKIE['counter']);
}
//var_dump($_COOKIE['counter']);
$i = 0;
//$input = "<input  type='text'  name='phones$i'  placeholder='phone number'>";

echo $dec_form;
echo "<form method='POST' action='text.php' enctype='multipart/form-data'>";
   while ($i <= $_COOKIE['counter']) {
        $i++;
        echo $input = "<input  type='text'  name='phones$i'  placeholder='phone number'>" . $i . "<br><br>";
}

echo "
      $form_name
      <label>Avatar: <br><input type='file'  name='avatar'></label>
      <br><br>
      <br><br>
      <input type='submit' name='btn' value='Send' id='btn'>
      <br><br>
";

echo "</form>";