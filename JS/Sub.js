function nextSlide() {
    var q = function(sel) { return document.querySelector(sel); }
    q(".showcase").appendChild(q(".showcase a:first-child"));
};
setInterval(nextSlide, 3000);
