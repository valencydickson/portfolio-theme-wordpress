 <!-- FOOTER -->
 <footer>
    <div class="footer-navbar">
      <a href="index.html" class="footer-logo">
      <img src="<?php echo get_theme_file_uri('assets/images/logo.svg') ?>" alt="logo" />
      </a>
      <nav class="footer-nav">
      <?php
wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'menu-class' => 'menu-wrapper-li',
        'items_wrap' => '<ul  class="menu-wrapper">%3$s</ul>',
        'fallback_cb' => false,
    )
);
?>
      </nav>
    </div>

    <div class="footer-social">
      <div class="social-links">
        <a href="https://www.linkedin.com/in/valency-dickson-0a7754125/" target="_blank"><i
            class="fab fa-linkedin-in"></i></a>
        <a href="https://github.com/valencydickson" target="_blank"><i class="fab fa-github"></i></a>
        <a href="mailto:dickson.valency@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
      </div>

      <div class="copyright">
        <p class="ml-auto">VALENCY DICKSON <span class="year"></span></p>
      </div>
    </div>
  </footer>

    <!-- Smtp library script -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



<script>
  //Testimonials carousel
  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";

  }
</script>
</body>


<?php wp_footer();?>

</html>
