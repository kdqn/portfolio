<?php


$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['root'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,1));
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
    'pageTitle' => 'Cayden | Contact Me',
    'header' => 'IN PROGRESS - testing...',
];
include_once('../views/head.view.php');
include_once('../views/header.view.php');


?>
<section id="contact">
  
  <h1 class="section-header">Contact</h1>
  
  <div class="contact-wrapper">
  
  <!-- Left contact page --> 
    
    <form id="contact-form" class="form-horizontal" role="form">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
      
      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
  <!-- Left contact page --> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <!-- <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Bemidji, Minnesota</span></i></li>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43147.60457577237!2d-94.91587917905986!3d47.4757825546559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b82c4ec41eb7c7%3A0xd6f67c8df095e306!2sBemidji%2C%20MN%2056601!5e0!3m2!1sen!2sus!4v1712873651111!5m2!1sen!2sus" width="240" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           -->
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(123) 456-7890</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">cayden.odegard@gmail.com</a></span></i></li>
          
        </ul>

</div>

</div>

</section>  

<?php 
include_once('../views/footer.view.php');


?>
