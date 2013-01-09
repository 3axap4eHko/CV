$(document).ready(function(){
    Cufon.replace('h1, h2, h3, li, span, .cufon-text');

    $('.print-vc').click(function(){
        window.print();
    });

    $('.download-vc').click(function(){
        window.open('https://github.com/3axap4eHko/CV/archive/master.zip');
    });
});
