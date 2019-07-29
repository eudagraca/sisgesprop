$('.ui.form')
    .form({
        fields: {
            name: 'empty',
            last_name: 'empty',
            nr_bi: 'empty',
            nacionalidade: 'empty',
            local_emissao_bi: 'empty',
            data_emissao_bi: 'empty'
        }
    });

//Close message alert
closeAlertMessage();


$(function () {
    var $sections = $('.tab');

    function navigateTo(index) {
        // Mark the current section with the class 'current'
        $sections
            .removeClass('current')
            .eq(index)
            .addClass('current');
        // Show only the navigation buttons that make sense for the current section:
        $('.form-navigation .prev').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);
    }

    function curIndex() {
        // Return the current index by looking at which section has the class 'current'
        return $sections.index($sections.filter('.current'));
    }

    // Previous button is easy, just go back
    $('.form-navigation .prev').click(function () {
        navigateTo(curIndex() - 1);
    });

    $('.form-navigation .next').click(function () {
        $('.myform').parsley().whenValidate({
            group: 'block-' + curIndex()
        }).done(function () {
            navigateTo(curIndex() + 1);
        });
    });


});

function closeAlertMessage() {
    $('.message .close')
        .on('click', function () {
            $(this)
                .closest('.message')
                .transition('fade');
        });
}



$(document).ready(function () {

    var ct = 0;

    $('.next1').one('click', function (e) {

        e.preventDefault();

        $('#personalData').animate('slow', function () {

            if (ct > 0) {
                $('#personalData').removeClass('transition visible');
                $('#personalData').addClass('transition hidden');

            }
            $('#personalData').css('display', 'none');
            $('#contacts').css('display', 'contents');

            $('#step1').removeClass('active');
            $('#step1').addClass('disabled');
            $('#step2').removeClass('disabled');
            $("#contacts").transition('fly right');
            $('body').css('background-color', '#06000a');
            $('#step2').addClass('active');
            ct++;

        });

    });

    $('.prev1').one('click', function (e) {

        e.preventDefault();
        $('#step1').removeClass('disabled');
        $('#step1').addClass('active');
        $('#step2').addClass('disabled');


        $('#contacts').css('display', 'none');
        $('#personalData').css('display', 'contents');


    });

    $('.next2').one('click', function (m) {

        m.preventDefault();

        $('#step2').addClass('disabled');
        $('#step3').removeClass('disabled');
        $('#step3').addClass('active');

        $('#contacts').css('display', 'none');
        $('#educationData').css('display', 'contents');

    });

    $('.prev2').one('click', function (m) {

        m.preventDefault();
        $('#step3').addClass('disabled');
        $('#step2').removeClass('disabled');
        $('#step2').addClass('active');

        $('#educationData').css('display', 'none');
        $('#contacts').css('display', 'contents');

    });

    // $('.submit').one('click', function (p) {


    // });

});