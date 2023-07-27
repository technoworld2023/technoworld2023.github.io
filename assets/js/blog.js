function toggleContent(itemNumber,spanId) {
    var content = document.getElementsByClassName("more")[itemNumber - 1];
    var dots = document.getElementsByClassName("dots")[itemNumber - 1];
    var arrow = document.getElementsByClassName("read-less-btn")[itemNumber - 1].querySelector("i");
    
    // content.style.display = "none";

    if (content.style.display === "none") {
        document.getElementById(spanId).innerHTML = "Show Less";
        content.style.display = "inline";
        dots.style.display = "none";
        arrow.classList.remove("fa-arrow-right");

        //arrow.classList.add("fa-arrow-down");
    } else {
        document.getElementById(spanId).innerHTML = "Continue Reading ...";
        content.style.display = "none";
        dots.style.display = "inline";
       //  arrow.classList.remove("fa-arrow-down");
        arrow.classList.add("fa-arrow-right");
    }
}

function contentClosed(itemNumber) {

    var content = document.getElementsByClassName("more")[itemNumber - 1];
    var dots = document.getElementsByClassName("dots")[itemNumber - 1];
    var arrow = document.getElementsByClassName("read-less-btn")[itemNumber - 1].querySelector("i");
document.getElementById('text1').innerHTML = "Continue Reading ...";
document.getElementById('text2').innerHTML = "Continue Reading ...";
    // Collapse the content by default
    content.style.display = "none";
    dots.style.display = "inline";
    arrow.classList.add("fa-arrow-right");
}