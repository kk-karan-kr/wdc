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
          <!-- Blinking hotspot positioned at image center -->
          <button id="vandanahotspot" type="button" class="hotspot" aria-label="Vandana hotspot"></button>
          <!-- Hover card for Vandana (appears on hover/focus) -->
          <div class="hotspot-card" role="note" aria-hidden="true">
            <div class="hotspot-card__body">
              <div class="hotspot-card__name">Vandana Mohan</div>
              <div class="hotspot-card__bio">Founder &amp; Creative Director - crafting luxury weddings
                and bespoke experiences since 1989.</div>
            </div>
          </div>
        </div>
        <div class="team-content" style="min-height:100vh;">
          <section class="team-intro" aria-label="Team introduction">
            <h2>The Minds Behind the Magic</h2>
            <p>
              We are a collective of architects, designers, and logistical wizards who believe that no
              detail is too small and no dream is too big. While our legacy is built on decades of
              experience, our daily fuel is the spark of a new idea. We don't just plan events; we build
              worlds.
            </p>
          </section>
        </div>
      </div>
    </section>
  </main>

  <?php include './footer.php'; ?>
</body>

</html>