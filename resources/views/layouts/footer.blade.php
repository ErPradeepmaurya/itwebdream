<!-- Contact Section -->
<section id="contact" class="bg-light">
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

<a href="https://api.whatsapp.com/send?phone=8707579029" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<footer class="footer-copyright py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-dark fw-bold mb-0">&copy; {{ date('Y') }} ITWEBDREAM Software Solutions. All rights
                    reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="text-dark mb-0"><a href="{{ route('terms-conditions') }}" class="text-dark mb-0">Terms &
                        Conditions</a> |
                    <a href="{{ route('privacy-policy') }}" class="text-dark mb-0">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script>
    const user = "pusmaurya4";
    const domain = "gmail.com";
    const email = user + "@" + domain;
    document.getElementById("email").innerHTML = `<a href="mailto:${email}">${email}</a>`;
</script>
<script src="{{ asset('asset/main/js/main.js') }}"></script>
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
