<footer class="bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row">
      <!-- Kolom 1: Tentang -->
      <div class="col-md-4 mb-4">
        <h5>$AboutTitle.XML</h5>
        <p>$AboutContent</p>
      </div>

      <!-- Kolom 2: Navigasi (Dynamic dari SilverStripe) -->
      <div class="col-md-4 mb-4">
        <h5>Menu</h5>
        <ul class="list-unstyled">
      	<% include Navigation %>
        </ul>
      </div>

      <!-- Kolom 3: Kontak -->
      <div class="col-md-4 mb-4">
        <h5>Kontak</h5>
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
      </div>
    </div>

    <hr class="border-light" />
    <p class="text-center mb-0">
    <span href="$BaseHref" class="brand" rel="home">$SiteConfig.Title </span>All rights reserved.
    </p>
  </div>
</footer>
