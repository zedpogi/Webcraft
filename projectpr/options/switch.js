const htmlCard = document.querySelector('.html-card');
const jsCard = document.querySelector('.js-card');
const cssCard= document.querySelector('.css-card');

function urlSwitchHTML() {
    window.location.href = "/pr/HTML-content/1-content.html";
}
function urlSwitchCSS() {
    window.location.href = "/pr/CSS-content/1-css.html";
}
function urlSwitchJS() {
    window.location.href = "/pr/JS-content/js.html";
}

console.log("hi hi hi")

htmlCard.addEventListener("click", urlSwitchHTML);
jsCard.addEventListener("click", urlSwitchJS);
cssCard.addEventListener("click", urlSwitchCSS);