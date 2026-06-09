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
            The Wedding Design Company was conceived out of a desire to inspire people to live
            out their fantasy by creating dream weddings. Vandana Mohan launched Backstage
            Productions Pvt. Ltd. in 1989 & for over three decades, Vandana Mohan has been at
            the forefront of experience design in India, redefining the way celebrations are imagined
            and executed.

          </p>
          <p>
            Her pioneering vision transformed event production from a logistical exercise into an art
            form, where storytelling, design, and emotion come together to create unforgettable
            moments.
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
          <div class="affordable-content-layer" id="sigAffLayer">
            <h3>AFFORDABLE</h3>
            <p>
              All our creative juices have been put to work to create your
              dream wedding at your dream budget or what we call
              'affordable luxury'.
            </p>
          </div>
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
              Planning a world-class wedding is a complex journey with a thousand moving parts. At WDC
              India, we believe you should be the guest of honor at your own celebration, not the project
              manager. We take the "to-do" list off your hands and replace it with a seamless, structured
              roadmap that leads straight to your dream day.
            </p>
            <p>
              From the first site visit to the final strike, we manage the heavy lifting so you can enjoy
              the view.

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
              If Project Management is the heartbeat of a wedding, Design is its soul. At WDC India, we
              believe your celebration should be a living, breathing reflection of your personality. We
              don't trends; we set them. Our design philosophy is about creating "theatrical intimacy" -
              grand enough to take your breath away, yet personal enough to feel like home.
            </p>
            <p>
              From the first mood board to the final floral petal, we weave a visual narrative that stays
              with
              your guests long after the lights go down.
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
            <p><strong>Extraordinary celebrations deserve extraordinary talent.</strong></p>
            <p>
              At WDC India, we source and curate exceptional artists, performers, and entertainers from
              across the globe to create moments that are unforgettable. From internationally acclaimed
              musicians and live bands to renowned DJs, classical ensembles, cultural performers, aerial
              artists, dancers, celebrity acts, and immersive theatrical experiences, we bring together
              talent that reflects the scale and spirit of your celebration.

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

        <div class="design-mobile-carousel" id="design-mobile-carousel" data-reveal></div>

        <div class="carousel-dots" id="design-carousel-dots" style="margin-top: -1rem;"></div>
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
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.637409545404!2d77.24602217554074!3d28.580648875693157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3077cfbc8d5%3A0xaae951665b924a17!2sThe%20Wedding%20Design%20Company%20%7C%20Backstage%20Productions%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1780987678301!5m2!1sen!2sin"
            width="300" height="220" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!-- <figure class="section-contact__map">
            <img src="./assets/oldassets/contact-map.png" alt="Studio location map preview" loading="lazy"
              decoding="async" />
          </figure> -->

          <div class="section-contact__detail-copy">
            <p>
              The Wedding Design Company, 63, Ground Floor,
              Masjid Road, Jangpura Bhogal, New Delhi - 110014, INDIA
            </p>
            <p>
              T.:<a href="tel:+917506009860 ">+91 75060 09860 </a>
            </p>
            <p>E.:<a href="mailto:info@wdcindia.com">info@wdcindia.com</a></p>
            <p>Job Enquiry: <a href="mailto:info@wdcindia.com">info@wdcindia.com</a>
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
