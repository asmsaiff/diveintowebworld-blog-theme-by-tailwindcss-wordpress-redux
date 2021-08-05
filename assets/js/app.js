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