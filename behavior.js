function switchTabs() {
    var location = window.location.hash.split('#').join('');

    if ($('.main section#' + location).length == 0) {
        location = 'home';
    }

    // select the right tab in the tab bar
    $('#navigation-tabs li.selected').removeClass('selected');
    $('#navigation-tabs li:has(a[href$="#' + location + '"])').addClass('selected');

    // display the right section in the main area
    $('.main section.selected').removeClass('selected');
    $('.main section#' + location).addClass('selected');
    $('.main section').not('.selected').hide();
    $('.main section.selected').show();

    $(window).scrollTop(0);
}

$(window).load(switchTabs);
$(window).bind('hashchange', switchTabs);
