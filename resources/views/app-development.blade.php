@extends('layouts.app')

@section('title', 'Mobile App Development – Android & iOS Solutions')


@section('content')
    <!-- Terms and Conditions Section -->
    <section class="py-3 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="web-banner text-center">
                    <h1 class="display-5 fw-bold text-center mb-5">Build Modern Mobile Experiences - itwebdream</h1>
                </div>
                <!-- Intro Section -->
                <section class="container">
                    <p class="lead text-muted mt-3">
                        In today’s mobile-first landscape, having a robust mobile app is vital for businesses. At
                        itwebdream, we develop high-performance, secure, and user-friendly apps for
                        both <strong>Android</strong> and <strong>iOS platforms</strong>, tailored to your unique
                        requirements.<br>
                        From startups to enterprises, our mobile app development services help businesses innovate, engage,
                        and scale across devices and platforms.
                    </p>

                    <h2 class="fw-bold text-center py-3">Our Mobile App Development Services</h2>
                    <div class="row g-1">
                        <div class="col-md-6">
                            <div class="technology-shadow animate-shadow">
                                <h4><i class="fas fa-check-circle text-primary me-2"></i> Android App Development</h4>
                                <p class="lead text-muted mt-3">We build native Android applications using Kotlin and Java.
                                    Our apps are compatible with
                                    all
                                    devices and optimized for performance and security.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="technology-shadow animate-shadow">
                                <h4><i class="fas fa-check-circle text-primary me-2"></i> iOS App Development</h4>
                                <p class="lead text-muted mt-3">Our iOS developers use Swift and Objective-C to create sleek
                                    and powerful apps that align
                                    with Apple’s UI/UX standards and App Store guidelines.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="technology-shadow animate-shadow">
                                <h4><i class="fas fa-check-circle text-primary me-2"></i> Cross-Platform Apps</h4>
                                <p class="lead text-muted mt-3">We develop apps using Flutter and React Native to reduce
                                    time and cost while delivering a
                                    seamless experience across both Android and iOS.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="technology-shadow animate-shadow">
                                <h4><i class="fas fa-check-circle text-primary me-2"></i> Enterprise Mobile Solutions</h4>
                                <p class="lead text-muted mt-3">We create secure, scalable apps for business operations,
                                    CRM, inventory, and analytics to
                                    empower your workforce and automate workflows.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Industries -->
                <section class="container py-5">
                    <h2 class="text-center mb-4">Industries We Serve</h2>
                    <div class="row g-1">
                        <div class="col-md-4">
                            <div class="technology-shadow animate-shadow">
                                <img src="{{ asset('asset/main/serviceb/helthcare_app.jpg') }}" alt="hospital Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Healthcare</h5>
                                <p class="lead text-muted mt-3">Telemedicine, patient portals, remote monitoring, and
                                    fitness apps.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="technology-shadow animate-shadow">
                                <img src="{{ asset('asset/main/serviceb/lms2.jpg') }}" alt="learning management system"
                                    class="img-fluid rounded mb-3 h-50">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Education & eLearning</h5>
                                <p class="lead text-muted mt-3">eLearning platforms, mobile LMS, live classes, and skill
                                    development apps.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="technology-shadow animate-shadow">
                                <img src="{{ asset('asset/main/serviceb/ecommere_app.jpg') }}" alt="ecommerce"
                                    class="img-fluid rounded mb-3 h-50">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> eCommerce</h5>
                                <p class="lead text-muted mt-3">Shopping apps, customer loyalty apps, order tracking, and
                                    mobile payments.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="technology-shadow animate-shadow">
                                <img src="{{ asset('asset/main/serviceb/realestate_app.jpg') }}" alt="hospital Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Real Estate</h5>
                                <p class="lead text-muted mt-3">Property listing apps with maps, agent chat, and lead
                                    management.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="technology-shadow animate-shadow">
                                <img src="{{ asset('asset/main/serviceb/booking_app.jpg') }}" alt="hospital Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Travel & Booking</h5>
                                <p class="lead text-muted mt-3">Bus, hotel, or flight ticket booking apps with real-time
                                    availability.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="technology-shadow animate-shadow">
                                <img src="{{ asset('asset/main/serviceb/Logistics_app.jpg') }}" alt="hospital Sector"
                                    class="img-fluid rounded mb-3 h-50">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Logistics</h5>
                                <p class="lead text-muted mt-3">Fleet tracking, delivery scheduling, and route optimization
                                    apps.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Benefits -->
                <section class="py-2">
                    <div class="container">
                        <h2 class="text-center mb-4">Why Invest in a Mobile App?</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item lead text-muted"><i
                                    class="fas fa-check-circle text-primary me-2"></i> Increased
                                engagement through push notifications</li>
                            <li class="list-group-item lead text-muted"><i
                                    class="fas fa-check-circle text-primary me-2"></i> Streamlined
                                user experience with mobile-specific features</li>
                            <li class="list-group-item lead text-muted"><i
                                    class="fas fa-check-circle text-primary me-2"></i> Boosted brand
                                presence with an app icon on every screen</li>
                            <li class="list-group-item lead text-muted"><i
                                    class="fas fa-check-circle text-primary me-2"></i> Higher
                                conversion and retention rates compared to mobile websites
                            </li>
                            <li class="list-group-item lead text-muted"><i
                                    class="fas fa-check-circle text-primary me-2"></i> Offline
                                functionality and native device integration</li>
                        </ul>
                    </div>
                </section>

                <!-- Technologies -->
                <section class="container py-2">
                    <h2 class="text-center text-dark mb-5">Technologies We Use</h2>
                    <div class="row">
                        <div class="col-md-6 mt-1">
                            <div class="technology-shadow animate-shadow">
                                <h6><i class="fas fa-check-circle text-primary me-2"></i> Frontend & Native SDKs</h6>
                                <p class="lead text-muted">Android (Java, Kotlin), iOS (Swift, Objective-C), Flutter, React
                                    Native</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-1">
                            <div class="technology-shadow animate-shadow">
                                <h6><i class="fas fa-check-circle text-primary me-2"></i> Backend & APIs</h6>
                                <p class="lead text-muted">Node.js, Laravel, Django, Firebase, GraphQL, REST APIs</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-1">
                            <div class="technology-shadow animate-shadow">
                                <h6><i class="fas fa-check-circle text-primary me-2"></i> Database</h6>
                                <p class="lead text-muted">MySQL, PostgreSQL, MongoDB, SQLite, Realm</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-1">
                            <div class="technology-shadow animate-shadow">
                                <h6><i class="fas fa-check-circle text-primary me-2"></i> Cloud & Hosting</h6>
                                <p class="lead text-muted">AWS, Google Cloud, Azure, DigitalOcean</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Why Choose Us -->
                <section class="py-5">
                    <div class="container">
                        <h2 class="text-center mb-4">Why Choose Us?</h2>
                        <ul class="lead text-muted">
                            <li>Proven experience in Android & iOS app development</li>
                            <li>Agile development process for faster time-to-market</li>
                            <li>UI/UX-first approach to design and usability</li>
                            <li>Transparent communication & project tracking</li>
                            <li>Post-launch support and updates included</li>
                        </ul>
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
