<?php

require_once '../config.php';
// rest of your code



include_once(URL_ROOT .  'views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | About Me',
    'header' => 'About Me',
];
include_once(URL_ROOT .  'views/head.view.php');
include_once(URL_ROOT .  'views/header.view.php');

?>

<img src="/media/popoutpfp.png" alt="A picture of me">

<p><b>Hi, my name is Cayden.</b>I enjoy coding especially the web development side of it, such as HTML, PHP, and CSS. <br> I am majoring in Computer Science at Bemidji State University, and I am hopefully going to graduate with my Bachelor's degree in about 3 more semesters (before I turn 19). <br>skills, awards</p>



<?php 
include_once(URL_ROOT .  'views/footer.view.php');


?>
