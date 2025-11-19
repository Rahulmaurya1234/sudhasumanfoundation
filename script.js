document.addEventListener('DOMContentLoaded', () => {
    const slidesContainer = document.querySelector('.slides');
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    let index = 0;

    const slider = document.querySelector('.slider');

    function showSlide(i) {
        slidesContainer.style.transform = `translateX(${-100 * i}%)`;
    }

    function nextSlideManual() {
        index = (index + 1) % totalSlides;
        showSlide(index);
    }

    function prevSlideManual() {
        index = (index - 1 + totalSlides) % totalSlides;
        showSlide(index);
    }

    // Global functions for buttons
    window.nextSlide = function() {
        nextSlideManual();
        resetInterval();
    }

    window.prevSlide = function() {
        prevSlideManual();
        resetInterval();
    }

    // Auto slide every 3 seconds
    let slideInterval = setInterval(nextSlideManual, 3000);

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlideManual, 3000);
    }

    // Show arrows on hover (desktop)
    slider.addEventListener('mouseenter', () => {
        slider.classList.add('show-arrows');
    });
    slider.addEventListener('mouseleave', () => {
        slider.classList.remove('show-arrows');
    });

    // Show arrows on touch (mobile)
    slider.addEventListener('touchstart', () => {
        slider.classList.add('show-arrows');
        setTimeout(() => {
            slider.classList.remove('show-arrows');
        }, 3000); // 3 sec show
    });
});
