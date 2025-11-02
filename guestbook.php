<?php
if($_POST){
    $name = $_POST['name'];
    $message = $_POST['text'];
    $file = fopen('guestbook.txt', "a");
    $en = $name . ":" . $message;
    fwrite($file, $en);
    fclose($file);
     header("Location: guestbook.php");
    exit;
}
$messages = "";
if (file_exists("guestbook.txt")) {
    $file = fopen("guestbook.txt", "r");
    $messages = fread($file, filesize("guestbook.txt"));
    fclose($file);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="your full name">
        <textarea name="text" id=""></textarea>
        <button type="submit">Add message</button>
    </form>
    <h2>Show message</h2>
<p><?= $messages?> </p>
</body>
</html>