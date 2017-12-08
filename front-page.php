<?php
/**
 * The template for displaying front page.
 *
 * @package test theme
 */

get_header(); ?>
  <section id="home-slider">
    <?php
    echo do_shortcode("[metaslider id=29]");
    ?>
  </section>

  <section id="home-marketing">
    <div id="home-marketing-wrapper">
      <div class="marketing-box">
        <div class="marketing-img">
          <img src="<?php bloginfo('template_directory'); ?>/img/home/home-res.jpg" alt="Residential">
        </div>
        <div class="marketing-copy">
          <h2>Residential</h2>
          <p>No one cares for the safety of your home and family like Heim.</p>
          <a href="services/residential/">DISCOVER WHY</a>
        </div>
      </div>
      <div class="marketing-box">
        <div class="marketing-img">
          <img src="<?php bloginfo('template_directory'); ?>/img/home/home-com.jpg" alt="Residential">
        </div>
        <div class="marketing-copy">
          <h2>Commercial</h2>
          <p>You want to protect and secure your business. Heim makes it happen.</p>
          <a href="/services/commercial/">DISCOVER HOW</a>
        </div>
      </div>
      <div class="marketing-box">
        <div class="marketing-img">
          <img src="<?php bloginfo('template_directory'); ?>/img/home/home-cus.jpg" alt="Custom">
        </div>
        <div class="marketing-copy">
          <h2>Custom Builders</h2>
          <p>Ask about our Preferred-Partner Program for new home construction.</p>
          <a href="/services/custom-partners/">LEARN MORE</a>
        </div>
      </div>
    </div>
  </section>

  <section id="home-page">

    <div class="better-w-heim">
      <img src="<?php bloginfo('template_directory'); ?>/img/home/its-better-with-heim.svg" alt="It's Better with Heim">
      <hr>
    </div>

    <div id="home-cta">
      <div class="cta">
        <div class="cta-logo">
          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Security">
        </div>
        <h3>Security</h3>
        <p>Protected by Heim a sure sign that you have the finest in security and in a class by itself.<br>You deserve the best!</p>
        <a href="/residential/residential-security/" class="btn">Learn More</a>
      </div>
      <div class="cta">
        <div class="cta-logo">
          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Fire">
        </div>
        <h3>Life Safety</h3>
        <p>With Heim state-of-the-art fire and life safety system, early warning detection technology ensures that your home and business are safe all day and night.</p>
        <a href="/residential/residential-fire/" class="btn">Learn More</a>
      </div>
      <div class="cta">
        <div class="cta-logo">
          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Home Automation">
        </div>
        <h3>Automation</h3>
        <p>Put control at your fingertips from your smartphone, tablet or computer. With Heim-installed automation  you have the industry's best managing your home and business.</p>
        <a href="/residential/residential-automation/" class="btn">Learn More</a>
      </div>
      <div class="cta">
        <div class="cta-logo">
          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Heim Cares">
        </div>
        <h3>Heim Cares</h3>
        <p>Unparalleled care is the cornerstone of our business. Experience what caring feels like. HEIM'S commitment to your safety and security rises above all others.</p>
        <a href="/about/heim-cares/" class="btn">Learn More</a>
      </div>
    </div>

  </section>

  <section id="services">
    <div id="services-img" class="services-col">
    </div>
    <div id="services-copy" class="services-col">
      <h3>Services</h3>
      <ul>
        <li>Custom Security &amp; Fire Alarms</li>
        <li>Home Theater &amp; Home Automation</li>
        <li>Energy Management</li>
        <li>Water Sensors</li>
        <li>Temperature Alerts</li>
        <li>Surveillance Systems</li>
        <li>Access Control Systems</li>
        <li>24 Hour Central Monitoring</li>
        <li>Cable TV/Phone Jacks/Internet Wiring</li>
        <li>Deck/Patio/Pool Outdoor Speakers</li>
        <li>A/C Condenser Monitoring</li>
        <li>Structured Wiring</li>
      </ul>
    </div>
  </section>

  <section id="home-logos">
    <div class="home-logos-wrapper">
      <div class="home-logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/home/honey-well-logo.png" alt="Honeywell">
      </div>
      <div class="home-logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/home/control-logo.png" alt="Control 4">
      </div>
      <div class="home-logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/home/ul-listed-logo.png" alt="Ul Listed">
      </div>
      <div class="home-logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/home/def-tech-logo.png" alt="Definitive Technology">
      </div>
      <div class="home-logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/home/savant-logo.png" alt="Savant">
      </div>
    </div>
  </section>

  <section class="testimonial">
    <div class="testimonial-wrapper">
      <?php
      echo do_shortcode("[metaslider id=33]");
      ?>
    </div>
  </section>
<?php get_footer(); ?>
