@extends('index')
@section('content')
@include('Common.banner')
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn">
            <span class="flaticon-cancel"></span>
        </div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://azim.commonsupport.com/Finandox/{{url('/')}}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required />
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
     <!-- Welcome Setion -->
    <section class="welcome-section pt-0">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="row m-0">
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-analysis"></span>
                            </div>
                            <h2>Trade Finance</h2>
                            <div class="text">
                                Trade finance signifies financing for trade, and it concerns
                                both domestic and international trade transactions
                            </div>
                            <div class="read-more"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box"
                            style="
                background-image: url(assets/images/resource/image-2.jpg);
              ">
                            <div class="icon-box"><span class="flaticon-tax"></span></div>
                            <h2>Mortgage Finance</h2>
                            <div class="text">
                                With over 10 years’ experience, Prime Finance works with a
                                bank and financial institutions to bring you the best option
                                with the rate.
                            </div>
                            <div class="read-more"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="flaticon-work-1"></span>
                            </div>
                            <h2>Business Loan</h2>
                            <div class="text">
                                Prime Finance arranges the business Loan from the various
                                banks and the financial institute to grow the business and
                                for the working capital.
                            </div>
                            <div class="read-more"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one">
                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png"
                                data-src="assets/images/resource/image-10.jpg" alt="" />
                        </div>
                        <div class="image-two wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="image-outer">
                                <img class="lazy-image owl-lazy"
                                    src="assets/images/resource/image-spacer-for-validation.png"
                                    data-src="assets/images/resource/image-3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-box">
                        <div class="sec-title">
                            <div class="sub-title">About Us</div>
                            <h2>Right Advice to your financial future</h2>
                            <div class="text">
                                Prime Finance Consultant assists you in all aspects of
                                arranging Trade Facility & Finance from local &
                                International financial institutions and banks. Our ultimate
                                objective is the client's complete fulfilment.
                            </div>
                        </div>
                        <div class="row">
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/images/icons/icon-1.png" alt="" />
                                    </div>
                                    <h5>Phone Number</h5>
                                    <h2>+971 589 776 626</h2>
                                </div>
                            </div>
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="assets/images/icons/icon-2.png" alt="" />
                                    </div>
                                    <h5>Email Address</h5>
                                    <h2>info@theprimefinance.com</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="left-column">
                    <div class="services-content">
                        <div class="sec-title light">
                            <div class="sub-title">Our Services</div>
                            <h2>What Actually We <br />Do Here.</h2>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="icon">
                                <img src="assets/images/icons/icon-3.png" alt="" />
                            </div>
                            <h2>TRADE FINANCE</h2>
                            <div class="text">
                                Trade finance signifies financing for trade, and it concerns
                                both domestic and international trade transactions
                            </div>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="icon">
                                <img src="assets/images/icons/icon-4.png" alt="" />
                            </div>
                            <h2>MORTGAGE FINANCE</h2>
                            <div class="text">
                                We at Prime Finance compare the Mortgage parameters which
                                include Rate, application fees, Insurance etc. with the
                                entire bank and the finance institute so we can serve the
                                best product to our client.
                            </div>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="icon">
                                <img src="assets/images/icons/icon-5.png" alt="" />
                            </div>
                            <h2>BUSINESS LOAN</h2>
                            <div class="text">
                                Prime Finance arranges the business Loan from the various
                                banks and the financial institute to grow the business and
                                for the working capital.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-column">
                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="border-box">
                            <div class="border_top"></div>
                            <div class="border_bottom"></div>
                            <div class="border_middile"></div>
                        </div>
                        <div class="row">
                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-6.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="90">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Business Monitoring</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-7.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="71">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Business Growth</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-8.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="33">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Financial Plan</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-9.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="42">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Finance Consulting</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-10.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="69">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">Data Analysis</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-6">
                                <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="assets/images/icons/icon-11.png" alt="" />
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000"
                                                data-stop="10">0</span><span>%</span>
                                        </div>
                                        <div class="counter-title">business Strategy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="author-box"
                        style="
              background-image: url(assets/images/background/image-1.jpg);
            ">
                        <div class="signature">
                            <img src="assets/images/resource/signature.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-chooseus-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-box">
                        <div class="sec-title">
                            <div class="sub-title">Why Choose Us</div>
                            <h2>Why Should You <br />Choose Us ?</h2>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one"
                                    role="tab" aria-controls="tab-one" aria-selected="true">Our Mission
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab"
                                    aria-controls="tab-two" aria-selected="false">Our Vission</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel"
                                aria-labelledby="tab-one">
                                <div class="clearfix">
                                    <div class="image">
                                        <img class="lazy-image owl-lazy"
                                            src="assets/images/resource/image-spacer-for-validation.png"
                                            data-src="assets/images/resource/image-4.jpg" alt="" />
                                    </div>
                                    <div class="text">
                                        <p>
                                            We try our best to know and understand your financial
                                            situation and provide you with the highest quality
                                            guidance service, information, and products to help
                                            you achieve your objective. We associate with clients
                                            in long-term, trusted financial advisory relationships
                                        </p>
                                        <p>
                                            Our mission is to help Corporate, Midium & micro size
                                            business grip the tasks of living their aim and
                                            thoughts by design, applying, and observing financial
                                            plan consistent with their center values.To make an
                                            optimistic variation in the lives of our clients,
                                            mostly through a practiced, one-on-one relationship
                                            with our financial team.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel"
                                aria-labelledby="tab-two">
                                <div class="clearfix">
                                    <div class="image">
                                        <img class="lazy-image owl-lazy"
                                            src="assets/images/resource/image-spacer-for-validation.png"
                                            data-src="assets/images/resource/image-4.jpg" alt="" />
                                    </div>
                                    <div class="text">
                                        <p>
                                            The Prime Finance (TPF)offer modern financial products
                                            accessible to all and sundry. Our vision as a firm
                                            focuses on serving additional financial object, as
                                            well as understanding of each client’s unique
                                            intention, assignment and principles.
                                        </p>
                                        <p>
                                            TPF wants to help more clients have access to
                                            financial services in a trouble-free, visible, secure
                                            and responsive environment. Every client has special
                                            thoughts about what makes life great.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one">
                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png"
                                data-src="assets/images/resource/image-11.jpg" alt="" />
                        </div>
                        <div class="image-two">
                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png"
                                data-src="assets/images/resource/image-1.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Write Here</div>
                        <h2>Get In Touch</h2>
                    </div>
                    <!-- Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="http://azim.commonsupport.com/Finandox/sendemail.php"
                            id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-12 form-group">
                                    <label for="name">Enter your name</label>
                                    <input type="text" name="username" id="name"
                                        placeholder="Enter name here......" required="" />
                                    <i class="fas fa-user"></i>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="email">Enter your email</label>
                                    <input type="email" name="email" id="email"
                                        placeholder="Enter email here......" required="" />
                                    <i class="fas fa-envelope"></i>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="message">Enter your message</label>
                                    <textarea name="message" id="message" placeholder="Enter message here......"></textarea>
                                    <i class="fas fa-edit"></i>
                                </div>

                                <div class="col-md-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                        <span class="btn-title">Get In Touch</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Get Us Here</div>
                        <h2>Contact Us</h2>
                    </div>
                    <div class="contact-info">
                        <div class="border-box">
                            <div class="border_top"></div>
                            <div class="border_middile"></div>
                        </div>
                        <div class="row">
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-email-6"></span>
                                    </div>
                                    <h3>Email Address</h3>
                                    <ul>
                                        <li>
                                            <a href="mailto:info@theprimefinance.com">info@theprimefinance.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-call-1"></span>
                                    </div>
                                    <h3>Phone Number</h3>
                                    <ul>
                                        <li>
                                            <a href="tel:+971589776626">+971 589 776 626</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-location"></span>
                                    </div>
                                    <h3>Office Address</h3>
                                    <ul>
                                        <li>Business Bay, Dubai, UAE</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-column col-md-6">
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-worldwide"></span>
                                    </div>
                                    <h3>Web Connect</h3>
                                    <ul>
                                        <li>
                                            <a href="http://example.com/">theprimefinance.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
