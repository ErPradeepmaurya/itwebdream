function updateLineNumbers(textareaId, lineNumberId) {
    const textarea = document.getElementById(textareaId);
    const lineNumbers = document.getElementById(lineNumberId);
    const lines = textarea.value.split('\n').length;
    lineNumbers.innerHTML = Array.from({
        length: lines
    }, (_, i) => `<div>${i + 1}</div>`).join('');

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
document.getElementById("inputData").addEventListener("input", () => updateLineNumbers("inputData",
    "lineNumbersLeft"));
document.getElementById("outputData").addEventListener("input", () => updateLineNumbers("outputData",
    "lineNumbersRight"));

// Initial line numbers
updateLineNumbers("inputData", "lineNumbersLeft");
updateLineNumbers("outputData", "lineNumbersRight");