<?php






include_once(URL_ROOT .  'views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | Projects',
    'header' => 'My Current/Past Projects',
'Content' => [
    [
        'projectTitle' => 'My Hangman Game',
        'projectLink' => 'https://cs.bemidjistate.edu/vp1139go/intro2web/himg.html',
        'projectLinkName' => 'Hangman',
        'projectDescription' => 'This is a project I completed as the final project for Intro to Web Design, and it creates a hangman game, and changes the hangman image each time you guess incorrectly, and if you guess the word before it\'s too late, then you win.',
        'usedLanguages' => 'HTML, CSS, JavaScript',
        'repo' => 'github.com/kdqn',
        ],
    [
        'projectTitle' => 'My Portfolio (this page)',
        'projectLink' => 'cs.bemidjistate.edu/vp1139go/portfolio',
        'projectLinkName' => 'Portfolio',
        'projectDescription' => 'ADD DESCRIPTION LATER',
        'usedLanguages' => 'HTML, CSS, PHP, MySQL',
        'repo' => 'https://github.com/kdqn/portfolio',
        ],
    [
        'projectTitle' => 'ADD PROJECT HERE',
        'projectLink' => '#',
        'projectLinkName' => 'ADD LINK',
        'projectDescription' => 'ADD DESCRIPTION',
        'usedLanguages' => 'N/A',
        'repo' => '#',
    ],
    [
        'projectTitle' => 'ADD PROJECT HERE',
        'projectLink' => '#',
        'projectLinkName' => 'ADD LINK',
        'projectDescription' => 'ADD DESCRIPTION',
        'usedLanguages' => 'N/A',
        'repo' => '#',
    ],
    [
        'projectTitle' => 'ADD PROJECT HERE',
        'projectLink' => '#',
        'projectLinkName' => 'ADD LINK',
        'projectDescription' => 'ADD DESCRIPTION',
        'usedLanguages' => 'N/A',
        'repo' => '#',
    ],

],
];
include_once(URL_ROOT .  'views/head.view.php');
include_once(URL_ROOT .  'views/header.view.php');

?>
<div class="projects">
<?php
        for ($i = 0; $i < count($data['Content']); $i++) {
            echo "<h3>" . $data['Content'][$i]['projectTitle'] . "</h3><br>";
            echo "Project Link: <a href='" . $data['Content'][$i]['projectLink'] . "'>" . $data['Content'][$i]['projectLinkName'] . "</a><br>";
            echo " This Project's <a href='" . $data['Content'][$i]['repo'] . "' target='_blank' >Github</a><br><br>";  
            echo "<p>" . $data['Content'][$i]['projectDescription'] . "</p> <br>";
            echo "<b> Used Languages: </b><div class='code'>" . $data['Content'][$i]['usedLanguages'] . "</div><br>";
            
        }
?>
</div>
<?php 
include_once(URL_ROOT .  'views/footer.view.php');


?>
