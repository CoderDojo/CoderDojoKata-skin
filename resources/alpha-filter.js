!function(e){e(function(){e(".alpha-filter").not(".no-js").each(function(){var i=e(this);if(!i.data("filter-initialized")){var t=i.find(".filters>*[data-filter]"),l=i.find(".filter-elements>*[data-filter]");t.off("click.alpha-filter").not(".disabled").on("click.alpha-filter",function(){var i=e(this),a=i.data("filter");return l.hide().filter("[data-filter="+a+"]").show(),t.removeClass("selected"),i.addClass("selected"),!1}),l.hide(),i.data("filter-initialized",!0),t.filter(".selected").length>0?t.filter(".selected").triggerHandler("click"):t.not(".disabled").slice(0,1).triggerHandler("click")}})})}(jQuery);