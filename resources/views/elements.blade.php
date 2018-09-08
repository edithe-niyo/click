@include('layouts.top')
                <!--============ Hero Form ==========================================================================-->
                <div class="collapse" id="collapseMainSearchForm">
                    <form class="hero-form form">
                        <div class="container">
                            <!--Main Form-->
                            <div class="main-search-form">
                                <div class="form-row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="what" class="col-form-label">What?</label>
                                            <input name="keyword" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="input-location" class="col-form-label">Where?</label>
                                            <input name="location" type="text" class="form-control small" id="input-location" placeholder="Enter Location">
                                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category" class="col-form-label">Category?</label>
                                            <select name="category" id="category" class="small" data-placeholder="Select Category">
                                                <option value="">Select Category</option>
                                                <option value="1">Computers</option>
                                                <option value="2">Real Estate</option>
                                                <option value="3">Cars & Motorcycles</option>
                                                <option value="4">Furniture</option>
                                                <option value="5">Pets & Animals</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-primary width-100 small">Search</button>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                <!--end form-row-->
                            </div>
                            <!--end main-search-form-->
                            <!--Alternative Form-->
                            <div class="alternative-search-form">
                                <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                                <div class="collapse" id="collapseAlternativeSearchForm">
                                    <div class="wrapper">
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                                <label>
                                                    <input type="checkbox" name="new">
                                                    New
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="used">
                                                    Used
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="with_photo">
                                                    With Photo
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="featured">
                                                    Featured
                                                </label>
                                            </div>
                                            <!--end col-xl-6-->
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                                            <span class="input-group-addon small">$</span>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                                            <span class="input-group-addon small">$</span>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <select name="distance" id="distance" class="small" data-placeholder="Distance">
                                                                <option value="">Distance</option>
                                                                <option value="1">1km</option>
                                                                <option value="2">5km</option>
                                                                <option value="3">10km</option>
                                                                <option value="4">50km</option>
                                                                <option value="5">100km</option>
                                                            </select>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-3-->
                                                </div>
                                                <!--end form-row-->
                                            </div>
                                            <!--end col-xl-6-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end collapse-->
                            </div>
                            <!--end alternative-search-form-->
                        </div>
                        <!--end container-->
                    </form>
                    <!--end hero-form-->
                </div>
                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Elements</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <section>
                        <h2>Grid</h2>
                        <div class="row elements-grid">
                            <div class="col"><div>col 1</div></div>
                            <div class="col"><div>col 2</div></div>
                            <div class="col"><div>col 3</div></div>
                            <div class="col"><div>col 4</div></div>
                            <div class="col"><div>col 5</div></div>
                            <div class="col"><div>col 6</div></div>
                            <div class="col"><div>col 7</div></div>
                            <div class="col"><div>col 8</div></div>
                            <div class="col"><div>col 9</div></div>
                            <div class="col"><div>col 10</div></div>
                            <div class="col"><div>col 11</div></div>
                            <div class="col"><div>col 12</div></div>
                        </div>
                        <br>
                        <div class="row elements-grid">
                            <div class="col-md-8"><div>col-md-8</div></div>
                            <div class="col-md-4"><div>col-md-4</div></div>
                        </div>
                    </section>

                    <section>
                        <h2>Items</h2>
                        <section>
                            <h3>Items Grid</h3>
                            <div class="items grid grid-xl-4-items grid-lg-4-items grid-md-4-items">
                                <div class="item">
                                    <div class="ribbon-featured">Featured</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Home & Decor</a>
                                                <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Manhattan, NY</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Education</a>
                                                <a href="single-listing-1.html" class="title">Creative Course</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Nashville, TN</a>
                                        </h4>
                                        <div class="price">$125</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>28.04.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Peter Browner
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Start Date</figure>
                                                    <aside>25.06.2017 09:00</aside>
                                                </li>
                                                <li>
                                                    <figure>Length</figure>
                                                    <aside>2 months</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Adventure</a>
                                                <a href="single-listing-1.html" class="title">Into The Wild</a>
                                                <span class="tag">Ad</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-03.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Seattle, WA</a>
                                        </h4>
                                        <div class="price">$1,560</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>21.04.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Peak Agency
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Real Estate</a>
                                                <a href="single-listing-1.html" class="title">Luxury Apartment</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Greeley, CO</a>
                                        </h4>
                                        <div class="price">$75,000</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>13.03.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Hills Estate
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Area</figure>
                                                    <aside>368m<sup>2</sup></aside>
                                                </li>
                                                <li>
                                                    <figure>Bathrooms</figure>
                                                    <aside>2</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                                <li>
                                                    <figure>Garage</figure>
                                                    <aside>1</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->
                            </div>
                        </section>
                        <section>
                            <h3>Items List</h3>
                            <div class="items list grid-xl-4-items grid-lg-3-items grid-md-2-items">
                                <div class="item">
                                    <div class="ribbon-featured">Featured</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Home & Decor</a>
                                                <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Manhattan, NY</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Education</a>
                                                <a href="single-listing-1.html" class="title">Creative Course</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Nashville, TN</a>
                                        </h4>
                                        <div class="price">$125</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>28.04.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Peter Browner
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Start Date</figure>
                                                    <aside>25.06.2017 09:00</aside>
                                                </li>
                                                <li>
                                                    <figure>Length</figure>
                                                    <aside>2 months</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->
                            </div>
                        </section>
                    </section>

                    <section>
                        <h2>Buttons</h2>
                        <section>
                            <h3>Default</h3>
                            <a href="#" class="btn btn-primary">btn-primary</a>
                            <a href="#" class="btn btn-secondary">btn-secondary</a>
                            <a href="#" class="btn btn-success">btn-success</a>
                            <a href="#" class="btn btn-danger">btn-danger</a>
                            <a href="#" class="btn btn-warning">btn-warning</a>
                            <a href="#" class="btn btn-info">btn-info</a>
                            <a href="#" class="btn btn-light">btn-light</a>
                        </section>
                        <section>
                            <h3>With <code>.btn-rounded</code> class</h3>
                            <a href="#" class="btn btn-primary btn-rounded">btn-primary</a>
                            <a href="#" class="btn btn-secondary btn-rounded">btn-secondary</a>
                            <a href="#" class="btn btn-success btn-rounded">btn-success</a>
                            <a href="#" class="btn btn-danger btn-rounded">btn-danger</a>
                            <a href="#" class="btn btn-warning btn-rounded">btn-warning</a>
                            <a href="#" class="btn btn-info btn-rounded">btn-info</a>
                            <a href="#" class="btn btn-light btn-rounded">btn-light</a>
                        </section>
                        <section>
                            <h3>With <code>.btn-framed</code> class</h3>
                            <a href="#" class="btn btn-primary btn-framed">btn-primary</a>
                            <a href="#" class="btn btn-secondary btn-framed">btn-secondary</a>
                            <a href="#" class="btn btn-success btn-framed">btn-success</a>
                            <a href="#" class="btn btn-danger btn-framed">btn-danger</a>
                            <a href="#" class="btn btn-warning btn-framed">btn-warning</a>
                            <a href="#" class="btn btn-info btn-framed">btn-info</a>
                            <a href="#" class="btn btn-light btn-framed">btn-light</a>
                        </section>
                        <section>
                            <h3>With <code>.text-caps</code> class</h3>
                            <a href="#" class="btn btn-primary text-caps">btn-primary</a>
                            <a href="#" class="btn btn-secondary text-caps">btn-secondary</a>
                            <a href="#" class="btn btn-success text-caps">btn-success</a>
                            <a href="#" class="btn btn-danger text-caps">btn-danger</a>
                            <a href="#" class="btn btn-warning text-caps">btn-warning</a>
                            <a href="#" class="btn btn-info text-caps">btn-info</a>
                            <a href="#" class="btn btn-light text-caps">btn-light</a>
                        </section>
                        <section>
                            <h3>With <code>.small</code> class</h3>
                            <a href="#" class="btn btn-primary small">btn-primary</a>
                            <a href="#" class="btn btn-secondary small">btn-secondary</a>
                            <a href="#" class="btn btn-success small">btn-success</a>
                            <a href="#" class="btn btn-danger small">btn-danger</a>
                            <a href="#" class="btn btn-warning small">btn-warning</a>
                            <a href="#" class="btn btn-info small">btn-info</a>
                            <a href="#" class="btn btn-light small">btn-light</a>
                        </section>
                        <section>
                            <h3>With <code>.large</code> class</h3>
                            <a href="#" class="btn btn-primary large">btn-primary</a>
                            <a href="#" class="btn btn-secondary large">btn-secondary</a>
                            <a href="#" class="btn btn-success large">btn-success</a>
                            <a href="#" class="btn btn-danger large">btn-danger</a>
                            <a href="#" class="btn btn-warning large">btn-warning</a>
                            <a href="#" class="btn btn-info large">btn-info</a>
                            <a href="#" class="btn btn-light large">btn-light</a>
                        </section>
                    </section>

                    <section>
                        <h2>Form</h2>
                        <form class="form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Radio</label>
                                        <figure>
                                            <label>
                                                <input type="radio" name="type" value="1" required>
                                                Offer
                                            </label>
                                            <label>
                                                <input type="radio" name="type" value="2" required>
                                                Demand
                                            </label>
                                        </figure>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Checkbox</label>
                                        <label>
                                            <input type="checkbox" name="type" value="1" required>
                                            Check me
                                        </label>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-2-->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label required">Input</label>
                                        <input name="title" type="text" class="form-control" id="title" placeholder="Input">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-2-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Submit with Icon</label>
                                        <button type="submit" class="btn btn-primary icon float-right width-100">Submit<i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="default-select" class="col-form-label">Default Select</label>
                                        <select name="submit_category" id="default-select" data-placeholder="Select">
                                            <option value="">Select</option>
                                            <option value="1">One</option>
                                            <option value="2" selected>Two - Selected</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="searchable-select" class="col-form-label">Searchable Select</label>
                                        <select name="submit_category" id="searchable-select" data-placeholder="Select" data-enable-search="true">
                                            <option value="">Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <br>
                                        <br>
                                        <p class="opacity-80">Using attribute <code>data-enable-search="true"</code></p>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                        </form>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Tabs</h2>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-expanded="true">One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two">Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three">Three</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a tempor tortor, ac imperdiet velit. Cras blandit neque eros, et consequat tortor maximus a. Nulla hendrerit tristique lectus, sed mattis lorem mattis eget. Morbi id diam est. Integer non condimentum est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque in augue porttitor dolor rhoncus porttitor sit amet nec lacus. Aenean ut odio et mauris semper molestie et viverra ante. Fusce sit amet ullamcorper orci. Proin tellus mi, malesuada ac neque vel, tincidunt cursus mauris. Praesent ut nunc neque. Curabitur scelerisque eros quis odio dictum porta. Etiam est tortor, commodo a nisi a, sagittis sodales nisl. Mauris sed mauris sagittis, eleifend ipsum ac, accumsan urna.
                                    </div>
                                    <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                        Ut eleifend placerat pretium. Integer eros purus, malesuada sit amet justo vel, luctus elementum leo. Sed hendrerit suscipit enim, vitae laoreet justo mattis id. Etiam vel massa euismod, congue diam sit amet, rutrum sem. Fusce tempor, velit vitae aliquet varius, mi eros pulvinar lorem, et posuere diam dolor quis sem. Integer rutrum fringilla risus, eget hendrerit nunc finibus ac. Duis eu sapien quis lorem pharetra suscipit finibus commodo risus. Aenean eget felis vel mauris elementum laoreet ac nec neque. Aenean congue augue in leo vulputate pulvinar. Donec eget massa posuere, sagittis enim laoreet, commodo elit. Fusce vitae pretium justo. Donec fermentum tellus non tempus faucibus. Donec finibus, diam quis pretium tincidunt, elit sapien iaculis dolor, id laoreet nisl erat in ex. Aenean dictum eget sapien eu gravida. Nulla congue ex a quam dictum, at venenatis nisl elementum.
                                    </div>
                                    <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                                        Maecenas mollis maximus dapibus. Nulla ex magna, malesuada non imperdiet sed, ultrices quis purus. Duis condimentum accumsan bibendum. In consequat lorem et nulla efficitur vulputate ut non ante. Pellentesque vel pulvinar lectus. Suspendisse gravida leo non mi porttitor consectetur. Suspendisse dapibus, lacus vel accumsan ultrices, lorem nisi scelerisque magna, vitae laoreet enim diam sed nisl. Ut ut augue facilisis, tristique nisi eget, aliquam metus. Integer porttitor facilisis metus eu hendrerit. Nam et nunc id risus fringilla volutpat et non metus. Integer in velit et erat dictum congue. Nam iaculis augue non ex tristique volutpat.
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-6-->
                            <div class="col-md-6">
                                <h2>Pills</h2>
                                <ul class="nav nav-pills" id="myTab-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-tab-pills" data-toggle="tab" href="#one-pills" role="tab" aria-controls="one-pills" aria-expanded="true">One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-tab-pills" data-toggle="tab" href="#two-pills" role="tab" aria-controls="two-pills">Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab-pills" data-toggle="tab" href="#three-pills" role="tab" aria-controls="three-pills">Three</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-pills">
                                    <div class="tab-pane fade show active" id="one-pills" role="tabpanel" aria-labelledby="one-tab-pills">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a tempor tortor, ac imperdiet velit. Cras blandit neque eros, et consequat tortor maximus a. Nulla hendrerit tristique lectus, sed mattis lorem mattis eget. Morbi id diam est. Integer non condimentum est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque in augue porttitor dolor rhoncus porttitor sit amet nec lacus. Aenean ut odio et mauris semper molestie et viverra ante. Fusce sit amet ullamcorper orci. Proin tellus mi, malesuada ac neque vel, tincidunt cursus mauris. Praesent ut nunc neque. Curabitur scelerisque eros quis odio dictum porta. Etiam est tortor, commodo a nisi a, sagittis sodales nisl. Mauris sed mauris sagittis, eleifend ipsum ac, accumsan urna.
                                    </div>
                                    <div class="tab-pane fade" id="two-pills" role="tabpanel" aria-labelledby="two-tab-pills">
                                        Ut eleifend placerat pretium. Integer eros purus, malesuada sit amet justo vel, luctus elementum leo. Sed hendrerit suscipit enim, vitae laoreet justo mattis id. Etiam vel massa euismod, congue diam sit amet, rutrum sem. Fusce tempor, velit vitae aliquet varius, mi eros pulvinar lorem, et posuere diam dolor quis sem. Integer rutrum fringilla risus, eget hendrerit nunc finibus ac. Duis eu sapien quis lorem pharetra suscipit finibus commodo risus. Aenean eget felis vel mauris elementum laoreet ac nec neque. Aenean congue augue in leo vulputate pulvinar. Donec eget massa posuere, sagittis enim laoreet, commodo elit. Fusce vitae pretium justo. Donec fermentum tellus non tempus faucibus. Donec finibus, diam quis pretium tincidunt, elit sapien iaculis dolor, id laoreet nisl erat in ex. Aenean dictum eget sapien eu gravida. Nulla congue ex a quam dictum, at venenatis nisl elementum.
                                    </div>
                                    <div class="tab-pane fade" id="three-pills" role="tabpanel" aria-labelledby="three-tab-pills">
                                        Maecenas mollis maximus dapibus. Nulla ex magna, malesuada non imperdiet sed, ultrices quis purus. Duis condimentum accumsan bibendum. In consequat lorem et nulla efficitur vulputate ut non ante. Pellentesque vel pulvinar lectus. Suspendisse gravida leo non mi porttitor consectetur. Suspendisse dapibus, lacus vel accumsan ultrices, lorem nisi scelerisque magna, vitae laoreet enim diam sed nisl. Ut ut augue facilisis, tristique nisi eget, aliquam metus. Integer porttitor facilisis metus eu hendrerit. Nam et nunc id risus fringilla volutpat et non metus. Integer in velit et erat dictum congue. Nam iaculis augue non ex tristique volutpat.
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-6-->
                        </div>
                        <!--end row-->
                    </section>

                    <section>
                        <h2>Simple Map</h2>
                        <div class="map height-300px" id="simple-map"></div>
                    </section>

                    <section>
                        <h2><code>.box</code> class</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Content without <code>.box</code> class</h3>
                                <div>
                                    <p>Maecenas mollis maximus dapibus. Nulla ex magna, malesuada non imperdiet sed, ultrices quis purus. Duis condimentum accumsan bibendum</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Content with <code>.box</code> class</h3>
                                <div class="box">
                                    <p>Maecenas mollis maximus dapibus. Nulla ex magna, malesuada non imperdiet sed, ultrices quis purus. Duis condimentum accumsan bibendum</p>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        @include('layouts.bottom')