<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">Main Pages</li>

    <li class="nav-item">
      <a class="nav-link{{ request()->routeIs('dashboard') ? '' : ' collapsed' }}" href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link{{ request()->routeIs('product') ? '' : ' collapsed' }}" href="{{ route('product') }}">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Product</span>
      </a>
    </li><!-- End Product Page Nav -->

    <li class="nav-item">
      <a class="nav-link{{ request()->routeIs('promo') ? '' : ' collapsed' }}" href="{{ route('promo') }}">
        <i class="bi bi-tag-fill"></i>
        <span>Promo</span>
      </a>
    </li><!-- End Promo Page Nav -->

    <li class="nav-item">
      <a class="nav-link{{ request()->routeIs('article') ? '' : ' collapsed' }}" href="{{ route('article') }}">
        <i class="bi bi-card-text"></i>
        <span>Article</span>
      </a>
    </li><!-- End Article Page Nav -->
  </ul>
</aside><!-- End Sidebar-->
