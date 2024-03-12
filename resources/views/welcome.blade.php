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
      <a href="#" data-value="First">First</a>
      <a href="#" data-value="Premium">Premium</a>
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
<div class="search-container sticky d-flex">
  <div class="search-form">
    <form class="d-flex justify-content-between align-items-center" action="{{ route('flight.search') }}" method="POST">
      @csrf
      
      <div class="search-input-group">
        <input type="text" name="from" class="form-control form-control-sm" id="from" placeholder="From">
      </div>

      <div class="search-input-group">
        <input type="text" name="to" class="form-control form-control-sm" id="to" placeholder="To">
      </div>

      <div class="search-input-group">
        <input type="date" name="departure" class="form-control form-control-sm" id="departure" placeholder="Departure Date">
      </div>

      <div class="search-input-group">
        <input type="date" name="arrival" class="form-control form-control-sm" id="arrival" placeholder="Arrival Date">
      </div>

      <button type="submit" class="btn btn-primary btn-sm">Search</button>
    </form>
  </div>
</div>

<!-- ===== End Search Form ===== -->
<!-- ======== Cards trip ======== -->
<br>
<div>
  <h2>Hop on, hop off</h2>
  <p>Skip the layovers and fly nonstop to these destinations</p>
</div>
<br>
<section class="row row-cols-md-4">
  <article class="my-3" id="figures">
    <div>
      <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
          <figure class="figure">
            <img src="assets/img/Trip.jpg" class="figure-img img-fluid rounded" width="250" height="370" alt="Placeholder Image" style="cursor: pointer">
            <div class="figure-caption">
              <span style="font-weight: bold; display: block;">Denmark</span>
              <span>from $1500</span>
            </div>
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
            <img src="assets/img/japan-city.jpg" class="figure-img img-fluid rounded" width="250" height="370" alt="Placeholder Image" style="cursor: pointer">

            <div class="figure-caption">
              <span style="font-weight: bold; display: block;">Tokyo</span>
              <span>from $1500</span>
            </div>
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
            <img src="assets/img/german-city-1.jpg" class="figure-img img-fluid rounded" width="250" height="370" alt="Placeholder Image" style="cursor: pointer">

            <div class="figure-caption">
              <span style="font-weight: bold; display: block;">Germany</span>
              <span>from $1500</span>
            </div>
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
            <img src="assets/img/Italy Trip.jpg" class="figure-img img-fluid rounded" width="250" height="370" alt="Placeholder Image" style="cursor: pointer">

            <div class="figure-caption">
              <span style="font-weight: bold; display: block;">Rome</span>
              <span>from $1500</span>
            </div>
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
  
<a href="{{ route('search-result', 'paris') }}">
    <div class="col">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/Paris.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
                </div>
                <div class="col-md-8" style="margin-top:10px;">
                    <div class="card-body ">
                        <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
                        <span style="font-weight: 500; display: block;">Paris</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>


  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/usa (2).jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">


        </div>
        <div class="col-md-8" style="margin-top:10px;">
          <div class="card-body ">
            <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: 500; display: block;">Usa</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/London-city.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8" style="margin-top:10px;">
            <div class="card-body ">
              <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: 500; display: block;">Chelsea</span>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/germany city.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">


        </div>
        <div class="col-md-8" style="margin-top:10px;">
          
            <div class="card-body ">
              <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: 500; display: block;">Munich</span>
            </div>
          
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/japan-town.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">


        </div>
        <div class="col-md-8" style="margin-top:10px;">
          
            <div class="card-body ">
              <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: 500; display: block;">Tokyo</span>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Cam-Yaounde.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">


        </div>
        <div class="col-md-8" style="margin-top:10px;">
          
            <div class="card-body ">
              <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: 500; display: block;">Yaounde</span>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/London.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">


        </div>
        <div class="col-md-8" style="margin-top:10px;">
          
            <div class="card-body ">
              <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: 500; display: block;">London</span>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/New yok.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">


        </div>
        <div class="col-md-8" style="margin-top:10px;">
          
            <div class="card-body ">
              <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: 500; display: block;">New York</span>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Kyoto.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">


        </div>
        <div class="col-md-8" style="margin-top:10px;">
          
            <div class="card-body ">
              <span style="font-size: 14px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: 500; display: block;">Kyoto</span>
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
          <img src="assets/img/France.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">France</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/morroco.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Morocco</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/img/egypt.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
              <span style="font-weight: bold; display: block;">Egypt</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/switzerland.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Switzerland</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Dubai.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Dubai</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/mexico.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Mexico</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/greec.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Greec</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/austria.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Austria</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/neatherland.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Netherland</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/USA.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">USA</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/espange.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Espange</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Danmark.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Denmark</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Finland.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Finland</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Italy.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Italy</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Portugal.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Portugal</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Japan.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Japan</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/Germany-1.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">Germany</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/img/England.jpg" class="bd-placeholder-img" width="100px" height="100px" alt="Image Placeholder">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span style="font-size: 15px; font-weight: 300;">FLIGHT TO</span>
            <span style="font-weight: bold; display: block;">England</span>
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
  <h2>Flight deals by destination</h2>
  <p>Find and compare cheap flights</p>
<p>Search and compare billions of real-time prices on plane tickets to find the best deals.</p>
</div>

<br>
{{-- <section class="row row-cols-3">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="false" aria-controls="collapseOne">
          Accordion Item #1
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
           data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Content for Accordion Item #1
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
          Accordion Item #2
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
           data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Content for Accordion Item #2
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
          Accordion Item #3
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
           data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Content for Accordion Item #3
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                aria-expanded="false" aria-controls="collapseFour">
          Accordion Item #4
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #4
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                aria-expanded="false" aria-controls="collapseFive">
          Accordion Item #5
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #5
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                aria-expanded="false" aria-controls="collapseSix">
          Accordion Item #6
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #6
        </div>
      </div>
    </div>
  </div>

  <div class="accordion" id="accordionExample2">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                aria-expanded="false" aria-controls="collapseSeven">
          Accordion Item #4
        </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #4
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                aria-expanded="false" aria-controls="collapseEight">
          Accordion Item #5
        </button>
      </h2>
      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #5
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingNine">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                aria-expanded="false" aria-controls="collapseNine">
          Accordion Item #6
        </button>
      </h2>
      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #6
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Accordion Item #7
          </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
           data-bs-parent="#accordionExample2">
          <div class="accordion-body">
              Content for Accordion Item #7
          </div>
      </div>
  </div>
  <div class="accordion-item">
      <h2 class="accordion-header" id="headingEight">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              Accordion Item #8
          </button>
      </h2>
      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
           data-bs-parent="#accordionExample2">
          <div class="accordion-body">
              Content for Accordion Item #8
          </div>
      </div>
  </div>
  <div class="accordion-item">
      <h2 class="accordion-header" id="headingNine">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              Accordion Item #9
          </button>
      </h2>
      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
           data-bs-parent="#accordionExample2">
          <div class="accordion-body">
              Content for Accordion Item #9
          </div>
      </div>
  </div>
  <div class="accordion-item">
      <h2 class="accordion-header" id="headingTen">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              Accordion Item #10
          </button>
      </h2>
      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
           data-bs-parent="#accordionExample2">
          <div class="accordion-body">
              Content for Accordion Item #10
          </div>
      </div>
  </div>
  </div>

  <div class="accordion" id="accordionExample2">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTen">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
                aria-expanded="false" aria-controls="collapseTen">
          Accordion Item #4
        </button>
      </h2>
      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #4
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingEleven">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                aria-expanded="false" aria-controls="collapseEleven">
          Accordion Item #5
        </button>
      </h2>
      <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #5
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwelve">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                aria-expanded="false" aria-controls="collapseTwelve">
          Accordion Item #6
        </button>
      </h2>
      <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
           data-bs-parent="#accordionExample2">
        <div class="accordion-body">
          Content for Accordion Item #6
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThirteen">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
              Accordion Item #13
          </button>
      </h2>
      <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
           data-bs-parent="#accordionExample2">
          <div class="accordion-body">
              Content for Accordion Item #13
          </div>
      </div>
  </div>
  <div class="accordion-item">
      <h2 class="accordion-header" id="headingFourteen">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
              Accordion Item #14
          </button>
      </h2>
      <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
           data-bs-parent="#accordionExample2">
          <div class="accordion-body">
              Content for Accordion Item #14
          </div>
      </div>
  </div>
  <div class="accordion-item">
      <h2 class="accordion-header" id="headingFifteen">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
              Accordion Item #15
          </button>
      </h2>
      <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen"
           data-bs-parent="#accordionExample2">
          <div class="accordion-body">
              Content for Accordion Item #15
          </div>
      </div>
  </div>

  </div>


</section> --}}

<section class="row">
  @for ($row = 1; $row <= 3; $row++)
  <div class="accordion col-md-4" id="accordionExample{{$row}}">
      @for ($col = 1; $col <= 6; $col++)
      @php
          $index = ($row - 1) * 6 + $col;

          $names = [
        "New York ",
        "London ",
        "Rome ",
        "Denmark ",
        "France ",
        "Dubai ",
        "Greek ",
        "Morocco ",
        "Egypt ",
        "Germany ",
        "Japan ",
        "USA ",
        "Finland ",
        "Espange ",
        "Portugal ",
        "Switzerland ",
        "Mexico ",
        "Netherland ",
        // Add more names as needed...
    ];
          $content = [
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
              "<div><a href='#'>Link 1</a></div><div><a href='#'>Link 2</a></div><div><a href='#'>Link 3</a></div><div><a href='#'>Link 4</a></div><div><a href='#'>Link 5</a></div>",
          ];
      @endphp
      @if ($index <= 20)
      <div class="accordion-item">
          <h2 class="accordion-header" id="heading{{$index}}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
            aria-expanded="false" aria-controls="collapse{{ $index }}">
            {{ isset($names[$index - 1]) ? $names[$index - 1] : '' }}
        </button>
          </h2>
          <div id="collapse{{$index}}" class="accordion-collapse collapse" aria-labelledby="heading{{$index}}"
               data-bs-parent="#accordionExample{{$row}}">
               <div class="accordion-body">
                {!! isset($content[$index - 1]) ? $content[$index - 1] : '' !!}
            </div>
          </div>
      </div>
      @endif
      @endfor
  </div>
  @endfor
</section>




<!-- ===== End Plan trips ===== -->

</main><!-- End #main -->

@include('partial.footer')
