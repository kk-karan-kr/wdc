<?php
$currentPage = 'services';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Our Services - The Wedding Design Company</title>
  <link rel="icon" href="./assets/changes/wdc-favicon-transparent.png" sizes="any" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body id="top" class="services-page">
  <?php include './header.php'; ?>

  <main style="margin-top:0">
    <div class="about-hero" role="region" aria-label="Services hero">
      <h1>Our Services</h1>
    </div>

    <section class="content-section section-services" id="services-section" data-section>
      <div class="section-inner section-services__inner" style="text-align: center">
        <h3 class="section-services__subtitle">
          WDC India is here to orchestrate your perfect celebration.
        </h3>
        <p>
          We'll work with you to create a bespoke experience that harmonizes
          every element of your wedding: Creative Design, Guest Hospitality,
          Global Logistics, Entertainment, and Legacy Planning.
        </p>
      </div>

      <!-- Wedding Planning -->
      <div class="section-services__item" id="wedding-planning">
        <div class="section-services__image service-image-animate">
          <img
            src="./assets/oldassets/graphic_fb.png"
            alt="Wedding Planning" />
        </div>
        <div class="section-services__content">
          <h4 class="service-title-animate">
            <span>Wedding</span> <span>Planning</span> <span>&</span>
            <span>Project</span> <span>Management</span>
          </h4>
          <p>Your vision is the destination. We're the expert navigators.</p>
          <p>
            Planning a world-class wedding is a complex journey with a
            thousand moving parts. At WDC India, we believe you should be the
            guest of honor at your own celebration, not the project manager.
            We take the "to-do" list off your hands and replace it with a
            seamless, structured roadmap that leads straight to your dream
            day.
          </p>
          <p>
            From the first site visit to the final strike, we manage the heavy
            lifting so you can enjoy the view.
          </p>
        </div>
      </div>

      <div class="section-services__ribbon">
        <div class="section-services__ribbon-shine"></div>
      </div>

      <!-- Design and Decor -->
      <div class="section-services__item section-services__item--reverse" id="design-decor">
        <div class="section-services__image service-image-animate">
          <img
            src="./assets/changes/our_services/service_designdecor.png"
            alt="Design and Decor" />
        </div>
        <div class="section-services__content">
          <h4 class="service-title-animate">
            <span>Design</span> <span>&</span> <span>Decor</span>
          </h4>
          <p>We don't just decorate spaces. We build worlds.</p>
          <p>
            If Project Management is the heartbeat of a wedding, Design is its
            soul. At WDC India, we believe your celebration should be a
            living, breathing reflection of your personality. We don't follow
            trends; we set them. Our design philosophy is about creating
            "theatrical intimacy" - grand enough to take your breath away, yet
            personal enough to feel like home.
          </p>
          <p>
            From the first mood board to the final floral petal, we weave a
            visual narrative that stays with your guests long after the lights
            go down.
          </p>
        </div>
      </div>

      <div class="section-services__ribbon">
        <div class="section-services__ribbon-shine"></div>
      </div>

      <!-- Entertainment -->
      <div class="section-services__item" id="entertainment">
        <div class="section-services__image service-image-animate">
          <img
            src="./assets/changes/our_services/service_entertainment.png"
            alt="Entertainment and Experiences" />
        </div>
        <div class="section-services__content">
          <h4 class="service-title-animate">
            <span>Entertainment</span> <span>&</span> <span>Experiences</span>
          </h4>
          <p>A wedding is a symphony. We make sure every note is perfect.</p>
          <p>
            The best celebrations aren't just seen - they are felt in the beat
            of the music and the energy of the room. At WDC India, we treat
            entertainment as the "pulse" of your wedding. We move beyond the
            standard playlist to create a living, breathing experience that
            engages every sense.
          </p>
          <p>
            Whether it's a soulful acoustic set for a sunset ceremony or a
            high-octane performance that keeps the dance floor packed until
            dawn, we curate the moments that turn a party into a legend.
          </p>
        </div>
      </div>
    </section>

    <!-- The WDC Process -->
    <section class="content-section section-process" id="process-section" data-section>
      <div class="section-inner">
        <h2 class="section-services__title" style="text-align: center; font-size: clamp(2.5rem, 4vw, 4rem);">The Journey</h2>
        <h3 class="section-services__subtitle" style="text-align: center;">A step-by-step visual timeline of how we build worlds.</h3>
        <div class="process-grid" data-reveal>
          <div class="process-step">
            <div class="process-step__number">01</div>
            <h3>The Muse</h3>
            <p>Initial Consultation</p>
          </div>
          <div class="process-step">
            <div class="process-step__number">02</div>
            <h3>The Blueprint</h3>
            <p>Design &amp; Strategy</p>
          </div>
          <div class="process-step">
            <div class="process-step__number">03</div>
            <h3>The Build</h3>
            <p>Logistics &amp; Production</p>
          </div>
          <div class="process-step">
            <div class="process-step__number">04</div>
            <h3>The Reveal</h3>
            <p>The Big Day</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Hospitality Block -->
    <section class="content-section section-hospitality" id="hospitality-section" data-section>
      <div class="section-inner section-hospitality__inner">
        <figure class="section-hospitality__art" data-reveal>
          <img
            src="./assets/oldassets/hospitality.png"
            alt="Hospitality desk illustration" />
        </figure>

        <div class="section-hospitality__copy" data-reveal>
          <h2>The Guest Experience</h2>
          <p>
            One of the main pillars of wedding planning and management,
            hospitality is the key to any successful wedding. At The Wedding
            Design Company, we play our role as an extended arm of the family
            to the hilt, acting as your personal Guest Concierge.
          </p>

          <ul>
            <li>Airport welcomes and private transfers</li>
            <li>Bespoke in-room hampers and amenities</li>
            <li>Customized itineraries for out-of-town guests</li>
            <li>Liaison with the Hotel(s) &amp; RSVP Management</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Interactive FAQ -->
    <section class="content-section section-faq" id="faq-section" data-section>
      <div class="section-inner">
        <h2 class="section-services__title" style="text-align: center; font-size: clamp(2.5rem, 4vw, 4rem);">The Navigators</h2>
        <h3 class="section-services__subtitle" style="text-align: center; margin-bottom: 3rem;">Frequently Asked Questions</h3>

        <div class="faq-container" data-reveal>
          <div class="faq-item">
            <h4 class="faq-question">How far in advance should we start?</h4>
            <p class="faq-answer">Ideally, we recommend beginning the planning process 8 to 12 months before your desired wedding date. This allows ample time for venue selection, design conceptualization, and securing top-tier entertainment.</p>
          </div>
          <div class="faq-item">
            <h4 class="faq-question">Do you handle destination weddings outside of India?</h4>
            <p class="faq-answer">Absolutely. Our global logistics team is experienced in executing seamless, high-end celebrations anywhere in the world - from the royal palaces of Rajasthan to Tuscan sunsets and modern Dubai.</p>
          </div>
          <div class="faq-item">
            <h4 class="faq-question">Can you manage guest travel and accommodations?</h4>
            <p class="faq-answer">Yes. Through our dedicated Guest Experience concierge, we handle all aspects of hospitality, including flights, private transfers, hotel block bookings, and bespoke welcome experiences for your guests.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include './footer.php'; ?>
</body>

</html>
