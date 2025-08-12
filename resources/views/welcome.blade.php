@extends('layouts.app')
@section('title', 'Web Design and Software Development Company')
@section('content')
    <section class="integration-banner mt-1">
        <div class="content-container text-dark">
            <h3>Website design and software development provided.</h3>
            <p>"ITWebDream is a business web design and software development company that helps businesses grow with custom
                websites, scalable software, and digital solutions designed to boost visibility, enhance engagement, and
                drive results."</p>
            <a href="#technologies" class="btn">View Full Stack</a>
        </div>

        <!-- Floating Tech Icons -->
        <div class="floating-logos">
            <img src="{{ asset('asset/main/image/laravel.png') }}" class="floating-logo" style="top: 10%; left: 10%;">
            <img src="{{ asset('asset/main/image/redux.png') }}" class="floating-logo" style="top: 22%; left: 25%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="floating-logo"
                style="top: 20%; right: 10%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="floating-logo"
                style="top: 55%; left: 5%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="floating-logo"
                style="bottom: 15%; right: 5%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="floating-logo"
                style="top: 65%; right: 15%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="floating-logo"
                style="top: 75%; left: 25%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="floating-logo"
                style="top: 60%; left: 15%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="floating-logo"
                style="bottom: 20%; right: 30%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                class="floating-logo" style="top: 80%; left: 50%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/android/android-original.svg" class="floating-logo"
                style="top: 15%; right: 30%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apple/apple-original.svg" class="floating-logo"
                style="top: 15%; left: 50%;">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg"
                class="floating-logo" style="bottom: 60%; left: 13%;">
        </div>
    </section>


    <!-- About Us Section -->
    <section class="py-1 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mt-4">
                    <p class="lead text-muted">Elevate your business with exceptional software development services from
                        itwebdream, a leading Indian software development company. Our team of skilled professionals
                        leverages modern technologies to deliver innovative, scalable, and high-performing software
                        solutions tailored to your unique needs. Whether you require custom software design, development,
                        testing, legacy application migration, or full-cycle product development, itwebdream ensures
                        flawless execution and measurable results. By partnering with us, you gain a competitive edge in the
                        market and unlock new opportunities for growth. Our expertise not only enhances your digital
                        presence but also drives revenue, efficiency, and long-term success. Choose itwebdream—where your
                        vision becomes reality.
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

            <div class="row g-4 text-white d-flex justify-content-center align-items-center">
                <div class="col-md-4">
                    {{-- <div class="card-box position-relative p-4"> --}}
                    <div class="glass-card p-4">
                        <img src="{{ asset('asset/main/image/web-development.jpg') }}" alt="Laptop"
                            class="img-fluid mb-3 laptop-img rounded-3">

                        <h4 class="fw-bold text-dark">Custom Software<br>Development</h4>
                        <p class="text-secondary mb-4">
                            Develop a software application in accordance with the changing needs of business and end
                            users.
                            <strong>IT Web Dream</strong> helps businesses by developing fully functional, feature-rich
                            and compatible
                            custom websites and custom mobile applications to drive growth and overcome business
                            challenges.
                        </p>
                        <ul class="list-unstyled text-dark">
                            <li><i class="fas fa-check text-primary me-2"></i> Responsive Design</li>
                            <li><i class="fas fa-check text-primary me-2"></i> User-Centric Approach</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Scalable Architecture</li>
                        </ul>

                        <div class="d-flex justify-content-center">
                            <a href="{{ route('web-development') }}"
                                class="btn btn-success fw-bold px-4 py-2 rounded-pill">View More</a>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>

                <div class="col-md-4">
                    {{-- <div class="card-box position-relative p-4"> --}}
                    <div class="glass-card p-4">
                        <img src="{{ asset('asset/main/image/app-development.jpg') }}" alt="Laptop"
                            class="img-fluid mb-3 laptop-img rounded-3">

                        <h4 class="fw-bold text-dark">Mobile App<br>Development</h4>
                        <p class="card-text text-dark">We craft high-performance native and cross-platform mobile
                            applications
                            that ensure seamless functionality, intuitive interfaces, and exceptional user
                            experiences
                            across all devices—empowering your brand to connect with users anytime, anywhere, and
                            drive
                            meaningful engagement and business success.</p>
                        <ul class="list-unstyled text-dark">
                            <li><i class="fas fa-check text-primary me-2"></i> iOS & Android</li>
                            <li><i class="fas fa-check text-primary me-2"></i> React Native/Flutter</li>
                            <li><i class="fas fa-check text-primary me-2"></i> App Store Optimization</li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('comming-soon') }}"
                                class="btn btn-success fw-bold px-4 py-2 rounded-pill">View More</a>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>

                <div class="col-md-4">
                    {{-- <div class="card-box position-relative p-4 "> --}}
                    <div class="glass-card p-4">
                        <img src="{{ asset('asset/main/image/seoimage.jpg') }}" alt="Laptop"
                            class="img-fluid mb-3 laptop-img rounded-3">

                        <h4 class="fw-bold text-dark">SEO & Digital<br>Marketing</h4>
                        <p class="card-text text-dark">We offer comprehensive SEO strategies designed to enhance your
                            online
                            visibility, boost search engine rankings, and drive high-quality, targeted traffic to
                            your
                            website—ultimately increasing brand awareness, user engagement, and conversion rates for
                            sustained business growth.</p>
                        <ul class="list-unstyled text-dark">
                            <li><i class="fas fa-check text-primary me-2"></i> Keyword Research</li>
                            <li><i class="fas fa-check text-primary me-2"></i> On-Page Optimization</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Performance Analytics</li>
                        </ul>

                        <div class="d-flex justify-content-center">
                            <a href="{{ route('comming-soon') }}"
                                class="btn btn-success fw-bold px-4 py-2 rounded-pill">View More</a>
                        </div>

                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="technologies">
        <div class="container" id="technologies">
            <div class="text-center">
                <h2 class="display-5 fw-bold">Our Technology Stack</h2>
                <p class="lead text-muted">We work with cutting-edge technologies to deliver robust solutions</p>
            </div>

            <div class="row g-4 text-center">
                <!-- Full Stack -->
                <div class="col-md-3 col-6">
                    <div class="p-4 border rounded-3 h-100 technology-shadow animate-shadow">
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
                    <div class="p-4 border rounded bg-white h-100 expertise-shadow">
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
                    <div class="p-4 border rounded bg-white h-100 expertise-shadow">
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
            <div class="row g-4 align-items-center">
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
                    <div class="p-1 border h-auto rounded bg-white outsourcing-shadow">
                        <img src="{{ asset('asset/main/image/full-stack-development.gif') }}" alt="Software outsourcing"
                            class="rounded-2 img-fluid">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-1 border rounded bg-white h-100 outsourcing-shadow">
                        <img src="{{ asset('asset/main/image/service-provider.gif') }}" alt="Software development"
                            class="rounded-2 img-fluid">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bg-white h-auto">
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

    <section>
        <div class="container timeline">
            <!-- Step 1 -->
            <div class="timeline-item">
                <div class="timeline-icon">1</div>
                <div class="timeline-item-left">
                    <img src="{{ asset('asset/main/image/rm-icon/web-1.png') }}" alt="Planning"
                        class="timeline-image border border-primary p-1">
                    <div class="timeline-title">Planning</div>
                    <div class="timeline-description">Understanding client requirements is key to delivering successful
                        solutions. We analyze goals, identify challenges, and build a clear, strategic roadmap that ensures
                        project alignment, efficiency, and long-term success.
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-item">
                <div class="timeline-icon">2</div>
                <div class="timeline-item-right">
                    <img src="{{ asset('asset/main/image/rm-icon/web-8.gif') }}" alt="Analysis"
                        class="timeline-image border border-primary p-1">
                    <div class="timeline-title">Analysis</div>
                    <div class="timeline-description">We conduct in-depth technical and market research to define the
                        project’s scope and features accurately, ensuring the solution is innovative, relevant, and aligned
                        with current trends and user needs.
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-item">
                <div class="timeline-icon">3</div>
                <div class="timeline-item-left">
                    <img src="{{ asset('asset/main/image/rm-icon/web-7.png') }}" alt="Design"
                        class="timeline-image border border-primary p-1">
                    <div class="timeline-title">Design</div>
                    <div class="timeline-description">We design intuitive wireframes, mockups, and interactive UX/UI
                        interfaces to visualize the user journey, enhance usability, and ensure a seamless, engaging
                        experience across all devices before development begins.
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-item">
                <div class="timeline-icon">4</div>
                <div class="timeline-item-right">
                    <img src="https://media.giphy.com/media/xT9IgzoKnwFNmISR8I/giphy.gif" alt="Implementation"
                        class="timeline-image border border-primary p-1">
                    <div class="timeline-title">Implementation</div>
                    <div class="timeline-description">Our expert engineers handle both frontend and backend development,
                        delivering robust, scalable, and high-performance solutions with clean code, seamless functionality,
                        and a focus on user experience and efficiency.</div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="timeline-item">
                <div class="timeline-icon">5</div>
                <div class="timeline-item-left">
                    <img src="{{ asset('asset/main/image/rm-icon/web-4.png') }}" alt="Testing"
                        class="timeline-image border border-primary p-1">
                    <div class="timeline-title">Testing</div>
                    <div class="timeline-description">Our QA engineers execute comprehensive test cases across multiple
                        scenarios to identify and resolve bugs, ensuring a stable, high-quality, and flawless product
                        release that meets all performance and usability standards..
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="timeline-item">
                <div class="timeline-icon">6</div>
                <div class="timeline-item-right">
                    <img src="{{ asset('asset/main/image/rm-icon/web-2.png') }}" alt="Deployment"
                        class="timeline-image border border-primary">
                    <div class="timeline-title p-1">Deployment</div>
                    <div class="timeline-description">The project is deployed to the live server with complete backup and
                        advanced security measures, ensuring data integrity, protection against threats, and a smooth,
                        reliable launch for end users.
                    </div>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="timeline-item">
                <div class="timeline-icon">7</div>
                <div class="timeline-item-left">
                    <img src="{{ asset('asset/main/image/rm-icon/web-5.png') }}" alt="Maintenance"
                        class="timeline-image border border-primary p-1">
                    <div class="timeline-title">Maintenance</div>
                    <div class="timeline-description">We provide ongoing support, performance monitoring, and continuous
                        enhancements post-launch to ensure your application remains secure, up-to-date, and aligned with
                        evolving business goals and user expectations.</div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="container">
            <h2 class="text-center mb-4">Our Customre Reviews</h2>
            <div id="reviewCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Review 1 -->
                    <div class="carousel-item active">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Arpit Tiwari</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Lucknow, Utttar-Pradesh</div>
                            <p><strong>"</strong>The team delivered an exceptional e-commerce website with professionalism
                                and experience. They captured our vision, built a user-friendly, secure, and responsive
                                platform, and met all deadlines. Communication was seamless, and the result greatly
                                enhanced our online
                                presence and sales. Highly recommended for anyone needing a modern e-commerce
                                solution.<strong>"</strong>
                            </p>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Sandeep Kumar</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Delhi NCR</div>
                            <p><strong>"</strong>The team delivered a dynamic online shop management portal with features
                                like product tracking, order processing, inventory control, and user-friendly dashboards.
                                It’s responsive, secure, and easy to manage. Perfectly tailored to streamline daily
                                operations and boost efficiency. A reliable solution for managing online stores
                                effortlessly. Highly recommended!<strong>"</strong>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Azam Khan</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Bengaluru, India</div>
                            <p><strong>"</strong> We built a fast-loading, professional website that showcases our service
                                offerings perfectly.Throughout the process, everything was tailored to our needs, from the
                                layout to the functionality.The mobile-friendly website is easy to manage, enhances client
                                engagement, and is mobile-friendly.<strong>"</strong>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Vibhoj</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Lucknow, Utttar-Pradesh</div>
                            <p><strong>"</strong>They built a powerful gold jewellery e-commerce platform with
                                multi-dashboard access, secure logins, inventory management, and invoicing. The system is
                                seamless, secure, and user-friendly. It’s tailored for both admins and vendors, enhancing
                                control and efficiency. A complete solution for modern jewellery businesses. Highly
                                recommended for robust e-commerce needs!<strong>"</strong>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Manvendra Singh</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Kanpur, Utttar-Pradesh</div>
                            <p><strong>"</strong>Developed a robust university portal with multi-college logins,
                                student record management, and role-based dashboards for admins, faculty, and students. The
                                platform is scalable, secure, and simplifies academic operations. Custom-built to meet
                                institutional needs, it enhances data access, communication, and efficiency. Ideal for
                                modern educational institutions and universities.
                                <strong>"</strong>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Vibhoj</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Lucknow, Utttar-Pradesh</div>
                            <p><strong>"</strong>They built a feature-rich real estate portal with property listings,
                                advanced search filters, agent logins, and inquiry management. The design is modern,
                                responsive, and user-focused. It simplifies property browsing and lead generation. An ideal
                                platform for realtors and agencies seeking a professional online presence. Excellent work
                                and timely delivery!
                                <strong>"</strong>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Piyush Mishra</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Lucknow, Utttar-Pradesh</div>
                            <p><strong>"</strong>They developed a modern coaching center portal with dashboards for students
                                and teachers, managing admissions, fees, attendance, and performance. The system is
                                intuitive, secure, and streamlines daily operations. It greatly improves communication and
                                tracking. A complete solution for coaching institutes seeking efficient digital management.
                                Delivered on time with precision!<strong>"</strong>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Dr. Pradeep Mishra</h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Lucknow, Utttar-Pradesh</div>
                            <div class="text-muted mb-2">They built a comprehensive hospital management portal with modules
                                for patient records, appointments, billing, staff management, and reports. The system is
                                secure, efficient, and easy to use. It streamlines hospital operations and enhances patient
                                care. A reliable solution for modern healthcare needs. Delivered professionally and on
                                schedule<strong>"</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="review-card text-center mx-auto" style="max-width: 600px;">
                            <h5>Rahul Maurya </h5>
                            <div class="star-rating mb-2">★★★★★</div>
                            <div class="text-muted mb-2">Panjab</div>
                            <div class="text-muted mb-2">They developed a full-featured e-commerce portal with product
                                management, secure checkout, user accounts, order tracking, inventory control, and admin
                                dashboard. The design is sleek, responsive, and optimized for performance. It offers a
                                seamless shopping experience. A complete solution for launching and scaling online stores.
                                Highly reliable and well-executed work!<strong>"</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
    </section>
@endsection
