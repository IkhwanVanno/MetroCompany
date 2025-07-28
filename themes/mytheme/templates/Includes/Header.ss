<header role="banner">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom py-3">
    <div class="container">
      <!-- Logo dan Tagline -->
      <a class="navbar-brand" href="$BaseHref">
        <div class="d-flex flex-column">
          <h1 class="h4 mb-0 text-light">$SiteConfig.Title</h1>
      	<% if $SiteConfig.Tagline %>
			<small style="color: #ccc;">$SiteConfig.Tagline</small>
		<% end_if %>
        </div>
      </a>

      <!-- Toggle untuk mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Isi Navbar -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <!-- Navigasi -->
        <% include Navigation %>

        <!-- Search Form -->
        <% if $SearchForm %>
          <form class="d-flex ms-auto mt-2 mt-lg-0" role="search">
            $SearchForm
          </form>
        <% end_if %>
      </div>
    </div>
  </nav>
</header>
