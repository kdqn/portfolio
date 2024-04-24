<!-- <nav class="nav">
          <a class="nav-item" href="index.php">Main Page</a>
          <a class="nav-item" href="projects.php">About Me</a>
          <a class="nav-item" href="resume.php">My Resume</a>
          <a class="nav-item" href="experience.php">My Experience</a>
          <a class="nav-item" href="contact.php">Contact Me</a>
          <a class="nav-item" target="" href="https://github.com/kdqn/portfolio">GitHub</a>
      </nav> -->
<?php 

$data = [
  // 'pageTitle' => 'Cayden\'s Home Page',
  // 'header' => 'IN PROGRESS - CONTENT ADDED SOON',
  'nav' => [
  [
  'linktitle' => 'Home',
  'linkname' => '/pages/index.php',
  ],
  [
  'linktitle' => 'About',
  'linkname' => '/pages/about.php',
  ],
  [
  'linktitle' => 'Projects',
  'linkname' => '/pages/projects.php',
  ],
  [
  'linktitle' => 'Resume',
  'linkname' => '/media/resume.pdf',
  ],
  [
  'linktitle' => 'Experience',
  'linkname' => '/pages/experience.php',
  ],
  [
  'linktitle' => 'Contact',
  'linkname' => '/pages/contact.php',
  ],
  [
  'linktitle' => 'Login',
  'linkname' => '/pages/login.php',
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
        for ($i = 0; $i < count($data['nav']); $i++) {
          echo "<li>";
            echo "<a href=\"" . $data['nav'][$i]['linkname'] . "\"><h2 data-name=\"" . $data['nav'][$i]['linktitle'] . "\">" . $data['nav'][$i]['linktitle'] . "</h2></li></a>";
        }
?>
  </ul>

<!-- end that test -->
<!-- /////////// -->
  </div>







  <aside class="_social-links">
	<ul class="_links-list">
		<li class="_social-link"><a href="https://caydenodegard.com" target="_blank"><i class="fa-brands fa-twitter"></i>my website</a></li>
		<li class="_social-link"><a href="https://github.com/kdqn/portfolio" target="_blank"><i class="fa-brands fa-github"></i>my github</a></li>
		<li class="_social-link"><a href="mailto:cayden.odegard@gmail.com" target="_blank"><i class="fa-solid fa-at"></i>email me</a></li>
	</ul>
</aside>
