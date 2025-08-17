@extends('layouts.app')
@section('title', 'Web Development Dubai | Laravel Experts & Custom Websites')
@section('meta_keywords',
    'web development Dubai, website design Dubai, Laravel development Dubai, software development
    Dubai')
@section('meta_description',
    'Get expert Laravel web development in Dubai. We design responsive websites, develop custom
    software, and deliver tailored digital solutions for businesses in the UAE.')
@section('content')
    <section class="py-3 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Hero -->
                <section class="hero py-2 py-lg-6">
                    <div class="container py-4">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <h1 class="display-5 fw-bold fs-2">Website Design and Website Development Services by <span
                                        class="text-primary">ITWebDream</span></h1>
                                <p class="lead mt-3">At ITWebDream, we specialize in delivering professional, responsive, and
                                    SEO-friendly website design and website development services tailored for businesses
                                    across Rajasthan. Whether you are a startup in Jaipur, a hospital in Jodhpur, a college
                                    in Udaipur, a real estate business in Kota, or a food delivery service in Bikaner, our
                                    goal is to help you build a strong digital presence that attracts customers and drives
                                    results.<br>
                                    Our team creates websites that not only look beautiful but also perform flawlessly
                                    across all devices. With a focus on user experience, fast loading speed, and optimized
                                    SEO, we ensure your business website becomes a powerful marketing tool.</p>
                                <div class="d-flex gap-2 flex-wrap mt-3 ">
                                    <span class="badge text-light px-2 btn btn-outline-primary btn-sm p-1">website design
                                        and
                                        website
                                        development</span>
                                    <span class="badge text-light px-2 btn btn-outline-primary btn-sm p-1">ITWebDream</span>
                                    <span
                                        class="badge text-light px-2 btn btn-outline-primary btn-sm p-1">SEO-friendly</span>
                                    <span class="badge text-light px-2 btn btn-outline-primary btn-sm p-1">Responsive</span>
                                </div>
                                <a href="#industries" class="btn btn-outline-primary btn-lg mt-2">See Industries</a>
                            </div>
                            <div class="col-lg-5">
                                <div class="p-4 bg-white rounded-4 shadow-soft">
                                    <h5 class="mb-3 fw-bold">Get a Free Consultation</h5>
                                    <form method="post" action="{{ route('submit_rajasthan') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-6"><input class="form-control" name="name"
                                                    placeholder="Your Name" required></div>
                                            <div class="col-md-6"><input class="form-control" name="email" type="email"
                                                    placeholder="Email" required></div>
                                            <div class="col-md-6"><input class="form-control" name="mobile_number"
                                                    placeholder="Mobile Number" minlength="10" maxlength="10" required>
                                            </div>
                                            <div class="col-md-6"><input class="form-control" name="company_name"
                                                    placeholder="Company / Brand">
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" name="project_type" required>
                                                    <option value="" selected disabled>Project Type</option>
                                                    <option>Website Design and Website Development</option>
                                                    <option>eCommerce Website</option>
                                                    <option>Medical / Hospital Website</option>
                                                    <option>University / College Website</option>
                                                    <option>Real Estate Website</option>
                                                    <option>Gym / Fitness Website</option>
                                                    <option>Service Provider Website</option>
                                                    <option>Bus Booking Website</option>
                                                    <option>Food Booking Website</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control" rows="3" name="project_details" placeholder="Project Goals & Timeline"></textarea>
                                            </div>
                                            <div class="col-12"><button class="btn btn-primary w-100" type="submit">Request
                                                    Proposal</button></div>
                                        </div>
                                    </form>

                                    {{-- Success Message --}}
                                    @if (session('success'))
                                        <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    {{-- Error Message --}}
                                    @if (session('error'))
                                        <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    {{-- Validation Errors --}}
                                    @if ($errors->any())
                                        <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services Intro -->
                <section id="services" class="py-2">
                    <div class="container">
                        <h2 class="section-title fs-2 h1 text-center">Why Choose ITWebDream for Website Design and
                            Website
                            Development?
                        </h2>
                        <p class="lead text-muted mt-3">At <strong>ITWebDream</strong>, <em>website design and website
                                development</em> go
                            beyond pixels and code. We craft digital experiences aligned to your brand, optimized for SEO,
                            and engineered for conversions. From custom UI/UX and responsive layouts to scalable
                            architecture and analytics, our team delivers enterprise-grade quality on time, every time.</p>
                        <div class="row g-4 mt-1">
                            <div class="col-md-6 col-lg-3">
                                <div class="rounded-4 shadow-soft technology-shadow h-100">
                                    <div class="feature-icon bg-light mb-3"><i class="bi bi-brush"></i></div>
                                    <h6 class="lead text-muted fw-bold">Custom Design</h6>
                                    <p class="lead text-muted">Tailor-made interfaces that mirror your brand and boost
                                        engagement
                                        across all devices.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="rounded-4 shadow-soft technology-shadow h-100">
                                    <div class="feature-icon bg-light mb-3"><i class="bi bi-phone"></i></div>
                                    <h6 class="lead text-muted fw-bold">Responsive & Fast</h6>
                                    <p class="lead text-muted">Mobile-first builds with optimized assets and Core Web Vitals
                                        in mind.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="rounded-4 shadow-soft technology-shadow h-100">
                                    <div class="feature-icon bg-light mb-3"><i class="bi bi-graph-up"></i></div>
                                    <h6 class="lead text-muted fw-bold">SEO-Ready</h6>
                                    <p class="lead text-muted">Semantic HTML, schema, clean URLs, and on-page best practices
                                        from day
                                        one.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="rounded-4 shadow-soft technology-shadow h-100">
                                    <div class="feature-icon bg-light mb-3"><i class="bi bi-shield-check"></i></div>
                                    <h6 class="lead text-muted fw-bold">Scalable & Secure</h6>
                                    <p class="lead text-muted">Modern stacks, hardened deployments, and future-ready
                                        architectures.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Industries -->
                <section id="industries" class="py-4">
                    <div class="container">
                        <h2 class="section-title fs-2 h1 text-center">Industry-Focused Website Design and Website
                            Development in
                            Rajasthan
                        </h2>
                        <p class="lead text-muted text-center mt-3">We bring domain-specific features to each build so your
                            business can
                            launch
                            quickly and scale confidently.</p>

                        <div class="row g-4 mt-1">
                            <!-- eCommerce -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">eCommerce Websites</h5>
                                        <p class="lead text-muted">High-performing online stores with product
                                            management, secure
                                            payment gateways, fast checkout, and SEO-friendly product pages. Our website
                                            design and website development approach maximizes sales and user experience.</p>
                                        <ul class="lead text-muted">
                                            <li>Product catalogs & variants</li>
                                            <li>Cart, coupons, and checkout</li>
                                            <li>Order tracking & analytics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Medical / Hospital -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">Medical & Hospital</h5>
                                        <p class="lead text-muted">Trust-centric hospital and clinic portals with
                                            appointment
                                            booking, doctor profiles, online consultations, and patient-friendly navigation.
                                            Healthcare-focused website design and website development to elevate care.</p>
                                        <ul class="lead text-muted">
                                            <li>Doctor schedules & departments</li>
                                            <li>HIPAA-friendly forms (where applicable)</li>
                                            <li>Insurance & patient education</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- University / College -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">University & College</h5>
                                        <p class="lead text-muted">Interactive education portals with course catalogs,
                                            admission
                                            workflows, student dashboards, and e-learning modules. Built with accessible
                                            design and robust information architecture.</p>
                                        <ul class="lead text-muted">
                                            <li>Admissions & fee payments</li>
                                            <li>LMS integrations</li>
                                            <li>Events & notices</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Real Estate -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">Real Estate</h5>
                                        <p class="lead text-muted">Property-first experiences with map search, rich media
                                            galleries, virtual tours, and lead capture. Our website design and website
                                            development accelerates discovery and inquiry.</p>
                                        <ul class="lead text-muted">
                                            <li>Advanced filters & saved searches</li>
                                            <li>Agent rosters & CRM hooks</li>
                                            <li>Inquiry & appointment forms</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Gym / Fitness -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">Gym & Fitness</h5>
                                        <p class="lead text-muted">Fitness hubs with class schedules, trainer profiles,
                                            membership plans, and online bookings. Website design and website development
                                            that grows your community.</p>
                                        <ul class="lead text-muted">
                                            <li>Timetables & booking</li>
                                            <li>Membership checkout</li>
                                            <li>Transformations & testimonials</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Providers -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">Service Providers (AC Repair, Cooler, etc.)
                                        </h5>
                                        <p class="lead text-muted">Simple, high-converting sites for local services.
                                            Highlight
                                            offerings, service areas, pricing, and reviews to win more calls and bookings.
                                        </p>
                                        <ul class="lead text-muted">
                                            <li>Service pages & FAQs</li>
                                            <li>Click-to-call & WhatsApp</li>
                                            <li>Maps & review widgets</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Bus Booking -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">Bus Booking</h5>
                                        <p class="lead text-muted">Real-time seat selection, routes, schedules, and secure
                                            payments—engineered for speed and reliability.</p>
                                        <ul class="lead text-muted">
                                            <li>Seat maps & PNR search</li>
                                            <li>Ticketing & refunds</li>
                                            <li>SMS/Email notifications</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Food Booking -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-soft technology-shadow p-0">
                                    <div class="card-body">
                                        <h5 class="lead text-muted fw-bold">Food Booking</h5>
                                        <p class="lead text-muted">Ordering platforms for restaurants and cloud kitchens
                                            with
                                            menus, cart, checkout, and delivery tracking.</p>
                                        <ul class="lead text-muted">
                                            <li>Menu & modifiers</li>
                                            <li>Table reservations</li>
                                            <li>Order status & loyalty</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Why Us / Content Section -->
                <section id="why" class="py-5">
                    <div class="container">
                        <div class="row g-4 align-items-start">
                            {{-- <div class="col-lg-6"> --}}
                            <h2 class="section-title h1">End-to-End Website Design and Website Development</h2>
                            <p class="lead text-muted">Our mission is to build user-friendly, conversion-focused platforms
                                that perform. With
                                <strong>ITWebDream</strong>, you get strategy, design, development, QA, deployment, and
                                ongoing growth support—under one roof.
                            </p>
                            <div class="row g-3 mt-1">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6 mt-1">
                                            <div class="bg-white rounded-4 shadow-soft h-100 technology-shadow">
                                                <h6 class="fw-bold lead text-muted">Discovery & Strategy</h6>
                                                <p class="mb-0 lead text-muted">Market and user research to align features
                                                    with
                                                    business
                                                    outcomes.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-1">
                                            <div class="bg-white rounded-4 shadow-soft h-100 technology-shadow">
                                                <h6 class="fw-bold lead text-muted">Design Systems</h6>
                                                <p class="mb-0 lead text-muted">Accessible UI kits, component libraries,
                                                    and
                                                    consistent
                                                    brand visuals.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-1">
                                            <div class="bg-white rounded-4 shadow-soft h-100 technology-shadow">
                                                <h6 class="fw-bold lead text-muted">Modern Stacks</h6>
                                                <p class="mb-0 lead text-muted">From PHP/Laravel and Node.js to headless
                                                    CMS—built
                                                    for
                                                    scale.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-1">
                                            <div class="bg-white rounded-4 shadow-soft h-100 technology-shadow">
                                                <h6 class="fw-bold lead text-muted">SEO & Analytics</h6>
                                                <p class="mb-0 lead text-muted">On-page foundations, schema, and
                                                    measurement for
                                                    continuous growth.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="p-4 bg-white rounded-4 mt-1 h-100 shadow-soft technology-shadow">
                                        <h5 class="fw-bold lead text-muted">What You’ll Get</h5>
                                        <ul class="mb-0 lead text-muted">
                                            <li>Responsive website design and website development</li>
                                            <li>CMS or custom admin as needed</li>
                                            <li>Speed & security best practices</li>
                                            <li>Content migration and launch support</li>
                                            <li>Training, maintenance, and SLA options</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <!-- FAQ -->
                <section id="faq" class="py-2">
                    <div class="container lead text-muted">
                        <h2 class="section-title h1">FAQ: Website Design and Website Development</h2>
                        <div class="accordion mt-3" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="q1">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#a1">How long does a typical project
                                        take?</button>
                                </h2>
                                <div id="a1" class="accordion-collapse fw-bold collapse show"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lead text-muted">Timelines vary by scope. A standard
                                        corporate site may take
                                        3–6 weeks; larger builds like eCommerce or university portals can take 6–12+ weeks,
                                        including discovery, design, development, QA, and deployment.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="q2">
                                    <button class="accordion-button fw-bold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#a2">Will my site be
                                        SEO-friendly?</button>
                                </h2>
                                <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Yes. We use semantic markup, structured data, optimized
                                        media, and best practices to ensure your website design and website development
                                        meets modern SEO standards.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="q3">
                                    <button class="accordion-button fw-bold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#a3">Do you provide
                                        maintenance?</button>
                                </h2>
                                <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Absolutely. We offer flexible maintenance and growth plans
                                        covering updates, backups, monitoring, and ongoing enhancements.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
