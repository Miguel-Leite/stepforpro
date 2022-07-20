AOS.init({duration: 2000})
window.addEventListener('scroll', () => {
    document.querySelector('.btn-scroll').classList.toggle("btn-scroll-show", window.scrollY > 100)
})