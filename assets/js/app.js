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

document.getElementById('current_day').innerHTML = weekday[day]

// Menu Responsive

const openIcon = document.getElementById('open')
const closeIcon = document.getElementById('close')
const menubar = document.getElementById("primary_menu");

function load_events() {
    openIcon.addEventListener('click', openToggle)
    closeIcon.addEventListener('click', closeToggle)
}
load_events();

function openToggle() {
    openIcon.style.display = 'none'
    closeIcon.style.display = 'block'

    menubar.style.visibility = 'visible'
}

function closeToggle() {
    closeIcon.style.display = 'none'
    openIcon.style.display = 'block'

    menubar.style.visibility = 'hidden'
}

if (window.innerWidth >= 1024) {
    const attr = menubar.getAttributeNode('style')
    menubar.removeAttributeNode(attr)
}