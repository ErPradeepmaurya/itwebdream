{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delimiter Tool - Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            padding: 2rem;
        }

        textarea {
            resize: vertical;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mb-3">Comma Separator Tool</h2>

        <form action="{{ route('convert') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="input_data" class="form-label">Input</label>
                <textarea name="input_data" id="input_data" rows="6" class="form-control">{{ old('input_data', $data ?? '') }}</textarea>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Choose Delimiter</label>
                    <select name="delimiter" class="form-select">
                        <option value="," {{ isset($delimiter) && $delimiter == ',' ? 'selected' : '' }}>Comma
                            (,)</option>
                        <option value="\t" {{ isset($delimiter) && $delimiter == "\t" ? 'selected' : '' }}>Tab
                            (\t)</option>
                        <option value="|" {{ isset($delimiter) && $delimiter == '|' ? 'selected' : '' }}>Pipe (|)
                        </option>
                        <option value=" " {{ isset($delimiter) && $delimiter == ' ' ? 'selected' : '' }}>Space (
                            )</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" name="remove_duplicates" id="remove_duplicates"
                            {{ old('remove_duplicates') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remove_duplicates">Remove Duplicates</label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" name="trim_whitespace" id="trim_whitespace"
                            {{ old('trim_whitespace') ? 'checked' : '' }}>
                        <label class="form-check-label" for="trim_whitespace">Trim Whitespace</label>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary">Convert</button>
            <a href="{{ route('FreeComma.freecommatool') }}" class="btn btn-secondary">Clear</a>
        </form>

        @if (isset($output))
            <div class="mt-4">
                <label class="form-label">Output ({{ $count ?? 0 }} items)</label>
                <textarea id="output_text" class="form-control" rows="4">{{ $output }}</textarea>
                <button onclick="copyOutput()" class="btn btn-success mt-2">Copy</button>
            </div>
        @endif
    </div>

    <script>
        function copyOutput() {
            const textarea = document.getElementById("output_text");
            textarea.select();
            document.execCommand("copy");
            alert("Output copied!");
        }
    </script>
</body>

</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delimiter Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin-top: 30px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #6c757d;
            color: white;
            border-radius: 10px 10px 0 0 !important;
        }

        .btn-primary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-primary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .count-badge {
            background-color: #6c757d;
            font-size: 0.9rem;
        }

        textarea {
            min-height: 200px;
            resize: vertical;
        }

        .delimiter-option {
            cursor: pointer;
        }

        .delimiter-option.active {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Delimiter Tool</h3>
                <p class="mb-0">Convert between delimiters easily</p>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="input_text" class="form-label">Input Text</label>
                        <textarea class="form-control" id="input_text" rows="6" placeholder="Enter your text here..."></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="output_text" class="form-label">Output Text</label>
                        <textarea class="form-control" id="output_text" rows="6" readonly></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between">
                            <span>Characters: <span id="input_char_count" class="badge count-badge">0</span></span>
                            <span>Items: <span id="input_item_count" class="badge count-badge">0</span></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between">
                            <span>Characters: <span id="output_char_count" class="badge count-badge">0</span></span>
                            <span>Items: <span id="output_item_count" class="badge count-badge">0</span></span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                            <label class="btn btn-outline-secondary delimiter-option active" data-operation="delimit">
                                <input type="radio" name="operation" checked> Delimit (Add Commas)
                            </label>
                            <label class="btn btn-outline-secondary delimiter-option" data-operation="undelimit">
                                <input type="radio" name="operation"> Undelimit (Remove Commas)
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Delimiter:</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-secondary delimiter-option active" data-delimiter=",">
                                    <input type="radio" name="delimiter" checked> Comma
                                </label>
                                <label class="btn btn-outline-secondary delimiter-option" data-delimiter=";">
                                    <input type="radio" name="delimiter"> Semicolon
                                </label>
                                <label class="btn btn-outline-secondary delimiter-option" data-delimiter="|">
                                    <input type="radio" name="delimiter"> Pipe
                                </label>
                                <label class="btn btn-outline-secondary delimiter-option" data-delimiter="newline">
                                    <input type="radio" name="delimiter"> New Line
                                </label>
                                <label class="btn btn-outline-secondary delimiter-option" data-delimiter=" ">
                                    <input type="radio" name="delimiter"> Space
                                </label>
                                <label class="btn btn-outline-secondary delimiter-option" data-delimiter="\t">
                                    <input type="radio" name="delimiter"> Tab
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between">
                        <div>
                            <button id="clear_btn" class="btn btn-outline-secondary">
                                <i class="fas fa-trash-alt"></i> Clear
                            </button>
                            <button id="example_btn" class="btn btn-outline-secondary">
                                <i class="fas fa-lightbulb"></i> Example
                            </button>
                        </div>
                        <div>
                            <button id="copy_btn" class="btn btn-primary">
                                <i class="fas fa-copy"></i> Copy Output
                            </button>
                            <button id="download_btn" class="btn btn-primary">
                                <i class="fas fa-download"></i> Download
                            </button>
                            <button id="process_btn" class="btn btn-success">
                                <i class="fas fa-cog"></i> Process
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentOperation = 'delimit';
            let currentDelimiter = ',';

            // Update operation
            $('.delimiter-option[data-operation]').click(function() {
                $('.delimiter-option[data-operation]').removeClass('active');
                $(this).addClass('active');
                currentOperation = $(this).data('operation');
            });

            // Update delimiter
            $('.delimiter-option[data-delimiter]').click(function() {
                $('.delimiter-option[data-delimiter]').removeClass('active');
                $(this).addClass('active');
                currentDelimiter = $(this).data('delimiter');
            });

            // Process button
            $('#process_btn').click(function() {
                const inputText = $('#input_text').val();

                if (!inputText.trim()) {
                    alert('Please enter some text to process');
                    return;
                }

                $.ajax({
                    url: '/process',
                    method: 'POST',
                    data: {
                        input_text: inputText,
                        delimiter: currentDelimiter,
                        operation: currentOperation,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#output_text').val(response.result);
                        $('#output_char_count').text(response.char_count);
                        $('#output_item_count').text(response.item_count);

                        // Update input counts
                        $('#input_char_count').text(inputText.length);
                        if (currentOperation === 'delimit') {
                            const items = inputText.split(currentDelimiter === 'newline' ?
                                '\n' : currentDelimiter);
                            $('#input_item_count').text(items.filter(item => item.trim() !== '')
                                .length);
                        } else {
                            $('#input_item_count').text(response.item_count);
                        }
                    },
                    error: function() {
                        alert('An error occurred while processing your text');
                    }
                });
            });

            // Clear button
            $('#clear_btn').click(function() {
                $('#input_text').val('');
                $('#output_text').val('');
                $('#input_char_count').text('0');
                $('#output_char_count').text('0');
                $('#input_item_count').text('0');
                $('#output_item_count').text('0');
            });

            // Example button
            $('#example_btn').click(function() {
                const exampleText = currentOperation === 'delimit' ?
                    "apple\nbanana\ncherry\ndate\napple\nbanana" :
                    "apple,banana,cherry,date,apple,banana";

                $('#input_text').val(exampleText);
                $('#input_char_count').text(exampleText.length);

                if (currentOperation === 'delimit') {
                    const items = exampleText.split('\n');
                    $('#input_item_count').text(items.filter(item => item.trim() !== '').length);
                } else {
                    const items = exampleText.split(',');
                    $('#input_item_count').text(items.filter(item => item.trim() !== '').length);
                }
            });

            // Copy button
            $('#copy_btn').click(function() {
                const outputText = $('#output_text').val();
                if (!outputText) {
                    alert('No output to copy');
                    return;
                }

                navigator.clipboard.writeText(outputText).then(function() {
                    alert('Copied to clipboard!');
                }, function() {
                    // Fallback for older browsers
                    $('#output_text').select();
                    document.execCommand('copy');
                    alert('Copied to clipboard!');
                });
            });

            // Download button
            $('#download_btn').click(function() {
                const outputText = $('#output_text').val();
                if (!outputText) {
                    alert('No output to download');
                    return;
                }

                const blob = new Blob([outputText], {
                    type: 'text/plain'
                });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'delimited_text.txt';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            });

            // Update character count as user types
            $('#input_text').on('input', function() {
                $('#input_char_count').text($(this).val().length);
            });
        });
    </script>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delimiter Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin-top: 20px;
        }

        .data-column {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 500px;
            display: flex;
            flex-direction: column;
        }

        .data-header {
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        textarea {
            flex-grow: 1;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            resize: none;
            font-family: monospace;
        }

        .action-column {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 15px;
        }

        .btn-process {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-process:hover {
            background-color: #45a049;
        }

        .options-panel {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .option-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .delimiter-option {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .action-buttons {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        .action-btn {
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
        }

        .action-btn:hover {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Left Column - Input Data -->
            <div class="col-md-5">
                <div class="data-column">
                    <div class="data-header">Column Data Here...</div>
                    <textarea id="input_text" placeholder="Paste your column data here..."></textarea>
                    <div class="mt-2">
                        <span>Characters: <span id="input_char_count" class="badge bg-secondary">0</span></span>
                        <span class="ms-2">Items: <span id="input_item_count"
                                class="badge bg-secondary">0</span></span>
                    </div>
                </div>
            </div>

            <!-- Middle Column - Action Buttons -->
            <div class="col-md-2 action-column">
                <button id="process_btn" class="btn-process">
                    <i class="fas fa-arrow-right"></i> Select
                </button>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="removeDuplicates" checked>
                    <label class="form-check-label" for="removeDuplicates">Remove Duplicates</label>
                </div>
            </div>

            <!-- Right Column - Output Data -->
            <div class="col-md-5">
                <div class="data-column">
                    <div class="data-header">Delimited Data Here...</div>
                    <textarea id="output_text" readonly placeholder="Your delimited data will appear here..."></textarea>
                    <div class="mt-2">
                        <span>Characters: <span id="output_char_count" class="badge bg-secondary">0</span></span>
                        <span class="ms-2">Items: <span id="output_item_count"
                                class="badge bg-secondary">0</span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Options Panel -->
        <div class="row mt-4">
            <div class="col-md-12 options-panel">
                <div class="option-title">Delimiter Options:</div>
                <div>
                    <button class="btn btn-sm delimiter-option active" data-delimiter=",">Comma (,)</button>
                    <button class="btn btn-sm delimiter-option" data-delimiter=";">Semicolon (;)</button>
                    <button class="btn btn-sm delimiter-option" data-delimiter="|">Pipe (|)</button>
                    <button class="btn btn-sm delimiter-option" data-delimiter="\t">Tab</button>
                    <button class="btn btn-sm delimiter-option" data-delimiter=" ">Space</button>
                    <button class="btn btn-sm delimiter-option" data-delimiter="newline">New Line</button>
                </div>

                <div class="action-buttons">
                    <button id="copy_btn" class="action-btn">
                        <i class="fas fa-copy"></i> Copy
                    </button>
                    <button id="download_btn" class="action-btn">
                        <i class="fas fa-download"></i> Download
                    </button>
                    <button id="clear_btn" class="action-btn">
                        <i class="fas fa-trash-alt"></i> Clear
                    </button>
                    <button id="example_btn" class="action-btn">
                        <i class="fas fa-lightbulb"></i> Example
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentDelimiter = ',';

            // Update delimiter selection
            $('.delimiter-option').click(function() {
                $('.delimiter-option').removeClass('active');
                $(this).addClass('active');
                currentDelimiter = $(this).data('delimiter');
            });

            // Process button
            $('#process_btn').click(function() {
                const inputText = $('#input_text').val();
                const removeDuplicates = $('#removeDuplicates').is(':checked');

                if (!inputText.trim()) {
                    alert('Please enter some text to process');
                    return;
                }

                $.ajax({
                    url: '/process',
                    method: 'POST',
                    data: {
                        input_text: inputText,
                        delimiter: currentDelimiter,
                        operation: 'delimit',
                        remove_duplicates: removeDuplicates,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#output_text').val(response.result);
                        $('#output_char_count').text(response.char_count);
                        $('#output_item_count').text(response.item_count);

                        // Update input counts
                        $('#input_char_count').text(inputText.length);
                        const items = inputText.split('\n');
                        $('#input_item_count').text(items.filter(item => item.trim() !== '')
                            .length);
                    },
                    error: function() {
                        alert('An error occurred while processing your text');
                    }
                });
            });

            // Clear button
            $('#clear_btn').click(function() {
                $('#input_text').val('');
                $('#output_text').val('');
                $('#input_char_count').text('0');
                $('#output_char_count').text('0');
                $('#input_item_count').text('0');
                $('#output_item_count').text('0');
            });

            // Example button
            $('#example_btn').click(function() {
                const exampleText = "apple\nbanana\ncherry\ndate\napple\nbanana";
                $('#input_text').val(exampleText);
                $('#input_char_count').text(exampleText.length);
                const items = exampleText.split('\n');
                $('#input_item_count').text(items.filter(item => item.trim() !== '').length);
            });

            // Copy button
            $('#copy_btn').click(function() {
                const outputText = $('#output_text').val();
                if (!outputText) {
                    alert('No output to copy');
                    return;
                }

                navigator.clipboard.writeText(outputText).then(function() {
                    alert('Copied to clipboard!');
                }, function() {
                    // Fallback for older browsers
                    $('#output_text').select();
                    document.execCommand('copy');
                    alert('Copied to clipboard!');
                });
            });

            // Download button
            $('#download_btn').click(function() {
                const outputText = $('#output_text').val();
                if (!outputText) {
                    alert('No output to download');
                    return;
                }

                const blob = new Blob([outputText], {
                    type: 'text/plain'
                });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'delimited_text.txt';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            });

            // Update character count as user types
            $('#input_text').on('input', function() {
                $('#input_char_count').text($(this).val().length);
            });
        });
    </script>
</body>

</html>
