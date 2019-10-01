<nav class="navbar navbar-expand-md navbar-dark bg-primary text-center py-4">
  <a href="/" class="navbar-brand mx-md-auto mr-auto">
    MSU Food Science Club
  </a>

  <!-- Navbar: toggler button for navigation -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<!-- Navbar: menu (can collapse) -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark text-center py-0 py-md-1">
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav mx-md-auto">
      <?= navlink("home", "/"); ?>
      <?= navlink("bullybox", "/bullybox"); ?>
      <?= navlink("contact", "/contact"); ?>
    </div>
  </div>
</nav>

</div>
</nav>
