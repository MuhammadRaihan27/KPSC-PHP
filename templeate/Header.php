<?php require "./Config/config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>KPSC</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>style/app.css" />
</head>

<body>


  <header>
    <nav class="navbar">
      <div class="container-fluid">
        <a href="#" class="nav-brand" id="nav-brand">
          <img src="./assets/img/Logo.png" alt="" />
        </a>
        <ul class="nav-group ms-auto" id="nav">
          <div class="button-nav-close-mobile" id="btn-close-mobile">
            <span class="iconify" data-icon="entypo:circle-with-cross" style="color: white" data-width="40"></span>
          </div>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>" class="Home active" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="About">About
              <span class="iconify" data-icon="dashicons:arrow-down-alt2"></span>
            </a>
            <ul class="dropdown">
              <li><a href="<?= BASEURL; ?>boardDirectors.php">Board Of Directors</a></li>
              <li><a href="certificates.php">Certificates</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="service.php" class="Service">Service
              <span class="iconify" data-icon="dashicons:arrow-down-alt2"></span>
            </a>
            <ul class="dropdown">
              <li><a href="">Operating Maintenance</a></li>
              <li><a href="">Constuction</a></li>
              <li><a href="">Workshop</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="" class="Project">Project</a></li>
          <li class="nav-item"><a href="contact.php" class="Contact">Contact</a></li>

          </li>
        </ul>

        <div class="button-nav-mobile" id="btn-mobile">
          <span class="iconify" data-icon="fluent:list-16-filled" data-width="40"></span>
        </div>
      </div>
    </nav>
    <div class="bar-info d-flex align-items-center justify-content-center">
      <div class="child d-flex text-white">
        <div class="box d-flex align-items-center">
          <span class="iconify" data-icon="el:phone-alt"></span>
          <span>+62 812 1033 9073 - +62 813 1796 8938</span>
        </div>
        <div class="box d-flex align-items-center">
          <span class="iconify" data-icon="fluent:mail-copy-20-filled"></span>
          <span>kpsc@pupuk-kujang.co.id</span>
        </div>
      </div>
    </div>
  </header>



  <script>
    const linkHome = document.querySelector(".nav-group .nav-item .Home");
    const linkAbout = document.querySelector(".nav-group .nav-item .About");
    const linkService = document.querySelector(".nav-group .nav-item .Service");
    const linkContact = document.querySelector(".nav-group .nav-item .Contact");
    const linkProject = document.querySelector(".nav-group .nav-item .Project");

    switch (window.location.href) {
      case "<?= BASEURL; ?>about.php":
        linkAbout.classList.add("active");
        linkHome.classList.remove("active");
        break;
      case "<?= BASEURL; ?>contact.php":
        linkContact.classList.add("active");
        linkHome.classList.remove("active");
        linkAbout.classList.remove("active");
        break;
      case "<?= BASEURL; ?>service.php":
        linkService.classList.add("active");
        linkHome.classList.remove("active");
        linkAbout.classList.remove("active");
        linkContact.classList.remove("active");
        break;
      case "<?= BASEURL; ?>certificates.php":
        linkService.classList.remove("active");
        linkHome.classList.remove("active");
        linkAbout.classList.add("active");
        linkContact.classList.remove("active");
        break;
      case "<?= BASEURL; ?>boardDirectors.php":
        linkService.classList.remove("active");
        linkHome.classList.remove("active");
        linkAbout.classList.add("active");
        linkContact.classList.remove("active");
        break;
    }
  </script>