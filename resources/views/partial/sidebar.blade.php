<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="fas fa-plane-departure"></i>
        <span>Flight</span>
      </a>


      <a class="nav-link collapsed" href="{{ route('hotels') }}">
        <i class="fas fa-bed"></i>
        <span>Stays</span>
      </a>


      <a class="nav-link collapsed" href="#">
        <i class="bi bi-journal-text"></i><span>Forms</span>
      </a>

      <a class="nav-link collapsed" href="{{ route('car') }}">
        <i class="fas fa-car"></i><span>Cars</span>
      </a>

      <a class="nav-link collapsed" data-bs-toggle="" href="#">
        <i class="fas fa-suitcase"></i><span>Trips</span>
      </a>

    <li class="nav-heading">Pages</li>

    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="" href="#">
      <i class="fas fa-star"></i><span>Reviews</span>
    </a>

    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item" disable>
      <a class="nav-link collapsed" href="{{ route('profile') }}">
        <i class="fas fa-user"></i>
        <span>Profile</span>
      </a>
    </li>
    <!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('about-us') }}">
        <i class="fas fa-info-circle"></i>
        <span>About-Us</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('contact') }}">
        <i class="fas fa-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

  </ul>

</aside><!-- End Sidebar-->