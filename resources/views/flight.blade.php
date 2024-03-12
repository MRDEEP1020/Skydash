@include( 'partial.header');
@include('partial.sidebar');

<main id="main" class="main">

<div class="compare">
  <h4>Compare's Flight from Different Site's</h4>
</div>
<!-- ===== Option ===== -->
<section class=" row row-cols-md-3">
  <div class="dropdowns">
    <div class="dropdown__title">One-way</div>
    <div class="dropdown__content">
      <a href="#" data-value="one-way">One-way</a>
      <a href="#" data-value="round-trip">Round-trip</a>
      <a href="#" data-value="multi-city">multi-city</a>
    </div>
  </div>

  <div class="dropdowns">
    <div class="dropdown__title">Classes</div>
    <div class="dropdown__content">
      <a href="#" data-value="Round-trip">Round-trip</a>
      <a href="#" data-value="Economy">Economy</a>
      <a href="#" data-value="Fisrt">Fisrt</a>
      <a href="#" data-value="Prenium">Prenium</a>
      <a href="#" data-value="Business">Business</a>
    </div>
  </div>

  <div class="dropdowns">
    <div class="dropdown__title">Bags</div>
    <div class="dropdown__content">
      <a href="#" data-value="one"> 1</a>
      <a href="#" data-value="two"> 2</a>
      <a href="#" data-value="three"> 3</a>
      <a href="#" data-value="more"> More</a>
    </div>
  </div>
</section>

<!-- ===== End Option ===== -->
<!-- ===== Search Form ===== -->
<div class="search-container sticky flex-wrap">
  <div class="search-form">
    <form class="d-flex justify-content-between align-items-center">
      <div class="search-input-group">
        <input type="text" class="form-control form-control-sm" id="from" placeholder="From">
      </div>

      <div class="search-input-group">
        <input type="text" class="form-control form-control-sm" id="to" placeholder="To">
      </div>

      <div class="search-input-group">
        <input type="date" class="form-control form-control-sm" id="departure" placeholder="Departure Date">
      </div>

      <div class="search-input-group">
        <input type="date" class="form-control form-control-sm" id="arrival" placeholder="Arrival Date">
      </div>

      <button type="submit" class="btn btn-primary btn-sm">Search</button>
    </form>
  </div>
</div>

<!-- ===== End Search Form ===== -->
<!-- ======== Cards trip ======== -->
<section class="row row-cols-md-4">
  <article class="my-3" id="figures">
    <div>
      <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
          <figure class="figure">
            <svg class="bd-placeholder-img figure-img img-fluid rounded" width="250" height="370"
              xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
                dy=".3em">400x300</text>
            </svg>

            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
      </div>

    </div>
  </article>

  <article class="my-3" id="figures">
    <div>
      <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
          <figure class="figure">
            <svg class="bd-placeholder-img figure-img img-fluid rounded" width="250" height="370"
              xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
                dy=".3em">400x300</text>
            </svg>

            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
      </div>

    </div>
  </article>

  <article class="my-3" id="figures">
    <div>
      <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
          <figure class="figure">
            <svg class="bd-placeholder-img figure-img img-fluid rounded" width="250" height="370"
              xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
                dy=".3em">400x300</text>
            </svg>

            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
      </div>

    </div>
  </article>

  <article class="my-3" id="figures">
    <div>
      <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
          <figure class="figure">
            <svg class="bd-placeholder-img figure-img img-fluid rounded" width="250" height="370"
              xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
                dy=".3em">400x300</text>
            </svg>

            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
      </div>

    </div>
  </article>

</section>
<!-- ======== End Cards trip ======== -->
<!-- ===== Cards start ===== -->
<br>
<div>
  <h2>Trending Destination City's</h2>
  <p>The most searched for city's destinations on skydash</p>
</div>
<br>
<section class="row row-cols-md-3">
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- ===== Trending Country ===== -->
<br>
<div>
  <h2>Trending Destination Country</h2>
  <p>The most search Countries destinations on skydash</p>
</div>
<br>
<section class="row row-cols-md-3">
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100px" height="90px" xmlns="http://www.w3.org/2000/svg" role="img"
            aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image</text>
          </svg>

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- ===== End Cards start ===== -->
<!-- ===== Plan trips ===== -->
<br>
<div>
  <h2>F.A.Q</h2>
  <p>The most frequently ask question on skydash</p>
</div>
<br>
<section class="row row-cols-md-2">
  <div class="col-lg-6">

    <div class="card">
      <!-- Accordion without outline borders -->
      <div class="accordion " id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
              <code>.accordion-flush</code> class. This is the first item's accordion body.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
              <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
              being filled with some actual content.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
              <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
              happening here in terms of content, but just filling up the space to make it look, at least at first
              glance, a bit more representative of how this would look in a real-world application.
            </div>
          </div>
        </div>
      </div><!-- End Accordion without outline borders -->

    </div>
  </div>

  </div>

  <div class="col-lg-6">

    <div class="card">
      <!-- Accordion without outline borders -->
      <div class="accordion" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
              <code>.accordion-flush</code> class. This is the first item's accordion body.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
              <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
              being filled with some actual content.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
              <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
              happening here in terms of content, but just filling up the space to make it look, at least at first
              glance, a bit more representative of how this would look in a real-world application.
            </div>
          </div>
        </div>
      </div><!-- End Accordion without outline borders -->

    </div>
  </div>

  </div>
</section>
<!-- ===== End Plan trips ===== -->

</main><!-- End #main -->