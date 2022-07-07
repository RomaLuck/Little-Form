<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>тестова форма</title>
</head>
<body>
<?php
$errors = [];
if(!empty($_POST)){
    if(empty($_POST['message'])){
$errors[]= "повідомлення пусте";
    }
    if(empty($errors)){
    echo htmlspecialchars($_POST['message']);
    exit();
    }
}
if(!empty($errors)){
    foreach ($errors as $errs){
        echo "<span style='color: red'>$errs</span><br>";
    }
}
?>


<form method = "post">
    <label for="user">Дані користувача</label>
    <input type="text" name="user" placeholder="введіть дані"><br>
    <label for="message">Повідомлення</label><br>
    <textarea type="text" name="message" placeholder="введіть повідомлення" value = "<?=htmlspecialchars($_POST['message'],ENT_QUOTES);?>"></textarea><br>
    <input type="submit" value="відправити">


</form>
</body>
</html>
