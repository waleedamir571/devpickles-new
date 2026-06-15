<?php include('partials/header.php'); ?>


<section class="s-mobile1" id="work">
    <!-- Our Published applications pill — absolute within section, Figma: x=43.6% y=76% -->
    <!-- <div class="s2-pub-pill"><img src="assets/images/btnbg.png" alt=""></div> -->
    <div class="container-fluid">
        <div class="row align-items-center g-0 g-lg-5">

            <!-- LEFT: text content -->
            <div class="col-lg-4 offset-lg-2 ">
                <h2 class="s2-heading">High Impact Websites</h2>
                <p class="s2-body mt-4">We build high-performance digital engines engineered for
                    growth. From headless commerce to bespoke enterprise
                    platforms.</p>
                <div class="nav-actions pb-20" id="navActions">
                    <a href="tel:+9493233170" class="btn-nav-call1"> Call Us</a>
                    <a href="#contact" class="btn-nav-inquire1">Inquire Now</a>
                </div>

                <div class="nav-actions " id="navActions">
                    <img src="assets/images/clients.svg" alt="Phone Icon" class="">
                    <p class="clients">150+ Satisfied Clients</p>
                </div>

                <!-- Actual Figma badge images -->


            </div>

            <!-- RIGHT: two phones + shield logo -->
            <div class="col-lg-6 ">
                <div class="sap-media-row">
                    <div class="sap-dev-left ">
                        <img src="assets/images/s1.svg" alt="Left device" class="sap-dev-img">
                    </div>
                    <div class="sap-laptop-col rv-up" data-delay="100">
                        <div class="sap-laptop-frame">
                            <img src="assets/images/computer.png" alt="SAPFORCE laptop" class="sap-laptop-img">
                            <div class="sap-laptop-screen">
                                <video src="assets/images/sapforce.mp4" class="sap-screen-vid" autoplay loop muted
                                    playsinline></video>
                            </div>
                        </div>
                    </div>
                    <div class="sap-dev-right ">
                        <img src="assets/images/s2.svg" alt="Right device" class="sap-dev-img">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Mascot — absolute bottom-left of section -->
    <div class="s2-review-row">
        <img src="assets/images/mascot.png" alt="mascot" class="s2-mascot">
        <span class="s2-review-text">Check-out our reviews! 👇</span>
    </div>
</section>

<section class="s-sapforce" id="about">

    <!-- Fan: left-extended bg (Figma: fan at x=491, laptop at x=603 → fan pokes 112px to the left of laptop) -->
    <div class="sap-fan-bg" aria-hidden="true">
        <div class="sap-fan-spin">
            <img src="assets/images/fan.png" alt="" class="sap-fan-img">
        </div>
    </div>

    <div class="container sap-content">
        <div class="partner-logos-row rv-up mb-5">
            <div class="partner-logo">
                <img src="assets/images/google.svg" alt="Google" class="logo-img">
            </div>
            <div class="partner-logo">
                <img src="assets/images/pilot.svg" alt="Trustpilot" class="logo-img">
            </div>
            <div class="partner-logo">
                <img src="assets/images/bbb.svg" alt="Accredited Business" class="logo-img">
            </div>
            <div class="partner-logo">
                <img src="assets/images/clutch.svg" alt="Clutch" class="logo-img">
            </div>
        </div>
        <!-- Heading (centered, above media) -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center rv-up">
                <h2 class="sap-heading">Our Blueprint</h2>
                <h3 class="sap-sub">for Success.</h3>
                <p class="sap-desc mt-3">From the first sketch to the final deployment, our structured approach ensures
                    precision and performance at every stage.</p>
            </div>
        </div>

        <!-- 4-step process cards -->
        <div class="">
            <Div class="row">
                <Div class="col-md-8">
                    <div class="advantage-card " data-delay="0">
                        <div class="advantage-icon">
                            <img src="assets/images/n1.svg" alt="">
                        </div>
                        <h3 class="advantage-title">Native Performance</h3>
                        <p class="advantage-desc">Optimized for high-speed interactions and fluid animations, ensuring
                            your users never experience a laggy interface.</p>
                    </div>
                    <!-- <div class="sap-fan-bg1" aria-hidden="true">
                        <div class="sap-fan-spin1">
                            <img src="assets/images/fan.png" alt="" class="sap-fan-img">
                        </div>
                    </div> -->
                </Div>
                <Div class="col-md-4">
                    <div class="advantage-card " data-delay="100">
                        <div class="advantage-icon">
                            <img src="assets/images/n2.svg" alt="">
                        </div>
                        <h3 class="advantage-title">Intuitive UI</h3>
                        <p class="advantage-desc">Design that feels natural. We focus on <br> ergonomic touch points and
                            logical user <br>
                            flows.</p>
                    </div>
                </Div>
            </Div>

            <br>
            <Div class="row">
                <Div class="col-md-5">
                    <div class="advantage-card " data-delay="200">
                        <div class="advantage-icon">
                            <img src="assets/images/n3.svg" alt="">
                        </div>
                        <h3 class="advantage-title">Seamless API</h3>
                        <p class="advantage-desc">Deep integration with your existing CRM, ERP, and marketing tools for
                            a
                            unified ecosystem.</p>
                    </div>
                </Div>
                <Div class="col-md-7">
                    <div class="advantage-card " data-delay="300">
                        <div class="advantage-icon">
                            <img src="assets/images/n4.svg" alt="">
                        </div>
                        <h3 class="advantage-title">Enterprise Scalability</h3>
                        <p class="advantage-desc">Built for thousands of concurrent users without breaking a sweat. Our
                            infrastructure grows with you seamlessly.</p>
                    </div>
                </Div>
            </Div>
        </div>
    </div>

    <!-- Tech bar: full-width dark strip -->
    <div class="tech-bar-full rv-up" data-delay="200">
        <div class="container tech-bar-inner">
            <span class="tech-label-txt">Technology <span class="fw-normal">Stack</span></span>
            <div class="tech-bar-sep"></div>
            <div class="tech-logos-row">
                <img src="assets/images/php.svg" alt="Tech Logo" class="tl">
                <img src="assets/images/react.svg" alt="Tech Logo" class="tl">
                <img src="assets/images/laravel.svg" alt="Tech Logo" class="tl">
                <img src="assets/images/nest.svg" alt="Tech Logo" class="tl">
                <img src="assets/images/next.svg" alt="Tech Logo" class="tl">
                <!-- <img src="assets/images/tech-logo5.png" alt="Tech Logo" class="tl">
          <img src="assets/images/tech-logo6.png" alt="Tech Logo" class="tl"> -->
            </div>
        </div>
    </div>
</section>

<!-- Our Advantages Section -->
<section class="s-team" id="team">
    <div class="container team-wrap">
        <div class="row g-0 align-items-center">

            <!-- LEFT: WHY US? + heading + body + button + partner logos -->
            <div class="col-xl-7 col-lg-6 team-col-l rv-left">
                <p class="team-tag">OUR PHILOSOPHY</p>
                <h2 class="team-heading rv-up">Conversion-Driven
                    Design. Sites That Sell.</h2>

                <div class="team-features">

                    <div class="tf-item rv-up" data-delay="100">
                        <div class="tf-icon">
                            <img src="assets/images/uxflow.svg" alt="">
                        </div>
                        <div class="tf-text">
                            <p class="tf-title">Strategic UX Flow</p>
                            <p class="tf-desc">We map the user journey from landing to checkout, removing friction at every single touchpoint.</p>
                        </div>
                    </div>

                    <div class="tf-item rv-up" data-delay="150">
                        <div class="tf-icon">
                           <img src="assets/images/anchoring.svg" alt="">
                        </div>
                        <div class="tf-text">
                            <p class="tf-title">Psychological Anchoring</p>
                            <p class="tf-desc">Leveraging visual hierarchy and trust signals to guide visitor behavior naturally.</p>
                        </div>
                    </div>

                    <div class="tf-item rv-up" data-delay="200">
                        <div class="tf-icon">
                           <img src="assets/images/Design3.svg" alt="">
                        </div>
                        <div class="tf-text">
                            <p class="tf-title">Data-Backed Design</p>
                            <p class="tf-desc">Every design choice is validated by behavioral data and industry-standard best practices.</p>
                        </div>
                    </div>

                </div>
                <!-- <a href="#contact" class="team-cta rv-up" data-delay="200">Learn More</a> -->
                <!-- <div class="team-logos rv-up" data-delay="250">
                    <img src="assets/images/ibm.png" alt="IBM" class="t-logo">
                    <img src="assets/images/claude.png" alt="Claude" class="t-logo">
                    <img src="assets/images/google.png" alt="Google" class="t-logo">
                    <img src="assets/images/notion.png" alt="Notion" class="t-logo">
                    <img src="assets/images/adobe.png" alt="Adobe" class="t-logo">
                </div> -->
            </div>

            <!-- RIGHT: conference room photo -->
            <div class="col-xl-5 col-lg-6 team-col-r rv-right">
                <div class="team-photo-wrap">
                    <img src="assets/images/team.png" alt="Team at DevPickles" class="team-photo">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="s-grow" id="grow">

    <!-- Full-section green gradient background -->
    <div class="grow-bg" style="background-image:url('assets/images/greenbgg.svg')"></div>

    <!-- LEFT side: team photo (top) + decorative green hollow frame (behind, extends below) -->
    <div class="grow-side-photo grow-photo-l">
        <div class="grow-l-wrap">
            <!-- Green hollow frame — same 400×494 area, behind the photo -->
            <svg xmlns="http://www.w3.org/2000/svg" width="401" height="495" viewBox="0 0 401 495" fill="none">
                <path
                    d="M400.051 325.771V153.923C400.052 143.204 396.101 132.861 388.955 124.872L286.588 10.4411C280.645 3.79735 272.153 -2.37189e-05 263.239 1.11114e-10H31.3286C14.0263 1.11114e-10 1.1845e-09 14.0263 1.1845e-09 31.3286V137.278V338.19C-8.42005e-05 350.369 4.48903 362.12 12.6089 371.197L113.462 483.936C119.406 490.58 127.898 494.377 136.812 494.377H258.755C267.063 494.377 275.032 491.077 280.907 485.202C286.783 479.326 290.083 471.358 290.083 463.049V388.429C290.083 371.126 304.11 357.1 321.412 357.1H368.722C377.031 357.1 384.999 353.799 390.875 347.924C396.75 342.049 400.051 334.08 400.051 325.771Z"
                    stroke="url(#paint0_linear_156_14)" stroke-width="13.9136" />
                <defs>
                    <linearGradient id="paint0_linear_156_14" x1="-23.5801" y1="23.5801" x2="423.631" y2="470.795"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#A2D6C7" stop-opacity="0.965" />
                        <stop offset="1" stop-color="#9A9B9B" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
            <!-- Team meeting photo — 287×287, top-center of the frame area -->
            <img src="assets/images/mask1.png" alt="" class="grow-l-photo">
        </div>
    </div>

    <!-- RIGHT side: decorative green frame (top) + product photo (below, overlapping) -->
    <div class="grow-side-photo grow-photo-r">
        <div class="grow-r-wrap">
            <!-- Green hollow frame — top element, 384×214 -->
            <svg xmlns="http://www.w3.org/2000/svg" width="384" height="215" viewBox="0 0 384 215" fill="none">
                <path
                    d="M252.823 54.5869V24.3636C252.823 17.902 250.256 11.705 245.687 7.13593C241.118 2.56687 234.921 0 228.459 0H24.3636C10.908 0.000160691 0.000160691 10.908 0 24.3636V95.3469C0.000160691 108.803 10.908 119.71 24.3636 119.711H86.2779C92.7395 119.711 98.9365 122.277 103.506 126.846C108.075 131.416 110.641 137.613 110.641 144.074V189.664C110.642 203.12 121.549 214.028 135.005 214.028H359.446C365.908 214.028 372.105 211.461 376.674 206.892C381.243 202.323 383.81 196.126 383.81 189.664V103.314C383.81 96.8525 381.243 90.6555 376.674 86.0865C372.105 81.5174 365.908 78.9505 359.446 78.9505H277.186C263.731 78.9505 252.823 68.0426 252.823 54.5869Z"
                    stroke="url(#paint0_linear_156_26)" stroke-width="11.6386" />
                <defs>
                    <linearGradient id="paint0_linear_156_26" x1="42.4458" y1="-42.4458" x2="341.365" y2="256.473"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#A2D6C7" stop-opacity="0.965" />
                        <stop offset="1" stop-color="#9A9B9B" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
            <!-- Product photo — 256×256, starts ~39% down, overlapping frame -->
            <img src="assets/images/mask2.png" alt="" class="grow-r-photo">
        </div>
    </div>

    <div class="container grow-inner">

        <!-- Heading + description: Figma y=146, centered -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 text-center rv-up">
                <h2 class="grow-heading">How We Grow<br>Businesses.</h2>
                <p class="grow-desc mt-3">We believe that holding our work to the highest standard is the only way to
                    keep our
                    clients ahead of the competition. Our advanced digital approach ensures you get a seamless, fast
                    website
                    designed to scale your business effortlessly.</p>
            </div>
        </div>

        <!-- 3 Service cards: Figma y=546, bg=#178d71 @93%, radius=20px -->
        <div class="row g-4 mt-5 justify-content-center">
            <div class="col-lg-4 col-md-6 rv-up" data-delay="0">
                <div class="grow-svc-card">
                    <h4 class="grow-svc-title">Branding Service</h4>
                    <p class="grow-svc-desc">Align your look with your value to command higher prices and dominate your
                        market.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 rv-up" data-delay="150">
                <div class="grow-svc-card">
                    <h4 class="grow-svc-title">SEO Service</h4>
                    <p class="grow-svc-desc">Turn your website into a 24/7 lead machine by dominating search results.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 rv-up" data-delay="300">
                <div class="grow-svc-card">
                    <h4 class="grow-svc-title">Marketing service</h4>
                    <p class="grow-svc-desc">Stop wasting budget on vanity metrics. We launch high-performance marketing
                        campaigns that amplify your brand's unique voice and turn casual clicks into measurable revenue.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
 <section class="s-sapforce" id="about">

    <!-- Fan: left-extended bg (Figma: fan at x=491, laptop at x=603 → fan pokes 112px to the left of laptop) -->
    <div class="sap-fan-bg" aria-hidden="true">
      <div class="sap-fan-spin">
        <img src="assets/images/fan.png" alt="" class="sap-fan-img">
      </div>
    </div>

    <div class="container sap-content">
      <!-- Partner Logos -->
      

      <!-- Heading (centered, above media) -->
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center rv-up">
          <h2 class="sap-heading">Built For Impact<span class="dot-g">.</span></h2>
          <h3 class="sap-sub">Engineered For Growth<span class="dot-g">.</span></h3>
          <p class="sap-desc mt-3">Keep your audience hooked with lightning-fast, high-performance websites designed to
            turn casual clicks into loyal fans and steady conversions.</p>
        </div>
      </div>

      <!-- 3-column media: device | laptop | device -->
      <div class="sap-media-row">
        <div class="sap-dev-left ">
          <img src="assets/images/s1.svg" alt="Left device"
            class="sap-dev-img">
        </div>
        <div class="sap-laptop-col rv-up" data-delay="100">
          <div class="sap-laptop-frame">
            <img src="assets/images/computer.png" alt="SAPFORCE laptop"
              class="sap-laptop-img">
            <div class="sap-laptop-screen">
              <video src="assets/images/sapforce.mp4" class="sap-screen-vid" autoplay loop muted playsinline></video>
            </div>
          </div>
        </div>
        <div class="sap-dev-right rv-right">
          <img src="assets/images/s2.svg" alt="Right device"
            class="sap-dev-img">
        </div>
      </div>
    </div>

    <!-- Tech bar: full-width dark strip -->
   
  </section>



<section class="s-pricing s-pad" id="pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center rv-up">
                <h2 class="price-heading">Better Packages<span class="dot-g">.</span></h2>
                <h3 class="price-sub">Better Prices<span class="dot-g">.</span></h3>
            </div>
        </div>

        <div class="price-toggle rv-up mt-4">
            <div class="toggle-track">
                <button class="toggle-opt active" data-mt="basic">Basic</button>
                <button class="toggle-opt" data-mt="custom">Custom</button>
            </div>
        </div>

        <!-- BASIC -->
        <div class="price-pane active" id="mt-basic">
            <div class="price-subtabs mt-4 rv-up">
                <button class="pst active" data-plan="1">App Development</button>
                <button class="pst" data-plan="2">SEO</button>
                <button class="pst" data-plan="3">Website</button>
                <button class="pst" data-plan="4">Logo design</button>
                <button class="pst" data-plan="5">Marketing Service</button>
            </div>
            <div class="row g-4 justify-content-center mt-4">
                <div class="col-xl-5 col-lg-6 rv-left">
                    <div class="pc-light">
                        <div class="pc-top">
                            <div>
                                <div class="pc-name">Essential Core</div>
                                <p class="pc-desc">For businesses taking their first steps online.</p>
                            </div>
                            <div class="pc-price"><span class="pc-curr">$</span><span class="pc-val"
                                    id="b-v1">100</span></div>
                        </div>
                        <div class="pc-line"></div>
                        <ul class="pc-list">
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Custom 5-page website</li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Mobile responsive design</li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Basic SEO setup</li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Contact form integration</li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> 1-month free support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 rv-right">
                    <div class="pc-dark">
                        <div class="pc-top">
                            <div>
                                <div class="pc-name pc-name-lt">Advance</div>
                                <p class="pc-desc pc-desc-lt">For brands ready to scale with a strong digital presence.
                                </p>
                            </div>
                            <div class="pc-price pc-price-lt"><span class="pc-curr">$</span><span class="pc-val"
                                    id="b-v2">200</span></div>
                        </div>
                        <div class="pc-line pc-line-lt"></div>
                        <ul class="pc-list pc-list-lt">
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> Custom 10-page website</li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> Advanced SEO optimization
                            </li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> E-commerce setup</li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> Blog integration</li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> 3-month priority support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- CUSTOM -->
        <div class="price-pane" id="mt-custom">
            <div class="price-subtabs mt-4">
                <button class="pst active" data-plan="1">App Development</button>
                <button class="pst" data-plan="2">SEO</button>
                <button class="pst" data-plan="3">Website</button>
                <button class="pst" data-plan="4">Logo design</button>
                <button class="pst" data-plan="5">Marketing Service</button>
            </div>
            <div class="row g-4 justify-content-center mt-4">
                <div class="col-xl-5 col-lg-6 rv-left">
                    <div class="pc-light">
                        <div class="pc-top">
                            <div>
                                <div class="pc-name">Custom Core</div>
                                <p class="pc-desc">Tailored solution built around your unique goals.</p>
                            </div>
                            <div class="pc-price"><span class="pc-curr">$</span><span class="pc-val"
                                    id="c-v1">100</span></div>
                        </div>
                        <div class="pc-line"></div>
                        <ul class="pc-list">
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Full brand identity system
                            </li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Custom app development</li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Dedicated account manager
                            </li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> Enterprise SEO strategy</li>
                            <li><img src="assets/images/tick1.svg" class="pc-chk" alt="✓"> 24/7 priority support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 rv-right">
                    <div class="pc-dark">
                        <div class="pc-top">
                            <div>
                                <div class="pc-name pc-name-lt">Enterprise</div>
                                <p class="pc-desc pc-desc-lt">Complete digital transformation for large scale
                                    enterprises.</p>
                            </div>
                            <div class="pc-price pc-price-lt"><span class="pc-curr">$</span><span class="pc-val"
                                    id="c-v2">200</span></div>
                        </div>
                        <div class="pc-line pc-line-lt"></div>
                        <ul class="pc-list pc-list-lt">
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> Multi-platform applications
                            </li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> AI-powered integration</li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> Custom analytics dashboard
                            </li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> Dedicated support team</li>
                            <li><img src="assets/images/tick2.svg" class="pc-chk" alt="✓"> 6-month priority support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     S7 — FEATURES / WHY US  (bg:#166855, 4 columns)
======================================================== -->
<section class="s-features">
    <div class="container">
        <div class="row g-0 features-row">
            <div class="col-lg-3 col-md-6 rv-up" data-delay="0">
                <div class="feat-col">
                    <div class="feat-icon-wrap">
                        <img src="assets/images/1f.svg" alt="Unique Designs" class="feat-icon">
                    </div>
                    <h4 class="feat-title">Unique Designs</h4>
                    <p class="feat-desc">Professional design companies handle custom designs best. How about a free
                        trial to get
                        things started?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 rv-up" data-delay="100">
                <div class="feat-col">
                    <div class="feat-icon-wrap">
                        <img src="assets/images/2f.svg" alt="Money Back Guarantee" class="feat-icon">
                    </div>
                    <h4 class="feat-title">Money Back Guarantee</h4>
                    <p class="feat-desc">If you're unhappy with what you've received or we've failed to meet your
                        deadline, you
                        can request a refund.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 rv-up" data-delay="200">
                <div class="feat-col">
                    <div class="feat-icon-wrap">
                        <img src="assets/images/3f.svg" alt="Customer Satisfaction" class="feat-icon">
                    </div>
                    <h4 class="feat-title">Customer Satisfaction</h4>
                    <p class="feat-desc">A business's success depends upon the happiness levels its customers share.
                        Allow us to
                        meet your expectations.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 rv-up" data-delay="300">
                <div class="feat-col feat-col-last">
                    <div class="feat-icon-wrap">
                        <img src="assets/images/4f.svg" alt="24/7 Support" class="feat-icon">
                    </div>
                    <h4 class="feat-title">24/7 Support</h4>
                    <p class="feat-desc">Whether it's a new project or edits on your previous project, we cater to your
                        needs in
                        real-time.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ========================================================
     S8 — TEAM AT DEVPICKLES
     Figma: 1920×726px, bg=#fcfaff, left text + right photo
======================================================== -->
<section class="s-team" id="team">
    <div class="container team-wrap">
        <div class="row g-0 align-items-center">

            <!-- LEFT: WHY US? + heading + body + button + partner logos -->
            <div class="col-xl-7 col-lg-6 team-col-l rv-left">
                <p class="team-tag">WHY US?</p>
                <h2 class="team-heading rv-up">Team At Devpickles</h2>
                <p class="team-body rv-up" data-delay="100">We're trusted by the world's leading startups and
                    enterprises
                    featured in the Fortune 500 for building stronger relationships, optimizing their branding strategy,
                    and
                    changing how they do business. From custom website builders and user-friendly mobile app solutions
                    to
                    innovative logo designs, we offer everything you need to thrive in today's competitive landscape.
                </p>
                <p class="team-body rv-up" data-delay="150">We're trusted by the world's leading startups and
                    enterprises
                    featured in the Fortune 500 for building stronger relationships, optimizing their branding strategy,
                    and
                    changing how they do business. From custom website builders and user-friendly mobile app solutions
                    to
                    innovative logo designs, we offer everything you need to thrive in today's competitive landscape.
                </p>
                <a href="#contact" class="team-cta rv-up" data-delay="200">Learn More</a>
                <div class="team-logos rv-up" data-delay="250">
                    <img src="assets/images/ibm.png" alt="IBM" class="t-logo">
                    <img src="assets/images/claude.png" alt="Claude" class="t-logo">
                    <img src="assets/images/google.png" alt="Google" class="t-logo">
                    <img src="assets/images/notion.png" alt="Notion" class="t-logo">
                    <img src="assets/images/adobe.png" alt="Adobe" class="t-logo">
                </div>
            </div>

            <!-- RIGHT: conference room photo -->
            <div class="col-xl-5 col-lg-6 team-col-r rv-right">
                <div class="team-photo-wrap">
                    <img src="assets/images/team.png" alt="Team at DevPickles" class="team-photo">
                </div>
            </div>

        </div>
    </div>
</section>















<?php include('partials/footer.php'); ?>