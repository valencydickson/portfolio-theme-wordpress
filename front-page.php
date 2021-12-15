<?php get_header()?>





  <!-- MAIN -->
  <main>

      <!-- Introduction -->

      <div class="landing">
      <div id="intro" class="intro">
        <h3>Hello! I'm</h3>
        <h1>
          <span class="v"><span>V</span>alency </span>

          <br />
          <span class="d"><span>D</span>ickson</span>
        </h1>
        <p class="ml3">
          I build websites and web apps using modern web technologies.
        </p>
        <a href="#contacts" role="button" class="btn cta">Get in Touch</a>
      </div>
      <div class="landing-img">
        <img src="<?php echo get_theme_file_uri('assets/images/bgpic-min.png') ?>" alt="bgpic" />
      </div>
    </div>


    <!-- About Section -->
    <section id="about" class="container">
      <div class="section-header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
        <h2>About Me</h2>
        <hr />
      </div>

      <div class="about-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div>
          <img src="<?php echo get_theme_file_uri('assets/images/profile-pic-min.png') ?>" alt="profile-pic" />
        </div>
        <div class="about-profile">
          <div class="about-texts">
            <h4>Who's this guy?</h4>
            <p>
              I’m a web developer based in Dar es Salaam, Tanzania. I have
              serious passion for website and web app design and development.
            </p>

            <p style="margin-bottom: 0.5em;">You can ready my resume in the PDF attached below.</p>
            <a href="cv/Valency Dickson resume.pdf" download="">My Resume (pdf 230kb)</a>
          </div>
          <div class="skills-content">
            <h4>My Skills</h4>
            <table class="skills-table">
              <tr>
                <th>HTML</th>
                <th>CSS</th>
                <th>JavaScript</th>
              </tr>
              <tr>
                <th>jQuery</th>
                <th>ReactJs</th>
                <th>Laravel</th>
              </tr>
              <tr>
                <th>PHP</th>
                <th>MySQL</th>
                <th>Apache</th>
              </tr>
              <tr>
                <th>WordPress</th>
                <th>Wix</th>
                <th>GitHub</th>
              </tr>
            </table>
          </div>
        </div>


      </div>
    </section>

    <!-- What I Do Section -->
    <section class="services container">
      <div class="section-header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
        <h2>What I Do</h2>
        <hr />
      </div>

      <div class="services-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <div class="services-card">
          <i class="fas fa-pencil-ruler"></i>
          <h4>Design</h4>
          <p>I do simple and clean design patterns and interactions...</p>
        </div>

        <div class="services-card">
          <i class="fas fa-code"></i>
          <h4>Development</h4>
          <p>
            I create responsive website, web App, landing pages etc. from
            scratch
          </p>
        </div>

        <div class="services-card">
          <i class="fab fa-wordpress"></i>
          <h4>WordPress</h4>
          <p>
            I do designing & developing WordPress websites with both
            ready-made themes and custom themes.
          </p>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="container">
      <div class="section-header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
        <h2>Latest Projects</h2>
        <hr />
      </div>

      <div class="projects-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">

        <div class="project-card">
          <img src="<?php echo get_theme_file_uri('assets/images/laravel.png') ?>" alt="Laravel CRUD" />
          <div class="project-description">
            <h4>Product CRUD App</h4>
            <p class="project-tools">Bootstrap | Laravel | MySQL</p>

            <a href="https://github.com/valencydickson/crud-app-laravel" role="button" class="btn project-btn code-btn"
              target="_blank"><span>
                <i class="fab fa-github"></i>
              </span>
              Source code</a>
            <a href="https://valency-crud-app.herokuapp.com/" role="button" class="btn project-btn site-btn"
              target="_blank"><span>
                <i class="fas fa-eye"></i>
              </span>
              Visit site</a>
          </div>
        </div>


        <div class="project-card">
          <img src="<?php echo get_theme_file_uri('assets/images/register.png') ?>" alt="LWAES" />
          <div class="project-description">
            <h4>Login System</h4>
            <p class="project-tools">Bootstrap | PHP | MySQL</p>

            <a href="https://github.com/valencydickson/login-system" role="button" class="btn project-btn code-btn"
              target="_blank"><span>
                <i class="fab fa-github"></i>
              </span>
              Source code</a>
            <a href="https://login-system-php-valency.herokuapp.com/" role="button" class="btn project-btn site-btn"
              target="_blank"><span>
                <i class="fas fa-eye"></i>
              </span>
              Visit site</a>
          </div>
        </div>

        <div class="project-card">
          <img src="<?php echo get_theme_file_uri('assets/images/LWAES.png') ?>" alt="LWAES" />
          <div class="project-description">
            <h4>LWAES Website</h4>
            <p class="project-tools">Wordpress</p>
            <a href="https://legitwriterstz.com/" role="button" class="btn project-btn site-btn" target="_blank"><span>
                <i class="fas fa-eye"></i>
              </span>
              Visit site</a>
          </div>
        </div>

        <div class="project-card">
          <img src="<?php echo get_theme_file_uri('assets/images/todo-php.png') ?>" alt="LWAES" />
          <div class="project-description">
            <h4>Todo-App</h4>
            <p class="project-tools">JavaScript | Bootstrap | PHP | MySQL</p>

            <a href="https://github.com/valencydickson/Todo-App-php" role="button" class="btn project-btn code-btn"
              target="_blank"><span>
                <i class="fab fa-github"></i>
              </span>
              Source code</a>
            <a href="https://todo-valency.herokuapp.com/" role="button" class="btn project-btn site-btn"
              target="_blank"><span>
                <i class="fas fa-eye"></i>
              </span>
              Visit site</a>
          </div>
        </div>



        <div class="project-card">
          <img src="<?php echo get_theme_file_uri('assets/images/farus.png') ?>" alt="African Repatriation" />
          <div class="project-description">
            <h4>African Repatriation website</h4>
            <p class="project-tools">Wordpress</p>
            <a href="https://africanrepatriation.org/" role="button" class="btn project-btn site-btn"
              target="_blank"><span>
                <i class="fas fa-eye"></i>
              </span>
              Visit site</a>
          </div>
        </div>

        <div class="project-card">
          <img src="<?php echo get_theme_file_uri('assets/images/calculator_PS.png') ?>" alt="landing-page" />
          <div class="project-description">
            <h4>Calculator App</h4>
            <p class="project-tools">JavaScript</p>
            <a href="https://github.com/valencydickson/calculator-app" role="button" class="btn project-btn code-btn"
              target="_blank"><span>
                <i class="fab fa-github"></i>
              </span>
              Source code</a>
            <a href="https://calculator-app-jet-zeta.vercel.app/" role="button" class="btn project-btn site-btn"
              target="_blank"><span>
                <i class="fas fa-eye"></i>
              </span>
              Visit site</a>
          </div>
        </div>


      </div>
    </section>

    <!-- Testimonial Section -->

    <section id="testimonials" class="container">
      <div class="section-header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
        <h2 style="text-transform: capitalize;">What client Says</h2>
        <hr />
      </div>

      <div class="testimonials-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">

        <!-- Slideshow container -->
        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="client-header">
              <img src="<?php echo get_theme_file_uri('assets/images/godfrey.jpg') ?>" class="client-img" alt="Client Image">
              <h3>Godfrey Daniel</h3>
              <p>Founder of LWAES</p>
            </div>


            <div class="text">"VALENCY is a flexible, easy to instruct and reliable web developer. I worked with him on
              my project which turned out nothing to be a successful, modern and high standard work. It was worth
              working with him and I am looking forward to work with him on any other upcoming projects. He's got more
              than it takes!. He's worth working with."</div>
          </div>

          <div class="mySlides fade">
            <div class="client-header">
              <img src="<?php echo get_theme_file_uri('assets/images/coleman.jpg') ?>" class="client-img" alt="Client Image">
              <h3>Coleman Foster</h3>
              <p>Principal of the Colemanfosterfirm.com</p>
            </div>
            <div class="text">"Valency is a creative and highly skilled web developer. His talent is certainly
              appreciated and recommended."</div>
          </div>



          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>
    </section>

    <!-- Contacts Section -->

    <section id="contacts" class="container">
      <div class="section-header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
        <h2>Contacts</h2>
        <hr />
      </div>
      <div class="contacts-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <h4>Do you have a question or want to work together?</h4>
        <a href="mailto:dickson.valency@gmail.com" target="_blank" role="button" class="btn cta">Get in Touch</a>
      </div>
    </section>
  </main>



<?php get_footer()?>
