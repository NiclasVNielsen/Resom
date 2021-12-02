const burger = document.querySelectorAll('.burger')
const sideNav = document.querySelector('.sideNav')

const toggle = () => {
    console.log('me me here')
    sideNav.classList.toggle('on')
}

burger.forEach((i, index) => {
    burger[index].addEventListener('click', toggle)
})