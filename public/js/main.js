AOS.init({duration: 2000})
window.addEventListener('scroll', () => {
    document.querySelector('.btn-scroll').classList.toggle("btn-scroll-show", window.scrollY > 100)
})

if (document.querySelector('.form-login'))
{
    document.querySelector('.form-login').addEventListener('submit',async (e) => {
        e.preventDefault()
        const fd = new FormData(e.currentTarget);

        const { data } = await axios.post(document.forms[0].action,fd);
        if (data.success) {
            // iziToast.success({
            //     title: 'Sucesso!',
            //     message: data.message,
            //     position: 'topRight'
            //   });
            console.log(data)
        } else {
            console.log(data)
        }
    });
}