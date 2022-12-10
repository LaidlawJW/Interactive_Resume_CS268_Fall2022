topButton = document.getElementById("top-button");
console.log(topButton);

topButton.onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

//  Function designed to throttle visibleCheck so that it doesn't execute
//  excessively. May seem unnecessary here given the complexity of visibleCheck
//  but could be effective if more scroll-dependent functions are incorporated later.
function throttle(func, delayTime) {

    //  Logging current time
    time = Date.now();

    return function() {
        //  If delayTime milliseconds have passed since
        //  last execution, allow function to execute
        if((time + delayTime - Date.now()) <= 0) {
            func();

            //  Reset time
            time = Date.now();
        }
    };
}

function visibleCheck() {

    //  Using document.body and documentElement for added safari compatibility
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        topButton.style.visibility = "visible";
        topButton.style.opacity = "1";
    }
    else {
        topButton.style.visibility = "hidden";
        topButton.style.opacity = "0";
    }
}

//  Allow visibleCheck to execute only every 50ms
window.addEventListener('scroll', throttle(visibleCheck, 50))




navMenuLinks = document.getElementsByClassName("nav-menu-container");

//  Storing number of nav menu links
numNavMenuLinks = navMenuLinks.length;

navPopup = document.getElementById("nav-popup");
menuButton = document.getElementById("menu-button");

isOpen = false;

//  When menu button is clicked, display navbar menu.
//  When it is clicked again, Collapse navbar menu
menuButton.onclick = function () {

    if(!isOpen) {
        //  Accounts for borders (the first child has a border-top of 1px)
        navPopup.style.height = (numNavMenuLinks * 50 + 1) + "px";
        isOpen = true;
    }
    else {
        navPopup.style.height = "0px";
        isOpen = false;
    }

}