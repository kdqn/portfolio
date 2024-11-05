<!-- <nav class="nav">
          <a class="nav-item" href="index.php">Main Page</a>
          <a class="nav-item" href="projects.php">About Me</a>
          <a class="nav-item" href="resume.php">My Resume</a>
          <a class="nav-item" href="experience.php">My Experience</a>
          <a class="nav-item" href="contact.php">Contact Me</a>
          <a class="nav-item" target="" href="https://github.com/kdqn/portfolio">GitHub</a>
      </nav> -->
<?php  
// $config = parse_ini_file('../config.ini', true);
// define('URL_ROOT', $config['DEVELOPMENT']['root']);


$nav = [
  // 'pageTitle' => 'Cayden\'s Home Page',
  // 'header' => 'IN PROGRESS - CONTENT ADDED SOON',
 
// Define the root URL of the site

  'nav' => [
  [
  'linktitle' => 'Home', 
  'linkname' => URL_ROOT . 'index.php'
  ],
  [
  'linktitle' => 'About', 
  'linkname' => URL_ROOT . 'pages/about.php'
  ],
  [
  'linktitle' => 'Projects',
  'linkname' => URL_ROOT . 'pages/projects.php',
  ],
  [
  'linktitle' => 'Resume',
  'linkname' => URL_ROOT . 'media/resume.pdf',
  ],
  [
  'linktitle' => 'Experience',
  'linkname' => URL_ROOT . 'pages/experience.php',
  ],
  // [
  // 'linktitle' => 'Contact',
  // 'linkname' => URL_ROOT . 'pages/contact.php',
  // ],
  [
  'linktitle' => 'Login',
  'linkname' => URL_ROOT . 'pages/login.php',
  ],
  ]

];


?>


      <!-- test hamburger menu -->
      <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="wrapper">
      <!-- /////// -->

<!-- test slash nav hover -->

  <ul class="wrapper">
  <?php
        for ($i = 0; $i < count($nav['nav']); $i++) {
          echo "<li>";
            echo "<a href=\"" . $nav['nav'][$i]['linkname'] . "\"><h2 data-name=\"" . $nav['nav'][$i]['linktitle'] . "\">" . $nav['nav'][$i]['linktitle'] . "</h2></li></a>";
        }
?>
  </ul>

<!-- end that test -->
<!-- /////////// -->
  </div>







  <aside class="_social-links">
	<ul class="_links-list">
		<li class="_social-link"><a href="https://www.linkedin.com/in/caydenodegard/" target="_blank"><i class="fa-brands fa-twitter"></i>LinkedIn</a></li>
		<li class="_social-link"><a href="https://github.com/kdqn" target="_blank"><i class="fa-brands fa-github"></i>GitHub</a></li>
		<li class="_social-link"><a href="mailto:cayden.odegard@gmail.com" target="_blank"><i class="fa-solid fa-at"></i>Contact Me</a></li>
	</ul>
</aside>
