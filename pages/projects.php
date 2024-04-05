<?php
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
// $URL_BASE = $config[$environment['URL_BASE']];
	$data = [
		'pageTitle' => 'Projects',
        'pageHeader' => 'My Projects',
    'Content' => [
        [
            'projectTitle' => 'My Hangman Game',
            'projectLink' => 'https://cs.bemidjistate.edu/vp1139go/intro2web/himg.html',
            'projectLinkName' => 'Hangman',
            'projectDescription' => 'This is a project I completed as the final project for Intro to Web Design at BSU, and I created a hangman game that changes the hangman image each time you guess incorrectly, adding a new section to the stick figure each incorrect guess, and if you can somehow guess the word before it\'s too late, then you win.',
            'usedLanguages' => 'HTML, CSS, JavaScript',
            ],
        [
            'projectTitle' => '',
            'projectLink' => '',
            'projectLinkName' => '',
            'projectDescription' => '',
            'usedLanguages' => '',
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

include_once('src/views/head.view.php');
?>
<body>
	<header class="header">


<h1><?php echo $data['pageHeader']?></h1>

	</header>

  <?php include_once('src/views/nav.view.php') ?>


	<main class="container">
		<article class="article">
<?php
        for ($i = 0; $i < count($data['Content']); $i++) {
            echo "<h2>" . $data['Content'][$i]['projectTitle'] . "</h2><br>";
            echo "<a href='" . $data['Content'][$i]['projectLink'] . "'>" . $data['Content'][$i]['projectLinkName'] . "</a><br><br>";
            echo "<p>" . $data['Content'][$i]['projectDescription'] . "</p> <br>";
            echo "<b> Used Languages: </b>" . $data['Content'][$i]['usedLanguages'] . "<br>";
        }
?>
	</article>
</main>


	
<?php include_once('src/views/footer.view.php') ?>