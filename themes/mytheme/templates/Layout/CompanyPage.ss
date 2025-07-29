<main>
      <!-- Hero Section -->
      <section id="hero">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                  <img
                  src="$SiteConfig.HeroImage.URL"
                  class="d-block w-100"
                  alt="Hero Image"
                  />
                  <div class="carousel-caption d-none d-md-block">
                  <h1>$SiteConfig.HeroTitle.XML</h1>
                  <p>$SiteConfig.HeroSubtitle.XML</p>
                  </div>
            </div>
            </div>
            </div>
      </section>

      <!-- About Section -->
      <section id="about" class="about-section py-5">
            <div class="container">
            <div class="row align-items-center">
            <!-- Kiri: Gambar -->
            <div class="col-md-6 mb-4 mb-md-0">
                  <img
                  src="$SiteConfig.AboutImage.URL"
                  alt="About Image"
                  class="img-fluid rounded shadow"
                  />
            </div>

            <!-- Kanan: Teks -->
            <div class="col-md-6">
                  <h2 class="mb-3">$SiteConfig.AboutTitle.XML</h2>
                  $SiteConfig.AboutContent
                  <a href="#contact" class="btn btn-primary mt-3">Hubungi Kami</a>
            </div>
            </div>
            </div>
      </section>

      <!-- Service Section -->
      <section id="services" class="services-section py-5 bg-light">
            <div class="container">
            <h2 class="text-center mb-5">Layanan Kami</h2>
            <div class="row g-4">
            <% loop $ServiceCards %>
            <div class="col-md-4">
                  <div class="card h-100 shadow-sm">
                  <div class="card-body text-center">
                  <h5 class="card-title">$Title.XML</h5>
                  <p class="card-text">$Content.XML</p>
                  <a href="$Link" class="btn btn-primary mt-3">Lihat Detail</a>
                  </div>
                  </div>
            </div>
            <% end_loop %>
            </div>
            </div>
      </section>

      <!-- Portofolio Section -->
      <section id="portfolio" class="portfolio-section py-5">
            <div class="container">
            <h2 class="text-center mb-5">Portfolio Kami</h2>
            <div class="row g-4">
            <% loop $PortfolioItems %>
            <div class="col-md-4 col-sm-6">
                  <% if $Image %>
                  <img
                  src="$Image.URL"
                  class="img-fluid rounded shadow-sm"
                  alt="$Title.XML"
                  />
                  <% end_if %>
                  <% if $Title %>
                  <div class="mt-2">
                  <h6>$Title.XML</h6>
                  <% if $Description %>
                  <small class="text-muted">$Description.XML</small>
                  <% end_if %>
                  </div>
                  <% end_if %>
            </div>
            <% end_loop %>
            </div>
            </div>
      </section>

      <!-- Testimonial Section -->
      <section id="testimonial" class="testimonial-section py-5 bg-light">
            <div class="container">
            <h2 class="text-center mb-5">Testimoni Klien</h2>
            <div class="row g-4">
            <% loop $Testimonials %>
            <div class="col-md-4">
                  <div class="card h-100 shadow-sm p-3">
                  <div class="d-flex align-items-center mb-3">
                  <img
                        src="$Photo.URL"
                        class="rounded-circle me-3"
                        alt="$Name.XML"
                        style="width: 60px; height: 60px; object-fit: cover"
                  />
                  <div>
                        <h6 class="mb-0">$Name.XML</h6>
                        <small class="text-muted">$Role.XML</small>
                  </div>
                  </div>
                  <p class="mb-0">$Message.XML</p>
                  </div>
            </div>
            <% end_loop %>
            </div>
            </div>
      </section>

      <!-- Team Section -->
      <section id="team" class="team-section py-5 bg-white">
            <div class="container">
            <h2 class="text-center mb-5">Tim Kami</h2>
            <div class="row g-4 justify-content-center">
            <% loop $Children %>
            <div class="col-md-3 col-sm-6">
                  <div class="card text-center shadow-sm p-3">
                  <img
                  src="$ProfileImage.URL"
                  alt="$YourName.XML"
                  class="rounded-circle mx-auto"
                  style="width: 100px; height: 100px; object-fit: cover"
                  />
                  <div class="card-body">
                  <h5 class="card-title mb-1">$YourName.XML</h5>
                  <p class="text-muted small">$Profession.XML</p>
                  <a href="$Link">Portofolio ></a>
                  </div>
                  </div>
            </div>
            <% end_loop %>
            </div>
            </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="contact-section py-5 bg-light">
            <div class="container">
            <h2 class="text-center mb-5">Hubungi Kami</h2>
            <div class="row">
            <!-- Form Kontak -->
            <div class="col-md-6">
            <% if $Session.FormMessage %>
                  <div class="alert alert-info" role="alert">
                        $Session.FormMessage
                  </div>
            <% end_if %>
            <form action="$Link/emailReceive" method="POST">
                  <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Masukkan nama Anda"
                        required
                        />
                  </div>
                  <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Masukkan email Anda"
                        required
                        />
                  </div>
                  <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        rows="5"
                        placeholder="Tulis pesan Anda"
                        required
                        ></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">
                        Kirim Pesan
                  </button>
                  
                  <!-- Security Token SilverStripe -->
                  <input type="hidden" name="SecurityID" value="$SecurityID" />
            </form>
            </div>

            <!-- Informasi Kontak -->
            <div class="col-md-6 mt-4 mt-md-0">
            <div class="ps-md-4">
                  <h5>Informasi Kontak</h5>
                  <p>$nama</p>
                  
                  <% if $SiteConfig.ContactAddress %>
                  <p><strong>Alamat:</strong> $SiteConfig.ContactAddress.XML</p>
                  <% end_if %>
                  
                  <% if $SiteConfig.ContactEmail %>
                  <p><strong>Email:</strong> 
                        <a href="mailto:$SiteConfig.ContactEmail.XML">$SiteConfig.ContactEmail.XML</a>
                  </p>
                  <% end_if %>
                  
                  <% if $SiteConfig.ContactPhone %>
                  <p><strong>Telepon:</strong> 
                        <a href="tel:$SiteConfig.ContactPhone.XML">$SiteConfig.ContactPhone.XML</a>
                  </p>
                  <% end_if %>
                  
                  <% if $SiteConfig.ContactHours %>
                  <p><strong>Jam Operasional:</strong><br>
                        <span class="text-muted">$SiteConfig.ContactHours.XML</span>
                  </p>
                  <% end_if %>
                  
                  <% if $SiteConfig.ContactInfo %>
                  <div class="mt-3">
                        <strong>Informasi Tambahan:</strong>
                        <div class="mt-2">
                              $SiteConfig.ContactInfo
                        </div>
                  </div>
                  <% end_if %>
                  </div>
            </div>
            </div>
            </div>
      </section>
</main>