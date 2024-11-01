(function($) {
    $(document).ready(function() {
        function adjustVideoWrapperSize() {
            $('.cpve-portrait-video-wrapper').each(function() {
                var $wrapper = $(this);
                var $iframe = $wrapper.find('iframe');
                var maxHeight = $(window).height() * 0.8; // 80% of viewport height
                var aspectRatio = 9 / 16; // Portrait aspect ratio

                // Calculate new height and width maintaining aspect ratio
                var newHeight = maxHeight;
                var newWidth = newHeight * aspectRatio;

                // Apply calculated dimensions to the iframe and wrapper
                $iframe.css({
                    'width': newWidth + 'px',
                    'height': newHeight + 'px'
                });

                $wrapper.css({
                    'width': newWidth + 'px',
                    'height': newHeight + 'px'
                });
            });
        }

        // Adjust video size on load and resize
        adjustVideoWrapperSize();
        $(window).resize(adjustVideoWrapperSize);
    });
})(jQuery);
