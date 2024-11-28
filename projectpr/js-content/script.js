document.getElementById('runButton').addEventListener('click', () => {
    const code = document.getElementById('editor').value;
    const outputFrame = document.getElementById('output');
    const outputDoc = outputFrame.contentDocument || outputFrame.contentWindow.document;
    outputDoc.open();
    outputDoc.write(code);
    outputDoc.close();
});