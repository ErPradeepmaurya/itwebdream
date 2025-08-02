@extends('layouts.app')

@section('title', 'UI/UX Design Services - IT Web Dream')

@section('content')
    <section class="py-2 p-2 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="web-banner">
                    <h1 class="display-5 fw-bold text-center mb-5">UI/UX Design Services – IT Web Dream</h1>
                </div>
                <p class="lead text-muted mt-3">At <strong>IT Web Dream</strong>, we specialize in delivering intuitive and
                    engaging UI/UX design services tailored for diverse industries, including jewellers, eCommerce, service
                    providers, and real estate. Our goal is to enhance the digital experience, reduce bounce rates, and
                    increase user engagement through visually compelling and user-friendly interfaces.</p>
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Expert UI/UX Design Solutions by IT Web Dream</h2>
                    <p class="lead text-muted">Elevating digital presence for jewellers, eCommerce, service-based, and real
                        estate businesses with high-performance design strategies.</p>
                </div>
                <div class="row mb-5">
                    <div class="col-12">
                        <h4 class="fw-bold text-center">Why UI/UX Design Matters</h4>
                        <p>UI/UX design directly impacts user satisfaction, retention, and conversion. A well-designed UI
                            (User Interface) captures attention, while UX (User Experience) ensures seamless navigation and
                            interaction. At <strong>IT Web Dream</strong>, our UI/UX design services are tailored to blend
                            aesthetics with function, creating websites and apps that are not only beautiful but also highly
                            usable.</p>
                    </div>
                </div>
                <div class="row g-2 mb-5">
                    <div class="col-sm-6">
                        <div class="border rounded-3 h-100 technology-shadow">
                            <h4 class="fw-bold">Jewellery Website UI/UX Design</h4>
                            <p>Our UI/UX solutions for jewellers ensure a premium, elegant digital experience with features
                                like:</p>
                            <ul>
                                <li>High-resolution product galleries with zoom-in and 360° views</li>
                                <li>Intuitive navigation for gold, diamond, silver categories</li>
                                <li>Trust-building UI with certification badges, testimonials</li>
                                <li>Mobile-first, responsive design for luxury browsing</li>
                                <li>Seamless product filtering and secure checkout flows</li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="border rounded-3 h-100 technology-shadow">
                            <h4 class="fw-bold">eCommerce Platform Design</h4>
                            <p>We design conversion-focused eCommerce interfaces that include:</p>
                            <ul>
                                <li>Clear, engaging product layouts and CTAs</li>
                                <li>Smart search, filtering, and product comparison</li>
                                <li>Streamlined cart-to-checkout journey</li>
                                <li>Integrated reviews, ratings, and shipping info</li>
                                <li>Responsive design for mobile, tablet, and desktop</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="p-4 border rounded-3 h-100 technology-shadow">
                            <h4 class="fw-bold">UI/UX for Service Providers</h4>
                            <p>We help service-based businesses improve conversions by:</p>
                            <ul>
                                <li>Crafting user flows that lead to service inquiries</li>
                                <li>Including easy-to-use booking and quote request forms</li>
                                <li>Embedding social proof with testimonials and success stories</li>
                                <li>Mobile optimization and fast-loading layouts</li>
                                <li>Calls-to-action (CTAs) designed to convert</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 border rounded-3 h-100 technology-shadow">
                            <h4 class="fw-bold">UI/UX Design for Real Estate</h4>
                            <p>We design modern, high-performance real estate interfaces with:</p>
                            <ul>
                                <li>Advanced search filters (location, budget, property type)</li>
                                <li>Image galleries, video tours, and interactive maps</li>
                                <li>Integrated agent profiles, contact forms, live chat</li>
                                <li>CRM integration and appointment scheduling</li>
                                <li>Responsive, SEO-optimized listing pages</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 border rounded-3 h-100 technology-shadow">
                            <h4 class="fw-bold">Why IT Web Dream?</h4>
                            <p>We combine creativity, strategy, and data to create scalable UI/UX design systems. Our
                                approach
                                includes:</p>
                            <ol>
                                <li><strong>Discovery & Research:</strong> User research, competitor analysis</li>
                                <li><strong>Wireframes & Prototypes:</strong> Interactive design mockups</li>
                                <li><strong>UI Design:</strong> Brand-aligned, modern visual components</li>
                                <li><strong>UX Testing:</strong> Real-user feedback for refinement</li>
                                <li><strong>Mobile-First Development:</strong> Fluid layouts for all devices</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 border rounded-3 h-100 technology-shadow">
                            <h5 class="fw-bold">Let’s Build Something Exceptional</h5>
                            <p>Partner with <strong>IT Web Dream</strong> for tailor-made UI/UX design that enhances trust,
                                boosts conversions, and elevates your brand. Whether you're a jeweller, service provider,
                                eCommerce entrepreneur, or real estate professional, we deliver digital solutions designed
                                to
                                grow with your business.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5" id="technologies">
                <div class="text-center">
                    <h2 class="display-6 fw-bold">Custom Web and Mobile App Design</h2>
                    <p class="lead text-muted">We work with cutting-edge technologies to deliver robust and visually
                        stunning designs.</p>
                </div>
                <div class="row g-2 text-center">
                    @foreach (range(1, 14) as $index)
                        <div class="col-md-3 col-6">
                            <div class="p-2 border rounded-3 technology-shadow img-container">
                                <img src="{{ asset('asset/main/image/design/temp-' . $index . '.png') }}"
                                    alt="design {{ $index }}" class="tech-img">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="container mt-5" id="technologies">
                <div class="row g-2 text-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="p-4 border rounded-3 h-100 technology-shadow">
                            <i class="fas fa-laptop-code tech-icon card border-primary p-2"></i>
                            <h2>Front-end Web Development</h2>
                            <p class="text-muted">Leverage advanced frameworks like React.js, Vue.js, and Angular to create
                                fast, interactive user interfaces. Our team blends UI precision with scalable architecture
                                for performance-driven applications.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="p-4 border rounded-3 h-100 technology-shadow">
                            <i class="fas fa-shopping-cart tech-icon card border-primary p-2"></i>
                            <h5>Ecommerce Web App Development</h5>
                            <p class="text-muted">Develop scalable eCommerce solutions using Shopify, Magento, and Laravel.
                                IT Web Dream ensures seamless transactions, optimized UI/UX, and secure platforms for
                                maximum online growth.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="p-4 border rounded-3 h-100 technology-shadow">
                            <i class="fas fa-project-diagram tech-icon card border-primary p-2"></i>
                            <h5>Custom Web Application Development</h5>
                            <p class="text-muted">Our expert team crafts custom web applications tailored to your
                                operations. Scalable, secure, and built for usability—our solutions power enterprise-level
                                growth and flexibility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
