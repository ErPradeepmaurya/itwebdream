@extends('layouts.app')

@section('title', 'Free Online Comma Separator Tool')
{{-- <meta name="description" content="Come to delim.co for all your comma separating and online delimitor needs! Convert from column data to delimited and back!" /> --}}

@section('content')

    <a name="home"></a>
    <nav>
        <div class="bs-component">
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img class="logo" src="/img/delimlogo.png" /> - Free Comma
                        Delimiter</a>
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li style="display:none;"><a href="#convert">Converter</a></li>
                        <li style="display:none;"><a href="#about">About</a></li>
                        <li style="display:none;"><a href="#creators">Creators</a></li>
                        <li style="padding-right:2em;">
                            <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button"
                                data-slug="delim_co" data-color="#FFDD00" data-emoji="" data-font="Bree" data-text="Buy me a coffee &nbsp;"
                                data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff"></script>
                        </li>
                        <li style="padding-right:2em;font-weight:bold;display:none;"><a id="wiggleText"
                                style="color:yellow;" href="https://forms.gle/K1Wz6fNHNfafyeEs8">Delim.co 2.0 User
                                Survey<br /><small style="font-weight:normal;margin-top:3px;">Please provide feedback
                                    today!</small></a></li>
                    </ul>
                </div>
            </div>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
        </div>
        <style>
            .navbar .bmc-btn-container {
                zoom: 66.666%;
            }
        </style>
    </nav>
    <a name="convert"></a>
    <section class="maintext">
        <h1>Free Comma Separating Tool</h1>
        <p>Do you often need to take a spreadsheet of data and convert to a comma-delimited list? </p>
        <p>Be it for taking a list of zip codes or names to make an SQL query, or to take data from a CSV and be able to
            paste into an array.
            At <a href="http://delim.co">delim.co</a> we make that just a little easier.</p>
        <p>Enter your non-delimited data on the left, hit the button, and boom, separated data on the right.
            Special configs are below if the defaults aren't what you need!</p>
    </section>

    <section ng-app='delim' ng-controller='MainDelim' class="delimwrap">
        <div class="col-xs-5 col-hack">
            <div class="workspace vcenter">
                <h2 class="text-primary">Column Data Here...</h2>
                <textarea class="codearea scrollbars" ng-model="settings.docsv_string">this is a dummy data</textarea>
                {{-- <textarea class="codearea scrollbars" ng-model="settings.docsv_string">{{ settings . docsv_string }}</textarea> --}}
                <div class="copy">Select</div>
            </div>
        </div>
        <div class="col-xs-2 col-hack-sm">
            <div class="push col-xs-12">
                <div class="col-xs-12">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-delim"
                            data-toggle="dropdown">
                            {{-- {{ settings . delimiter }} --}}
                            this is a dummy data 2
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a ng-click="settings.delimiter=','">,</a></li>
                            <li><a ng-click="settings.delimiter=';'">;</a></li>
                            <li><a ng-click="settings.delimiter='|'">|</a></li>
                            <li><a ng-click="settings.delimiter='Spaces'">Spaces</a></li>
                            <li><a ng-click="settings.delimiter='New Line'">New Line</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-xs-12">
                    <a href="#" ng-click='addCommas(settings)' class="btn btn-primary btn-convert"><span
                            class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <div class=" col-xs-12">
                    <a href="#" ng-click='removeCommas(settings)' class="btn btn-primary btn-convert"><span
                            class="glyphicon glyphicon-chevron-left"></span></a>
                </div>
                <div class="col-xs-12">
                    <a href="#" ng-click='clr(settings)' class="btn btn-danger btn-clear"><span
                            class="glyphicon glyphicon-remove"></span></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-xs-5 col-hack">
            <div class="workspace vcenter">
                <h2 class="text-primary">Delimited Data Here...</h2>
                {{-- <textarea name='undo_csv' class="codearea scrollbars" ng-model="settings.undocsv_string">{{ settings . undocsv_string }}</textarea> --}}
                <div class="copy">Select</div>
            </div>
        </div>
    @endsection
