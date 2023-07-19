import 'jquery';

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import 'slick-carousel';

jQuery(document).ready(function($) {
    $(".center").slick({
        dots: true,
        arrows: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
    });
    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });

    $("[data-trigger]").on("click", function(e){
        e.preventDefault();
        e.stopPropagation();
        var offcanvas_id =  $(this).attr('data-trigger');
        $(offcanvas_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
        $(".screen-overlay").toggleClass("show");
    });

    $(".btn-close, .screen-overlay").click(function(e){
        $(".screen-overlay").removeClass("show");
        $(".mobile-offcanvas").removeClass("show");
        $("body").removeClass("offcanvas-active");
    });

    $(".navbar-nav li a").click(function(){

        //$(".mobile-offcanvas").hide();
        $('.btn-close').trigger('click');
    });

    const formCookie = getCookie("regFormSubmit");

    if(formCookie) {
        document.querySelector('#popup').classList.add("open");
        document.querySelector('#popup .content .text_wrap:first-child').classList.add('hidden');
        document.querySelector('#popup .content .text_wrap:last-child').classList.remove('hidden');
    }

    document.querySelectorAll('.popup').forEach(div => div.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#popup').classList.add("open");
        const videoPlayer = document.querySelector('#video_player');
        if(videoPlayer) {
            videoPlayer.src = div.dataset.video;
        }
    }))

    document.querySelector('#close_icon').addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector('#popup').classList.remove("open");
    })

    document.querySelectorAll('.next_page').forEach(div => div.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = div.parentElement.parentElement;
        parent.classList.add('hidden');
        parent.nextElementSibling.classList.remove('hidden');
    }))

    document.querySelectorAll('.cancel').forEach(div => div.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#popup').classList.remove("open");
    }));

    window.onscroll = function() {
        stickyHeader()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    var pageWrap = document.querySelector('.page_wrap');

    if (window.scrollY > sticky) {
        stickyHeader()
    }

    function stickyHeader() {
        if (window.scrollY > sticky) {
            header.classList.add("sticky-header");
            pageWrap.classList.add("scroll_active");
        } else {
            header.classList.remove("sticky-header");
            pageWrap.classList.remove("scroll_active");
        }
    }

    if (Cookies.get('prompt') === undefined) {
        OneSignal.push(() => {
            this.showNotfications = OneSignal.isPushNotificationsSupported();
            if (this.showNotfications) {
                OneSignal.isPushNotificationsEnabled(function(isEnabled) {
                    if (!isEnabled) {
                        $('#push-dialog').fadeIn();
                    }
                });
            }
        });
    }

    $('#push-accept').click(function () {

        try {
            OneSignal.push(() => {
                OneSignal.registerForPushNotifications();
                OneSignal.setSubscription(true);
            })
        } catch (ex) {
            console.error(ex);
        } finally {
            OneSignal.showNativePrompt({force: true});
            Cookies.set('prompt', 'yes', { expires: 30 });
            $('#push-dialog').fadeOut();
        }
    });

    $('#push-decline').click(function () {
        Cookies.set('prompt', 'yes', { expires: 2 });
        $('#push-dialog').fadeOut();
    });

    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function(reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }

    let deferredPrompt = null;
    const installDialog = document.querySelector('#install-dialog');
    const installButton = document.querySelector('#push-install');

    window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent the mini-infobar from appearing on mobile
        e.preventDefault();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Update UI notify the user they can install the PWA
        installDialog.removeAttribute('hidden');
        // Optionally, send analytics event that PWA install promo was shown.
        console.log(`'beforeinstallprompt' event was fired.`);
    });

    installButton.addEventListener('click', async () => {
        if (!deferredPrompt) {
            return;
        }

        const result = await deferredPrompt.prompt();

        console.log(`Install prompt was: ${result.outcome}`);
        deferredPrompt = null;
        installDialog.setAttribute("hidden", "");
    })

    function getCookie(cName) {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie); //to be careful
        const cArr = cDecoded.split('; ');
        let res;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) res = val.substring(name.length);
        })
        return res
    }
});
