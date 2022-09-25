'use strict'

document.addEventListener("DOMContentLoaded", function () {
    var images = document.querySelectorAll(".imge");
    new simpleParallax(images, {
        scale: 1.3,
    });

    ScrollTrigger.init();

    let swiperCourse = new Swiper(".js-swiper", {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 10,
        centeredSlides: true,
        slideToClickedSlide: true,
        navigation: {
            nextEl: ".js-btn-next",
            prevEl: ".js-btn-prev",
        },
    });

    let docText = document.querySelector('.js-text-slide');

    function textSlide() {
        let doc = document.querySelector('.js-swiper .swiper-slide-active');
        if (doc) {
            let text = doc.getAttribute('data-text');
            docText.textContent = text;
        }
    }

    textSlide();
    swiperCourse.on('slideChange', textSlide);

    let domHeader = document.querySelector('.js-header');
    let domHeTop = document.querySelector('.js-h-top');
    let dBh = document.querySelector('.js-h-bot');
    let dBurger = document.querySelector('.js-burger');

    // scroll link
    let curentPos = 0;
    document.querySelectorAll('a[href^="#"').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            let href = this.getAttribute('href').substring(1);

            let scrollTarget = document.getElementById(href);
            dBh.classList.remove('open');
            dBurger.classList.remove('open');

            if (scrollTarget) {
                let elementPosition = scrollTarget.getBoundingClientRect().top;
                let elementPositionPlus = elementPosition + window.pageYOffset;

                let topOffset = 0;
                let posTop = window.pageYOffset;

                if (posTop > elementPositionPlus) {
                    domHeader.style.top = `0px`;
                    domHeader.classList.remove("scroll");
                } else {
                    domHeader.classList.add("scroll");
                }

                if (domHeader.classList.contains("scroll")) {
                    topOffset = (domHeader.offsetHeight - domHeTop.offsetHeight);
                } else {
                    topOffset = domHeader.offsetHeight;
                }

                let offsetPosition = elementPosition - topOffset;

                window.scrollBy({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    window.addEventListener('scroll', head);

    if (domHeader) {
        domHeader.style.transition = "all 0.4s";
    }

    head();
    function head() {
        let posTop = window.pageYOffset;
        let heTot = domHeTop.offsetHeight;

        if (posTop > 50) {
            if (posTop > curentPos) {
                if (!dBh.classList.contains("open")) {
                    domHeader.style.top = `-${heTot}px`;
                    domHeader.classList.add("scroll");
                }
            } else {
                domHeader.style.top = `0px`;
                domHeader.classList.remove("scroll");
            }
        } else {
            domHeader.style.top = `0px`;
            domHeader.classList.remove("scroll");
        }

        curentPos = posTop;
    }

    $('.js-phone-mask').mask('+38099-999-9999').val('+380');

    (function () {
        let classe = 'open';
        dBurger.addEventListener('click', function () {
            let $this = $(this);

            if ($this[0].classList.contains(classe)) {
                $this[0].classList.remove(classe);
                dBh.classList.remove(classe);
            } else {
                $this[0].classList.add(classe);
                dBh.classList.add(classe);
            }
        });
    })();
});
