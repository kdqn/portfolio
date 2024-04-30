<?php

$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['root'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,2));
// include_once(APP_ROOT . '/services/database.controller.php');

//Pull database credentials from config.ini
$user = $config[$environment]['user'];
$pass = $config[$environment]['pass'];
$host = $config[$environment]['host'];
$name = $config[$environment]['name'];

// try
// {
// 	$conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	echo "Connected Successfully", PHP_EOL;
//   $database = new DatabaseService($conn);
// } 
// catch(PDOException $e)
// {
// 	echo "Connection failed: " . $e->getMessage();
// }

// if (isset($database))
// {
//   $controller = new DatabaseController($database);
// }



include_once('../views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | About Me',
    'header' => 'About Me',
];
include_once('../views/head.view.php');
include_once('../views/header.view.php');

?>

<img src="/media/popoutpfp.png" alt="A picture of me">

<p><b>Hi, my name is Cayden.</b> I enjoy coding especially the web development side of it, such as HTML, PHP, and CSS. <br> I am majoring in Computer Science at Bemidji State University, and I am hopefully going to graduate with my Bachelor's degree in 3 more semesters (before I turn 19). <br>I have decent experience with C++, Python, PHP, HTML, CSS, and MySQL with more to learn.</p>



<?php 
include_once('../views/footer.view.php');


?>
