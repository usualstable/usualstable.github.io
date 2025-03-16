// pc
const menu = document.getElementById('menu')
const menuBtn = document.getElementById('menuBtn')
// mob
const menuBtnMob = document.getElementById('menuBtnMob')
const menuMob = document.getElementById('menuMob')

menuBtn.addEventListener('mouseenter', () => {
    menu.style.display = ''
})

menu.addEventListener('mouseleave', () => {
    menu.style.display = 'none'

})

menuBtnMob.addEventListener('click', () => {
    const state = menuBtnMob.getAttribute('data-state')

    if (state === 'close') {
        menuMob.style.display = ''
        menuBtnMob.setAttribute('data-state', 'open')
    } else {
        menuMob.style.display = 'none'
        menuBtnMob.setAttribute('data-state', 'close')
    }
    
})