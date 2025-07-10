@extends('layouts.app')

@section('title', 'Top Custom Web & Software Development Services in India')


@section('content')
    <!-- Hero Section with Software Development Image -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Innovative web and software solutions, built for you</h1>
            <p class="lead mb-5">Our innovative, tailored web and software solutions streamline operations, enhance user
                experiences, and drive business growth.</p>
            <a href="#contact" class="btn btn-primary btn-lg px-4 me-2">Get Started</a>
            <a href="#services" class="btn btn-outline-light btn-lg px-4">Our Services</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-1 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mt-3">
                    <p class="lead text-muted">Elevate your business with exceptional software development services from a
                        team of skilled
                        professionals who can adapt to modern technology and drive growth. Collaborate with Indian
                        software development companies for a competitive edge.<br> Their expertise in flawless software
                        development will enhance your business revenue.<br> We provide customizable software solutions for
                        various needs, including design, development, testing, legacy application migration, product
                        development, and more.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light-blue pt-1">
        <div class="container">
            <div class="text-center">
                <h2 class="display-5 fw-bold">Our Service Offerings</h2>
                <p class="lead text-muted">Our software development services deliver innovative, scalable, and tailored
                    solutions that empower businesses to thrive in a dynamic digital landscape and gain a lasting
                    competitive edge.</p>
            </div>

            <div class="row g-4">
                <!-- Web Development Card -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{ asset('asset/main/image/web-development.jpg') }}" class="card-img-top"
                            alt="Web Development">
                        <div class="card-body">
                            <h5 class="card-title">Custom Software Development</h5>
                            <p class="card-text">Develop a software application in accordance with the changing needs of
                                business and end users. IT Web Dream helps businesses by developing fully functional,
                                feature-rich and compatible custom websites and custom mobile applications to drive growth
                                and overcome business challenges.</p>
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
                            <p class="card-text">We offer comprehensive SEO strategies designed to enhance your online
                                visibility, boost search engine rankings, and drive high-quality, targeted traffic to your
                                website—ultimately increasing brand awareness, user engagement, and conversion rates for
                                sustained business growth.</p>
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
                            <p class="card-text">We craft high-performance native and cross-platform mobile applications
                                that ensure seamless functionality, intuitive interfaces, and exceptional user experiences
                                across all devices—empowering your brand to connect with users anytime, anywhere, and drive
                                meaningful engagement and business success.</p>
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
    {{-- <section id="technologies"> --}}
    <div class="container" id="technologies">
        <div class="text-center">
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

    <!-- Software Development experience -->
    <section id="experience" class="mb-0">
        <div class="container pt-0">
            <div class="text-center mt-0">
                <h2 class="display-5 fw-bold">Software Development Experience</h2>
                <p class="lead text-muted">Our reliable and adaptable software development services have consistently
                    delivered profitable results to businesses across diverse industries. With a strong focus on innovation,
                    quality, and client satisfaction, we empower organizations to achieve their digital goals efficiently.
                    Our expertise ensures scalable, secure, and high-performance solutions tailored to each client’s unique
                    needs.</p>
            </div>
            <div class="row g-4">
                <h5 class="display-6 text-center">Our Expertise</h5>
                <div class="col-md-6">
                    <div class="p-4 border rounded bg-white h-100">
                        <ul class="text-start list-unstyled">
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Fintech & Insurance</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Education (Portal, ERP etc)
                            </li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Healthcare</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Travel & Hospitality</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 border rounded bg-white h-100">
                        <ul class="text-start list-unstyled">
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Media</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Retail & eCommerce</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Logistics & Distribution</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Matrimonial</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Software Outsourcing?  -->
    <section id="experience" class="mb-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <h2 class="display-5 fw-bold">Why Software Outsourcing? </h2>
                    <div class="bg-white h-100">
                        <p class="lead text-muted">Companies of any grade from small, medium or enterprise level outsource
                            a large
                            part of their software development work to software development companies for many reasons such
                            as</p>

                        <ul class="text-start list-unstyled">
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Cost Saving on Software Development
                            </li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i>Lack of in-house software developers
                            </li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Time saving</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Access to the latest technology
                                offered by a software development partner</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Scalable professional resource team
                                for your custom software solutions</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Overcoming risks and business
                                challenges</li>
                        </ul>
                        <p class="lead text-muted">Businesses are encouraged to outsource their operations to different
                            locations to expand their business reach and strategically drive business ahead. When you
                            partner with a leading software development company like IT Web Dream, your business can get
                            myriads of benefits such as minimal cost on individual processes, latest technology adoption,
                            concurrent process execution, higher productivity and many similar fruitful benefits that aids
                            business development. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 border rounded bg-white">
                        <img src="{{ asset('asset/main/image/software_utsourcing.jpg') }}" alt="Software outsourcing"
                            class="rounded-2">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-4 border rounded bg-white h-100">
                        <img src="{{ asset('asset/main/image/Software_development.jpg') }}" alt="Software development"
                            class="rounded-2 img-fluid">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bg-white h-100">
                        <h2 class="display-5 fw-bold">Why choose India for software development services? </h2>
                        <p class="lead text-muted">Technology is evolving every day, encouraging businesses to perform
                            better by harnessing its power and that will help businesses to stand through disruptions.
                            Software Outsourcing in India is a favourable option for businesses and the reason are extremely
                            relevant</p>

                        <ul class="text-start list-unstyled">
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Software development companies in
                                India provide Cost-effective software development solutions compared to other destinations
                                with the same quality
                            </li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i>Business models are extremely flexible
                                and software development companies in India work 24*7 round the clock to cater to different
                                geographies
                            </li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i>Maximize profitability with minimal
                                investment cost</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
