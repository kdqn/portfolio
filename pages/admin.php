<?php






include_once('../views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | Admin',
    'header' => 'IN PROGRESS - testing... CONTENT ADDED SOON',
];

if (isset($_SESSION['user'])){

}
else{
    header('location: http://localhost:3000/login.php');
}

include_once('../views/head.view.php');
include_once('../views/header.view.php');

?>


<?php 
include_once('../views/footer.view.php');


?>
