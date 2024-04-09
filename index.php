<?php

$data = [
    'pageTitle' => 'Cayden\'s Home Page',
    'header' => 'Cayden Odegard',
    'nav' => [
    [
    'linktitle' => 'Home',
    'linkname' => '/pages/index.php',
    ],
    [
    'linktitle' => 'Projects',
    'linkname' => '/pages/projects.php',
    ],
    [
    'linktitle' => 'Resume',
    'linkname' => '/views/resume.php',
    ],
    [
    'linktitle' => 'Experience',
    'linkname' => '/views/experience.php',
    ],
    [
    'linktitle' => 'Contact',
    'linkname' => '/views/contact.php',
    ]    
    ]

];




include_once('views/head.view.php');
include_once('views/header.view.php');
include_once('views/nav.view.php');

?>


<?php 
include_once('views/footer.view.php');


?>
