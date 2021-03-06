$('.alert').alert();

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
});

$(document).ready(function () {
    $("#cadeira_form").hide();
    $("#addCadeira").click(function () {
        $("#cadeira_form").show();
        $("#table_form").hide();
    });

    $("#showCursos").click(function () {
        $("#cadeira_form").hide();
        $("#table_form").show();
    });
});

$(document).ready(function () {
    $('#cursos').multiselect({
        nonSelectedText: 'Selecione os cursos',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '250px'
    });
});

$(document).ready(function () {
    $('#cadeiras').multiselect({
        nonSelectedText: 'Selecione as cadeiras',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '250px'
    });
});

// $('.date-own').datepicker({
//     minViewMode: 2,
//     format: 'yyyy'
// });

$(document).ready(function () {

    $('.menu a').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('.menu a').removeClass('active');
        $('.segment').removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    })
});

$(function () {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
});


$(document).ready(function () {
    $('#multiselect-cadeira').multiselect();
});

function putClass(id) {
    $('.dropdown-menu li').addClass('active');
}

