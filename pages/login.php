<?php






include_once('../views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | Login',
    'header' => 'Admin login',
];


if (isset($_SESSION['user'])){
    header('location: http://localhost:3000/admin.php');
}


include_once(URL_ROOT .  'views/head.view.php');
include_once(URL_ROOT .  'views/header.view.php');

session_start();
$_SESSION['cat'] = 'meowssers';
print_r($_SESSION)

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->



    <form action="" method="post">
        <label for="username">Username: </label>
        <input type="text" name = "username" id="username">
        <label for="password">password: </label>
        <input type="password" name = "password" id="username">
        <input type="submit" value="Login!">

    </form>

    <?php if(isset($_POST['username'])){
        $_SESSION['user'] = $_POST['username']; 
        } ?>
<h1>Welcome: <?php echo $_SESSION['user']; ?></h1>   
<?php 
include_once(URL_ROOT .  'views/footer.view.php');


?>
