jQuery(document).ready(function(){(new WOW).init({mobile:!1}),jQuery(".slideshow").click(function(){jQuery(".video_overlay").addClass("open")}),jQuery("span.video_close").click(function(){jQuery(".video_overlay").removeClass("open"),jQuery("#youtube_player")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}',"*")}),jQuery(".mysee_more").click(function(){jQuery(".years_list").slideDown()}),jQuery(".mysee_more_artists").click(function(){jQuery(".artist_list").slideDown()}),jQuery(".mysee_more_tasting").click(function(){jQuery(".tasting_drop").slideDown()}),jQuery("a.tasting_title").click(function(){jQuery(this).next(".sub_tasting_list").slideToggle(200)}),jQuery(".mysearchicon").click(function(){jQuery(".search_overlay").slideDown()}),jQuery(".mysearchclose").click(function(){jQuery(".search_overlay").slideUp()}),jQuery(".sign_in_wrapper").click(function(){jQuery(".mymobile_dropdown").slideDown(300)}),jQuery(".mymobile_dropdown span.myclose").click(function(){jQuery(".mymobile_dropdown").slideUp(300)}),jQuery(".mymobile_dropdown li.menu-item-has-children").click(function(){jQuery(this).find("ul.sub-menu").toggleClass("myopen")}),jQuery(".newsletter_overlay_content, .privacy_overlay_content, .carousel_content, .review_content").hide(),jQuery(".newsletter_form").hide(),jQuery("li.privacy").click(function(){jQuery(".overlay").addClass("open"),jQuery(".privacy_overlay_content").fadeIn(50)}),jQuery(".mobile_menu").click(function(){jQuery(".mobile_menu_overlay").fadeIn(),jQuery(".mobile_menu").fadeOut(),jQuery(".overlay_close_mobile_menu").fadeIn()}),jQuery(".green_bar, .review_icons").click(function(){jQuery(".overlay").addClass("open"),jQuery(".review_content").fadeIn(50)}),jQuery(".slider-nav img.car_img").click(function(){jQuery(".overlay_carousel").addClass("open"),jQuery(".carousel_content").fadeIn(50)}),jQuery(".overlay_close").click(function(){jQuery(".overlay").removeClass("open"),jQuery(".overlay_carousel").removeClass("open"),jQuery(".newsletter_overlay_content, .privacy_overlay_content, .carousel_content, .review_content").fadeOut(400),jQuery(".newsletter_form").fadeOut(500),jQuery(".cover").delay(1e3).fadeIn(500)}),jQuery(".overlay_close_mobile_menu").click(function(){jQuery(".mobile_menu").fadeIn(),jQuery(".overlay_close_mobile_menu, .mobile_menu_overlay").fadeOut()}),jQuery(".backtotop").click(function(){jQuery("html, body").animate({scrollTop:0},"slow")}),jQuery(".post_list").click(function(){jQuery(".content_container").removeClass("grid_view"),jQuery(this).addClass("active"),jQuery(".post_grid").removeClass("active")}),jQuery(".post_grid").click(function(){jQuery(".content_container").addClass("grid_view"),jQuery(this).addClass("active"),jQuery(".post_list").removeClass("active")}),jQuery(".testimonials_slider").slick({slidesToShow:1,slidesToScroll:1,prevArrow:".my_testimonials .myprev",nextArrow:".my_testimonials .mynext",arrows:!0}),jQuery(".blog_slider").slick({slidesToShow:1,slidesToScroll:1,prevArrow:".my_blog .myprev",nextArrow:".my_blog .mynext",arrows:!0}),jQuery(".event_slider").slick({slidesToShow:1,slidesToScroll:1,prevArrow:".new_events_wrapper .myprev",nextArrow:".new_events_wrapper .mynext",arrows:!0}),jQuery(".slider-for").slick({slidesToShow:1,slidesToScroll:1,lazyLoad:"ondemand",arrows:!0,fade:!1,swipe:!0,asNavFor:".slider-nav"}),jQuery(".slider-nav").slick({slidesToShow:7,slidesToScroll:7,lazyLoad:"ondemand",asNavFor:".slider-for",swipe:!0,focusOnSelect:!0,responsive:[{breakpoint:2224,settings:{slidesToShow:7,slidesToScroll:7}},{breakpoint:1224,settings:{slidesToShow:6,slidesToScroll:6}},{breakpoint:1e3,settings:{slidesToShow:5,slidesToScroll:5}},{breakpoint:850,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:600,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:380,settings:{slidesToShow:2,slidesToScroll:2}}]}),jQuery(".press_slider").slick({slidesToShow:1,slidesToScroll:1,prevArrow:".press_slider_wrapper .back_button",nextArrow:".press_slider_wrapper .next_button",arrows:!0,mobileFirst:!0,variableWidth:!0,centerMode:!0,responsive:[{breakpoint:615,settings:{slidesToShow:2,slidesToScroll:2,prevArrow:".press_slider_wrapper .back_button",nextArrow:".press_slider_wrapper .next_button",arrows:!0}},{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:2,prevArrow:".press_slider_wrapper .back_button",nextArrow:".press_slider_wrapper .next_button",arrows:!0}},{breakpoint:1040,settings:{slidesToShow:4,slidesToScroll:4,prevArrow:".press_slider_wrapper .back_button",nextArrow:".press_slider_wrapper .next_button",arrows:!0}},{breakpoint:1204,settings:{slidesToShow:5,slidesToScroll:1,prevArrow:".press_slider_wrapper .back_button",nextArrow:".press_slider_wrapper .next_button",arrows:!0}}]})});