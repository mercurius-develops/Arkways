jQuery(document).ready(($) => {
    const ENTER = 13;

    $('.live-search-list li').each(function () {
        $(this).attr('data-search-term', $(this).text().toLowerCase());
    });

    $('.live-search-box').on('keyup', function () {
        const searchTerm = $(this).val().toLowerCase();
        $('.live-search-list li').each(function () {
            ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1)
                ? $(this).show()
                : $(this).hide();
        });
    });

    $('input[class=live-search-box]').keydown(function (e) {
        if (e.keyCode == ENTER) {
            e.preventDefault();
            e.stopPropagation();

            const toAdd = $('input[class=live-search-box]').val();
            if (toAdd) {
                $('<li/>', {
                    'text': toAdd,
                    'data-search-term': toAdd.toLowerCase(),
                }).appendTo($('ul'));
                $('input[class=live-search-box]').val('');
                console.log('User has entered ' + toAdd);
            }
        }
    });
});