<?php
$currentPage = '';
http_response_code(404);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>404 - The Wedding Design Company</title>
  <meta name="robots" content="noindex, nofollow" />
  <link rel="icon" href="./assets/changes/wdc-favicon-transparent.png" sizes="any" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body id="top" class="error-page">
  <?php include './header.php'; ?>

  <main style="margin-top:0">
    <section class="error-hero" aria-labelledby="error-page-title">
      <div class="error-hero__frame">
        <p class="error-hero__eyebrow">Lost In Transit</p>
        <div class="error-hero__code" aria-hidden="true">404</div>
        <h1 id="error-page-title">This page is not part of the celebration.</h1>
        <p class="error-hero__copy">
          The page you were trying to reach does not exist or may have moved.
          Return to the WDC homepage or continue to one of the main sections below.
        </p>
        <div class="error-hero__actions">
          <a class="error-hero__btn error-hero__btn--primary" href="index.php">Back to Home</a>
          <a class="error-hero__btn" href="services.php">Explore Services</a>
          <a class="error-hero__btn" href="contact.php">Contact Us</a>
        </div>
      </div>
    </section>
  </main>

  <?php include './footer.php'; ?>
</body>

</html>
