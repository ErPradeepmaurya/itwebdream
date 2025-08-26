<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Top Website and Software Development Company')</title>
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/main/image/favicon-itwebdream.png') }}">
    <meta name="keywords" content="@yield(
        'meta_keywords',
        'best digital marketing company, best website development company, mobile app development company, software development company in india,
                    website design company near me,
                    best software development company in india,
                    best software development company in lucknow,
                    website design services in india,
                    ecommerce website designing company in india,
                    ecommerce website development company in india.'
    )">
    <meta name="description" content="@yield('meta_description', 'Looking for top app development and web design services in India? Get expert mobile apps, ecommerce stores, responsive websites, and custom solutions from leading developers. Affordable, scalable, and secure services tailored for your business growth.')">
    <meta property="og:title" content="@yield('og_title', 'Top Website and Software Development Company | Web & App Development Experts')">
    <meta property="og:description" content="@yield('og_description', 'We provide website design, web development, and custom software solutions trusted by top brands.')">
    <meta property="og:image" content="@yield('og_image', asset('asset/main/image/itwebdream-logo2.png'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="@yield('og_site_name', 'itwebdream')">
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "IT Web Dream",
        "url": "https://itwebdream.com",
        "logo": "https://itwebdream.com/asset/main/image/itwebdream-logo2.png",
        "description": "IT Web Dream is a custom software development agency offering website design, website development, and application development services.",
        "foundingDate": "2020",
        "founders": [
            {
            "@type": "Person",
            "name": "Pradeep Maurya"
            }
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-8707579029",
            "contactType": "Website and Software service provider",
            "areaServed": "IN",
            "availableLanguage": ["English", "Hindi"]
        },
        "sameAs": [
            "https://www.facebook.com/itwebdream",
            "https://twitter.com/itwebdream",
            "https://www.linkedin.com/company/itwebdream"
        ]
        }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/main/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MXLC92C9');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D93W2W3VN8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-D93W2W3VN8');
    </script>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXLC92C9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
