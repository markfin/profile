// navigation bar effects on scroll 
window.addEventListener("scroll", function() {
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
})

// service section -modal 
const serviceModals = document.querySelectorAll('.service-modal')
const learnMoreBtns = document.querySelectorAll('.learn-more-btn')
const modalCloseBtns = document.querySelectorAll('.modal-close-btn')
    // modalCloseBtns.addEventListener('click', function() {
    //     console.log('modal');
    // })


var modal = function(modalClick) {
    serviceModals[modalClick].classList.add('active');

}
learnMoreBtns.forEach((learnmoreBtn, i) => {
    learnmoreBtn.addEventListener("click", () => {
        modal(i);
    })
})
modalCloseBtns.forEach((modalCloseBtn) => {
    modalCloseBtn.addEventListener("click", () => {
        serviceModals.forEach((modalView) => {
            modalView.classList.remove('active');

        })
    })
})

// portofolio modals 

// service section -modal 
const portofolioModals = document.querySelectorAll('.portofolio-model')
const imgCards = document.querySelectorAll('.img-card')
const portofolioCloseBtns = document.querySelectorAll('.portofolio-close-btn')
    // modalCloseBtns.addEventListener('click', function() {
    //     console.log('modal');
    // })


var portofolioModal = function(modalClick) {
    portofolioModals[modalClick].classList.add('active');

}
imgCards.forEach((imgCard, i) => {
    imgCard.addEventListener("click", () => {
        portofolioModal(i);
    })
})
portofolioCloseBtns.forEach((portofolioCloseBtn) => {
    portofolioCloseBtn.addEventListener("click", () => {
        portofolioModals.forEach((portofolioModalView) => {
            portofolioModalView.classList.remove('active');

        })
    })
})

// our clients swipper
var swiper = new Swiper(".client-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// scroll To top button 
const themeBtn = document.querySelector('.theme-btn');
themeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme')
    themeBtn.classList.toggle('sun')
    localStorage.setItem('saved-theme', getCurrentTheme());
    localStorage.setItem('saved-icon', getCurrentIcon());

})
const getCurrentTheme = () => document.body.classList.contains('dark-theme') ? "dark" : "light";
const getCurrentIcon = () => document.body.classList.contains("sun") ? "sun" : "moon";

const savedTheme = localStorage.getItem('saved-theme');
const savedIcon = localStorage.getItem('saved-icon');

if (savedTheme) {
    document.body.classList[savedTheme === 'dark' ? 'add' : 'remove']("dark-theme");
    themeBtn.classList[savedIcon === "sun" ? "add" : "remove"]("sun");
}

scrollTopBtn = document.querySelector('.scrollToTop-btn');
window.addEventListener('scroll', function() {
    scrollTopBtn.classList.toggle("active", this.window.scrollY > 500)
})
scrollTopBtn.addEventListener('click', () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
})

window.addEventListener('scroll', () => {

    const sections = document.querySelectorAll('section');
    const scrollY = window.pageYOffset;
    sections.forEach(current => {
        let sectionHeight = current.offsetHeight;
        let sectionTop = current.offsetTop - 50;
        let id = current.getAttribute('id');
        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav-items a[href*= ' + id + ']').classList.add('active');
        } else {
            document.querySelector('.nav-items a[href*= ' + id + ']').classList.remove('active');
        }
    });
})

// Responsive navigation menu toggle 
const menuBtn = document.querySelector('.nav-menu-btn')
const closeBtn = document.querySelector('.nav-close-btn')
const navigation = document.querySelector('.navigation')
const navItems = document.querySelectorAll('.nav-items a')
menuBtn.addEventListener('click', () => {
    navigation.classList.add('active');
})
closeBtn.addEventListener('click', () => {
    navigation.classList.remove('active');
})
navItems.forEach((navItem) => {
        navItem.addEventListener('click', () => {
            navigation.classList.remove('active');
        })
    })
    // scroll-reveal animation

ScrollReveal({
    reset: true,
    distance: '60px',
    duration: 2500,
    delay: 100
});
// targets elements ,and specifiy options to create reveal animation
ScrollReveal().reveal('.home .info h2, .section-title-01, section-title-02', { delay: 500, origin: 'left' });
ScrollReveal().reveal('.home .info h3, .home .info p, .about-info .btn', { delay: 600, origin: 'right' });
ScrollReveal().reveal('.home .info .btn', { delay: 700, origin: 'bottom' });
ScrollReveal().reveal('.media-icons i, .contact-left li ', { delay: 500, origin: 'left' });
ScrollReveal().reveal('.home-img, .about-img', { delay: 500, origin: 'bottom' });
ScrollReveal().reveal('.about, .description, .copy-right', { delay: 600, origin: 'right' });
ScrollReveal().reveal('.about, .professional-list li', { delay: 600, origin: 'right', interval: 200 });
ScrollReveal().reveal('.skills-description, .service-description, .contact-card, .client-swiper, .contact-left h2', { delay: 700, origin: 'left' });
ScrollReveal().reveal('.experience-card, .service-card, .education , .portofolio .img-card', { delay: 800, origin: 'bottom', interval: 200 });
ScrollReveal().reveal('footer .group', { delay: 500, origin: 'top', interval: 200 });