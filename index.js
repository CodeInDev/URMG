var timezone = (Intl.DateTimeFormat().resolvedOptions().timeZone);

console.log(timezone);

var form = document.getElementById("form");

form.addEventListener("submit", function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'settimezone.php?timezone=' + timezone, true);

    xhr.send();
});