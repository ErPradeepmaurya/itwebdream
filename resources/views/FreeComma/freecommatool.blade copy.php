{{-- @extends('layoutstwo.app')
@section('title', 'online-free-comma-separator-tool')
@section('content')
    <h1>Online Comma Saprator tool</h1>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Comma Separator Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .main-container {
            margin-top: 40px;
        }

        textarea {
            resize: none;
            height: 400px;
        }

        .btn-icon {
            font-size: 20px;
            width: 50px;
            margin: 10px auto;
        }

        .delimiter-select {
            height: 50px;
            text-align: center;
            font-weight: bold;
        }

        .title {
            color: #0d6efd;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container main-container">
        <div class="row text-center mb-4">
            <h1 class="title">Online Delimiter Tool (Clone of delim.co)</h1>
        </div>
        <div class="row justify-content-center">
            <!-- Left Textarea -->
            <div class="col-md-4">
                <h5 class="text-primary">Column Data Here...</h5>
                <textarea class="form-control" id="inputText"></textarea>
            </div>

            <!-- Buttons and Select -->
            <div class="col-md-2 text-center">
                <select id="delimiter" class="form-select delimiter-select mb-3">
                    <option value=",">Comma (,)</option>
                    <option value=";">Semicolon (;)</option>
                    <option value="|">Pipe (|)</option>
                    <option value=" ">Space ( )</option>
                    <option value="newline">New Line</option>
                    <option value="nospace">Remove Spaces</option>
                </select>
                <button class="btn btn-info text-white btn-icon" onclick="convert('forward')">➤</button>
                <button class="btn btn-info text-white btn-icon" onclick="convert('backward')">⬅</button>
                <button class="btn btn-danger btn-icon" onclick="clearText()">✖</button>
            </div>

            <!-- Right Textarea -->
            <div class="col-md-4">
                <h5 class="text-primary">Delimited Data Here...</h5>
                <textarea class="form-control" id="outputText"></textarea>
                <div class="text-end mt-2">
                    <button class="btn btn-outline-primary btn-sm" onclick="copyText()">Select</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        function convert(direction) {
            const delimiter = document.getElementById("delimiter").value;
            let input = document.getElementById("inputText").value.trim();
            let output = "";

            if (direction === 'forward') {
                const lines = input.split('\n').filter(line => line.trim() !== '');
                if (delimiter === "newline") {
                    output = lines.join('\n');
                } else if (delimiter === "nospace") {
                    output = lines.join('').replace(/\s+/g, '');
                } else {
                    output = lines.join(delimiter);
                }
            } else if (direction === 'backward') {
                if (delimiter === "newline") {
                    output = input;
                } else if (delimiter === "nospace") {
                    output = input.split('').join('\n');
                } else {
                    output = input.split(delimiter).join('\n');
                }
            }

            document.getElementById("outputText").value = output;
        }

        function clearText() {
            document.getElementById("inputText").value = "";
            document.getElementById("outputText").value = "";
        }

        function copyText() {
            const output = document.getElementById("outputText");
            output.select();
            output.setSelectionRange(0, 99999); // for mobile
            navigator.clipboard.writeText(output.value);
        }
    </script>

</body>

</html>

<!-- final working code  below -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Comma Separator Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f8f9fa;
            color: #333;
        }

        header,
        footer {
            background-color: #ffffff;
            padding: 15px 30px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        h1 {
            margin: 0;
            color: #008cba;
        }

        .container {
            display: flex;
            justify-content: center;
            padding: 30px;
        }

        .panel {
            width: 40%;
            position: relative;
        }

        .panel textarea {
            width: 100%;
            height: 400px;
            padding-left: 40px;
            box-sizing: border-box;
            font-family: monospace;
            font-size: 14px;
            resize: vertical;
        }

        .line-numbers {
            position: absolute;
            top: 0;
            left: 0;
            width: 35px;
            text-align: right;
            padding-right: 5px;
            background: #f1f1f1;
            font-family: monospace;
            font-size: 14px;
            color: #aaa;
            height: 100%;
            overflow: hidden;
        }

        .controls {
            margin: 0 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .controls select,
        .controls button {
            margin-bottom: 10px;
            padding: 10px;
            width: 100px;
            border: none;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }

        .controls select {
            background: #ddd;
            color: #333;
            cursor: pointer;
        }

        .convert {
            background: #008cba;
        }

        .reverse {
            background: #007299;
        }

        .clear {
            background: #e74c3c;
        }

        footer {
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Online Free Comma Separator Tool</h1>
    </header>

    <div class="container">
        <!-- Left Panel -->
        <div class="panel">
            <div class="line-numbers" id="lineNumbersLeft"></div>
            <textarea id="inputData" placeholder="Column Data Here..."></textarea>
        </div>

        <!-- Controls -->
        <div class="controls">
            <select id="delimiter">
                <option value=",">Comma (,)</option>
                <option value=";">Semicolon (;)</option>
                <option value="|">Pipe (|)</option>
                <option value=" ">Space ( )</option>
                <option value="nospace">Remove Spaces</option>
                <option value="newline">New Line (qb)</option>
            </select>
            <button class="convert" onclick="convertData()">➤</button>
            <button class="reverse" onclick="reverseData()">⬅</button>
            <button class="clear" onclick="clearData()">✖</button>
        </div>

        <!-- Right Panel -->
        <div class="panel">
            <div class="line-numbers" id="lineNumbersRight"></div>
            <textarea id="outputData" placeholder="Delimited Data Here..."></textarea>
        </div>
    </div>

    <footer>
        &copy; 2025 Comma Separator Tool | Built with ❤️
    </footer>

    <script>
        function updateLineNumbers(textareaId, lineNumberId) {
            const textarea = document.getElementById(textareaId);
            const lineNumbers = document.getElementById(lineNumberId);
            const lines = textarea.value.split('\n').length;
            lineNumbers.innerHTML = Array.from({
                length: lines
            }, (_, i) => i + 1).join('\n');
        }

        function convertData() {
            const input = document.getElementById("inputData").value.split('\n').filter(Boolean);
            const delimiter = document.getElementById("delimiter").value;
            let output = "";

            if (delimiter === "nospace") {
                output = input.join("").replace(/\s+/g, "");
            } else if (delimiter === "newline") {
                output = input.join("\nq\nb\n");
            } else {
                output = input.join(delimiter);
            }

            document.getElementById("outputData").value = output;
            updateLineNumbers("outputData", "lineNumbersRight");
        }

        function reverseData() {
            const output = document.getElementById("outputData").value;
            let result;

            if (output.includes("\nq\nb\n")) {
                result = output.split("\nq\nb\n");
            } else if (output.includes(",")) {
                result = output.split(",");
            } else if (output.includes(";")) {
                result = output.split(";");
            } else if (output.includes("|")) {
                result = output.split("|");
            } else if (output.includes(" ")) {
                result = output.split(" ");
            } else {
                result = [output];
            }

            document.getElementById("inputData").value = result.join('\n');
            updateLineNumbers("inputData", "lineNumbersLeft");
        }

        function clearData() {
            document.getElementById("inputData").value = "";
            document.getElementById("outputData").value = "";
            updateLineNumbers("inputData", "lineNumbersLeft");
            updateLineNumbers("outputData", "lineNumbersRight");
        }

        // Attach events to update line numbers
        document.getElementById("inputData").addEventListener("input", () => updateLineNumbers("inputData", "lineNumbersLeft"));
        document.getElementById("outputData").addEventListener("input", () => updateLineNumbers("outputData", "lineNumbersRight"));

        // Initial line numbers
        updateLineNumbers("inputData", "lineNumbersLeft");
        updateLineNumbers("outputData", "lineNumbersRight");
    </script>
</body>

</html>