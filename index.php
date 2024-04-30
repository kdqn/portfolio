<?php
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['root'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,1));
include_once(APP_ROOT . '/services/database.controller.php');

//Pull database credentials from config.ini
$user = $config[$environment]['user'];
$pass = $config[$environment]['pass'];
$host = $config[$environment]['host'];
$name = $config[$environment]['name'];

try
{
	$conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $database = new DatabaseService($conn);
} 
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

if (isset($database))
{
  $controller = new DatabaseController($database);
  $controller->indexPage('Home');
//   include_once(APP_ROOT . '/src/scripts/API.php');
  include_once(APP_ROOT . '/views/footer.view.php');
}
$conn = null;





include_once(APP_ROOT . '/views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | Home',
    'header' => 'Hey, I\'m Cayden!',
];
include_once(APP_ROOT . '/views/head.view.php');
include_once(APP_ROOT . '/views/header.view.php');


?>


<p>I'm (almost) a Junior in college and i'm 3 semesters away from getting my Bachelors degree in Computer Science. <br> I don't have a TON of experience, but I continue learning and I enjoy trying new things with code! <br> I know PHP, HTML, MySQL, C++, Python, and plan on learning a few more languages as well.</p>


<?php 
include_once(APP_ROOT . '/views/footer.view.php');


?>
