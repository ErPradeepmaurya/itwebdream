@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
    <!-- Hero Section with Software Development Image -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('asset/main/image/banner-img.jpg') }}');">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">We provide innovative software solutions</h1>
            <p class="lead mb-5">The growth of your business depends on cutting-edge Digital Software experiences</p>
            <a href="#contact" class="btn btn-primary btn-lg px-4 me-2">Get Started</a>
            <a href="#services" class="btn btn-outline-light btn-lg px-4">Our Services</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-1 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="display-5 fw-bold mb-4">About <span class="text-primary">ITWebDream</span></h2>
                    <div class="lead text-muted mb-5">
                        <p>Over the past <strong>5 years</strong>, <strong>ITWebDream</strong> has established itself as a
                            trusted <strong>software development company</strong>, delivering cutting-edge <strong>web
                                applications</strong>, <strong>mobile apps</strong>, and <strong>SEO-optimized</strong>
                            digital solutions.</p>

                        <div class="row g-4 my-4">
                            <div class="col-md-6">
                                <div class="p-4 border rounded bg-white h-100">
                                    <h5 class="text-primary">Our Expertise</h5>
                                    <ul class="text-start">
                                        <li>Full-stack development</li>
                                        <li>MERN stack (MongoDB, Express, React, Node)</li>
                                        <li>Database management</li>
                                        <li>UI/UX design</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 border rounded bg-white h-100">
                                    <h5 class="text-primary">Key Achievements</h5>
                                    <ul class="text-start">
                                        <li>50+ web and mobile apps</li>
                                        <li>SEO optimization</li>
                                        <li>Cloud platforms (AWS, Azure)</li>
                                        <li>AI/ML integration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p>We combine <strong>innovation</strong> with <strong>reliability</strong>, ensuring every project
                            meets the highest standards. Whether it's <strong>e-commerce platforms</strong>,
                            <strong>College/University Software</strong>, <strong>enterprise software</strong>, or
                            <strong>digital marketing</strong>, we turn ideas into reality.
                        </p>
                    </div>
                    <a href="#contact" class="btn btn-primary btn-lg px-1">Partner With Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light-blue">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <p class="lead text-muted">Comprehensive digital solutions tailored to your needs</p>
            </div>

            <div class="row g-4">
                <!-- Web Development Card -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{ asset('asset/main/image/web-development.jpg') }}" class="card-img-top"
                            alt="Web Development">
                        <div class="card-body">
                            <h5 class="card-title">Web Application Development</h5>
                            <p class="card-text">Custom web applications built with modern frameworks to solve your business
                                challenges and streamline operations.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> Responsive Design</li>
                                <li><i class="fas fa-check text-primary me-2"></i> User-Centric Approach</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Scalable Architecture</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- SEO Card -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{ asset('asset/main/image/seoimage.jpg') }}" class="card-img-top" alt="SEO Services">
                        <div class="card-body">
                            <h5 class="card-title">SEO & Digital Marketing</h5>
                            <p class="card-text">Comprehensive SEO strategies to improve your online visibility and drive
                                qualified traffic to your website.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> Keyword Research</li>
                                <li><i class="fas fa-check text-primary me-2"></i> On-Page Optimization</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Performance Analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Mobile App Card -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{ asset('asset/main/image/app-development.jpg') }}" class="card-img-top"
                            alt="Mobile Development">
                        <div class="card-body">
                            <h5 class="card-title">Mobile App Development</h5>
                            <p class="card-text">Native and cross-platform mobile applications that deliver exceptional user
                                experiences on any device.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> iOS & Android</li>
                                <li><i class="fas fa-check text-primary me-2"></i> React Native/Flutter</li>
                                <li><i class="fas fa-check text-primary me-2"></i> App Store Optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="technologies">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Technology Stack</h2>
                <p class="lead text-muted">We work with cutting-edge technologies to deliver robust solutions</p>
            </div>

            <div class="row g-4 text-center">
                <!-- Full Stack -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fas fa-layer-group tech-icon"></i>
                        <h5>Full Stack</h5>
                        <p class="text-muted">End-to-end development from frontend to backend and database</p>
                    </div>
                </div>

                <!-- MERN Stack -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fab fa-react tech-icon"></i>
                        <h5>MERN Stack</h5>
                        <p class="text-muted">MongoDB, Express.js, React, Node.js for modern web apps</p>
                    </div>
                </div>

                <!-- Database -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fas fa-database tech-icon"></i>
                        <h5>Database</h5>
                        <p class="text-muted">SQL & NoSQL solutions: MySQL, PostgreSQL, MongoDB, Firebase</p>
                    </div>
                </div>

                <!-- Graphic Design -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fas fa-paint-brush tech-icon"></i>
                        <h5>UI/UX Design</h5>
                        <p class="text-muted">Beautiful, intuitive interfaces with Figma, Adobe XD, and more</p>
                    </div>
                </div>

                <!-- SEO -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fas fa-search-dollar tech-icon"></i>
                        <h5>SEO</h5>
                        <p class="text-muted">Search Engine Optimization to boost your online presence</p>
                    </div>
                </div>

                <!-- Cloud -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fas fa-cloud tech-icon"></i>
                        <h5>Cloud Services</h5>
                        <p class="text-muted">AWS, Azure, Google Cloud for scalable infrastructure</p>
                    </div>
                </div>

                <!-- DevOps -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fas fa-server tech-icon"></i>
                        <h5>DevOps</h5>
                        <p class="text-muted">CI/CD pipelines, Docker, Kubernetes for seamless deployment</p>
                    </div>
                </div>

                <!-- AI/ML -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fas fa-robot tech-icon"></i>
                        <h5>AI/ML</h5>
                        <p class="text-muted">Artificial Intelligence and Machine Learning solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Get In Touch</h2>
                    <p class="lead mb-5">Ready to start your project? Contact us today for a free consultation.</p>
                </div>
            </div>

            <div class="row justify-content-center g-4">
                <!-- Email Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="mb-1">Email</h5>
                                <p class="mb-0 text-muted">pusmaurya4@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p class="mb-0 text-muted">+91 8707579029</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Address Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <p class="mb-0 text-muted">Jankipuram Sector - H Lucknow 226021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
