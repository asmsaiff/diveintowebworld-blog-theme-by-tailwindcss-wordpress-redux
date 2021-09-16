// Get Date, Time, Day

const date = new Date()
const day = date.getDay()

const weekday = new Array(7)

weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

console.log(date)
const current_day = document.getElementById('current_day').innerHTML = weekday[day]
console.log(date.getDate())

// Menu Responsive

const openIcon = document.getElementById('open')
const closeIcon = document.getElementById('close')
const menubar = document.getElementById('menu-menu-1')

function load_events() {
    openIcon.addEventListener('click', openToggle)
    closeIcon.addEventListener('click', closeToggle)
    menu_default_display_option()
}
load_events()

function menu_default_display_option() {
    if(window.innerWidth < 1000) {
        menubar.style.display = 'none'
    } else if(window.innerWidth > 1000) {
        menubar.style.remove()
    }
}

function openToggle() {
    openIcon.style.display = 'none'
    closeIcon.style.display = 'block'

    menubar.style.display = 'block'
}

function closeToggle() {
    closeIcon.style.display = 'none'
    openIcon.style.display = 'block'

    menubar.style.display = 'none'
}