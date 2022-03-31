<?php require "./templeate/Header.php"; ?>

<main>
    <?php require "./templeate/Bar-info.php"  ?>

    <section id="workshop">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title">
                        <h5>Services</h5>
                        <h2>Workshop</h2>
                    </div>
                    <div class="deks">
                        <p>
                            Availability of workshop, facilition of more integrated fabrication work with plant services work, accurancy and time line schedule of completion will be more secured
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 img-area">
                    <div class="img">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row img-galery">
                <div class="col-lg-3 img-group">
                    <a href="./assets/img/Service/service.jpg" data-lightbox="models" data-title="My caption">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </a>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 img-group">
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 img-group">
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 img-group">
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= BASEURL; ?>assets/img/Service/service.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>

<?php require "./templeate/Footer.php"; ?>