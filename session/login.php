<form action="" method="post">
    <input type="text" name="username" required>
    <button type="submit">Log in</button>
</form>
<?php
if($_POST){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header("Location: welcome.php");
}
?>