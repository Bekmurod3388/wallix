

const burger = document.querySelector('.header__gamburger'),
      menu = document.querySelector('.header__nav')

burger.addEventListener('click', () => {
    menu.classList.toggle('header__nav--active')
    burger.classList.toggle('header__gamburger--active')
})