$(document).ready(function() {
    if (localStorage.getItem('darkModeEnabled')) {
        $('body').addClass('dark-mode');
    }

    $('.dark-mode-toggle').click(function(e) {
        e.preventDefault();

        $('body').toggleClass('dark-mode');
        if ($('body').hasClass('dark-mode')) {
            localStorage.setItem('darkModeEnabled', true);
        } else {
            localStorage.removeItem('darkModeEnabled');
        }
    });
});
