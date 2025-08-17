@extends('layouts.app')
@section('title', 'Housing – On‑Demand Home Services')
@section('meta_keywords',
    'web development Dubai, website design Dubai, Laravel development Dubai, software development
    Dubai')
@section('meta_description',
    'Get expert Laravel web development in Dubai. We design responsive websites, develop custom
    software, and deliver tailored digital solutions for businesses in the UAE.')

@section('content')
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-2 sticky-top mt-1 rounded-5">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><span class="text-primary">Housing</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample"
                aria-controls="navbarsExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample">
                <form class="d-none d-lg-flex ms-lg-4" role="search" style="max-width:420px; width:100%">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i
                                class="bi bi-geo-alt text-primary"></i></span>
                        <select id="citySelect" class="form-select border-start-0">
                            <option value="Basti" selected>Basti (Uttar Pradesh)</option>
                            <option value="Harriya" selected>Harriya (Uttar Pradesh)</option>
                            <option value="Gorkhpur" selected>Gorkhpur (Uttar Pradesh)</option>
                        </select>
                    </div>
                </form>
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how">How it works</a></li>
                    <li class="nav-item d-none d-lg-block ms-2"><button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#loginModal">Login / Sign up</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="hero py-5 py-lg-6">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-3">Trusted home services, <span class="text-gradient">on‑demand</span>.
                    </h1>
                    <p class="lead text-secondary mb-4">Book expert professionals for cleaning, beauty & spa at home,
                        appliance repair, and more. Transparent pricing. Background‑verified pros.</p>
                    <div class="card shadow-soft rounded-2xl p-3">
                        <div class="row g-2">
                            <div class="col-12 col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                                    <input id="searchInput" class="form-control border-start-0" type="text"
                                        placeholder="Search services: cleaning, AC repair, facial…"
                                        aria-label="Search services">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 d-grid">
                                <a href="#services" class="btn btn-primary">Explore services</a>
                            </div>
                        </div>
                    </div>
                    <ul class="mt-3 mb-0 text-muted small list-check">
                        <li>Upfront prices • No hidden fees</li>
                        <li>Trained & background‑verified professionals</li>
                        <li>Secure online payments</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9 rounded-2xl shadow-soft overflow-hidden">
                        <img src="{{ asset('asset/main/serviceb/home-banner.jpg') }}"
                            class="w-100 rounded-2 h-100 object-fit-cover" alt="Home services">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Categories -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="d-flex align-items-end justify-content-between mb-3">
                <h2 class="h3 mb-0">Popular Categories</h2>
                <a href="#allServices" class="btn btn-sm btn-outline-primary">View all</a>
            </div>
            <div class="row g-3">
                <!-- Category item -->
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#allServices" class="text-decoration-none">
                        <div class="card category-card h-100 rounded-2xl">
                            <img src="{{ asset('asset/main/serviceb/home-service.jpg') }}" class="card-img-top h-100"
                                alt="Cleaning">

                            <div class="card-body">
                                <h5 class="card-title mb-1">Home Cleaning</h5>
                                <p class="card-text small text-muted">Deep cleaning, bathroom, kitchen</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#allServices" class="text-decoration-none">
                        <div class="card category-card h-100 rounded-2xl">
                            <img src="{{ asset('asset/main/serviceb/ac-service.jpg') }}" class="card-img-top h-100"
                                alt="AC Service">
                            <div class="card-body">
                                <h5 class="card-title mb-1">AC & Appliances</h5>
                                <p class="card-text small text-muted">AC service, fridge, washing machine</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#allServices" class="text-decoration-none">
                        <div class="card category-card h-100 rounded-2xl">
                            <img src="{{ asset('asset/main/serviceb/spa-service.jpg') }}" class="card-img-top h-100"
                                alt="Beauty">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Beauty & Spa at Home</h5>
                                <p class="card-text small text-muted">Facials, waxing, mani-pedi</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#allServices" class="text-decoration-none">
                        <div class="card category-card h-100 rounded-2xl">
                            <img src="{{ asset('asset/main/serviceb/repair.jpeg') }}" class="card-img-top h-100"
                                alt="Electrician">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Repairs & Maintenance</h5>
                                <p class="card-text small text-muted">Electrician, plumber, carpenter</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- All services grid with filtering -->
    <section id="allServices" class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
                <h2 class="h3 mb-0">All Services</h2>
                <div class="d-flex gap-2">
                    <select id="filterCategory" class="form-select form-select-sm" style="min-width:200px">
                        <option value="">All categories</option>
                        <option>Cleaning</option>
                        <option>Appliances</option>
                        <option>Beauty</option>
                        <option>Repairs</option>
                    </select>
                    <select id="sortSelect" class="form-select form-select-sm" style="min-width:200px">
                        <option value="popular">Sort: Most popular</option>
                        <option value="priceLow">Price: Low to High</option>
                        <option value="priceHigh">Price: High to Low</option>
                    </select>
                </div>
            </div>

            <div id="servicesGrid" class="row g-3">
                <!-- Service Card Template (cloned by JS) -->
            </div>

            <div class="d-grid mt-3">
                <button class="btn btn-outline-primary" id="loadMore">Load more</button>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section id="how" class="py-5">
        <div class="container">
            <h2 class="h3 text-center mb-4">How it works</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 rounded-2xl shadow-soft">
                        <div class="card-body p-4">
                            <div class="display-6 mb-2">1</div>
                            <h5>Choose a service</h5>
                            <p class="text-muted mb-0">Pick from cleaning, appliance repair, beauty at home, and more.
                                Transparent pricing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 rounded-2xl shadow-soft">
                        <div class="card-body p-4">
                            <div class="display-6 mb-2">2</div>
                            <h5>Pick date & time</h5>
                            <p class="text-muted mb-0">Instant booking with real‑time availability. Free rescheduling
                                before service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 rounded-2xl shadow-soft">
                        <div class="card-body p-4">
                            <div class="display-6 mb-2">3</div>
                            <h5>Get it done</h5>
                            <p class="text-muted mb-0">Vetted professionals arrive on time. Pay securely after service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section id="reviews" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <h2 class="h3 mb-3">Loved by millions</h2>
                    <p class="text-muted">Real reviews from customers across major Indian cities. Average rating 4.8/5.
                    </p>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="bi bi-shield-check text-success me-2"></i>Background‑verified
                            pros</li>
                        <li class="mb-2"><i class="bi bi-cash-coin text-success me-2"></i>Upfront, affordable
                            pricing</li>
                        <li class="mb-2"><i class="bi bi-credit-card text-success me-2"></i>Secure online payments
                        </li>
                    </ul>
                </div>

                <div class="col-lg-7">
                    <div id="reviewCarousel" class="carousel slide rounded-2xl overflow-hidden shadow-soft"
                        data-bs-ride="carousel">
                        <div class="carousel-inner align-items-center text-center">
                            <div class="carousel-item active p-4 bg-white">
                                <p class="mb-2">“Super smooth booking. The cleaner was professional and on time.
                                    House looks brand new!”</p>
                                <div class="rating mb-2">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="small text-muted">Aditi • Bengaluru</div>
                            </div>
                            <div class="carousel-item p-4 bg-white">
                                <p class="mb-2">“Booked AC servicing. Transparent price, no upsell. Cooling like
                                    new.”</p>
                                <div class="rating mb-2">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="small text-muted">Rahul • Delhi</div>
                            </div>
                            <div class="carousel-item p-4 bg-white">
                                <p class="mb-2">“Loved the spa at home experience. Hygienic & relaxing. Highly
                                    recommended.”</p>
                                <div class="rating mb-2">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="small text-muted">Shreya • Pune</div>
                            </div>
                        </div>

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
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="h4 mb-3">Frequently asked questions</h2>
            <div class="accordion" id="faq">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q1"><button class="accordion-button" type="button"
                            data-bs-toggle="collapse" data-bs-target="#a1">Are professionals
                            background‑verified?</button></h2>
                    <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                        <div class="accordion-body">Yes. We verify identity, experience, and training before
                            onboarding.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q2"><button class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#a2">How do I pay?</button></h2>
                    <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">Pay online via UPI, cards, or netbanking. Cash on service may be
                            available in select cities.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q3"><button class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#a3">Can I reschedule?</button>
                    </h2>
                    <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">Yes, free rescheduling up to 2 hours before your booking time.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login / Sign up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Phone number</label>
                            <div class="input-group">
                                <span class="input-group-text">+91</span>
                                <input type="tel" class="form-control" required pattern="[6-9][0-9]{9}"
                                    placeholder="9876543210">
                                <div class="invalid-feedback">Enter a valid 10‑digit Indian mobile number.</div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Get OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Now Modal (injected content) -->
    <div class="modal fade" id="bookModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookTitle">Book Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="bookForm" class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                            <label class="form-label">Service</label>
                            <input id="bookService" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" id="bookDate" required>
                            <div class="invalid-feedback">Pick a date</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Time</label>
                            <input type="time" class="form-control" id="bookTime" required>
                            <div class="invalid-feedback">Pick a time</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" id="bookAddress" placeholder="Flat, Street, Area"
                                required>
                            <div class="invalid-feedback">Enter address</div>
                        </div>
                        <div class="col-12 d-grid">
                            <button class="btn btn-primary" type="submit">Confirm booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container sticky-cta">
        <div class="alert alert-primary d-flex align-items-center shadow-soft rounded-2xl" role="alert">
            <i class="bi bi-lightning-charge me-2"></i>
            <div class="flex-grow-1">Flat <strong>15% off</strong> on first booking • Use code <span
                    class="badge text-bg-dark">HOUSING15</span></div>
            <a href="#allServices" class="btn btn-sm btn-dark ms-3">Book now</a>
        </div>
    </div>

    <script>
        // ---- Demo data ----
        const SERVICES = [{
                id: 1,
                title: '1BHK Deep Cleaning',
                category: 'Cleaning',
                price: 1499,
                rating: 4.7,
                img: 'asset/main/serviceb/Deep-Cleaning.jpg'
            },
            {
                id: 2,
                title: 'Bathroom Cleaning',
                category: 'Cleaning',
                price: 499,
                rating: 4.6,
                img: 'asset/main/serviceb/bathroom-clening.jpg'
            },
            {
                id: 3,
                title: 'AC Service (Split)',
                category: 'Appliances',
                price: 599,
                rating: 4.8,
                img: 'asset/main/serviceb/AC-Service-split.jpg'
            },
            {
                id: 4,
                title: 'Refrigerator Repair',
                category: 'Appliances',
                price: 349,
                rating: 4.5,
                img: 'asset/main/serviceb/Refrigerator-Repair.jpg'
            },
            {
                id: 5,
                title: 'Classic Facial',
                category: 'Beauty',
                price: 799,
                rating: 4.9,
                img: 'asset/main/serviceb/Classic-Facial.jpg'
            },
            {
                id: 6,
                title: 'Waxing (Full arms)',
                category: 'Beauty',
                price: 399,
                rating: 4.4,
                img: 'asset/main/serviceb/Waxing.jpg'
            },
            {
                id: 7,
                title: 'Electrician Visit',
                category: 'Repairs',
                price: 199,
                rating: 4.6,
                img: 'asset/main/serviceb/Electrician Visit.jpg'
            },
            {
                id: 8,
                title: 'Carpenter Visit',
                category: 'Repairs',
                price: 199,
                rating: 4.5,
                img: 'asset/main/serviceb/Carpenter Visit.png'
            },
            {
                id: 9,
                title: 'Kitchen Deep Cleaning',
                category: 'Cleaning',
                price: 999,
                rating: 4.7,
                img: 'asset/main/serviceb/kitchan-deep.jpg'
            },
            {
                id: 10,
                title: 'Pedicure (Spa)',
                category: 'Beauty',
                price: 699,
                rating: 4.8,
                img: 'asset/main/serviceb/Pedicure.jpg'
            },
            {
                id: 11,
                title: 'Washing Machine Repair',
                category: 'Appliances',
                price: 349,
                rating: 4.6,
                img: 'asset/main/serviceb/Washing Machine Repair.jpg'
            },
            {
                id: 12,
                title: 'Plumber Visit',
                category: 'Repairs',
                price: 199,
                rating: 4.5,
                img: 'asset/main/serviceb/Plumber Visit.jpg'
            }
        ];

        // ---- Helpers ----
        const servicesGrid = document.getElementById('servicesGrid');
        const searchInput = document.getElementById('searchInput');
        const filterCategory = document.getElementById('filterCategory');
        const sortSelect = document.getElementById('sortSelect');
        const loadMoreBtn = document.getElementById('loadMore');
        const citySelect = document.getElementById('citySelect');

        let visibleCount = 8; // initial cards

        function formatINR(value) {
            return new Intl.NumberFormat('en-IN', {
                style: 'currency',
                currency: 'INR',
                maximumFractionDigits: 0
            }).format(value);
        }

        function renderServices() {
            const q = searchInput.value.toLowerCase();
            const cat = filterCategory.value;
            let data = SERVICES.filter(s => s.title.toLowerCase().includes(q) || s.category.toLowerCase().includes(q));
            if (cat) data = data.filter(s => s.category === cat);

            switch (sortSelect.value) {
                case 'priceLow':
                    data = data.sort((a, b) => a.price - b.price);
                    break;
                case 'priceHigh':
                    data = data.sort((a, b) => b.price - a.price);
                    break;
                default:
                    data = data.sort((a, b) => b.rating - a.rating); // popular by rating
            }

            servicesGrid.innerHTML = '';
            data.slice(0, visibleCount).forEach(s => servicesGrid.insertAdjacentHTML('beforeend', serviceCardHTML(s)));
            loadMoreBtn.classList.toggle('d-none', visibleCount >= data.length);
        }

        function serviceCardHTML(s) {
            return `
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100 service-card rounded-2xl shadow-sm">
          <img src="${s.img}" class="card-img-top" alt="${s.title}">
          <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between align-items-start mb-1">
              <h6 class="mb-0">${s.title}</h6>
              <span class="badge text-bg-success"><i class="bi bi-star-fill me-1"></i>${s.rating}</span>
            </div>
            <div class="text-muted small mb-2">${s.category}</div>
            <div class="mt-auto d-flex justify-content-between align-items-center">
              <strong>${formatINR(s.price)}</strong>
              <button class="btn btn-sm btn-primary" data-service-id="${s.id}" data-bs-toggle="modal" data-bs-target="#bookModal">Book</button>
            </div>
          </div>
        </div>
      </div>`;
        }

        // Event listeners
        [searchInput, filterCategory, sortSelect].forEach(el => el.addEventListener('input', () => {
            visibleCount = 8;
            renderServices();
        }));
        loadMoreBtn.addEventListener('click', () => {
            visibleCount += 4;
            renderServices();
        });

        // Booking modal fill
        document.addEventListener('click', (e) => {
            const btn = e.target.closest('[data-service-id]');
            if (!btn) return;
            const svc = SERVICES.find(x => x.id == btn.dataset.serviceId);
            document.getElementById('bookService').value = `${svc.title} • ${formatINR(svc.price)}`;
            document.getElementById('bookTitle').textContent = `Book: ${svc.title}`;
        });

        // City popular list (footer)
        function renderCityPopular() {
            const city = citySelect.value;
            const list = document.getElementById('cityPopular');
            const popular = {
                'Delhi NCR': ['Bathroom Cleaning', 'AC Service', 'Electrician Visit'],
                'Mumbai': ['Kitchen Deep Cleaning', 'Classic Facial', 'Plumber Visit'],
                'Bengaluru': ['1BHK Deep Cleaning', 'AC Service', 'Carpenter Visit'],
                'Hyderabad': ['Refrigerator Repair', 'Pedicure (Spa)', 'Electrician Visit'],
                'Pune': ['Bathroom Cleaning', 'Classic Facial', 'Washing Machine Repair'],
                'Jaipur': ['1BHK Deep Cleaning', 'Waxing (Full arms)', 'Plumber Visit'],
                'Kolkata': ['Kitchen Deep Cleaning', 'AC Service', 'Carpenter Visit'],
                'Chennai': ['Refrigerator Repair', 'Pedicure (Spa)', 'Electrician Visit']
            } [city] || ['AC Service', 'Bathroom Cleaning', 'Electrician Visit'];

            list.innerHTML = popular.map(i => `<li>${i}</li>`).join('');
        }

        citySelect.addEventListener('change', renderCityPopular);

        // Form validation (Bootstrap)
        (() => {
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', e => {
                    if (!form.checkValidity()) {
                        e.preventDefault();
                        e.stopPropagation();
                    } else if (form.id === 'bookForm') {
                        e.preventDefault();
                        const date = document.getElementById('bookDate').value;
                        const time = document.getElementById('bookTime').value;
                        const address = document.getElementById('bookAddress').value;
                        const service = document.getElementById('bookService').value;
                        const toast = document.createElement('div');
                        toast.className =
                            'toast align-items-center text-bg-success border-0 position-fixed bottom-0 end-0 m-3';
                        toast.setAttribute('role', 'alert');
                        toast.innerHTML =
                            `<div class="d-flex"><div class="toast-body">Booked <strong>${service}</strong> for <strong>${date}</strong> at <strong>${time}</strong>.<br> Address: ${address}</div><button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button></div>`;
                        document.body.appendChild(toast);
                        new bootstrap.Toast(toast).show();
                        const modalEl = document.getElementById('bookModal');
                        bootstrap.Modal.getInstance(modalEl).hide();
                        form.reset();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();

        // Init
        document.getElementById('year').textContent = new Date().getFullYear();
        renderServices();
        renderCityPopular();
    </script>

@endsection
