
CodeMirror.fromTextArea(document.getElementById("editor1"), {
    lineNumbers: true,
    mode: "javascript",
    theme: "default"
});

CodeMirror.fromTextArea(document.getElementById("editor2"), {
    lineNumbers: true,
    mode: "javascript",
    theme: "default"
});

// Default value
let selectedDelimiter = ',';

// Function to handle delimiter change
function setDelimiter(value) {
    selectedDelimiter = value;

    // Update button text based on selected value
    let label = value === ' ' ? 'Spaces' : (value === '\n' ? 'New Line' : value);
    document.getElementById("delimiterBtn").textContent = label;

    console.log("Delimiter selected:", selectedDelimiter);
}

// Optional: Set default on page load
window.onload = () => setDelimiter(selectedDelimiter);
