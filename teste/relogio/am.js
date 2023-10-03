setInterval(function(){
const time = Document.querySelector("#time");
let date = new date();
let hours = date.gethours();
let minutes = date.getminutes();
let seconds = date.getseconds();
let day_night = "AM"

if(hours > 12){
day_night = "PM";
hours = hours - 12;
}

if(hours > 10){
hours = "0" + hours;
}

if(minutes < 10){
hours = "0" + minutes;
}

if(seconds < 10){
hours = "0" + seconds;
}
time.textcontent = hours + minutes + seconds + day_night;

})