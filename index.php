<?php
$currentPage = 'home';
$isHomePage = true;
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Wedding Design Company</title>
  <meta name='robots' content='noindex, nofollow' />
  <meta name="description"
    content="Plan your dream wedding with WDC India. Expert luxury wedding planners delivering bespoke design, guest experiences, global logistics, and seamless events." />
  <link rel="preload" as="image" href="./assets/changes/WDC_BACKGROUND.png" fetchpriority="high" />
  <link rel="icon" href="./assets/changes/wdc-favicon-transparent.png" sizes="any" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body class="home">
  <?php include './header.php'; ?>

  <main>
    <section class="hero" id="top" aria-label="Wedding Design Company scene map">
      <div class="hero__hint" aria-hidden="true">
        <span class="hero__hint-desktop">Hover over the highlighted area</span>
        <span class="hero__hint-mobile">Tap on the highlighted area</span>
      </div>
      <div class="hero__scene scene-screen" id="sceneScreen">
        <div class="scene-stage" id="sceneStage">
          <div class="scene-panorama" id="scenePanorama">
            <img class="scene-panorama__bg" src="./assets/changes/WDC_BACKGROUND.png"
              alt="Illustrated Wedding Design Company streetscape" width="2200" height="1557"
              fetchpriority="high" decoding="async" />
          </div>

          <!-- Foreground overlay -->
          <!-- Foreground overlay -->
          <div class="scene-foreground" id="sceneForeground">
            <a class="newsstand-hotspot hero-link-hotspot" data-title="Media & News"
              data-hotspot="newsstand" href="news.php" aria-label="Open Media and News page"></a>
            <img class="scene-foreground__img"
              data-hero-overlay-src="./assets/changes/OVERLAY/WDC_NEWSTAND_OVERLAY.svg"
              alt="WDC overlay elements" decoding="async" />

            <!-- WDC office hotspot + overlay (mirrors newsstand behavior) -->
            <a class="wdc-hotspot hero-link-hotspot" data-title="About Us" data-hotspot="wdc"
              data-target="wdc-section" href="#wdc-section" aria-label="Jump to About Us section"></a>
            <img class="scene-foreground__img--wdc"
              data-hero-overlay-src="./assets/changes/OVERLAY/WDC_WDC.svg"
              alt="WDC office overlay elements" decoding="async" />
            <!-- WDC services hotspot + overlay (mirrors newsstand behavior) -->
            <a class="wdc-services-hotspot hero-link-hotspot" data-title="Our Services"
              data-hotspot="services" data-target="service-section" href="#service-section"
              aria-label="Jump to Our Services section"></a>
            <img class="scene-foreground__img--wdc-services"
              data-hero-overlay-src="./assets/changes/OVERLAY/WDC_SERVICES.svg"
              alt="WDC services overlay elements" decoding="async" />

            <!-- Contact hotspot + overlay -->
            <a class="contact-hotspot hero-link-hotspot" data-title="Contact Us" data-hotspot="contact"
              data-target="contact-section" href="#contact-section"
              aria-label="Jump to Contact Us section"></a>
            <img class="scene-foreground__img--contact"
              data-hero-overlay-src="./assets/changes/OVERLAY/WDC_CONTACT.svg"
              alt="Contact overlay elements" decoding="async" />

            <!-- Airplane hotspot + overlay -->
            <a class="airplane-hotspot hero-link-hotspot" data-title="Destinations"
              data-hotspot="destinations" href="destinations.php#destinations-section"
              aria-label="Open Destinations section"></a>
            <img class="scene-foreground__img--airplane"
              data-hero-overlay-src="./assets/changes/OVERLAY/WDC_AIRPLANE.svg"
              alt="Airplane overlay elements" decoding="async" />

            <!-- Wedding Atelier hotspot + overlay -->
            <a class="atelier-hotspot hero-link-hotspot" data-title="Wedding Atelier" data-hotspot="atelier"
              data-target="design-section" href="#design-section"
              aria-label="Jump to Wedding Atelier content"></a>
            <img class="scene-foreground__img--atelier"
              data-hero-overlay-src="./assets/changes/OVERLAY/WDC_WEDDINGATELIER.svg"
              alt="Wedding Atelier overlay elements" decoding="async" />

            <!-- Gallery hotspot + overlay -->
            <a class="gallery-hotspot hero-link-hotspot" data-title="Design Studio" data-hotspot="gallery"
              data-target="design-section" href="#design-section"
              aria-label="Jump to Design Studio section"></a>
            <img class="scene-foreground__img--gallery"
              data-hero-overlay-src="./assets/changes/OVERLAY/WDC_GALLERY.svg"
              alt="Gallery overlay elements" decoding="async" />

            <!-- Baraat parallax overlay -->
            <img class="scene-foreground__img--baraat" src="./assets/changes/WDC_BARAAT.png"
              alt="Baraat parade overlay elements" aria-hidden="true" width="2200" height="1557"
              fetchpriority="low" decoding="async" />
          </div>
        </div>
      </div>

    </section>

    <section class="content-section section-about" id="wdc-section" data-section>
      <div class="section-inner section-about__inner">
        <div class="section-about__copy" data-reveal>
          <h2>The Wedding Design Company</h2>
          <p>
            Vandana Mohan launched Backstage Productions Pvt. Ltd. in 1989.
            Backstage Productions has partnered with leading luxury brands,
            like Chanel, Gucci and Ferragamo to launch products in multiple
            cities and inspire bespoke experiences.
          </p>
          <p>
            The Wedding Design Company was conceived out of a desire to
            inspire people to live out their fantasy by creating dream
            weddings.
          </p>
        </div>

        <figure class="section-about__art" data-reveal>
          <img src="./assets/oldassets/WDC-Website-illustrations--12.png" alt="WDC studio illustration"
            loading="lazy" decoding="async" />
        </figure>
      </div>
    </section>

    <section class="section-signature-weddings" id="signature-section" data-section>
      <div class="signature-weddings-bg" id="signatureWeddingsBg"></div>
      <div class="signature-weddings-intro section-inner">
        <div class="signature-weddings-intro-content" id="sigIntroContent">
          <h2 class="signature-weddings-title">
            <span class="unmask-text" id="sigTitleInner">SIGNATURE WEDDINGS</span>
          </h2>
          <p class="signature-weddings-text">
            <span class="unmask-text" id="sigTextInner">
              From the design studio of WDC, we present Signature Weddings by The Wedding Design Company.
            </span>
          </p>
        </div>
        <div class="signature-weddings-accessible" id="sigAccessible">
          <svg class="accessible-border-svg" preserveAspectRatio="none">
            <rect class="accessible-border-rect" id="sigAccessibleBorder" x="0" y="0" width="100%"
              height="100%" rx="20" pathLength="100" />
          </svg>
          <div class="accessible-bg-fill" id="sigAccessibleBg"></div>
          <div class="accessible-content-layer" id="sigAccLayer">
            <h3>ACCESSIBLE</h3>
            <p>
              The Wedding Design Company will now be accessible to anyone who
              is planning a wedding and wants something out of the ordinary.
            </p>
          </div>
          <div class="achievable-content-layer" id="sigAchLayer">
            <h3>ACHIEVABLE</h3>
            <p>
              Your dreams are achievable thanks to the fabulous team that is
              behind Signature Weddings.
            </p>
          </div>
          <div class="affordable-content-layer" id="sigAffLayer">
            <h3>AFFORDABLE</h3>
            <p>
              All our creative juices have been put to work to create your
              dream wedding at your dream budget or what we call
              'affordable luxury'.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="content-section section-services" id="service-section" data-section>
      <div class="section-inner section-services__inner" style="text-align: center">
        <h2 class="section-services__title">Our Services</h2>
        <h3 class="section-services__subtitle">
          WDC India is here to orchestrate your perfect celebration.
        </h3>
        <p>
          We'll work with you to create a bespoke experience that harmonizes
          every element of your wedding: Creative Design, Guest Hospitality,
          Global Logistics, Entertainment, and Legacy Planning.
        </p>
      </div>
      <div class="services-mobile-carousel" id="services-mobile-carousel">
        <div class="section-services__item">
          <div class="section-services__image service-image-animate">
            <img src="./assets/oldassets/graphic_fb.png" alt="Wedding Planning" loading="lazy"
              decoding="async" />
          </div>
          <div class="section-services__content">
            <h4 class="service-title-animate">
              <span>Wedding</span> <span>Planning</span> <span>&</span>
              <span>Project</span> <span>Management</span>
            </h4>
            <p><strong>Your vision is the destination. We're the expert navigators.</strong></p>
            <p>
              At WDC India, you should be the guest of honor, not the project manager. We take the complex
              "to-do" list off your hands with a seamless roadmap leading straight to your dream day. From
              the first site visit to the final strike, we manage the heavy lifting so you can simply
              enjoy the view.
            </p>
          </div>
        </div>
        <div class="section-services__ribbon">
          <div class="section-services__ribbon-shine"></div>
        </div>
        <div class="section-services__item">
          <div class="section-services__content">
            <h4 class="service-title-animate">
              <span>Design</span> <span>&</span> <span>Decor</span>
            </h4>
            <p><strong>We don't just decorate spaces. We build worlds.</strong></p>
            <p>
              Your celebration should be a living reflection of your personality. We set trends by
              creating "theatrical intimacy" - grand enough to take your breath away, yet personal enough
              to feel like home. From the first mood board to the final petal, we weave a visual narrative
              that stays with your guests forever.
            </p>
          </div>
          <div class="section-services__image service-image-animate">
            <img src="./assets/changes/our_services/service_designdecor.png" alt="Design and Decor"
              loading="lazy" decoding="async" />
          </div>
        </div>
        <div class="section-services__ribbon">
          <div class="section-services__ribbon-shine"></div>
        </div>
        <div class="section-services__item">
          <div class="section-services__image service-image-animate">
            <img src="./assets/changes/our_services/service_entertainment.png"
              alt="Entertainment and Experiences" loading="lazy" decoding="async" />
          </div>
          <div class="section-services__content">
            <h4 class="service-title-animate">
              <span>Entertainment</span> <span>&</span> <span>Experiences</span>
            </h4>
            <p><strong>A wedding is a symphony. We ensure every note is perfect.</strong></p>
            <p>
              The best celebrations are felt in the room's energy. We move beyond standard playlists to
              create a living experience that engages every sense. Whether it's a soulful sunset acoustic
              set or a high-octane performance until dawn, we curate the moments that turn your party into
              a legend.
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-dots" id="carousel-dots">
        <span class="carousel-dot active"></span>
        <span class="carousel-dot"></span>
        <span class="carousel-dot"></span>
      </div>
    </section>
    <section class="content-section section-design" id="design-section" data-section>
      <div class="section-inner section-design__inner" style="text-align: center">
        <div class="section-design__copy" data-reveal>
          <h2>Design Studio</h2>
          <p>
            A quick look inside our floral, furniture, and environment builds,
            where room scale, color, and styling are tested before they arrive
            on site.
          </p>
        </div>

        <div class="section-design__gallery" data-reveal>
          <div class="section-design__carousel3d" id="designCarousel3d" aria-live="off"></div>
          <div class="section-design__nav" aria-label="Design Studio carousel controls">
            <button type="button" class="section-design__nav-btn section-design__nav-prev" id="designPrev"
              aria-label="Previous Design Studio images">
              &lsaquo;
            </button>
            <button type="button" class="section-design__nav-btn section-design__nav-next" id="designNext"
              aria-label="Next Design Studio images">
              &rsaquo;
            </button>
          </div>
        </div>

        <div class="design-mobile-carousel" id="design-mobile-carousel" data-reveal>
          <div class="design-mobile-card"><img src="./assets/design-studio/8.jpg"
              alt="Design Studio floral build" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/12.jpg"
              alt="Design Studio ceremony installation" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/10.jpg"
              alt="Design Studio event detail" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/4.jpg"
              alt="Design Studio tablescape concept" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/5.jpg"
              alt="Design Studio decor styling sample" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/6.jpg"
              alt="Design Studio fabric and floral arrangement" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/7.jpg"
              alt="Design Studio installation mockup" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/1.jpg"
              alt="Design Studio venue styling board" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/9.jpg"
              alt="Design Studio stage composition" loading="lazy" decoding="async"></div>
          <div class="design-mobile-card"><img src="./assets/design-studio/3.jpg"
              alt="Design Studio event environment study" loading="lazy" decoding="async"></div>
        </div>

        <div class="carousel-dots" id="design-carousel-dots" style="margin-top: -1rem;">
          <span class="carousel-dot active"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
        </div>
      </div>
    </section>

    <section class="section-contact" id="contact-section" data-section>
      <div class="section-inner section-contact__inner">
        <div class="section-contact__form" data-reveal>
          <h2>Contact Us</h2>

          <form class="contact-form" data-mailto-form data-mailto-recipient="contact@wdcindia.com">
            <label>
              <span>Your E-mail</span>
              <input type="email" name="email" placeholder="Your E-mail" autocomplete="email" required />
            </label>

            <label>
              <span>Message subject</span>
              <input type="text" name="subject" placeholder="Message subject" autocomplete="off"
                required />
            </label>

            <label>
              <span>Message</span>
              <textarea name="message" rows="5" placeholder="Message" required></textarea>
            </label>

            <button type="submit">Send Mail</button>
            <p class="form-status" aria-live="polite"></p>
          </form>
        </div>

        <div class="section-contact__details" data-reveal>
          <figure class="section-contact__map">
            <img src="./assets/oldassets/contact-map.png" alt="Studio location map preview" loading="lazy"
              decoding="async" />
          </figure>

          <div class="section-contact__detail-copy">
            <p>
              Backstage Productions Pvt. Ltd.<br />
              The Wedding Design Company 63,<br />
              Ground Floor, Masjid Road Jangpura<br />
              Bhogal, New Delhi - 110014 INDIA
            </p>
            <p>
              <a href="tel:+911143554400">+91.11.43554400</a>
              &nbsp;&nbsp;
              <a href="tel:+911143554444">+91.11.43554444</a>
            </p>
            <p><a href="mailto:contact@backstageproductions.in">contact@backstageproductions.in</a></p>
            <p><a href="mailto:contact@wdcindia.com">contact@wdcindia.com</a></p>
            <p>Job Enquiry: <a href="mailto:info@backstageproductions.in">info@backstageproductions.in</a>
            </p>
          </div>
        </div>
      </div>
      <figure class="section-contact__art" data-reveal>
        <img src="./assets/oldassets/graphic_contact.png" alt="Contact desk illustration" loading="lazy"
          decoding="async" />
      </figure>
    </section>
  </main>

  <?php include './footer.php'; ?>
</body>

</html>
