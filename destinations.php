<?php
$currentPage = 'destinations';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Destinations - The Wedding Design Company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body id="top">
    <?php include './header.php'; ?>

    <main style="margin-top:0">
    <div class="about-hero" role="region" aria-label="Destinations hero">
      <h1>Destinations</h1>
    </div>
    <section class="content-section section-destinations" id="destinations-section" data-section>
      <div class="section-inner section-destinations__inner" style="text-align: center">
        <div class="section-destinations__copy" data-reveal>
          <h2>Cities & Destinations</h2>
          <p>
            From local celebrations to international dream weddings, we
            navigate the world to find your perfect backdrop.
          </p>
        </div>
        <div class="section-destinations__tabs" data-reveal>
          <button type="button" class="destination-tab active" data-tab="indian">
            Indian
          </button>
          <button type="button" class="destination-tab" data-tab="international">
            International
          </button>
        </div>
        <div class="section-destinations__maps" data-reveal>
          <div class="destination-map destination-map--indian active">
            <div class="destination-map__frame">
              <img
                src="./assets/changes/MAP/map-without-paags-india.png"
                alt="Indian Destinations Map"
              />
              <div class="destination-map__points" aria-label="Indian city locations">
                <button class="destination-city-point" id="delhi-ncr" style="left: 50.9%; top: 32.38%;" type="button" aria-label="Delhi NCR">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Delhi NCR</span>
                </button>
                <button class="destination-city-point" id="chandigarh" style="left: 53.59%; top: 28.35%;" type="button" aria-label="Chandigarh">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Chandigarh</span>
                </button>
                <button class="destination-city-point" id="jaipur" style="left: 43.42%; top: 33.72%;" type="button" aria-label="Jaipur">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Jaipur</span>
                </button>
                <button class="destination-city-point" id="jodhpur" style="left: 39.73%; top: 30.85%;" type="button" aria-label="Jodhpur">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Jodhpur</span>
                </button>
                <button class="destination-city-point" id="udaipur" style="left: 35.89%; top: 33.45%;" type="button" aria-label="Udaipur">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Udaipur</span>
                </button>
                <button class="destination-city-point" id="mumbai" style="left: 22.7%; top: 44.82%;" type="button" aria-label="Mumbai">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Mumbai</span>
                </button>
                <button class="destination-city-point" id="kolkata" style="left: 60.69%; top: 68.23%;" type="button" aria-label="Kolkata">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Kolkata</span>
                </button>
                <button class="destination-city-point" id="chennai" style="left: 25.54%; top: 74.36%;" type="button" aria-label="Chennai">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Chennai</span>
                </button>
                <button class="destination-city-point" id="bangalore" style="left: 19.17%; top: 67.36%;" type="button" aria-label="Bangalore">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Bangalore</span>
                </button>
                <button class="destination-city-point" id="hyderabad" style="left: 30.2%; top: 59.48%;" type="button" aria-label="Hyderabad">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Hyderabad</span>
                </button>
                <button class="destination-city-point" id="mussoorie" style="left: 57.78%; top: 33.15%;" type="button" aria-label="Mussoorie">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Mussoorie</span>
                </button>
                <button class="destination-city-point" id="goa" style="left: 18.15%; top: 53.14%;" type="button" aria-label="Goa">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Goa</span>
                </button>
                <button class="destination-city-point" id="lucknow" style="left: 54.84%; top: 47.57%;" type="button" aria-label="Lucknow">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Lucknow</span>
                </button>
                <button class="destination-city-point" id="ludhiana" style="left: 55.28%; top: 23.75%;" type="button" aria-label="Ludhiana">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Ludhiana</span>
                </button>
              </div>
            </div>
          </div>
          <div class="destination-map destination-map--international">
            <div class="destination-map__frame">
              <img
                src="./assets/changes/MAP/internationl-map.png"
                alt="International Destinations Map"
              />
              <div class="destination-map__points" aria-label="International destinations">
                <button class="destination-country-point" id="turkey" style="left: 57.57%; top: 42.02%;" type="button" aria-label="Turkey">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Turkey</span>
                </button>
                <button class="destination-country-point" id="austria" style="left: 54.31%; top: 37.77%;" type="button" aria-label="Austria">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Austria</span>
                </button>
                <button class="destination-country-point" id="spain" style="left: 48.47%; top: 41.09%;" type="button" aria-label="Spain">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Spain</span>
                </button>
                <button class="destination-country-point" id="qatar" style="left: 60.26%; top: 48.84%;" type="button" aria-label="Qatar">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Qatar</span>
                </button>
                <button class="destination-country-point" id="france" style="left: 49.14%; top: 38.88%;" type="button" aria-label="France">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>France</span>
                </button>
                <button class="destination-country-point" id="greece" style="left: 54.89%; top: 44.6%;" type="button" aria-label="Greece">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Greece</span>
                </button>
                <button class="destination-country-point" id="hungary" style="left: 51.63%; top: 37.04%;" type="button" aria-label="Hungary">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Hungary</span>
                </button>
                <button class="destination-country-point" id="indonesia" style="left: 77.04%; top: 63.22%;" type="button" aria-label="Indonesia">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Indonesia</span>
                </button>
                <button class="destination-country-point" id="italy" style="left: 52.97%; top: 42.02%;" type="button" aria-label="Italy">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Italy</span>
                </button>
                <button class="destination-country-point" id="malaysia" style="left: 71.57%; top: 56.21%;" type="button" aria-label="Malaysia">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Malaysia</span>
                </button>
                <button class="destination-country-point" id="maldives" style="left: 66.01%; top: 63.22%;" type="button" aria-label="Maldives">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Maldives</span>
                </button>
                <button class="destination-country-point" id="malta" style="left: 51.25%; top: 41.46%;" type="button" aria-label="Malta">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Malta</span>
                </button>
                <button class="destination-country-point" id="mauritius" style="left: 61.5%; top: 71.94%;" type="button" aria-label="Mauritius">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Mauritius</span>
                </button>
                <button class="destination-country-point" id="morocco" style="left: 47.79%; top: 47.18%;" type="button" aria-label="Morocco">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Morocco</span>
                </button>
                <button class="destination-country-point" id="seychelles" style="left: 63.27%; top: 63.66%;" type="button" aria-label="Seychelles">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Seychelles</span>
                </button>
                <button class="destination-country-point" id="singapore" style="left: 72.44%; top: 58.06%;" type="button" aria-label="Singapore">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Singapore</span>
                </button>
                <button class="destination-country-point" id="sri-lanka" style="left: 68.11%; top: 57%;" type="button" aria-label="Sri Lanka">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Sri Lanka</span>
                </button>
                <button class="destination-country-point" id="switzerland" style="left: 52.78%; top: 38.33%;" type="button" aria-label="Switzerland">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Switzerland</span>
                </button>
                <button class="destination-country-point" id="thailand" style="left: 70.9%; top: 52.16%;" type="button" aria-label="Thailand">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Thailand</span>
                </button>
                <button class="destination-country-point" id="uae" style="left: 61.41%; top: 50.5%;" type="button" aria-label="United Arab Emirates">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>United Arab Emirates</span>
                </button>
                <button class="destination-country-point" id="vietnam" style="left: 73.78%; top: 57.69%;" type="button" aria-label="Vietnam">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Vietnam</span>
                </button>
                <button class="destination-country-point" id="egypt" style="left: 55.85%; top: 49.58%;" type="button" aria-label="Egypt">
                  <img src="./assets/changes/MAP/BARAATMAN.svg" alt="" aria-hidden="true" />
                  <span>Egypt</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </main>
    <?php include './footer.php'; ?>
    <script>
      (function() {
        const tabs = document.querySelectorAll('.destination-tab');
        const maps = document.querySelectorAll('.destination-map');

        if (!tabs.length || !maps.length) return;

        function setActiveMap(target) {
          tabs.forEach(tab => {
            const isActive = tab.dataset.tab === target;
            tab.classList.toggle('active', isActive);
            tab.setAttribute('aria-pressed', String(isActive));
          });

          maps.forEach(map => {
            map.classList.toggle('active', map.classList.contains('destination-map--' + target));
          });
        }

        tabs.forEach(tab => {
          tab.addEventListener('click', () => {
            const target = tab.dataset.tab;
            if (!target) return;
            setActiveMap(target);
          });
        });

        const initialTab = document.querySelector('.destination-tab.active')?.dataset.tab || 'indian';
        setActiveMap(initialTab);
      })();
    </script>
  </body>
</html>




