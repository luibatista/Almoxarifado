//====================== RELOGIO ============================//
let hrs = document.getElementById("hrs");
let min = document.getElementById("min");
let sec = document.getElementById("sec");

setInterval(()=> {
    let currentTime = new Date();
    hrs.innerHTML = currentTime.getHours();
    min.innerHTML = currentTime.getMinutes();
    sec.innerHTML = currentTime.getSeconds();
},1000)


const hrs2 = document.getElementById("hrs_2");
const min2 = document.getElementById("min_2");


setInterval(()=> {
    let currentTime2 = new Date();
    hrs2.innerHTML = currentTime2.getHours();
    min2.innerHTML = currentTime2.getMinutes();
},1000)

