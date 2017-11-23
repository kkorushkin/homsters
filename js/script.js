(function($) {

    $(document).ready(function() {

        $('.counter-up').counterUp({
            delay: 10, // the delay time in ms
            time: 2000 // the speed time in ms
        });

        //плавно к якорю
        $('a').click(function(){
            var anch = $(this).data('to');
            $('html,body').animate({
                scrollTop: $('#'+anch).offset().top //- correction
            }, 1000, function(){
                $('#'+anch).addClass('active');
            });
            return false;
        });

    });

    if($(window).width() > 888){

        $(document).scroll(function() {
            $('.live-bg').css('background-position-x',$(document).scrollTop()/10 + 'px, center')
        });

    }

    var $video = $('#homsters-presentation-video'),
        $video_wrapper = $('video-banner-video'),
        $stop_btn = $('#button-stop');
    $video.click(function() {
        if($video.hasClass('now-playing')){
            $video.toggleClass('opacity');
            $stop_btn.toggleClass('opacity');
            $video.get(0).pause();
            $video.get(0).currentTime = 0;
            $video.toggleClass('now-playing');
        }else{
            $video.toggleClass('opacity');
            $stop_btn.toggleClass('opacity');
            $video.toggleClass('now-playing');
            $video.get(0).play();
        }
    });
    $stop_btn.click(function() {
        $video.trigger('click');
    });

})(jQuery);

var homstmail = {
    'callback':function(frm){
        var data = frm.serialize();
        $.ajax({
            url: 'mailer.php',
            type: 'post',
            data: data,
            dataType: 'json',
            beforeSend: function() {
                //$('body').append('<img src="' + template_path + '/images/loading.gif" alt="" />');
            },
            complete: function() {},
            success: function(json) {
                var message;
                if(json == 1){
                    //message = 'Спасибо! Ваша заявка отправлена!';
                    $.notify("Спасибо! Ваша заявка отправлена!", "success");
                }else{
                    message = 'Ваше запрос не отправлен! Попробуйте повторить отправку через время или свяжитесь с нами по контактным телефонам.';
                }
                //$('#alerts').html('<div id="add-msg" class="alert alert-success"> ' + message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                $('#сall-me').modal('hide');
                //$('html, body').animate({ scrollTop: 0 }, 'slow');

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
};

