document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.text-swiper', {
        loop: true,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.text-swiper-pagination',
            clickable: true,
        },
    });
    new Swiper('.card-swiper', {
        slidesPerView: 1.2,
        spaceBetween: 0,
        initialSlide: 1,
        centeredSlides: true,
        loop: false,
        breakpoints: {
            768: {
                slidesPerView: 3,
                centeredSlides: false,
                loop: false,
                allowTouchMove: false,
            }
        }
    });
    new Swiper('.ams-all-swiper', {
        slidesPerView: 1.3, 
        spaceBetween: 15,
        centeredSlides: true, 
        loop: false,
        pagination: {
            el: '.ams-all-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2.5,
                spaceBetween: 20,
                centeredSlides: false,
            },
            1024: {
                slidesPerView: 4, 
                spaceBetween: 25,
                centeredSlides: false,
                allowTouchMove: false, 
            }
        }
    });
    new Swiper('.ams-prd-swiper', {
        slidesPerView: 1.1,
        spaceBetween: 20,
        centeredSlides: true,
        loop: false,
        pagination: {
            el: '.ams-prd-swiper-pagination',
            clickable: true,
        },
        grabCursor: true, 
        breakpoints: {
            768: {
                slidesPerView: 2.2,
                spaceBetween: 30,
                centeredSlides: false,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: false,
            }
        }
    });
    new Swiper('.ams-awd-swiper', {
        slidesPerView: 2,
        spaceBetween: 15,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.ams-awd-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
            1024: {
                slidesPerView: 5, 
                spaceBetween: 30,
            }
        }
    });
    new Swiper('.ams-awd-swiper-iso', {
        slidesPerView: 1,
        spaceBetween: 15,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.ams-awd-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }
    });
    new Swiper('.ams-news-swiper', {
        slidesPerView: 1,
        spaceBetween: 15,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.ams-news-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }
    });
    new Swiper('.ams-prj-video-swiper', {
        slidesPerView: 1.2,
        spaceBetween: 15,
        grabCursor: true,
        pagination: {
            el: '.ams-prj-video-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: { slidesPerView: 2, spaceBetween: 20 },
            992: { slidesPerView: 3, spaceBetween: 30 }
        }
    });
    new Swiper('.ams-prj-cases-swiper', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        grabCursor: true,
        pagination: {
            el: '.ams-prj-cases-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: { slidesPerView: 2, spaceBetween: 25 },
            992: { 
                slidesPerView: 3, 
                spaceBetween: 30,
            }
        }
    });
    new Swiper('.ams-aboutpg-swiper', {
        slidesPerView: 1.1,
        spaceBetween: 15,
        centeredSlides: true,
        grabCursor: true,
        pagination: {
            el: '.ams-aboutpg-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 25,
                centeredSlides: false,
            },
            1024: {
                slidesPerView: 4, 
                spaceBetween: 30,
                centeredSlides: false,
                allowTouchMove: false, 
            }
        }
    });
    new Swiper('.ams-srvpg-gallery-swiper', {
        slidesPerView: 1.2, 
        spaceBetween: 15,
        grabCursor: true,
        breakpoints: {
            576: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 3, spaceBetween: 20 },
            1024: { 
                slidesPerView: 4, 
                spaceBetween: 25,
            }
        }
    });
    new Swiper('.ams-srvpg-cards-swiper', {
        slidesPerView: 1.1, 
        spaceBetween: 20,
        centeredSlides: true,
        grabCursor: true,
        pagination: {
            el: '.ams-srvpg-cards-pagination',
            clickable: true,
        },
        breakpoints: {
            768: { 
                slidesPerView: 2.2, 
                spaceBetween: 30,
                centeredSlides: false
            },
            1024: { 
                slidesPerView: 3, 
                spaceBetween: 40,
                centeredSlides: false,
            }
        }
    });
    new Swiper('.ams-contact-loc-swiper', {
        slidesPerView: 1.1, // Mobile view
        spaceBetween: 15,
        centeredSlides: true,
        grabCursor: true,
        pagination: {
            el: '.ams-contact-loc-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: { 
                slidesPerView: 2.2, 
                spaceBetween: 25,
                centeredSlides: false
            },
            1024: { 
                slidesPerView: 3, 
                spaceBetween: 30,
                centeredSlides: false,
                allowTouchMove: false // Matikan swipe di Desktop
            }
        }
    });

    new Swiper('.ams-contact-person-swiper', {
        slidesPerView: 1.1, // Mobile view
        spaceBetween: 15,
        centeredSlides: true,
        grabCursor: true,
        pagination: {
            el: '.ams-contact-person-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: { 
                slidesPerView: 2.2, 
                spaceBetween: 25,
                centeredSlides: false
            },
            1024: { 
                slidesPerView: 3, 
                spaceBetween: 30,
                centeredSlides: false,
                allowTouchMove: false // Matikan swipe di Desktop
            }
        }
    });
});
new Swiper('.gallery-swiper', {
  slidesPerView: 1.15,
  spaceBetween: 12,
  centeredSlides: true,
  loop: true,
  autoplay: { delay: 3000, disableOnInteraction: false },
  pagination: { el: '.gallery-swiper .swiper-pagination', clickable: true },
  breakpoints: { 420: { slidesPerView: 1.6 } }
});
new Swiper('.equip-swiper', {
  slidesPerView: 1.1,
  spaceBetween: 12,
  centeredSlides: true,
  pagination: { el: '.equip-swiper .swiper-pagination', clickable: true },
  breakpoints: { 420: { slidesPerView: 1.4 } }
});
new Swiper('.photo-swiper', {
  slidesPerView: 1.12,
  spaceBetween: 14,
  centeredSlides: true,
  loop: true,
  pagination: { el: '.photo-swiper .swiper-pagination', clickable: true },
  breakpoints: { 420: { slidesPerView: 1.4 } }
});

// Gallery swiper (mobile only)
new Swiper('.gallery-swiper', {
  slidesPerView: 1.15,
  spaceBetween: 12,
  centeredSlides: true,
  loop: true,
  autoplay: { delay: 3000, disableOnInteraction: false },
  pagination: { el: '.gallery-swiper .swiper-pagination', clickable: true },
  breakpoints: { 420: { slidesPerView: 1.6 } }
});