<!-- Masthead-->
<header class="masthead">
  <div class="container">
    <div class="masthead-subheading">Selamat Datang di Kosan Asyrofi</div>
    <div class="masthead-heading text-uppercase">Tempat Ternyaman Kosan Surabaya</div>
    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
  </div>
</header>

<!-- Services-->
<section class="page-section" id="services">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Services</h2>
      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
    <div class="text-center row">
      <div class="col-md-4">
        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
        <h4 class="my-3">E-Commerce</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-laptop fa-stack-1x fa-inverse"></i></span>
        <h4 class="my-3">Responsive Design</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-lock fa-stack-1x fa-inverse"></i></span>
        <h4 class="my-3">Web Security</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Shop</h2>
      <h3 class="section-subheading text-muted">Berikut ini adalah etalase bangunan kos & kontrakan kami</h3>
    </div>
    <div class="row">
      <?php $ambil = $koneksi->query("SELECT * FROM produk");
      while ($perproduk = $ambil->fetch_assoc()) { ?>
        <div class="mb-4 col-lg-4 col-sm-6">
          <div class="portfolio-item">
            <!-- <a class="portfolio-link" data-toggle="modal" href="#portofolio<?php echo $perproduk['id_produk'] ?>"> -->
            <a class="portfolio-link" href="shop/index.php?halaman=item_shop&id=<?php echo $perproduk['id_produk'] ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid" src="<?php echo $perproduk['foto_produk'] ?>" alt="" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading"><?php echo $perproduk['nama_produk'] ?></div>
              <div class="portfolio-caption-subheading text-muted">Rp. <?php echo number_format($perproduk['harga_produk']) ?>/bulan</div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- About-->
<section class="page-section" id="about">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">About</h2>
      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
    <ul class="timeline">
      <!-- <li>
        <div class="timeline-image"><img class="rounded-circle img-fluid" src="dist/assets/img/about/1.jpg" alt="" /></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>2009-2011</h4>
            <h4 class="subheading">Our Humble Beginnings</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
          </div>
        </div>
      </li> -->
      <li class="timeline-inverted">
        <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://lh3.googleusercontent.com/p/AF1QipO4pRR_YaDnxH1wi4pnNqkxhXGyou6A26815B4W=w296-h202-n-k-no-v2" alt="" width="200" height="200" /></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>2010</h4>
            <h4 class="subheading">Bangunan Pertama Kami</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">Berikut ini, adalah awal dari indekos kami. Berada di letak yang strategis dan cocok untuk penghuni mahasiswa yang dekat dengan Unair dan ITS.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://lh3.googleusercontent.com/p/AF1QipNW-Dvl7uWemKa6Ni9rDRA4VXOQL9Ceayjc8XGY=w296-h202-n-k-no-v1" alt="" width="200" height="200" /></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>2015</h4>
            <h4 class="subheading">Tempat Strategis cocok untuk rumah tangga</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">Bertempat lebih strategis, kami mengemabangkan indekos lagi untuk memenuhi pasar warga surabaya yang lebih dekat dengan semua tempat.</p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://lh3.googleusercontent.com/p/AF1QipNARqAMVOJ9iVwPZ4KYMYkRPbuFsIPVHAY3N_kt=w296-h202-n-k-no-v1-rj" alt="" width="200" height="200" /></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>2018</h4>
            <h4 class="subheading">Tempat Sejuk dan Damai</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">Ini adalah tempat sejuk dan damai, karena sangat jarang penduduk yang berada disana. Sehingga cocok untuk rumah tangga baru untuk bertempat tinggal.</p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-image">
          <h4>Be Part<br />Of Our<br />Story!</h4>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- Team-->
<section class="page-section bg-light" id="team">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
      <h3 class="section-subheading text-muted">Berikut ini adalah tim hebat kami, yang mengembangkan bisnis kami.</h3>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="dist/assets/img/team/1.jpg" alt="" />
          <h4>Ibu Hj. Kundari</h4>
          <p class="text-muted">Indekos Owner</p>
          <a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-twitter"></i></a><a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-facebook-f"></i></a><a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="dist/assets/img/team/2.jpg" alt="" />
          <h4>Reva Riani Putri Asyrofi, S.Hum</h4>
          <p class="text-muted">Assistant</p>
          <a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-twitter"></i></a><a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-facebook-f"></i></a><a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <!-- <div class="col-lg-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="dist/assets/img/team/3.jpg" alt="" />
          <h4>Diana Petersen</h4>
          <p class="text-muted">Lead Developer</p>
          <a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-twitter"></i></a><a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-facebook-f"></i></a><a class="mx-2 btn btn-dark btn-social" href="#!"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div> -->
    </div>
    <div class="row">
      <div class="mx-auto text-center col-lg-8">
        <p class="large text-muted">Kami bertugas dalam perawatan, pemeliharaan & kenyamanan indekos.</p>
      </div>
    </div>
  </div>
</section>

<!-- Clients
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="my-3 col-md-3 col-sm-6">
        <a href="#!"><img class="mx-auto img-fluid d-block" src="dist/assets/img/logos/envato.jpg" alt="" /></a>
      </div>
      <div class="my-3 col-md-3 col-sm-6">
        <a href="#!"><img class="mx-auto img-fluid d-block" src="dist/assets/img/logos/designmodo.jpg" alt="" /></a>
      </div>
      <div class="my-3 col-md-3 col-sm-6">
        <a href="#!"><img class="mx-auto img-fluid d-block" src="dist/assets/img/logos/themeforest.jpg" alt="" /></a>
      </div>
      <div class="my-3 col-md-3 col-sm-6">
        <a href="#!"><img class="mx-auto img-fluid d-block" src="dist/assets/img/logos/creative-market.jpg" alt="" /></a>
      </div>
    </div>
  </div>
</section> -->

<!-- Contact-->
<section class="page-section" id="contact">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Contact Us</h2>
      <h3 class="section-subheading text-muted">Jika ingin menghubungi kami, segera bisa <a href="https://wa.me/628813555578?text=Saya%20tertarik%20untuk%20kontrak%20di%20tempat%20anda"> kontak</a> kami segera.</h3>
      <h3 class="section-subheading text-muted">Jika tidak bisa melalui form berikut: <a href="https://forms.gle/6uwGDL8j1VoHCfUk7">Link berikut</a>.</h3>
    </div>
    <form action="test-mail.php" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
      <div class="mb-5 row align-items-stretch">
        <div class="col-md-6">
          <div class="form-group">
            <input name="nama_pelanggan" class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <input name="email_pelanggan" class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group mb-md-0">
            <input name="telepon_pelanggan" class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-group-textarea mb-md-0">
            <textarea name="deskripsi_pelanggan" class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
      </div>
      <div class="text-center">
        <div id="success"></div>
        <button name="simpan" class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
      </div>
    </form>
  </div>
</section>
