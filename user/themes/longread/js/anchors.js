document.addEventListener("DOMContentLoaded", function(event) {
    $('.anchorjs-link').click(function(event) {
        var id = $(this).parent().attr('id');
        location.hash = id;
    });
});