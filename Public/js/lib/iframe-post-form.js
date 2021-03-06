/**
 * jQuery plugin for posting form including file inputs.
 * Copyright (c) 2010 Ewen Elder
 *
 * Licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * @author: Ewen Elder <glomainn at yahoo dot co dot uk> <ewen at jainaewen dot com>
 * @version: 1.0.1 (2010-22-02)
**/
(function($) {
    $.fn.iframePostForm = function(o) {
        var J, a, i, n;
        a = $(this);
        o = $.extend({},
        $.fn.iframePostForm.defaults, o);
        if (!$('#' + o.iframeID).length) {
            $('body').append('<iframe name="' + o.iframeID + '" id="' + o.iframeID + '" style="display:none"></iframe>')
        }
        return a.each(function() {
            i = $(this);
            i.attr('target', o.iframeID);
            i.submit(function() {
                o.post.apply(this);
                n = $('#' + o.iframeID);
                n.unbind('load').bind('load',
                function() {
                    J = n.contents().find('body');
                    o.complete.apply(this, [J.html()]);
                    setTimeout(function() {
                        J.html('')
                    },
                    1)
                })
            })
        })
    };
    $.fn.iframePostForm.defaults = {
        iframeID: 'iframe-post-form',
        post: function() {},
        complete: function(response) {}
    }
})(jQuery);