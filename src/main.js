const previous = document.querySelector('.arrow-back'),
    next = document.querySelector('.arrow-next');

const slider = document.querySelector('.devices-list');
// sliderItem = document.querySelector('.device').style.width;


let count = 0,
width = 800,
limit = 1;

previous.addEventListener('click', () => {
    if (count > 0) {
    count--;
    slider.style.transform = `translateX(${-count * width}px)`;
    }
});

next.addEventListener('click', () => {
   if (count < limit) {
    count++;
    slider.style.transform = `translateX(${-count * width}px)`;
   }
});

// menu

const menuButton = document.querySelector('.header-top__menu'),
headerMobile = document.querySelector('.header-menu__mobile'),
headerClose = document.querySelector('.header-menu__mobile-close');

menuButton.addEventListener('click', () => {
    headerMobile.style.right = '0';
    document.body.style.overflowY = 'hidden';
});

headerClose.addEventListener('click', () => {
    headerMobile.style.right = '-315px';
    document.body.style.overflowY = '';
});

