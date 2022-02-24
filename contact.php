  
  
  <?php require "./templeate/Header.php"; ?>

    <main>
      <?php require "./templeate/Bar-info.php"  ?>


      <div id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="title">
                <h2>Contact Information</h2>
              </div>
              <div class="deks">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Neque, quas. Ipsam repellendus iste quod laudantium dolor
                  quisquam iusto rem eum.
                </p>
              </div>
              <div class="information-detail">
                <div class="information-detail-item">
                  <span class="iconify" data-icon="carbon:phone-filled"></span>
                  <p>+62 812 1033 9073 - +62 813 1796 8938</p>
                </div>
                <div class="information-detail-item">
                  <span
                    class="iconify"
                    data-icon="fluent:mail-copy-20-filled"
                  ></span>
                  <p>kpsc@pupuk-kujang.co.id</p>
                </div>
                <!-- <div class="information-detail-item">
                  <span class="iconify" data-icon="ep:location-filled"></span>
                  <p>
                    Jl. Jend. A. Yani No. 39, Desa Dawuan Tengah, Kec. Cikampek,
                    Kab.Kerawang, 41373 West - Java Indonesia
                  </p>
                </div> -->
              </div>
              <div class="sosmed">
                <div class="circle">
                  <a href="#">
                    <span
                      class="iconify"
                      data-icon="entypo-social:facebook-with-circle"
                    ></span>
                  </a>
                </div>
                <div class="circle">
                  <a href="">
                    <span
                      class="iconify"
                      data-icon="entypo-social:instagram-with-circle"
                    ></span>
                  </a>
                </div>
                <div class="circle">
                  <a href="">
                    <span
                      class="iconify"
                      data-icon="entypo-social:linkedin-with-circle"
                    ></span>
                  </a>
                </div>
              </div>
              <img src="./assets/img/contact/circle.svg" alt="" />
            </div>
            <div class="col-lg-7">
              <form action="HandleContact.php" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="perusahaan"
                        placeholder="perusahaan"
                        name="perusahaan"
                      />
                      <label for="perusahaan">Company</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="number"
                        class="form-control"
                        id="phoneNumber"
                        placeholder="081231988"
                        name="phone"
                      />
                      <label for="phoneNumber">Phone Number</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="example@gmail.com"
                        name="email"
                      />
                      <label for="email">Email address</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="address"
                        placeholder="JL Taman Alamanda 18 No 29"
                        name="address"
                      />
                      <label for="address"> Address</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a comment here"
                      id="pesan"
                      name="pesan"
                    ></textarea>
                    <label for="pesan" class="px-4">Comments</label>
                  </div>
                </div>
                <div class="button">
                  <button type="submit" name="whatsapp">
                    Whatsapp
                    <span
                      class="iconify"
                      data-icon="ph:whatsapp-logo-fill"
                    ></span>
                  </button>
                  <button type="submit" name="Email">
                    Gmail
                    <span
                      class="iconify"
                      data-icon="fluent:mail-copy-20-filled"
                    ></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script>
      document.title = "KPSC - Contact";  
    </script>


  <?php require "./templeate/Footer.php"; ?>
