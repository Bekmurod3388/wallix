let header = document.querySelector('header')

function scrollHeader() {
    if (document.documentElement.scrollTop > header.clientHeight)
        header.classList.add('header-side')
    else
        header.classList.remove('header-side')
}

addEventListener('scroll', scrollHeader)
scrollHeader()
