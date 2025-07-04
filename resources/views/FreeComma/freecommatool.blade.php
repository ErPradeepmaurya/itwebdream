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
        <div class="clearfix"></div>

        <div class="col-xs-12">

            <div class="settings" ng-click="showSettings" ng-class="{open : settings.showSettings == true}">
                <div class="settings_btn">
                    <a href="" id="settings" type="button" ng-click="toggleSettings(settings)">
                        <span class="glyphicon glyphicon-cog"></span> Converter Settings
                    </a>
                </div>
                <form>
                    <fieldset>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Tidy Up</label><br />
                                    <p>Remove the new lines from output?</p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <div class="row">
                                            <div class="btn-group" data-toggle="buttons-radio">
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <button type="button" class="btn btn-primary block active"
                                                        ng-click="settings.newLine=1">Yes</button>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <button type="button" class="btn btn-primary block"
                                                        ng-click="settings.newLine=0">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Attack the clones</label><br />
                                    <p>Remove the duplicates from the result set</p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <div class="row">
                                            <div class="btn-group" data-toggle="buttons-radio">
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <button type="button" class="btn btn-primary block"
                                                        ng-click="settings.duplicate=1">Yes</button>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <button type="button" class="btn btn-primary block active"
                                                        ng-click="settings.duplicate=0">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Explode</label><br />
                                    <p>Explode your records using this</p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <div class="row">
                                            <div class="btn-group" data-toggle="buttons-radio">
                                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                                    <button type="button" class="btn btn-primary block active"
                                                        ng-click="settings.explode='\n'">New Lines</button>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                                    <button type="button" class="btn btn-primary block"
                                                        ng-click="settings.explode=' '">Spaces</button>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                                    <button type="button" class="btn btn-primary block"
                                                        ng-click="settings.explode=','">Commas</button>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                                    <button type="button" class="btn btn-primary block"
                                                        ng-click="settings.explode=';'">Semicolons</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Quotes</label><br />
                                    <p>Add quotes to each record</p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <div class="row">
                                            <div class="btn-group" data-toggle="buttons-radio">
                                                <div class="col-xs-12 col-sm-4">
                                                    <button type="button" class="btn btn-primary active block"
                                                        ng-click="settings.quotes='none'">No</button>
                                                </div>
                                                <div class="col-xs-12 col-sm-4">
                                                    <button type="button" class="btn btn-primary block"
                                                        ng-click="settings.quotes='double'">Double</button>
                                                </div>
                                                <div class="col-xs-12 col-sm-4">
                                                    <button type="button" class="btn btn-primary block"
                                                        ng-click="settings.quotes='single'">Single</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Delimiter</label><br />
                                    <p>Character used between records</p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <input class="form-control input-sm" type="text" id="delimiter"
                                            value="," name="delimiter" ng-model="settings.delimiter">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Tags </label>
                                    <p>Use Tags to wrap your records. EX : &lt;strong&gt;</p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Open Tag</label>
                                                <input class="form-control input-sm" type="text" id="delimiter"
                                                    value="" name="tag_open" ng-model="settings.tag_open"
                                                    placeholder="<li>">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Close Tag</label>
                                                <input class="form-control input-sm" type="text" id="delimiter"
                                                    value="" name="tag_close" ng-model="settings.tag_close"
                                                    placeholder="</li>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Interval</label>
                                    <p>Add a new line after x amount </p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <input class="form-control input-sm" type="text" id="result_break"
                                            value="" name="result_break" ng-model="settings.result_break">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-4 lbl">
                                    <label>Interval Wrap </label>
                                    <p>Wrap your intervals with tags</p>
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8">
                                    <div class="options">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Open Tag</label>
                                                <input class="form-control input-sm" type="text"
                                                    id="interval_wrap_open" value="" name="interval_wrap_open"
                                                    ng-model="settings.interval_wrap_open" placeholder="<ul>">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Close Tag</label>
                                                <input class="form-control input-sm" type="text"
                                                    id="interval_wrap_close" value="" name="interval_wrap_close"
                                                    ng-model="settings.interval_wrap_close" placeholder="</ul>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-xs-12">


            <div class="row">

                <div class="col-xs-12 col-md-3 ad" style="text-align:center;">

                </div>
                <div class="col-xs-12 col-md-6 ad" style="text-align:center;">

                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Delim -->
                    <ins class="adsbygoogle" style="display:block;margin:auto;" data-ad-client="ca-pub-9178477317992385"
                        data-ad-slot="8797329261" data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>


                <div class="col-xs-12 col-md-3 ad" style="text-align:center;">

                </div>


                <div class="clearfix">
    </section>

    <a name="about"></a>
    <section class="about">
        <h3 class="section-title">About Delim.co</h3>

        <div class="col-sm-12">
            <blockquote>
                <h2>delimiter : de&middot;lim&middot;it&middot;er</h2>
                <p class="quote">A <strong>delimiter</strong> is a sequence of one or more characters used to specify
                    the boundary between separate, independent regions in plain text or other data streams. An example
                    of a <strong>delimiter</strong> is the comma character, which acts as a field
                    <strong>delimiter</strong> in a sequence of comma-separated values.
                </p>
            </blockquote>
        </div>

        <div class="col-sm-4">
            <h3>SQL Queries</h3>
            <div class="big-img sql"></div>
            <p>Convert a list of zipcodes in a spreadsheet into a comma-separated list that you can put in a WHERE IN()
                block to run reports!</p>

        </div>
        <div class="col-sm-4">
            <h3>Programming</h3>
            <div class="big-img programming"></div>
            <p>Take the data you found from the CSV you bought it in, and make quick work of loading it into an array!
            </p>
        </div>
        <div class="col-sm-4">
            <h3>Your use case?</h3>
            <div class="big-img case"></div>
            <p>Who knows what you might use this for, but it's here... Hurry up!</p>
        </div>
        <div class="clearfix"></div>
    </section>
    <a name="creators"></a>
    <section class="creators">
        <h3 class="section-title">Support Delim.co via Crypto</h3>

        <div class="col-sm-4" style="text-align:center; padding: 15px;">
            <h3 style="margin-top: 0; margin-bottom: 10px;">Solana</h3>
            <img src="img/SOL.png" alt="Solana wallet qr code"
                style="width: 180px; height: 180px; border: 1px solid #eee; padding: 5px; border-radius: 4px; margin-bottom: 10px;" />
            <h5 style="font-size: 0.9em; word-break: break-all; color: #555; margin-top: 0;">SOL addr:
                AwQof9T3NjCLAkHk65LMVBW5dePb5mJ3ncYeAaUKpGNG</h5>

            <h3 style="margin-top: 25px; margin-bottom: 10px;">LiteCoin</h3>
            <img src="img/ltc.png" alt="Litecoin wallet qr code"
                style="width: 180px; height: 180px; border: 1px solid #eee; padding: 5px; border-radius: 4px; margin-bottom: 10px;" />
            <h5 style="font-size: 0.9em; word-break: break-all; color: #555; margin-top: 0;">LTC addr:
                MBM7EKN4ECrAzLLw8ajYMmziRvn9jz9wfa</h5>
        </div>

        <div class="col-sm-4" style="text-align:center; padding: 15px;">

            <h3 style="margin-top: 0; margin-bottom: 10px;">NANO</h3>
            <img src="img/nano.jpeg" alt="nano wallet qr code"
                style="width: 180px; height: 180px; border: 1px solid #eee; padding: 5px; border-radius: 4px; margin-bottom: 10px;" />
            <h5 style="font-size: 0.9em; word-break: break-all; color: #555; margin-top: 0;">NANO addr:
                nano_3tqykwupobpkatutk6gbhto4u863qqo49rnbx6ff6grhdwc3eyxnk6m8yh3o</h5>

            <h3 style="margin-top:25px; margin-bottom: 10px;">Dogecoin</h3>
            <img src="img/doge.png" alt="DOGE wallet qr code"
                style="width: 180px; height: 180px; border: 1px solid #eee; padding: 5px; border-radius: 4px; margin-bottom: 10px;" />
            <h5 style="font-size: 0.9em; word-break: break-all; color: #555; margin-top: 0;">DOGE addr:
                DP3Ntje7izQY3Vwvyje5MZyEMUvfXaxLLe</h5>
        </div>

        <div class="col-sm-4" style="text-align:center; padding: 15px;">

            <h3 style="margin-top: 0; margin-bottom: 10px;">Bitcoin</h3>
            <img src="img/bitcoin-wallet.png" alt="bitcoin wallet qr code"
                style="width: 180px; height: 180px; border: 1px solid #eee; padding: 5px; border-radius: 4px; margin-bottom: 10px;" />
            <h5 style="font-size: 0.9em; word-break: break-all; color: #555; margin-top: 0;">BTC addr:
                bc1qycke4kj9w0390m35gn27427fl9ntf0d4xpa2cw</h5>
            <p style="font-size: 0.8em; color: #888; margin-top: 5px;">Note: BTC Mainnet fees can be high for small
                donations.</p>


            <h3 style="margin-top: 25px; margin-bottom: 10px;">Ethereum</h3>
            <img src="img/eth.png" alt="ethereum wallet qr code"
                style="width: 180px; height: 180px; border: 1px solid #eee; padding: 5px; border-radius: 4px; margin-bottom: 10px;" />
            <h5 style="font-size: 0.9em; word-break: break-all; color: #555; margin-top: 0;">ETH addr:
                0x12C3D5CcdBa0D0718398094b99f763d493f29d2B</h5>
            <p style="font-size: 0.8em; color: #888; margin-top: 5px;">Note: ETH Mainnet fees can be high for small
                donations.</p>
        </div>

        <div class="clearfix"></div>
    </section>
    <div class="smedia">
        <ul>
            <li><a target="_blank"
                    href="https://twitter.com/home?status=Check+out+this+cool+online+comma+separating+tool%2C+http%3A%2F%2Fdelim.co%21%21"><img
                        src="/img/twitter.png"></a>
            <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdelim.co%2F"><img
                        src="/img/fb.png"></a>
            <li><a target="_blank" href="http://www.stumbleupon.com/submit?url=http://delim.co/"><img
                        src="/img/stumbleupon.png"></a>
            <li>&nbsp;</a>
        </ul>
    </div>
    <div class="to-the-top"><a href="#home"><span class="glyphicon glyphicon-circle-arrow-up"></span></a></div>
    <footer>
        <div class="row" style="padding-bottom:60px;">

            <div class="col-sm-3">
                <p style="text-align:left;">Hosted on a <a href="https://www.vultr.com/?ref=9702750-9J">Vultr VPS</a>
                </p>
            </div>
            <div class="col-sm-6">
                <p>Quit lookin' at my bottom.</p>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </footer>
    <script type="text/javascript">
        $(function() {

            $(".copy").on('click', function() {
                $(this).parent().find('.codearea').select();
            });
            $(".codearea").linedtextarea();
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                    .hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
            $(window).on('resize', function() {
                width = $('.workspace').outerWidth();
                $('.codearea').css('width', (width - $('.codelines').outerWidth() - 10));
            });

            scrollDude();
            $(window).on('scroll', function() {
                scrollDude();
            });

        });

        function scrollDude() {
            $('.uv-bottom-right').attr("style", "display: block !important");

            if ($(this).scrollTop() > 45) {
                $('nav').addClass('fixed');
            } else {
                $('nav').removeClass('fixed');
            }

            if ($(this).scrollTop() > 500) {
                $('.to-the-top, .uv-bottom-right, .smedia').addClass('fixed');


            } else {
                $('.to-the-top, .uv-bottom-right, .smedia').removeClass('fixed');

            }
        }
    </script>
@endsection
