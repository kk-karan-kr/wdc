<?php
$currentPage = 'contact';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - The Wedding Design Company</title>
  <link rel="icon" href="./assets/changes/wdc-favicon-transparent.png" sizes="any" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<body id="top">
  <?php include './header.php'; ?>

  <main style="margin-top:0">
    <div class="about-hero" role="region" aria-label="Contact hero">
      <h1>Contact Us</h1>
    </div>

    <section class="contact-section" id="contact-section" aria-label="Contact information and form">
      <div class="contact-left redesigned">
        <p class="contact-sub">We would love to hear from you.</p>

        <div class="contact-details">
          <div class="detail-row">
            <div class="detail-icon">&#128205;</div>
            <div class="detail-text">
              <strong>Backstage Productions Pvt. Ltd.</strong>
              <div>The Wedding Design Company, 63, Ground Floor,<br>Masjid Road, Jangpura Bhogal, New Delhi - 110014, INDIA</div>
            </div>
          </div>

          <div class="detail-row">
            <div class="detail-icon">&#128222;</div>
            <div class="detail-text">
              <strong>Phone</strong>
              <div>T.: <a href="tel:+911143554400">+91.11.43554400</a> &nbsp; F.: <a href="tel:+911143554444">+91.11.43554444</a></div>
            </div>
          </div>

          <div class="detail-row">
            <div class="detail-icon">&#9993;&#65039;</div>
            <div class="detail-text">
              <strong>Email</strong>
              <div><a href="mailto:contact@backstageproductions.in">contact@backstageproductions.in</a><br><a href="mailto:contact@wdcindia.com">contact@wdcindia.com</a></div>
            </div>
          </div>

          <div class="detail-row">
            <div class="detail-icon">&#128228;</div>
            <div class="detail-text">
              <strong>Job Enquiry</strong>
              <div><a href="mailto:info@backstageproductions.in">info@backstageproductions.in</a></div>
            </div>
          </div>
        </div>

        <div class="contact-form-area">
          <form
            class="contact-form boxed"
            action="#"
            method="post"
            aria-label="Contact form"
            data-mailto-form
            data-mailto-recipient="contact@wdcindia.com">
            <div class="row two-cols">
              <div>
                <label for="email">Your E-mail</label>
                <input
                  id="email"
                  name="email"
                  type="email"
                  placeholder="Enter your e-mail"
                  autocomplete="email"
                  required />
              </div>
              <div>
                <label for="subject">Message Subject</label>
                <input
                  id="subject"
                  name="subject"
                  type="text"
                  placeholder="Enter subject"
                  autocomplete="off"
                  required />
              </div>
            </div>

            <div class="row">
              <label for="message">Message</label>
              <textarea
                id="message"
                name="message"
                rows="6"
                placeholder="Type your message here..."
                required></textarea>
            </div>

            <button class="btn-primary boxed" type="submit">SEND MAIL</button>
            <p class="form-status" aria-live="polite"></p>
          </form>
        </div>
        <div class="contact-footer-note">LET'S CREATE SOMETHING EXTRAORDINARY TOGETHER.</div>
      </div>
      <div class="contact-right redesigned">
        <img src="./assets/oldassets/graphic_contact.png" alt="Contact illustration" />
      </div>
    </section>
  </main>

  <?php include './footer.php'; ?>
</body>

</html>
