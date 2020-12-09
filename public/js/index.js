window.onload = function() {
    $("#loading").addClass("closeLoader");
    setTimeout(function() {
        $("#mainImageCompany").addClass("mainTitle1");
        $("#mainImageText").addClass("mainTitle2");
    }, 2000);

    window.onscroll = function() {
        animationShow();
    };
};

/* Pojawianie się elementów podczas scrolowania */

function animationShow() {
    // Pojawianie się elementów podczas skrolowania
    //
    //
    var scroll =
        window.requestAnimationFrame ||
        // IE Fallback
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        };

    var elementsToShow = document.querySelectorAll(".show-on-scroll");

    Array.prototype.forEach.call(elementsToShow, function(element) {
        if (isElementInViewport(element)) {
            element.classList.add("is-visible");
            $(element).removeClass("show-on-scroll");
        }
    });

    var elementsToWrite = document.querySelectorAll(".write-on-scroll");

    Array.prototype.forEach.call(elementsToWrite, function(element) {
        if (isElementInViewport(element)) {
            typewriter();
            $(element).removeClass("write-on-scroll");
        }
    });

    // Helper function from: http://stackoverflow.com/a/7557433/274826
    function isElementInViewport(el) {
        // special bonus for those using jQuery
        if (typeof jQuery === "function" && el instanceof jQuery) {
            el = el[0];
        }
        var rect = el.getBoundingClientRect();
        return (
            (rect.top <= 0 && rect.bottom >= 0) ||
            (rect.bottom >=
                (window.innerHeight || document.documentElement.clientHeight) &&
                rect.top <=
                    (window.innerHeight ||
                        document.documentElement.clientHeight)) ||
            (rect.top >= 0 &&
                rect.bottom <=
                    (window.innerHeight ||
                        document.documentElement.clientHeight))
        );
    }
}

// set up text to print, each item in array is new line
var aText = new Array(
    "Wylewki poziomowane są laserowo przez robota, a następnie zacierane sposobem mechanicznym, dzięki czemu są idealnie równe."
);
var iSpeed = 60; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines

var iTextPos = 0; // initialise text position
var sContents = ""; // initialise contents variable
var iRow; // initialise current row

function typewriter() {
    sContents = " ";
    iRow = Math.max(0, iIndex - iScrollAt);
    var destination = document.getElementById("typedtext");

    while (iRow < iIndex) {
        sContents += aText[iRow++] + "<br />";
    }
    destination.innerHTML =
        sContents + aText[iIndex].substring(0, iTextPos) + "_";
    if (iTextPos++ == iArrLength) {
        iTextPos = 0;
        iIndex++;
        if (iIndex != aText.length) {
            iArrLength = aText[iIndex].length;
            setTimeout("typewriter()", 500);
        }
    } else {
        setTimeout("typewriter()", iSpeed);
    }
}
