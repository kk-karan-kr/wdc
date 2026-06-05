<?php
$currentPage = $currentPage ?? '';
$isServicesSection = in_array($currentPage, ['services', 'destinations'], true);
$servicesLandingHref = $currentPage === 'services' ? '#services-section' : 'services.php';
$serviceLinkPrefix = $currentPage === 'services' ? '#' : 'services.php#';
?>
<header class="site-header" role="banner" aria-label="Top header">
  <div class="site-header__brand" aria-hidden="false">
    <a href="index.php#top" aria-label="Home">
      <img
        src="./assets/changes/WDC Logo Open File-05.svg"
        class="site-header__brand-logo"
        alt="The Wedding Design Company logo"
      />
    </a>
  </div>

  <button
    id="siteHeaderToggle"
    class="site-header__toggle"
    aria-expanded="false"
    aria-label="Open navigation menu"
  >
    <span></span>
    <span></span>
    <span></span>
  </button>

  <nav
    id="primaryNavigation"
    class="site-header__nav"
    role="navigation"
    aria-label="Primary navigation"
  >
    <a href="index.php#top"<?= $currentPage === 'home' ? ' class="is-active"' : '' ?>>Home</a>
    <a href="team.php"<?= $currentPage === 'team' ? ' class="is-active"' : '' ?>>Our Team</a>
    <div class="nav-item nav-services">
      <a
        href="<?= $servicesLandingHref ?>"
        <?= $isServicesSection ? 'class="is-active"' : '' ?>
        aria-haspopup="true"
        aria-expanded="<?= $isServicesSection ? 'true' : 'false' ?>"
      >Our Services</a>
      <button
        class="nav-item__toggle"
        aria-label="Toggle services submenu"
        aria-expanded="<?= $isServicesSection ? 'true' : 'false' ?>"
      >
        &#9662;
      </button>
      <ul class="nav-submenu" role="menu" aria-label="Services submenu">
        <li>
          <a href="<?= $serviceLinkPrefix ?>wedding-planning">
            Wedding Planning and Project Management
          </a>
        </li>
        <li><a href="<?= $serviceLinkPrefix ?>design-decor">Design and Decor</a></li>
        <li>
          <a href="<?= $serviceLinkPrefix ?>entertainment">
            Entertainment and experiences
          </a>
        </li>
        <li><a href="destinations.php"<?= $currentPage === 'destinations' ? ' class="is-active"' : '' ?>>Destinations</a></li>
      </ul>
    </div>
    <a href="news.php"<?= $currentPage === 'news' ? ' class="is-active"' : '' ?>>IN THE NEWS</a>
    <a href="contact.php"<?= $currentPage === 'contact' ? ' class="is-active"' : '' ?>>Contact Us</a>
  </nav>
</header>
