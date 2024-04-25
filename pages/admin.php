<?php






include_once(URL_ROOT .  'views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | Admin',
    'header' => 'IN PROGRESS - testing... CONTENT ADDED SOON',
];

if (isset($_SESSION['user'])){

}
else{
    header('location:' . URL_ROOT .  'login.php');
}

include_once(URL_ROOT .  'views/head.view.php');
include_once(URL_ROOT .  'views/header.view.php');

?>


<?php 
include_once(URL_ROOT .  'views/footer.view.php');


?>
