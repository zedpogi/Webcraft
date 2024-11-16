const editor = document.getElementById("editor");
const input = document.getElementById("input");
const Output = document.getElementById("htmlOutput").contentDocument;
const executeButton = document.getElementById("execute");
const preset = "<!DOCTYPE html>  \n<html> \n<head> \n</head> \n<body> \n<h1> Test it out yourself! </h1> \n</body> \n</html>";
input.value = preset;


function openEditor(){
    console.log("Opening the Editor...")
    editor.style.display = "none";
}

function editEditor() {
    console.log("test")
    Output.open()
    Output.write(input.value);
    Output.close();
}

executeButton.onclick = editEditor
editor.addEventListener("click", openEditor);

// Di ko ma post yung JS so copypaste mo itong text