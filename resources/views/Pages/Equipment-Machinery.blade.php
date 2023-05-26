@extends('index')
@section('content')
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://azim.commonsupport.com/Finandox/{{ url('/') }}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
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
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-26.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Equipment &amp; Machinery Finance</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Equipment &amp; Machinery</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <!-- Category Widget -->
                        <div class="sidebar-widget-two categories-widget-two">
                            <div class="widget-content">
                                <ul>
                                    <li><a href="{{url('trade-finance')}}">Trade Finance<i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="{{url('mortgage-finance')}}')}}">Mortgage Finance<i
                                                class="fa fa-angle-right"></i></a></li>
                                    <li><a href="{{url('business-loan')}}">Business Loan<i class="fa fa-angle-right"></i></a></li>
                                    <li class="current"><a href="{{url('Equipment-Machinery')}}">Equipment &amp; Machinery<i
                                                class="fa fa-angle-right"></i></a></li>
                                    <li><a href="{{url('Trade-Credit-Insurance')}}">Trade Credit Insurance</a></li>


                                </ul>
                            </div>
                        </div>
                        <!-- Contact Form Widget -->
                        <div class="sidebar-widget-two contact-form-widget">
                            <div class="inner-box">
                                <h3>Contact Us</h3>
                                <!-- Contact Form-->
                                <div class="contact-form">
                                    <form method="post" action="#" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="col-md-12 form-group">
                                                <input type="text" name="username" placeholder="Enter name here......"
                                                    required="">
                                                <i class="fal fa-user"></i>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <input type="email" name="email" placeholder="Enter email here......"
                                                    required="">
                                                <i class="fal fa-envelope"></i>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <input type="email" name="email" placeholder="Enter Phone Number......"
                                                    required="">
                                                <i class="fal fa-phone"></i>
                                            </div>

                                            <div class="col-md-12 form-group text-center">
                                                <button class="theme-btn btn-style-one" type="submit"
                                                    name="submit-form"><span class="btn-title">Submit Now</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Info Widget -->
                        <div class="sidebar-widget-two contact-info-widget">
                            <div class="inner-box" style="background-image: url(assets/images/background/image-18.jpg);">
                                <h3>Need Help?</h3>
                                <ul>
                                    <li><a href="mailto:info@webmail.com">info@theprimefinance.com</a></li>
                                    <li><a href="tel:+98787676576">+971 589 776 626</a></li>
                                    <li><a href="mailto:support.example.com">www.theprimefinance.com</a></li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="services-details pl-lg-5">
                        <div class="image-box"><img src="assets/images/resource/service-5.jpg" alt=""></div>
                        <div class="content">
                            <div class="sec-title">
                                <div class="sub-title">Financial Planning</div>
                                <h2>Equipment &amp; Machinery Finance</h2>
                            </div>
                            <div class="text"> When business starts and gradually grows, Business need some update to
                                stick in the market and to generate the more profit it requires to invest in equipment,
                                machinery, and other commercial wealth. TPF offers solutions that meet the demand or
                                requirements of purchasing profitable assets or equipments.
                                The set of products offered includes various types of equipments such as Medical Equipments,
                                Construction Equipments, and Professional Equipments. These offers are structured in such a
                                way that it contributes clients with an option to use their assets as security to fund the
                                purchase.<br>

                            </div>
                            <div class="graph">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img src="assets/images/resource/image-11.jpg" alt="">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
