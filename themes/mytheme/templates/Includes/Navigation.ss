<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
  <% loop $Menu(1) %>
    <li class="nav-item">
      <a class="nav-link $LinkingMode" href="$Link" title="$Title.XML">
        $MenuTitle.XML
      </a>
    </li>
  <% end_loop %>
</ul>
