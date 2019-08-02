/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Granim from 'granim'
import AOS from 'aos';
import swal from 'sweetalert2'

require('fullpage.js');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));


const granimInstance = new Granim({
    element: '#granim-canvas',
    name: 'granim',
    opacity: [1, 1],
    states: {
        "default-state": {
            gradients: [
                ['#090C15', '#22072A'],
                ['#530B57', '#780C3D']
            ]
        }
    }
});
$(document).ready(function () {
    $(window).bind('resize', function() {
        $.fn.fullpage.reBuild();
    });
    $('#fullpage').fullpage({
        navigation: true,
        scrollBar: true,
        autoScrolling:true,
        onSlideLeave: function (anchorLink, index, slideIndex, direction, nextSlideIndex) {
            const $isAnimatedSecond = $('#slide2 .is-animated');
            const $isAnimatedThird = $('#slide3 .is-animated');
            const $isAnimatedFourd = $('#slide4 .is-animated');

            if (nextSlideIndex === 1) {
                $isAnimatedSecond.eq(0).addClass('animated fadeInRightBig').css('animation-delay', '.3s');
                $isAnimatedSecond.eq(1).addClass('animated fadeInRightBig').css('animation-delay', '.6s');
                $isAnimatedSecond.eq(2).addClass('animated fadeInRightBig').css('animation-delay', '.9s');
                $isAnimatedSecond.eq(3).addClass('animated fadeInRightBig').css('animation-delay', '1.2s');
                $isAnimatedSecond.eq(4).addClass('animated fadeInRightBig').css('animation-delay', '1.5s');
                $isAnimatedSecond.eq(5).addClass('animated fadeInRightBig').css('animation-delay', '1.8s');
                $isAnimatedSecond.eq(6).addClass('animated fadeInRightBig').css('animation-delay', '2.1s');
                $isAnimatedSecond.eq(7).addClass('animated bounceInDown').css('animation-delay', '2.3s');
            }
            if (nextSlideIndex === 2) {
                $isAnimatedThird.eq(0).addClass('animated fadeInRightBig').css('animation-delay', '.3s');
                $isAnimatedThird.eq(1).addClass('animated fadeInLeftBig').css('animation-delay', '.6s');
                $isAnimatedThird.eq(2).addClass('animated bounceInDown').css('animation-delay', '1.2s');
            }
            if (nextSlideIndex === 3) {
                $isAnimatedFourd.eq(0).addClass('animated fadeInRightBig').css('animation-delay', '.3s');
                $isAnimatedFourd.eq(1).addClass('animated fadeInRightBig').css('animation-delay', '.6s');
                $isAnimatedFourd.eq(2).addClass('animated fadeInRightBig').css('animation-delay', '.9s');
                $isAnimatedFourd.eq(3).addClass('animated fadeInRightBig').css('animation-delay', '1.2s');
                $isAnimatedFourd.eq(4).addClass('animated fadeInRightBig').css('animation-delay', '1.5s');
                $isAnimatedFourd.eq(5).addClass('animated fadeInRightBig').css('animation-delay', '1.8s');
                $isAnimatedFourd.eq(6).addClass('animated fadeInRightBig').css('animation-delay', '2.1s');
                $isAnimatedFourd.eq(7).addClass('animated bounceInDown').css('animation-delay', '2.3s');
                $isAnimatedFourd.eq(8).addClass('animated bounceInDown').css('animation-delay', '2.6s');
                $isAnimatedFourd.eq(9).addClass('animated bounceInDown').css('animation-delay', '2.9s');
                $isAnimatedFourd.eq(10).addClass('animated bounceInDown').css('animation-delay', '3.1s');
                $isAnimatedFourd.eq(11).addClass('animated bounceInDown').css('animation-delay', '3.4s');
            }
        }
    });
    AOS.init({
        duration: 600
    });
    const $window = $(window);
    console.log($window.width());
    if($window.width() <= 500 ){
        $('#jumbotronDiv').removeClass('jumbotron');
        swal({
            title: '¿Pantalla completa?',
            text: "Este sitio web se visualiza mejor a pantalla completa",
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí',
            cancelButtonText: 'No'
        }).then(function () {
            const docelem = document.documentElement;
            console.log('FullScreeeeen')
            if (docelem.requestFullscreen) {
                docelem.requestFullscreen();
            }
            else if (docelem.mozRequestFullScreen && !docelem.fullscreenElement) {
                docelem.mozRequestFullScreen();
            }
            else if (docelem.webkitRequestFullScreen && !docelem.fullscreenElement) {
                docelem.webkitRequestFullScreen();
            }
            else if (docelem.msRequestFullscreen && !docelem.fullscreenElement) {
                docelem.msRequestFullscreen();
            }

        })
    }

    $('#btnContactUs').on('click',function(){
        const name = document.getElementById('name').value
        const subject = document.getElementById('subject').value
        const message = document.getElementById('message').value
        const email = document.getElementById('email').value

        if(name && subject && message && email) {
            axios.post('/contactus',{name: name, subject: subject, message:message, email:email}).then(result => {
                swal({
                    type: 'success',
                    title: 'Enviado con exito :)'
                });
            })
        }
    });

    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-104934128-1', 'auto');
    ga('send', 'pageview');

    window.onload = function () {
        $(".loader").fadeOut(1000)
    }
});
