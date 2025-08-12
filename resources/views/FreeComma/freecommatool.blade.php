@extends('layoutstwo.apptwo')
@section('title', 'Free Online Comma Separator Tool')
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
@endsection
