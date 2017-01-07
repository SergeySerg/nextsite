/* Скрипт формы обратной связи */
    document.addEventListener("DOMContentLoaded", function(){
        $("#contactform").submit(function(e){
            e.preventDefault();
            var name = $("input[name=name]").val();
            var email = $("input[name=email]").val();
            var message = $("textarea[name=message]").val();
            var token = $("#token").text();
            //var dataString = 'name='+name+'&email='+email+'&message'+message+'&_token='+token;
            var data = {
                name: name,
                email: email,
                message: message,
                '_token': token
            }
            $.ajax({
                method: "POST",
                url : "/contact",
                data : data,
                dataType : "json",

                success: function(data){
                    console.info('Server response: ', data);
                    if(data.status == 'success'){
                        swal("Ваше повідомлення успішно відправлено!"," ","success");
                        jQuery("#contactform").trigger("reset");
                    }
                },
                error:function(data){
                    swal ("Сталася помилка при відправці повідомлення!");
                    jQuery("#contactform").trigger("reset");
                }
            },"json");

        });
        /* END Скрипт формы обратной связи */
    });
/* Скрипт для отправки резюме с сайта */
    document.addEventListener("DOMContentLoaded", function(){
        $('#resume-send').on('click', function(event){
            $('#resume-send').attr('disabled', true);
            var data = $('form#resume-form').serialize();
            $.ajax({
                url: 'resume',
                method: "POST",
                data: data,
                dataType : "json",
                success: function(data){
                    console.info('Server response: ', data);
                    if(data.success){
                        swal(trans['base.success'], "", "success");
                        jQuery("#resume-form").trigger("reset");
                        $("#resume-send").attr('disabled', false);
                    }
                    else{
                        swal(trans['base.error'], data.message, "error");
                        $("#resume-send").attr('disabled', false);
                    }

                },
                error:function(data){
                    swal(trans['base.error']);
                    $("#resume-send").attr('disabled', false);
                    //  jQuery("#resume-form").trigger("reset");
                }

            },"json");
            event.preventDefault();

        });
    });
/* END Скрипт для отправки резюме с сайта */

// Форма для виз

    $('.show-popup').on('click', function () {
        var title = $(this).attr('data-title');
        if( title == undefined || title == ''){
            var title = $(this).text();
            $('#popup input[name="type"]').attr('value',title);
        }
        else{
            $('#popup input[name="type"]').attr('value',title);
        }


    });
/*Castom JS*/
// Форма для услуг
$('.show-popup').on('click', function () {
    var title = $(this).attr('data-title');
    if( title == undefined || title == ''){
        var title = $(this).text();
        $('#popup-services input[name="type"]').attr('value',title);
    }
    else{
        $('#popup-services input[name="type"]').attr('value',title);
    }
});
//отправка формы
$('#submit-send').on('click', function(event){
    $('#submit-send').attr('disabled', true);
    var data = $('form#popup').serialize();
    $.ajax({
        url: '/contact',
        method: "POST",
        data: data,
        dataType : "json",
        success: function(data){
            //console.info('Server response: ', data);
            if(data.success){
                swal(trans['base.success'], "", "success");
                jQuery("#popup").trigger("reset");
                $("#submit-send").attr('disabled', false);
            }
            else{
                swal(trans['base.error'], data.message, "error");
                $("#submit-send").attr('disabled', false);
            }
        },
        error:function(data){
            swal(trans['base.error']);
            $("#submit-send").attr('disabled', false);
            //  jQuery("#resume-form").trigger("reset");
        }

    },"json");
    event.preventDefault();

});
// scroll body to 0px on click
$('.arrow-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});
