<?php
$currentPage = 'team';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Our Team - The Wedding Design Company</title>
  <link rel="icon" href="./assets/changes/wdc-favicon-transparent.png" sizes="any" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body id="top">
  <?php include './header.php'; ?>

  <main style="margin-top:0">
    <div class="about-hero" role="region" aria-label="Team hero">
      <h1>Our Team</h1>
    </div>
    <section id="team-section" class="team-section" aria-label="Team content">
      <div class="team-layout">
        <div class="team-illustration" aria-hidden="true">
          <img src="./assets/changes/Team/Team Illustration.svg" alt="Team illustration" />
        </div>
        <div class="team-content" style="min-height:100vh;">
          <section class="team-intro" aria-label="Team introduction">
            <h2>The Minds Behind the Magic</h2>
            <p>
              <strong>Vandana Mohan, Vedika Mohan, Viraj Mohan</strong>
            </p>
          </section>
        </div>
      </div>
    </section>
  </main>

  <?php include './footer.php'; ?>
</body>

</html>