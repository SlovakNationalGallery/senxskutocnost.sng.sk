$( document ).ready(function() {
    // fill timeline with section headers
    var $sectionHeaders = $('.post-content h2');
    $sectionHeaders.each(function (index, element) {
        $('ul.cbp_tm-timeline').append(function (index, html) {
            var htmlString = "";
            htmlString += "<li><img class='cbp_tm-icon-timeline-pointer' src='/user/themes/longread/images/timeline-pointer-white.svg' alt=''><div class='cbp_tm-text'>"
            htmlString += "<h2 class='cbp_tm-label f-uni-grotesk-bold'><a href='#"+$(element).attr('id')+"'>"+$(element).text()+"</a></h2>"
            if ($(element).next('.title-date')) {
                htmlString += "<time class='cbp_tm-time' datetime='1938-10-06'>"+ $(element).next('.title-date').text() +"</time>"
            }
            htmlString += "</div></li>"
            return htmlString;
        });
    });

    // insert class to headings that need vertival offset to account for fixed pos nav bar
    $('.post-content h1, .post-content h2, .post-content h3, .post-content h4').addClass('offset-link');
    
    UIkit.offcanvas.onShow = function () {
        setTimelineBottom();
    }
    function setTimelineBottom() {
        // shorten vertical line to stop at last icon
        var lastHeight = $(".cbp_tm-text").last().outerHeight() - 10;
        document.styleSheets[0].addRule('.cbp_tm-timeline::before','bottom: '+lastHeight+'px !important');
    }
});
