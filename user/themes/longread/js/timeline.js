// fill timeline with section headers
var $sectionHeaders = $('.post-content h2');
$sectionHeaders.each(function (index, element) {
    $('ul.cbp_tm-timeline').append(function (index, html) {
        var htmlString = "";
        htmlString += "<li><img class='cbp_tm-icon-timeline-pointer' src='/user/themes/longread/images/timeline-pointer-white.svg' alt=''><div class='cbp_tm-text'>"
        if ($(element).next('.title-date')) {
            htmlString += "<time class='cbp_tm-time' datetime='1938-10-06'>"+ $(element).next('.title-date').text() +"</time>"
        }
        htmlString += "<h2 class='cbp_tm-label f-uni-grotesk-bold'>"+$(element).text()+"</h2>"
        htmlString += "</div></li>"
        return htmlString;
    });
})