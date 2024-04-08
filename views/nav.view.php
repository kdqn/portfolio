<!-- <nav class="nav">
          <a class="nav-item" href="index.php">Main Page</a>
          <a class="nav-item" href="projects.php">About Me</a>
          <a class="nav-item" href="resume.php">My Resume</a>
          <a class="nav-item" href="experience.php">My Experience</a>
          <a class="nav-item" href="contact.php">Contact Me</a>
          <a class="nav-item" target="" href="https://github.com/kdqn/portfolio">GitHub</a>
      </nav> -->



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
<div class="content">
      <div class="title">
Fullscreen Overlay Navigation Bar</div>
<p>
(Hamburger Menu-2)</p>
</div>
<!-- ///////////// -->