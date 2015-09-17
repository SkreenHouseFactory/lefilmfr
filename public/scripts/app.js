$(document).ready(function() {


    (function() {
        var calcGrid = function() {
            var search = $(".nav.navbar-search label");
            var wWidth = $(window).width();
            var autopadding = $(".__auto_padding");
            var CONTAINER_PADDING = 15;
            var MARGIN;
            var OFFSET = (wWidth < 640) ? 5 : 10;
            var COEF = 1.5;

            $(".film-main-grid").each(function(i){
                var _this = $(this);
                var _child = $(this).find('.film-wrapper');

                MARGIN = ( _this.width() - _child.width() ) / 2;
                _child.width(_this.width() - OFFSET);
                _child.height(_this.width() * COEF);
                _child.attr('data-pos', i);
            });

            // autopadding.each(function(){
            //     $(this).css("padding-left", CONTAINER_PADDING + MARGIN + (MARGIN / 2) );
            //     $(this).css("padding-right", CONTAINER_PADDING + MARGIN + (MARGIN / 2) );
            // });

            return search.css("right", MARGIN);
        };

        calcGrid();
        $(window).on("resize load", function() { calcGrid(); });
    })();

    /**
     * Grid
     */

    $(document).on({
        mouseenter: function () {
            $(this).children('.film-infos').addClass('show');
        },
        mouseleave: function () {
            $(this).children('.film-infos').removeClass('show');
        }
    }, ".film-wrapper");

    (function() {
        var input = ".navbar-search input";
        var inputValue = "Titre, acteur, réalisateur ...";
        $(document).on('focus', input, function() {
            $(this).val("");
        });
        $(document).on('blur', input, function() {
            $(this).val(inputValue);
        });
    })();

    toggleSearch();
    $(window).resize(function() { toggleSearch(); });

    function toggleSearch() {
        if($(document).width() < 765) {

            var input = $('.nav.navbar-search input'),
                close = '#close-search',
                label = '.nav.navbar-search label';

            /**
             * Bug iOS
             *
             * When input appear, this doesn't focus
             */
            input.attr('autofocus', true);
            $(document).on('click', label, function() { input.focus(); });

            $(document).on('click mousedown', label, function() {
                $(this).parent().css('background','#fff');
                $(this).addClass('hide');
                $('.__toggle').addClass('show');
                input.focus();
            });

            $(document).on('click mousedown', close, function() {
                $('.nav.navbar-search').css('background','transparent');
                $(label).removeClass('hide');
                $('.__toggle').toggleClass('show');
            });
        }
    }

    /**
     * Dummy lazy loading
     */
    (function() {
        var dummy = $('.row-film:first-child').parent().html();
        var grid = $('#grid');

        $('#load-more').on('click mousedown', function() {
            grid.append(dummy);
        });
    })();

    /**
     * related
     */
    (function() {
        $('.film > div[url]').on('click', function() { 
          document.location = '/film/'+$(this).attr('url')
        });
    })();
});
