function displayHour() {
    var d = new Date();
    var hours = d.getHours();
    var minutes = d.getMinutes();
    var time = ("0" + hours).slice(-2) + "H" + ("0" + minutes).slice(-2);
    document.getElementById("hours").innerHTML = time;
}

displayHour();
setInterval(displayHour, 1000);