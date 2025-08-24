@extends('layouts.app')

@section('title', 'Professional Website Development Services - itwebdream')


@section('content')
    <!-- Terms and Conditions Section -->
    <section class="py-3 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="web-banner text-center">
                    <h1 class="display-5 fw-bold text-center mb-5">Professional Website Development Services - itwebdream
                    </h1>
                </div>
                <!-- About Section -->
                <section class="container">
                    <h2 class="mb-4 text-center text-dark">Elevate Your Digital Presence with Custom Website Solutions</h2>
                    <p class="lead text-muted mt-3">
                        In an era dominated by digital interaction, your website serves as the front door to your brand. At
                        itwebdream, we specialize in <strong>professional website design and
                            development</strong> tailored to meet the distinct demands of various industries. From aesthetic
                        front-end interfaces to powerful, scalable backend systems, our team of designers and developers
                        crafts websites that are secure, mobile-optimized, SEO-ready, and strategically aligned with your
                        business goals.<br>
                        Whether you're building an online marketplace, launching a school portal, or managing appointments
                        in a hospital, our holistic web development services ensure that your digital solution not only
                        looks exceptional but performs seamlessly across all devices and platforms.
                    </p>

                    <h2 class="mb-4 text-center">Industries We Serve</h2>
                    <div class="row gy-1">
                        <!-- Healthcare -->
                        <div class="col-md-4 mt-2">
                            <div class="technology-shadow animate-shadow text-center h-100">
                                <img src="{{ asset('asset/main/serviceb/hospital.jpg') }}" alt="hospital Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h4><i class="fas fa-check text-primary me-2"></i> Healthcare Industry (Hospitals & Clinics)
                                </h4>
                                <p>
                                    We create secure, user-friendly websites for <strong>hospitals and healthcare
                                        facilities</strong> featuring doctor profiles, patient login systems, appointment
                                    scheduling, telemedicine integration, and health blogs. All our healthcare sites are
                                    built
                                    with privacy compliance (HIPAA-ready) and a focus on accessibility and patient
                                    experience.
                                </p>
                            </div>
                        </div>

                        <!-- eCommerce -->
                        <div class="col-md-4 mt-2">
                            <div class="technology-shadow animate-shadow text-center h-100">
                                <img src="{{ asset('asset/main/serviceb/ecommerce.jpg') }}" alt="Education Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h4><i class="fas fa-check text-primary me-2"></i> eCommerce Website Development</h4>
                                <p>
                                    Our expert eCommerce development services cater to both startups and enterprise
                                    retailers.
                                    From product catalog design and inventory management to payment gateway integration and
                                    marketing automation, we deliver fully functional <strong>eCommerce websites</strong>
                                    that
                                    boost customer retention and online sales while remaining SEO and mobile optimized.
                                </p>
                            </div>
                        </div>

                        <!-- CRM -->
                        <div class="col-md-4 mt-2">
                            <div class="technology-shadow animate-shadow text-center h-100">
                                <img src="{{ asset('asset/main/serviceb/crm.jpg') }}" alt="Education Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h4><i class="fas fa-check text-primary me-2"></i> Customer Relationship Management (CRM)
                                </h4>
                                <p>
                                    We develop CRM-powered platforms that streamline customer data, sales workflows, and
                                    support
                                    processes. Our custom-built CRM websites provide dynamic dashboards, real-time
                                    analytics,
                                    client tracking, and third-party integrations that elevate operational efficiency and
                                    business intelligence.
                                </p>
                            </div>
                        </div>

                        <!-- LMS -->
                        <div class="col-md-4 mt-2">
                            <div class="technology-shadow animate-shadow text-center h-100">
                                <img src="{{ asset('asset/main/serviceb/lms2.jpg') }}" alt="Education Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h4><i class="fas fa-check text-primary me-2"></i> Learning Management Systems (LMS)</h4>
                                <p>
                                    Whether for academic institutions or corporate training, our LMS development includes
                                    course
                                    creation, user registration, multimedia lessons, quizzes, certification systems, and
                                    progress tracking. We ensure SCORM compliance and seamless mobile access for modern
                                    learning
                                    needs.
                                </p>
                            </div>
                        </div>

                        <!-- Real Estate -->
                        <div class="col-md-4 mt-2">
                            <div class="technology-shadow animate-shadow text-center h-100">
                                <img src="{{ asset('asset/main/serviceb/Real-Estate.jpg') }}" alt="Education Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h4><i class="fas fa-check text-primary me-2"></i> Real Estate Solutions</h4>
                                <p>
                                    For realtors and property developers, we build feature-rich <strong>real estate
                                        websites</strong> with advanced property filters, map integrations, virtual tours,
                                    lead
                                    capture forms, and automated listing updates. Our designs emphasize visual appeal,
                                    mobile
                                    compatibility, and lead generation.
                                </p>
                            </div>
                        </div>

                        <!-- Ticket Booking -->
                        <div class="col-md-4 mt-2">
                            <div class="technology-shadow animate-shadow text-center h-100">
                                <img src="{{ asset('asset/main/serviceb/ticket-Booking.jpg') }}" alt="Education Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h4><i class="fas fa-check text-primary me-2"></i> Online Ticket Booking Platforms (Bus,
                                    Events,
                                    Travel)</h4>
                                <p>
                                    We develop high-performance <strong>ticket booking websites</strong> with features such
                                    as
                                    seat reservation, real-time availability, payment integration, route management, and
                                    multi-device compatibility. Ideal for bus operators, travel agencies, and event
                                    organizers
                                    looking to scale online bookings.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-center mt-5 mb-2">Built with SEO and Performance in Mind</h2>
                    <p class="lead text-muted mt-1">
                        Our <strong>website design and development process</strong> integrates the latest SEO practices from
                        the ground up. We focus on:
                    </p>
                    <ul>
                        <li>Keyword-rich content strategy tailored for your industry</li>
                        <li>Mobile-first responsive design</li>
                        <li>Fast load times and optimized images</li>
                        <li>Schema markup and metadata</li>
                        <li>Secure HTTPS protocols and modern codebases</li>
                        <li>Clean URL structure and user-friendly navigation</li>
                    </ul>
                    <p class="lead text-muted mt-1">
                        Our team ensures that every website we deliver is fully optimized for search engines and user
                        experience, helping you gain visibility, attract traffic, and convert leads.
                    </p>

                    <h2 class="text-center mb-4">Why Partner with Us?</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Experienced team of UI/UX designers and full-stack developers</li>
                                <li>Industry-specific solutions tailored to your goals</li>
                                <li>Use of cutting-edge technology frameworks (HTML5, Bootstrap, Laravel, React, etc.)</li>
                                <li>Ongoing support, maintenance, and performance monitoring</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>SEO-optimized and mobile-friendly web architecture</li>
                                <li>Scalable infrastructure ready for future upgrades</li>
                                <li>Conversion-focused layouts to maximize engagement</li>
                                <li>Custom CMS or integration with WordPress, Shopify, or WooCommerce</li>
                            </ul>
                        </div>
                    </div>
                </section>


                <div class="container mt-5" id="technologies">
                    <div class="text-center">
                        <h2 class="display-6 fw-bold">Custom web and mobile app design and development
                        </h2>
                        <p class="lead text-muted">We work with cutting-edge technologies to deliver robust solutions
                        </p>
                    </div>

                    <div class="row g-1 text-center">
                        <!-- Full Stack -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fas fa-layer-group tech-icon"></i>
                                <h5>Full Stack</h5>
                                <p class="text-muted">End-to-end development from frontend to backend and database</p>
                            </div>
                        </div>

                        <!-- MERN Stack -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fab fa-react tech-icon"></i>
                                <h5>MERN Stack</h5>
                                <p class="text-muted">MongoDB, Express.js, React, Node.js for modern web apps</p>
                            </div>
                        </div>

                        <!-- Database -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fas fa-database tech-icon"></i>
                                <h5>Database</h5>
                                <p class="text-muted">SQL & NoSQL solutions: MySQL, PostgreSQL, MongoDB, Firebase</p>
                            </div>
                        </div>

                        <!-- Graphic Design -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fas fa-paint-brush tech-icon"></i>
                                <h5>UI/UX Design</h5>
                                <p class="text-muted">Beautiful, intuitive interfaces with Figma, Adobe XD, and more</p>
                            </div>
                        </div>

                        <!-- SEO -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fas fa-search-dollar tech-icon"></i>
                                <h5>SEO</h5>
                                <p class="text-muted">Search Engine Optimization to boost your online presence</p>
                            </div>
                        </div>

                        <!-- Cloud -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fas fa-cloud tech-icon"></i>
                                <h5>Cloud Services</h5>
                                <p class="text-muted">AWS, Azure, Google Cloud for scalable infrastructure</p>
                            </div>
                        </div>

                        <!-- DevOps -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fas fa-server tech-icon"></i>
                                <h5>DevOps</h5>
                                <p class="text-muted">CI/CD pipelines, Docker, Kubernetes for seamless deployment</p>
                            </div>
                        </div>

                        <!-- AI/ML -->
                        <div class="col-md-3 col-6">
                            <div class="p-4 border rounded-3 h-100 technology-shadow">
                                <i class="fas fa-robot tech-icon"></i>
                                <h5>AI/ML</h5>
                                <p class="text-muted">Artificial Intelligence and Machine Learning solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
