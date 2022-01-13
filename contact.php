<!DOCTYPE html>

<?php
$message_sent = false;

if(isset($_POST['name']) && $_POST['name'] !='') {
if(isset($_POST['phone']) && $_POST['phone'] !='') {
if(isset($_POST['email']) && $_POST['email'] !='') {
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

$userName = $_POST['name'];
$userPhone = $_POST['phone'];
$userEmail = $_POST['email'];
$messageSubject = "New Portfolio Opportunity";

$to = "jpowelldev@gmail.com";
$body = "";

$body .= "From: ".$userName. "\r\n";
$body .= "Phone: ".$userPhone. "\r\n";
$body .= "Email: ".$userEmail. "\r\n";

mail($to, $messageSubject, $body);

$message_sent = true;

} else {
  $invalid_class_name = "form-invalid";
}
}
}
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Need help creating a website, application or online presence? Contact your very own web developer here to get started."
    />
    <meta name="theme-color" content="#50bab4" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap"
      rel="stylesheet"
    />

    <title>Joseph Powell | Contact</title>
  </head>

  <body>

      <?php
      if($message_sent):
      ?>
    <div class="thanks-bg">
     <div class="contact-form-thanks u-margin-top-big u-margin-bottom-big">
      <h2 class="heading-secondary">Thanks, we'll be in touch</h2>
      <div class="u-center-text u-margin-top-small">
        <a href="index.html#header" class="btn-text">Return to home page</a>
      </div>
    </div>
      </div>

      <?php
      else:
      ?>
    <div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
      </label>

      <div class="navigation__background">&nbsp;</div>

      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="index.html#header" class="navigation__link">Home</a>
          </li>
          <li class="navigation__item">
            <a href="index.html#skills" class="navigation__link">Skills</a>
          </li>
          <li class="navigation__item">
            <a href="index.html#aboutme" class="navigation__link">About Me</a>
          </li>
          <li class="navigation__item">
            <a href="index.html#resume" class="navigation__link">Resume</a>
          </li>
        </ul>
      </nav>
    </div>

    <main>
      <section class="section-contact-direct">
        <h2 class="heading-secondary u-margin-bottom-medium">
          Contact me directly at:
        </h2>
        <div class="row u-center-text">
          <a
            href="mailto:jpowelldev@gmail.com"
            target="_blank"
            class="section-contact-direct__email-link"
            >jpowelldev@gmail.com</a
          >
        </div>
      </section>

      <section class="section-dropaline" id="dropaline">
        <h2 class="heading-secondary-white u-margin-bottom-medium">
          Know someone that needs my help?
        </h2>

        <div class="row">
          <div class="book">
            <div class="book__form">
              <!--Container that sits on the left side of the .book element-->
              <form action="contact.php" method="POST" class="form">
                <div class="u-margin-bottom-medium">
                  <h2 class="heading-secondary">Drop me a line</h2>
                </div>

                <div class="form__group">
                  <input
                    type="text"
                    class="form__input <?= $invalid_class_name ?? "" ?>"
                    placeholder="Name or Company Name"
                    autocomplete="off"
                    name="name"
                    id="name"
                    required
                  />
                  <!--The label and input are connected thru the id and for properties. Both must have the same value(name)-->
                  <label for="name" class="form__label">Name</label>
                </div>

                <div class="form__group">
                  <input
                    type="number"
                    inputmode="numeric"
                    class="form__input <?= $invalid_class_name ?? "" ?>"
                    placeholder="Phone Number"
                    autocomplete="off"
                    name="phone"
                    id="phone"
                    required
                  />
                  <label for="phone" class="form__label">Phone Number</label>
                </div>

                <div class="form__group">
                  <input
                    type="email"
                    inputmode="email"
                    class="form__input <?= $invalid_class_name ?? "" ?>"
                    placeholder="Email"
                    autocomplete="off"
                    name="email"
                    id="email"
                    required
                  />
                  <label for="email" class="form__label">Email Address</label>
                </div>

                <div class="form__group">
                  <button
                    class="
                      btn-main
                      btn-main__white
                      btn-main__animated
                      btn-main__contact
                      form__btn
                    "
                  type="submit"
                    >
                    Send &rarr;
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer footer-contact">
      <div class="row social">
        <div class="social__navigation">
          <ul class="social__list">
            <li class="social__item">
              <a
                href="mailto:jpowelldev@gmail.com"
                target="_blank"
                class="social__link social__gmail"
                ><ion-icon name="mail-outline"></ion-icon
              ></a>
            </li>
            <li class="social__item">
              <a
                href="https://github.com/localhostwiththemost"
                class="social__link social__github"
                target="_blank"
                ><ion-icon name="logo-github"></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="flex-container flex-container__footer">  
        <div class="footer__navigation flex-container__footer--item">
            <ul class="footer__list">
              <li class="footer__item">
                <a href="index.html#header" class="footer__link">Home</a>
              </li>
              <li class="footer__item">
                <a href="index.html#skills" class="footer__link">Skills</a>
              </li>
              <li class="footer__item">
                <a href="index.html#resume" class="footer__link">Resume</a>
              </li>
              <li class="footer__item">
                <a href="contact.html" class="footer__link">Contact</a>
              </li>
            </ul>
        </div>

          <p class="footer__copyright flex-container__footer--item">
            Built by
            <a href="index.html#aboutme" class="footer__link">Joseph Powell</a>;
            &nbsp; a Houston based front end developer.
          </p>
      </div>
      </div>
    </footer>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>


    <?php
    endif;
    ?>
</body>
</html>
