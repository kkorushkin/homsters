(function($) {

    $(document).ready(function() {
        $('.counter-up').counterUp({
            delay: 10, // the delay time in ms
            time: 1000 // the speed time in ms
        });
    });

    var $video = $('#homsters-presentation-video'),
        $video_wrapper = $('video-banner-video');
    $video.click(function() {
        if($video.hasClass('now-playing')){
            $video.toggleClass('opacity');
            $video.get(0).pause();
            $video.get(0).currentTime = 0;
            $video.toggleClass('now-playing');
        }else{
            $video.toggleClass('opacity');
            $video.toggleClass('now-playing');
            $video.get(0).play();
        }

    })

})(jQuery);

