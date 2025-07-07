@extends('layouts.app')
@section('title', 'Free Online Comma Separator Tool')
@section('content')

    <section class="py-1 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1 class="display-5 fw-bold mb-4">Free Comma Separating Tool</h1>
                    <div class="lead text-muted mb-5">
                        <p>Do you often need to take a spreadsheet of data and convert to a comma-delimited list? </br>
                            Be it for taking a list of zip codes or names to make an SQL query, or to take data from a CSV
                            and be able to
                            paste into an array.
                            At <a href="https://itwebdream.com">It Web DREAM</a> we make that just a little easier.</br>
                            Enter your non-delimited data on the left, hit the button, and boom, separated data on the
                            right.
                            Special configs are below if the defaults aren't what you need!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1 bg-light maincomma">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h3 class="display-5 fw-bold mb-4">Column Data Here...</h3>
                    <textarea id="editor1"></textarea>
                </div>
                <div class="col-sm-2 maincommacoder">
                    <div class="dropdown">
                        <button id="delimiterBtn" class="btn btn-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ,
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="setDelimiter(',')">,</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setDelimiter(';')">;</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setDelimiter('|')">|</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setDelimiter(' ')">Spaces</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setDelimiter('\n')">New Line</a></li>
                        </ul>
                    </div>
                    <div class="commarightbutton mt-3">
                        <button type="button"> > </button>
                    </div>
                    <div class="commaleftbutton mt-3">
                        <button type="button">
                            < </button>
                    </div>
                    <div class="commacrossbutton mt-3">
                        <button type="button">
                            X </button>
                    </div>

                </div>
                <div class="col-md-5">
                    <h3 class="display-5 fw-bold mb-4">Column Data Here...</h3>
                    <textarea id="editor2"></textarea>
                </div>
            </div>
        </div>
    </section>
@endsection
