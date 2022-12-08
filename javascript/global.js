console.log("working");

topButton = document.getElementById("top-button");
console.log(topButton);

//  When user clicks on button, scroll to top of page
topButton.onclick = function() {
    //  Safari compatibility
    document.body.scrollTop = 0;

    //  Other browsers (Chrome, Firefox, IE, Opera)
    document.documentElement.scrollTop = 0;
}

function throttle() {

}

function visibleCheck() {

    console.log("visiblecheck is working")

    // Using document.body and documentElement for added safari compatibility
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        topButton.style.visibility = "visible";
    }
    else {
        topButton.style.visibility = "hidden";
    }
}

window.addEventListener('scroll', throttle(visibleCheck, 100))

//  When user clicks on button, scroll to top of page
function scrollTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

function scrollThrottler() {

}