<section id="bar-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="heading"></h1>

        <h5>
          <a href="index.php">KPSC</a> <span>></span>
          <span></span>
        </h5>
      </div>
    </div>
  </div>
  <img src="./assets/img/Tooltop.png" class="tooltop" alt="" />
</section>

<script>
  const Heading = document.querySelector("#bar-info .heading");
  const Subtitle = document.querySelector("#bar-info span");



  switch (window.location.href) {
    case "<?= BASEURL; ?>about.php":
      Heading.textContent = "About";
      Subtitle.textContent = "> About";
      break
    case "<?= BASEURL; ?>contact.php":
      Heading.textContent = "Contact";
      Subtitle.textContent = "> Contact";
      break
    case "<?= BASEURL; ?>service.php":
      Heading.textContent = "Service";
      Subtitle.textContent = "> Service";
      break
    case "<?= BASEURL; ?>certificates.php":
      Heading.textContent = "Certificates";
      Subtitle.textContent = "> Certificates";
      break;
    case "<?= BASEURL; ?>boardDirectors.php":
      Heading.textContent = "Board Of Directors";
      Subtitle.textContent = "> Board Of Directors";
      break;
  }
</script>