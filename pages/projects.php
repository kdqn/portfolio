<?php






include_once('../views/nav.view.php');
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
        ],
    [
        'projectTitle' => 'My Portfolio (this page)',
        'projectLink' => 'cs.bemidjistate.edu/vp1139go/portfolio',
        'projectLinkName' => 'Portfolio (home page)',
        'projectDescription' => 'ADD DESCRIPTION LATER',
        'usedLanguages' => 'HTML, CSS, PHP, MySQL',
        ],
    [
        'projectTitle' => '',
        'projectLink' => '',
        'projectLinkName' => '',
        'projectDescription' => '',
        'usedLanguages' => '',
        ]

],
];
include_once('../views/head.view.php');
include_once('../views/header.view.php');

?>

<?php
        for ($i = 0; $i < count($data['Content']); $i++) {
            echo "<h3>" . $data['Content'][$i]['projectTitle'] . "</h3><br>";
            echo "<a href='" . $data['Content'][$i]['projectLink'] . "'>" . $data['Content'][$i]['projectLinkName'] . "</a><br><br>";
            echo "<p>" . $data['Content'][$i]['projectDescription'] . "</p> <br>";
            echo "<b> Used Languages: </b><div class='code'>" . $data['Content'][$i]['usedLanguages'] . "</div><br>";
        }
?>
<?php 
include_once('../views/footer.view.php');


?>
