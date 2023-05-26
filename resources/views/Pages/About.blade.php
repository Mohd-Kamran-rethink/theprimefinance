@extends('index')
@section('content')

      <!-- End Main Header -->

      <!--Search Popup-->
      <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn">
          <span class="flaticon-cancel"></span>
        </div>
        <div class="popup-inner">
          <div class="overlay-layer"></div>
          <div class="search-form">
            <form
              method="post"
              action="http://azim.commonsupport.com/Finandox/{{url('/')}}"
            >
              <div class="form-group">
                <fieldset>
                  <input
                    type="search"
                    class="form-control"
                    name="search-input"
                    value=""
                    placeholder="Search Here"
                    required
                  />
                  <input type="submit" value="Search Now!" class="theme-btn" />
                </fieldset>
              </div>
            </form>
            <br />
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
              <li><a href="#">Finance</a></li>
              <li><a href="#">Idea</a></li>
              <li><a href="#">Service</a></li>
              <li><a href="#">Growth</a></li>
              <li><a href="#">Plan</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Page Banner Section -->
      <section class="page-banner">
        <div
          class="image-layer lazy-image"
          data-bg="url('assets/images/background/image-19.jpg')"
        ></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
          <h1>About Us</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">About Us</li>
          </ul>
        </div>
      </section>

      <!-- About Section Two -->
      <section class="about-section-two">
        <div class="auto-container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="image-wrapper">
                <div class="image-one">
                  <img
                    class="lazy-image owl-lazy"
                    src="assets/images/resource/image-spacer-for-validation.png"
                    data-src="assets/images/resource/image-10.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-box">
                <div class="sec-title">
                  <div class="sub-title">About Us</div>
                  <h2>We Work With <br />You To Address</h2>
                  <div class="text">
                    Prime Finance Consultant assists you in all aspects of
                    arranging Trade Facility & Finance from local &
                    International financial institutions and banks. Our ultimate
                    objective is the client's complete fulfilment.<br /><br />
                    Prime Financial consultant is an expert who work together to
                    serve clients on a broad range of advisory services
                    including Trade Finance, Mortgage – residential &
                    Commercial, Project Finance, Construction Finance, Business
                    Loan from local and international bank and Financial
                    Institute.<br /><br />
                    We provide professional financial advice to both Businesses
                    and individual. With over A Decade of experience we’ll
                    ensure not only that you get a better arrangement but
                    maximum exposure and you’re always getting the best guidance
                    from professional company in the industry.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


   

@endsection