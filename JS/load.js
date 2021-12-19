$(function () {
    $('cele headeris').load('/headeris.html');
    $('cele footeris').load('/footeris.html');
    $('cele main').load('/main.html');

    $('cele sonas').load('/sonas.html', function () {
        $('nav > a').click(function (e) {
            e.preventDefault();
            let keliasIkiFailo = $(this).attr('href');
            $('cele sonas').load(keliasIkiFailo);
        });
    });
});