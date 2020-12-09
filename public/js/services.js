window.onload = function() {
    $("#loading").addClass("closeLoader");

    if (window.innerWidth >= 768) {
        setTimeout(function() {
            $("#left div").addClass("imageAnim1");
            $("#center div").addClass("imageAnim2");
            $("#right div").addClass("imageAnim3");
        }, 1000);

        setTimeout(function() {
            $("#left h3").addClass("titleAnim");
            $("#center h3").addClass("titleAnim");
            $("#right h3").addClass("titleAnim");
        }, 2100);
    } else {
        window.onscroll = function() {
            animationShow();
        };
    }

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

        var elementsToShowImage = document.querySelectorAll(
            ".show-on-scroll-image"
        );
        var elementsToShowTitle = document.querySelectorAll(
            ".show-on-scroll-title"
        );

        Array.prototype.forEach.call(elementsToShowTitle, function(element) {
            if (isElementInViewport(element)) {
                setTimeout(function() {
                    element.classList.add("titleAnim");
                }, 1000);
                $(element).removeClass("show-on-scroll-title");
            }
        });

        Array.prototype.forEach.call(elementsToShowImage, function(element) {
            if (isElementInViewport(element)) {
                element.classList.add("imageAnim1");
                $(element).removeClass("show-on-scroll-image");
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
                    (window.innerHeight ||
                        document.documentElement.clientHeight) &&
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
};
