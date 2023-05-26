@extends('index')
@section('content')

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
          data-bg="url('assets/images/background/image-23.jpg')"
        ></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
          <h1>Trade Finance</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Trade Finance</li>
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
                      <li class="current">
                        <a href="{{url('trade-finance')}}"
                          >Trade Finance<i class="fa fa-angle-right"></i
                        ></a>
                      </li>
                      <li>
                        <a href="{{url('mortgage-finance')}}"
                          >Mortgage Finance<i class="fa fa-angle-right"></i
                        ></a>
                      </li>
                      <li>
                        <a href="{{url('business-loan')}}"
                          >Business Loan<i class="fa fa-angle-right"></i
                        ></a>
                      </li>
                      <li>
                        <a href="{{url('Equipment-Machinery')}}"
                          >Equipment &amp; Machinery<i
                            class="fa fa-angle-right"
                          ></i
                        ></a>
                      </li>
                      <li>
                        <a href="{{url('Trade-Credit-Insurance')}}"
                          >Trade Credit Insurance</a
                        >
                      </li>
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
                            <input
                              type="text"
                              name="username"
                              placeholder="Enter name here......"
                              required=""
                            />
                            <i class="fal fa-user"></i>
                          </div>

                          <div class="col-md-12 form-group">
                            <input
                              type="email"
                              name="email"
                              placeholder="Enter email here......"
                              required=""
                            />
                            <i class="fal fa-envelope"></i>
                          </div>

                          <div class="col-md-12 form-group">
                            <input
                              type="email"
                              name="email"
                              placeholder="Enter Phone Number......"
                              required=""
                            />
                            <i class="fal fa-phone"></i>
                          </div>

                          <div class="col-md-12 form-group text-center">
                            <button
                              class="theme-btn btn-style-one"
                              type="submit"
                              name="submit-form"
                            >
                              <span class="btn-title">Submit Now</span>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Contact Info Widget -->
                <div class="sidebar-widget-two contact-info-widget">
                  <div
                    class="inner-box"
                    style="
                      background-image: url(assets/images/background/image-18.jpg);
                    "
                  >
                    <h3>Need Help?</h3>
                    <ul>
                      <li>
                        <a href="mailto:info@webmail.com"
                          >info@theprimefinance.com</a
                        >
                      </li>
                      <li><a href="tel:+98787676576">+971 589 776 626</a></li>
                      <li>
                        <a href="mailto:support.example.com"
                          >www.theprimefinance.com</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </aside>
            </div>
            <div class="col-lg-8">
              <div class="services-details pl-lg-5">
                <div class="image-box">
                  <img src="assets/images/resource/service-2.jpg" alt="" />
                </div>
                <div class="content">
                  <div class="sec-title">
                    <div class="sub-title">Financial Planning</div>
                    <h2>
                      A) ACCOUNT RECEIVABLES FINANCE / INVOICE DISCOUNTING
                    </h2>
                  </div>
                  <div class="text">
                    The term Invoice Discounting is often also referred to as<br />
                    <strong>1) Bill Discounting</strong><br />
                    <strong>2) Purchase Bill Discounting</strong> <br />
                    <strong>3) Receivables Discounting</strong><br />
                    <strong>4) Receivable Finance</strong> <br />
                    Invoice or Bill Discounting or Purchasing Bills. ... Bill
                    discounting is an arrangement whereby the seller recovers an
                    amount of sales bill from the Bank or financial
                    intermediaries (NBFC) before it is due date.<br />
                    Accounts receivable is any money of your customers/ client
                    owes you for goods or services they purchased from you in
                    the past. This money is typically collected after 30, 60 90
                    or 120 days, and is recorded as an asset on your company’s
                    balance sheet. Prime Finance assist seller by getting their
                    client invoice paid up to 90% of the invoice amount.
                  </div>
                </div>
                <div class="graph">
                  <div class="row">
                    <div class="col-md-8">
                      <img src="assets/images/resource/graph-3.png" alt="" />
                    </div>
                  </div>
                </div>

                <div class="content">
                  <div class="sec-title">
                    <h2>B) Supplier Payment Finance</h2>
                  </div>
                  <div class="text">
                    The term Supplier Payment Finance is often also referred to
                    as<br />
                    <strong>1) Account Payables finance</strong><br />
                    <strong>2) Vendor Finance </strong> <br />
                    <strong>3) Supplier Chain Finance </strong><br />
                    <strong>4) Reverse Factoring </strong> <br />
                    Supplier Payment financing is a fundamental of supply chain
                    financing and plays a vital role to increase the cash flow
                    and operations of company. It contributes companies with
                    credit facilities to buy goods, enabling them to expand the
                    business. This solution is used by manufacturing companies,
                    wholesale trader & product distributors.<br />
                    The buyer will pay the principal amount and other charges
                    owed at the invoice maturity/due date or at another agreed
                    upon due date directly to the finance provider.
                  </div>
                </div>
                <div class="graph">
                  <div class="row">
                    <div class="col-md-8">
                      <img src="assets/images/resource/graph-4.png" alt="" />
                    </div>
                  </div>
                </div>

                <div class="content">
                  <div class="sec-title">
                    <h2>c) Letter of Credit</h2>
                  </div>
                  <div class="text">
                    <strong>1) Sight Letter of Credit</strong><br />
                    <strong>2) Usance Letter of Credit</strong> <br />

                    A Letter of credit (LC) is a security or assurance of
                    payment by an importer’s (Buyer) bank or Finance Institute
                    made to the exporter (Seller). The assurance in the letter
                    of credit is contingent on the exporter meeting the terms
                    and conditions defined in the letter of credit. In most
                    cases, the conditions cover the exporter providing certain
                    evidence like a bill of lading, Insurance, Packing List,
                    Commercial Invoice, Certificate of Origin etc. justifying
                    they delivered the correct goods or performed the agreed
                    upon services.
                  </div>
                </div>
                <div class="graph">
                  <div class="row">
                    <div class="col-md-8">
                      <img src="assets/images/resource/graph-5.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection