<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="bi bi-grid"></i>
        <span>Flight</span>
      </a>


      <a class="nav-link collapsed" href="{{ route('hotels') }}">
        <i class="bi bi-menu-button-wide"></i><span>Stays</span>
      </a>


      <a class="nav-link collapsed" href="#">
        <i class="bi bi-journal-text"></i><span>Forms</span>
      </a>

      <a class="nav-link collapsed" href="{{ route('car') }}">
        <i class="bi bi-layout-text-window-reverse"></i><span>Cars</span>
      </a>

      <a class="nav-link collapsed" data-bs-toggle="" href="#">
        <i class="bi bi-bar-chart"></i><span>Trips</span>
      </a>

    <li class="nav-heading">Pages</li>

    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="" href="#">
      <i class="bi bi-gem"></i><span>Reviews</span>
    </a>

    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('profile') }}">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li>
    <!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('contact') }}">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

  </ul>

</aside><!-- End Sidebar-->