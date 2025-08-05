@extends('layoutstwo.apptwo')
@section('title', 'Online free comma separator tool')
@section('contenttwo')
    <section class="px-5">
        <div class="row comma-saprator">
            <h1 class="text-center fw-bold">Online Free Comma Separator Tool</h1>
            <p><b>Online Comma Separator Tool</b> - is a free and easy-to-use utility that helps you quickly convert your
                data
                into
                comma-separated format. Whether you're managing names, email addresses, product lists, or values for CSV
                files,
                this tool saves time and ensures accuracy. Simply paste your list, select your preferred delimiter
                <strong>(comma,
                    semicolon, pipe, space, or new line)</strong>, and get instant results. You can also remove extra spaces
                or
                reverse
                the
                format back to a line-by-line list. Ideal for students, developers, marketers, and data entry professionals.
            </p>
        </div>
    </section>
    <div class="maincontainer">
        <div class="panel">
            <div class="line-numbers" id="lineNumbersLeft"></div>
            <textarea id="inputData" placeholder="Column Data Here..."></textarea>
        </div>
        <div class="controls">
            <select id="delimiter" style="font-size: 14px">
                <option value=",">Comma (,)</option>
                <option value=";">Semicolon (;)</option>
                <option value="|">Pipe (|)</option>
                <option value=" ">Space ( )</option>
                <option value="nospace">Remove Spaces</option>
                <option value="newline">New Line (qb)</option>
            </select>
            <button class="convert" onclick="convertData()"><i class="bi bi-caret-right-fill fs-6"></i></button>
            <button class="reverse" onclick="reverseData()"><i class="bi bi-caret-left-fill fs-6"></i></button>
            <button class="clear" onclick="clearData()"><i class="bi bi-x-circle fs-6"></i></button>
        </div>
        <div class="panel">
            <div class="line-numbers" id="lineNumbersRight"></div>
            <textarea id="outputData" placeholder="Delimited Data Here..."></textarea>
        </div>
    </div>

    <section id="contact_us" class="bg-light mb-5">
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
                                <p class="mb-0 text-muted"><a
                                        href="mainto:contact@itwebdream.com">contact@itwebdream.com</a>
                                </p>
                                <p class="mb-0 text-muted" id="email"></p>
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
                                <p class="mb-0 text-muted">India, Uttar Pradesh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
