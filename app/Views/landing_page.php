<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1><span class="typed" data-typed-items="Selamat Datang di Pariwisata Tapanuli Utara"></span>
                        <h1>
                            <h2>Kami memberikan hal-hal yang pasti anda suka di Tapanuli Utara</h2>
                            <a href="https://www.youtube.com/watch?v=AeWiHPr-w3I&t=4s" class="glightbox play-btn mb-4"></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <center>
            <div class="container">

                <div class="heading-section mb-4 text-center">
                    <h2 class="mb-4">Tentang Tapanuli Utara</h2>
                </div>
                Kabupaten Tapanuli Utara adalah sebuah kabupaten di provinsi Sumatra Utara, Indonesia yang ibukotanya berada di Tarutung. Jumlah penduduk<br> kabupaten Tapanuli Utara ditahun 2018 sebanyak 299.881 jiwa, dengan kepadatan penduduk 79,05 jiwa/km2 dan kabupaten <br>ini merupakan kawasan yang mayoritas penduduknya adalah etnis atau suku Batak Toba.
            </div>
    </section><!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="heading-section mb-4 text-center">

                <h2 class="mb-4">Informasi</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <a href="<?php echo base_url('list-pariwisata'); ?>">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <center>
                            <div class="icon"><i class="bx bx-world"></i></div>
                        </center>
                        <center>
                            <h4 class="description">Pariwisata</h4>
                            <p class="description">Kami menyediakan informasi tentang tempat pariwisata yang mungkin anda sukai dan ingin kunjungi</p>
                        </center>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <a href="<?php echo base_url('list-travel'); ?>">
                    <div class="icon-box">
                        <center>
                            <div class="icon"><i class="bx bx-buildings"></i></div>
                        </center>
                        <center>
                            <h4 class="description">Travel</h4>
                            <p class="description">Kami menyediakan informasi tentang travel yang dapat membantu anda untuk masalah transportasi</p>
                        </center>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <a href="<?php echo base_url('list-oleh-oleh'); ?>">
                    <div class="icon-box">
                        <center>
                            <div class="icon"><i class="bx bx-gift"></i></div>
                        </center>
                        <center>
                            <h4 class="description">Oleh-oleh</h4>
                            <p class="description">Kami menyediakan informasi tentang oleh-oleh yang sesuai dengan anda dan juga khas Tapanuli Utara</p>
                        </center>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <a href="<?php echo base_url('list-kuliner'); ?>">
                    <div class="icon-box">
                        <center>
                            <div class="icon"><i class="bx bx-dish"></i></div>
                        </center>
                        <center>
                            <h4 class="description">Kuliner</h4>
                            <p class="description">Kami menyediakan informasi tentang berbagai macam kuliner khas Tapanuli Utara yang menarik untuk anda nikmati</p>
                        </center>
                    </div>
                </a>
            </div>
        </div>
    </section><!-- End Services Section -->

    <section id="cta" class="cta">
        <div class="container">

            <div class="text-center title">
                <h3 class="warna-text-hitung">What we have achieved so far</h3>
            </div>

            <center>
                <div class="row counters position-relative">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="20" class="purecounter"></span>
                        <p>Tempat Wisata</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hotel</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="20" class="purecounter"></span>
                        <p>Kuliner</p>
                    </div>


                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="3" class="purecounter"></span>
                        <p>Oleh-oleh</p>
                    </div>

                </div>
            </center>

        </div>
    </section><!-- End Cta Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <center>
                    <h2>Informasi Kontak</h2>
                </center>
            </div>
        </div>

        <div>
            <iframe style="border:0; width:100%; height:350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510380.95038206823!2d98.78925403684946!3d2.0150268238809517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6afe1293bcf5%3A0x3039d80b220d160!2sNorth%20Tapanuli%20Regency%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1622695787270!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>

        </div>

        <div class="container">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="ri-map-pin-line"></i>
                            <h4>Location:</h4>
                            <p>Tapanuli Utara</p>
                        </div>

                        <div class="email">
                            <i class="ri-mail-line"></i>
                            <h4>Email:</h4>
                            <p>kominfo@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="ri-phone-line"></i>
                            <h4>Call:</h4>
                            <p>+62 8125486631
                            <p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Yey, Pesan anda sudah terkirim. Terima Kasih!</div>
                        </div>
                        <div class="text-center"><button type="submit">Kirim</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>