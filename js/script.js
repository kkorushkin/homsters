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

        if($(window).width() > 869){

            $(document).scroll(function() {
                $('.live-bg').css('background-position-x',$(document).scrollTop()/10 + 'px, center')
            });

        }

        if($(window).width() < 869){
            $("#slides").slidesjs({
                height: 500,
                navigation: {
                    active: false
                },
                pagination: {
                    active: false
                },
                effect: {
                    slide: {
                        speed: 200
                    }
                }
            });
        }

        var $video = $('#homsters-presentation-video'),
            $video_wrapper = $('video-banner-video'),
            $video_banner_wrapper = $('#video-banner-wrapper #wrpr'),
            $play_btn = $('#button-play'),
            $stop_btn = $('#button-stop');
        $video.get(0).volume = 0;
        $video.get(0).play();
        $video_banner_wrapper.toggleClass('opacity');
        $video.click(function() {
            if($video.hasClass('now-playing')){
                $video_banner_wrapper.toggleClass('opacity');
                $stop_btn.toggleClass('opacity');
                $play_btn.toggleClass('opacity');
                $video.get(0).pause();
                $video.get(0).currentTime = 0;
                $video.toggleClass('now-playing');
            }else{
                $video_banner_wrapper.toggleClass('opacity');
                $stop_btn.toggleClass('opacity');
                $play_btn.toggleClass('opacity');
                $video.toggleClass('now-playing');
                $video.get(0).pause();
                $video.get(0).currentTime = 0;
                $video.get(0).play();
                $video.get(0).volume = 1;
            }
        });
        $stop_btn.click(function() {
            $video.trigger('click');
        });

        $(document).on('keydown', function ( e ) {
            if ((e.metaKey || e.ctrlKey) && ( e.keyCode == 40) ) {
               console.log('%c Лендинг разработан командой bCool.in.ua ', 'background:#222; color:#bada55; font-size:20px');
            }
        });

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
                    message = 'Спасибо! Ваша заявка отправлена!';
                }else{
                    message = 'Ваше запрос не отправлен! Попробуйте повторить отправку через время или свяжитесь с нами по контактным телефонам.';
                }
                $('#alerts').html('<div id="add-msg" class="alert-success"> ' + message + ' <button type="button" class="close" onclick="fclose(\'alerts\');">&times;</button></div>')
                    .show();

                $('#сall-me').modal('hide');
                //$('html, body').animate({ scrollTop: 0 }, 'slow');

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
};

function fclose(el){
    document.getElementById(el).style.display = 'none';
}

