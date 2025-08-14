@extends('layouts.app')

@section('title', 'terms and condition - itwebdream')


@section('content')
    <!-- Terms and Conditions Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-5 fw-bold text-center mb-5">Terms & Conditions</h1>

                    <!-- Introduction -->
                    <p class="lead text-muted">By accessing and utilizing our website (<strong>IT Web Dream</strong>), you
                        implicitly consent
                        to comply with and be bound by the subsequent Terms & Conditions articulated below. If you do not
                        agree with these terms, please refrain from using the website. All content and materials displayed
                        are protected under trademark and copyright laws of India.</p>

                    <!-- Website Usage Terms -->
                    <h2 class="h4 fw-bold mt-4">Website Usage Terms</h2>
                    <p class="lead text-muted"><strong>License:</strong> IT Web Dream grants users a limited, non-exclusive,
                        and revocable
                        license to access and use the website for non-commercial, informational purposes only.</p>

                    <p class="lead text-muted"><strong>Prohibited Activities:</strong> Users must not engage in unethical or
                        unlawful conduct,
                        including:</p>
                    <ul>
                        <li>Using the website for illegal activities</li>
                        <li>Attempting unauthorized access to website data</li>
                        <li>Spreading malicious software, viruses, or harmful scripts</li>
                    </ul>

                    <!-- Intellectual Property -->
                    <h2 class="h4 fw-bold mt-4">Intellectual Property</h2>
                    <ul>
                        <li><strong>Copyright:</strong> All website content including graphics, software, and text belongs
                            to IT Web Dream and is protected under Indian copyright law.</li>
                        <li><strong>Trademarks:</strong> All trademarks and logos are the property of IT Web Dream or
                            respective owners.</li>
                    </ul>

                    <!-- Privacy Policy -->
                    <h2 class="h4 fw-bold mt-4">Privacy Policy</h2>
                    <p class="lead text-muted">Usage of this website is governed by our <a
                            href="{{ route('privacy-policy') }}">Privacy Policy</a>.
                    </p>

                    <!-- Third-Party Links -->
                    <h2 class="h4 fw-bold mt-4">Links to Third-Party Websites</h2>
                    <p class="lead text-muted">Our website may contain links to third-party websites. IT Web Dream is not
                        responsible for
                        their content or practices. Visiting such sites is at your own risk.</p>

                    <!-- Disclaimer of Warranties -->
                    <h2 class="h4 fw-bold mt-4">Disclaimer of Warranties</h2>
                    <ul>
                        <li>The website is provided "as is" without warranties of any kind, including merchantability or
                            fitness for a particular purpose.</li>
                        <li>IT Web Dream makes no guarantees regarding the accuracy or reliability of website
                            content.</li>
                    </ul>

                    <!-- Limitation of Liability -->
                    <h2 class="h4 fw-bold mt-4">Limitation of Liability</h2>
                    <p class="lead text-muted">IT Web Dream is not liable for any direct, indirect, incidental, special, or
                        consequential
                        damages resulting from the use or inability to use the website.</p>

                    <!-- Refund Policy -->
                    <h2 class="h4 fw-bold mt-4">Refund Policy</h2>
                    <p class="lead text-muted">IT Web Dream aims for client satisfaction. After payment and contract
                        execution, clients are
                        offered alternate services instead of refunds. We recommend assessing your requirements carefully
                        before finalizing engagement.</p>

                    <!-- Changes to Terms -->
                    <h2 class="h4 fw-bold mt-4">Changes to Terms & Conditions</h2>
                    <p class="lead text-muted">We reserve the right to update these terms at any time without notice. Users
                        are encouraged to review
                        this section regularly to stay informed.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
