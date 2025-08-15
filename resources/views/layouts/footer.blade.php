<!-- Contact Section -->
<section id="contact" class="mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="display-5 fw-bold">Get In Touch</h2>
                <p class="lead mb-5">Ready to start your project? Contact us today for a free consultation.</p>
            </div>
        </div>

        <div class="row justify-content-center g-1">
            <!-- Email Card -->
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 border-0 p-3 contact-shadow">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            {{-- <p class="mb-0 text-muted"><a href="mainto:pusmaurya4@gmail.com">pusmaurya4@gmail.com</a>
                            </p> --}}
                            <p class="mb-0 text-muted" id="email"></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Phone Card -->
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 border-0 contact-shadow p-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone fa-2x text-primary me-3"></i>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p class="mb-0 text-muted"><a href="tel:8707579029">+91 8707579029</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Address Card -->
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 border-0 contact-shadow p-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <p class="mb-0 text-muted">Lucknow Sahara Road Jankipuram 226021, Uttar Pradesh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-copyright">
    <div class="container text-md-left">
        <div class="row">
            <!-- Services -->
            <div class="col-md-4 col-lg-3 col-xl-2 col-6 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-3">Our Services</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('web-development') }}" class="text-decoration-none d-block py-1">Web
                            Development</a></li>
                    <li><a href="{{ route('app-development') }}" class="text-decoration-none d-block py-1">Mobile App
                            Development</a></li>
                    <li><a href="{{ route('custome-web-development') }}"
                            class="text-decoration-none d-block py-1">Custom Software</a></li>
                    <li><a href="{{ route('uiux-design') }}" class="text-decoration-none d-block py-1">UI/UX
                            Design</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 col-lg-3 col-xl-2 col-6 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('welcome') }}" class="text-decoration-none d-block py-1">Home</a></li>
                    <li><a href="{{ route('aboutus') }}" class="text-decoration-none d-block py-1">About Us</a></li>
                    <li><a href="{{ route('faq') }}" class="text-decoration-none d-block py-1">FAQ</a></li>
                    <li><a href="{{ route('technology') }}" class="text-decoration-none d-block py-1">Technology</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-2 col-6 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-3">Finance Tool</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('FreeComma.emicalculator') }}"
                            class="text-decoration-none d-block py-1">Online
                            Emi Calculator</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-2 col-6 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-3">Developer Tool</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('FreeComma.freecommatool') }}" class="text-decoration-none d-block py-1">Comma
                            Separator Tool</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around border-top border-secondary">
        <p class="text-dark fw-bold">&copy; {{ date('Y') }} ITWEBDREAM Software Solutions. All rights
            reserved.
        </p>
        <p class="text-dark"><a href="{{ route('terms-conditions') }}" class="text-dark mb-0">Terms &
                Conditions</a> |
            <a href="{{ route('privacy-policy') }}" class="text-dark mb-0">Privacy Policy</a>
        </p>
    </div>
</footer>


<a href="https://api.whatsapp.com/send?phone=8707579029" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<style>
    .fixed-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #f8f9fa;
        /* adjust as needed */
        text-align: center;
        z-index: 1000;
        box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
    }
</style>
<script>
    const user = "itwebdream";
    const domain = "gmail.com";
    const email = user + "@" + domain;
    document.getElementById("email").innerHTML = `<a href="mailto:${email}">${email}</a>`;
</script>
<script src="{{ asset('asset/main/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("contextmenu", function(e) {
        e.preventDefault();
    });
    document.addEventListener("keydown", function(e) {
        if (e.key === "F12") {
            e.preventDefault();
        }
        if (e.ctrlKey && e.shiftKey && ["I", "J", "C"].includes(e.key.toUpperCase())) {
            e.preventDefault();
        }
        if (e.ctrlKey && ["U", "S"].includes(e.key.toUpperCase())) {
            e.preventDefault();
        }
    });
</script>

</body>

</html>
