<?php $isHomePage = $isHomePage ?? false; ?>
<footer class="site-footer">
  <div class="site-footer__brand">
    <div class="site-footer__logo-wrap">
      <img class="site-footer__logo-image" src="./assets/changes/WDC Logo Open File-05.svg"
        alt="The Wedding Design Company logo" />
    </div>
    <p>
      The Wedding Design Company was conceived out of a desire to inspire
      people to live out their fantasy by creating dream weddings.
    </p>
  </div>

  <div class="site-footer__divider" aria-hidden="true"></div>

  <div class="site-footer__columns">
    <div>
      <h3>Useful Links</h3>
      <a href="index.php#top">Home</a>
      <a href="team.php">Team</a>
      <a href="index.php#design-section">Gallery</a>
      <a href="contact.php#contact-section">Contact Us</a>
      <a href="index.php#signature-section">Signature</a>
    </div>

    <div>
      <h3>Social Links</h3>
      <a href="https://www.facebook.com/The-Wedding-Design-Company-205132192850790/" target="_blank"
        rel="noreferrer noopener">Facebook</a>
      <a href="https://www.instagram.com/theweddingdesigncompany/" target="_blank"
        rel="noreferrer noopener">Instagram</a>
    </div>

    <div>
      <h3>Main Links</h3>
      <a href="services.php#wedding-planning">Wedding Planning</a>
      <a href="services.php#hospitality-section">Guest Experience</a>
      <a href="index.php#design-section">Design Studio</a>
      <a href="destinations.php#destinations-section">Cities &amp; Destinations</a>
      <a href="contact.php#contact-section">Contact Us</a>
    </div>
  </div>
  <div class="site-footer__copyright">
    <span>&copy; 2026 The Wedding Design Company</span>
    <span>
      Powered by
      <a href="https://diinfotech.com" target="_blank">
        DI Infotech Leaders Pvt. Ltd.
      </a>
    </span>
  </div>
</footer>

<a href="#top" class="scroll-top" aria-label="Scroll to top" title="Back to top">
  <span class="arrow" aria-hidden="true"></span>
</a>

<script src="./script.js"></script>
<?php if (!$isHomePage): ?>
  <script>
    (function() {
      const header = document.querySelector('.site-header');
      if (!header) return;
      header.classList.remove('is-scrolled');
    })();
  </script>
<?php endif; ?>